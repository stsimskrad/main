<?php

namespace App\Http\Controllers;

use App\Models\ListAgency;
use App\Models\LocationProvince;
use App\Models\LocationMunicipality;
use App\Models\LocationBarangay;
use Illuminate\Http\Request;

class DownloadController extends Controller
{
    public function index()
    {
        $agency_id = config('app.agency');
        $agency = ListAgency::with('region')->where('id',$agency_id)->first();

        $region_code = $agency->region_code;
        // $region = LocationProvince::with('municipalities.barangays')->where('region_code',$region_code)->get();

        $array = [
            'agency' => $agency,
            'region' => [
                'Provinces' => LocationProvince::where('region_code',$region_code)->count(),
                'Municipalities' => LocationMunicipality::whereHas('province', function ($q) use ($region_code){
                    $q->where('region_code',$region_code);
                })->count(),
                'Barangays' => LocationBarangay::whereHas('municipality', function ($q) use ($region_code){
                    $q->whereHas('province', function ($q) use ($region_code){
                        $q->where('region_code',$region_code);
                    });
                })->count(),
            ]
        ];

        return $array;
    }
}
