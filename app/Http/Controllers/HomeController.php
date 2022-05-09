<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Activitylog\Models\Activity;
use App\Http\Resources\LogResource;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function logs($keyword,$count){
        ($keyword == '-') ? $keyword = '' : $keyword;
        $data = Activity::with('causer','causer.profile','subject.profile')
        ->whereHas('causer',function ($query) use ($keyword) {
            $query->whereHas('profile',function ($query) use ($keyword) {
                $query->where(\DB::raw('concat(firstname," ",lastname)'), 'LIKE', '%'.$keyword.'%')->orWhere(\DB::raw('concat(lastname," ",firstname)'), 'LIKE', '%'.$keyword.'%');
            });
        })
        ->where('causer_id',\Auth::user()->id)->orderBy('created_at','DESC')->paginate($count);
        return LogResource::collection($data);
    }
}
