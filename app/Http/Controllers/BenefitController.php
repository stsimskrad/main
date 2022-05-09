<?php

namespace App\Http\Controllers;

use App\Models\ListBenefit;
use Illuminate\Http\Request;
use App\Http\Resources\DefaultResource;

class BenefitController extends Controller
{
    public function index($keyword,$count){
        ($keyword == '-') ? $keyword = '' : $keyword;
        $data = ListBenefit::where(function ($query) use ($keyword) {
            $query->where('name', 'LIKE', '%'.$keyword.'%');
        })
        ->orderBy('id','DESC')->paginate($count);
        return DefaultResource::collection($data);
    }

    public function store(Request $request){
        $data = \DB::transaction(function () use ($request){
            if($request->editable){
                $data = ListBenefit::findOrFail($request->id);
                $data->update($request->except('editable'));
                return $data;
            }else{
                $info = [];
                $data = ListBenefit::create(array_merge($request->all(),['information' => json_encode($info)]));
                return $data;
            }
        });
        return new DefaultResource($data);
    }

    public function api(){
        $data = ListBenefit::all();
        return $data;
    }
}
