<?php

namespace App\Http\Controllers;

use App\Models\ListExpense;
use Illuminate\Http\Request;
use App\Http\Resources\DefaultResource;

class ExpenseController extends Controller
{
    public function index($keyword,$count){
        ($keyword == '-') ? $keyword = '' : $keyword;
        $data = ListExpense::with('expenditure')->where(function ($query) use ($keyword) {
            $query->where('name', 'LIKE', '%'.$keyword.'%');
        })
        ->orderBy('id','DESC')->paginate($count);
        return DefaultResource::collection($data);
    }

    public function store(Request $request){
        $data = \DB::transaction(function () use ($request){
            if($request->editable){
                $data = ListExpense::findOrFail($request->id);
                $data->update($request->except('editable'));
                return $data;
            }else{
                $data = ListExpense::create($request->all());
                $data = ListExpense::with('expenditure')->where('id',$data->id)->first();   
                return $data;
            }
        });
        return new DefaultResource($data);
    }

    public function api(){
        $data = ListExpense::all();
        return $data;
    }
}
