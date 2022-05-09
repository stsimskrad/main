<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\ListDropdown;
use App\Models\LocationRegion;
use App\Models\LocationProvince;
use App\Models\LocationMunicipality;
use Illuminate\Http\Request;
use App\Http\Resources\DefaultResource;

class ListController extends Controller
{
    public function index(){
        $datas = [
            'dropdowns' => $this->dropdowns(),
            'regions' => $this->regions(),
            'profile' => $this->profile(),
            // 'expenses' => $this->expenses()
        ];

        return $datas;
    }

    public function profile()
    {
        $data = User::with('profile')->where('id',\Auth::id())->first();
        return $data;
    }

    public function dropdowns(){
        $data = ListDropdown::all();
        return DefaultResource::collection($data);
    }

    // public function expenses(){
    //     $data = Expense::all();
    //     return DefaultResource::collection($data);
    // }

    public function regions()
    {
        $data = LocationRegion::orderBy('id','ASC')->get();
        return DefaultResource::collection($data);
    }

    public function provinces($id = null)
    {
        $data = LocationProvince::where('region_code',$id)->orderBy('name','ASC')->get();
        return DefaultResource::collection($data);
    }

    public function municipalities($id = null)
    {
        $data = LocationMunicipality::where('province_code',$id)->orderBy('name','ASC')->get();
        return DefaultResource::collection($data);
    }
}
