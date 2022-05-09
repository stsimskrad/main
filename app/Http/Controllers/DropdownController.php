<?php

namespace App\Http\Controllers;

use App\Models\ListDropdown;
use Illuminate\Http\Request;
use App\Http\Resources\DefaultResource;
use App\Http\Requests\DropdownRequest;

class DropdownController extends Controller
{
    public function index($classification,$keyword,$counts)
    {
        ($keyword == '-') ? $keyword = '' : $keyword;
        ($classification == '-') ? $classification = '' : $classification;
        $data = ListDropdown::where('name','LIKE','%'.$keyword.'%')->where('classification',$classification)->orderBy('id','ASC')->paginate($counts);
        return DefaultResource::collection($data);
    }

    public function store(DropdownRequest $request)
    {
        $data = new ListDropdown;
        $data->name =  ucwords(strtolower($request->input('name')));
        $data->classification = $request->input('classification');
        $data->type = ($request->input('type')) ? $request->input('type') : 'n/a';
        $data->color =($request->input('color')) ? $request->input('color') : 'n/a';
        $data->others =($request->input('others')) ? $request->input('others') : 'n/a';
        $data->save();

        return new DefaultResource($data);
    }

    public function count($classification,$type)
    {
        ($type == '-') ? $type = '' : $type;
        $query = ListDropdown::query();
        ($type != '') ? $query->where('type',$type) : '';
        $data = $query->where('classification',$classification)->get();

        return DropdownResource::collection($data);
    }

    public function api(){
        $data = ListDropdown::get();
        return $data;
    }
}
