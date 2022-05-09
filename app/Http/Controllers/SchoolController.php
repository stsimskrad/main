<?php

namespace App\Http\Controllers;

use Hashids\Hashids;
use App\Models\School;
use App\Models\SchoolCampus;
use Illuminate\Http\Request;
use App\Http\Requests\SchoolRequest;
use App\Http\Resources\SchoolResource;
use App\Http\Resources\SchoolListResource;
use App\Http\Resources\DefaultResource;
use App\Http\Resources\CampusResource;

class SchoolController extends Controller
{
    public function lists(){
        $data = SchoolCampus::with('school')->get();
        return SchoolListResource::collection($data);
    }

    public function index($keyword,$count){
        ($keyword == '-') ? $keyword = '' : $keyword;
        $data = School::with('term','class','grading','campuses','campuses.municipality')
        ->where(function ($query) use ($keyword) {
            $query->where('name', 'LIKE', '%'.$keyword.'%');
        })
        ->orderBy('id','DESC')->paginate($count);
        return SchoolResource::collection($data);
    }

    public function store(SchoolRequest $request){
        $data = \DB::transaction(function () use ($request){
            if($request->editable){
                $data = School::findOrFail($request->id);
                $data->update($request->except('editable'));
                return $data;
            }else{
                $data = School::create($request->all());
                $data->campuses()->create($request->all());
                return $data;
            }
        });
        return new SchoolResource($data);
    }

    public function view($id){
        $hashids = new Hashids('krad',10);
        $id = $hashids->decode($id);
        $data = School::with('term','class','grading','campuses','campuses.municipality','campuses.municipality.province.region')->where('id',$id)->first();
        return new SchoolResource($data);
    }

    public function campus(Request $request){
        $data = \DB::transaction(function () use ($request){
            $hashids = new Hashids('krad',10);
            $id = $hashids->decode($request->code);

            if($request->editable){
                $data = SchoolCampus::with('municipality.province.region')->where('id',$request->id)->first();
                $data->update($request->except('editable'));
                return $data;
            }else{
                $data = SchoolCampus::create(array_merge($request->all(),['school_id' => $id[0]]));
                $data = SchoolCampus::with('municipality.province.region')->where('school_id',$id[0])->latest('created_at')->first();
                return $data;
            }
        });
        return new CampusResource($data);
    }

    public function api(){
        $data = School::with('campuses')->get();
        return $data;
    }
}
