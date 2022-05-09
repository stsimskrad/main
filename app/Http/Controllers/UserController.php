<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\UserProfile;
use Illuminate\Http\Request;
use App\Http\Resources\UserResource;
use App\Http\Resources\DefaultResource;
use App\Http\Requests\UserRequest;
use App\Http\Functions\UploadFunction;
use App\Jobs\EmailNewAccount;
use Spatie\Activitylog\Models\Activity;

class UserController extends Controller
{
    use UploadFunction;
    
    public function lists($keyword,$count){
        ($keyword == '-') ? $keyword = '' : $keyword;
        $data = User::with('profile')
        ->whereHas('profile',function ($query) use ($keyword) {
            $query->where(\DB::raw('concat(firstname," ",lastname)'), 'LIKE', '%'.$keyword.'%')->orWhere(\DB::raw('concat(lastname," ",firstname)'), 'LIKE', '%'.$keyword.'%');
        })
        ->orWhere(function ($query) use ($keyword) {
            $query->where('email', 'LIKE', '%'.$keyword.'%');
        })
        ->orderBy('id','DESC')->paginate($count);
        return UserResource::collection($data);
    }

    public function store(UserRequest $request){
        $data = \DB::transaction(function () use ($request){
            if($request->editable){
                $data = User::findOrFail($request->id);
                $data->update($request->except('img','editable'));
                $profile = UserProfile::where('user_id',$request->id)->first();
                $profile->update($request->except('email','role','is_active','img','editable'));
                return $data;
            }else{
                $data = User::create(array_merge($request->all(), ['password' => bcrypt('dost9ict')]));
                $data = $this->storeImage($request,$data->id);
                $data->profile()->create($request->all());
                EmailNewAccount::dispatch($data->id)->delay(now()->addSeconds(10));
                return $data;
            }
        });
        return new UserResource($data);
    }

    public function password(Request $request){

        if (!(Hash::check($request->get('current_password'), Auth::user()->password))) {
            return response()->json(['error' => "Password doesn't match."], 401);
        }

        if(strcmp($request->get('current_password'), $request->get('password')) == 0){
            return response()->json(['error' => 'Please choose a different password'], 401);
        }

        $validatedData = $request->validate([
            'current_password' => 'required',
            'password' => 'required|string|min:9|confirmed',
        ]);

        User::find(\Auth::user()->id)->update(['password'=> Hash::make($request->input('password'))]);

        if(Auth::user()->status == 'Inactive'){
            User::find(auth()->user()->id)->update(['status'=> 'Active']);
            return response()->json(['success' => 'First Attempt'], 200);
        }else{
            return response()->json(['success' => 'Password changed successfully !'], 200);
        }
    }

    public function logs(){
        $data = Activity::with('causer','causer.profile','subject')
       ->where('causer_id',\Auth::user()->id)->orderBy('created_at','DESC')->paginate(10);
        return DefaultResource::collection($data);
    }

    public function verify(Request $request){
        
        if(EmailNewAccount::dispatch($request->id)->delay(now()->addSeconds(10))){
            return true;
        }
    }
}
