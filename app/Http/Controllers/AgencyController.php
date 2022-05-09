<?php

namespace App\Http\Controllers;

use App\Models\ListAgency;
use Illuminate\Http\Request;
use App\Http\Resources\DefaultResource;

class AgencyController extends Controller
{
    public function index($keyword,$count){
        ($keyword == '-') ? $keyword = '' : $keyword;
        $data = ListAgency::where(function ($query) use ($keyword) {
            $query->where('name', 'LIKE', '%'.$keyword.'%')->orWhere('code', 'LIKE', '%'.$keyword.'%');
        })
        ->orderBy('id','DESC')->paginate($count);
        return DefaultResource::collection($data);
    }

    public function store(Request $request){
        $data = \DB::transaction(function () use ($request){
            if($request->editable){
                $data = ListAgency::findOrFail($request->id);
                $data->update($request->except('editable'));
                return $data;
            }else{
                $data = ListAgency::create($request->all());
                return $data;
            }
        });
        return new DefaultResource($data);
    }

    public function api(){
        $data = ListAgency::all();
        return $data;
    }
}
