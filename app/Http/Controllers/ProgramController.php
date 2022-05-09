<?php

namespace App\Http\Controllers;

use App\Models\ListProgram;
use Illuminate\Http\Request;
use App\Http\Resources\DefaultResource;

class ProgramController extends Controller
{
    public function index($keyword,$count){
        ($keyword == '-') ? $keyword = '' : $keyword;
        $data = ListProgram::where(function ($query) use ($keyword) {
            $query->where('name', 'LIKE', '%'.$keyword.'%');
        })
        ->orderBy('id','DESC')->paginate($count);
        return DefaultResource::collection($data);
    }

    public function store(Request $request){
        $data = \DB::transaction(function () use ($request){
            if($request->editable){
                $data = ListProgram::findOrFail($request->id);
                $data->update($request->except('editable'));
                return $data;
            }else{
                $data = ListProgram::create($request->all());
                return $data;
            }
        });
        return new DefaultResource($data);
    }

    public function api(){
        $data = ListProgram::all();
        return $data;
    }
}
