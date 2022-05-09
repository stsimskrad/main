<?php

namespace App\Http\Controllers;

use App\Models\LocationRegion;
use App\Models\LocationProvince;
use App\Models\LocationBarangay;
use App\Models\LocationMunicipality;
use Illuminate\Http\Request;
use App\Http\Resources\DefaultResource;

class LocationController extends Controller
{
    public function index($type,$counts,$keyword)
    {
        ($keyword == '-') ? $keyword = '' : $keyword;
        switch($type){
            case 'Region':
                $query = LocationRegion::query();
                $query->where(function ($query) use ($keyword) {
                    $query->where('name', 'LIKE', '%'.$keyword.'%')->orWhere('code','LIKE','%'.$keyword.'%')->orWhere('region','LIKE','%'.$keyword.'%');
                });
            break;
            case 'Province':
                $query = LocationProvince::query();
                $query->with('region');
                $query->where(function ($query) use ($keyword) {
                    $query->where('name', 'LIKE', '%'.$keyword.'%')->orWhere('code','LIKE','%'.$keyword.'%')->orWhere('region_code','LIKE','%'.$keyword.'%');
                });
            break;
            case 'Municipality':
                $query = LocationMunicipality::query();
                $query->with('province');
                $query->where(function ($query) use ($keyword) {
                    $query->where('name', 'LIKE', '%'.$keyword.'%')->orWhere('code','LIKE','%'.$keyword.'%')->orWhere('province_code','LIKE','%'.$keyword.'%');
                });
            break;
            case 'Barangay':
                $query = LocationBarangay::query();
                $query->with('municipality');
                $query->where(function ($query) use ($keyword) {
                    $query->where('name', 'LIKE', '%'.$keyword.'%')->orWhere('code','LIKE','%'.$keyword.'%')->orWhere('municipality_code','LIKE','%'.$keyword.'%');
                });
            break;
        }
        $data = $query->paginate($counts);
        return DefaultResource::collection($data);
    }

    public function api($type)
    {   
        switch($type){
            case 'regions' :
                $data = LocationRegion::get();
            break;
            case 'provinces' :
                $data = LocationProvince::get();
            break;
            case 'municipalities' :
                $data = LocationMunicipality::get();
            break;
            case 'barangays' :
                $data = LocationBarangay::get();
            break;
        }
        return $data;
    }
}
