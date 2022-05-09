<?php

namespace App\Http\Traits;

use App\Models\ListCourse;
use App\Models\ListAgency;
use App\Models\ListDropdown;
use App\Models\ListProgram;
use App\Models\SchoolCampus;
use App\Models\ScholarAddress;
use App\Models\LocationMunicipality;
use App\Http\Resources\DefaultResource;

trait CheckTrait {
    public static function level($data) 
    {
        $dropdown_id = ListDropdown::where('classification','Level')->where('name',$data)->pluck('id')->first();
        return $dropdown_id;
    }

    public static function category($data) 
    {
        if($data == 'JLSS - RA 7687'){
            $data = 'RA 7687';
        }else if($data == 'JLSS - MERIT'){
            $data = 'MERIT';
        }else if($data == 'JLSS - RA 10612'){
            $data = 'RA 10612';
        }else{
            $data = $data;
        }

        $dropdown_id = ListProgram::where('name',$data)->pluck('id')->first();
        return $dropdown_id;
    }

    public static function checkCategory($data) 
    {
        if($data == 'JLSS - RA 7687'){
            $is_undergrad = 0;
        }else if($data == 'JLSS - MERIT'){
            $is_undergrad = 0;
        }else if($data == 'JLSS - RA 10612'){
            $is_undergrad = 0;
        }else if($data == 'Jlap'){
            $is_undergrad = 0;
        }else if($data == 'Ra 7687 Sophomore'){
            $is_undergrad = 0;
        }else{
            $is_undergrad = 1;
        }
        return $is_undergrad;
    }

    public function checkCourse($type){
        $data = ListCourse::where('abbreviation',$type)->pluck('id')->first();
        ($data != null) ? $data = $data : $data = NULL;
        return $data;
    }

    public function checkSchool($type){
        ($type == 'MSU - Sindangan Ext.') ? $type = 'MSU-Sindangan' : $type = $type;
        $data = SchoolCampus::where('shortcut',$type)->pluck('id')->first();
        ($data != null) ? $data = $data : $data = NULL;
        return $data;
    }

    public function checkAddress($address,$id){
        $is_within = 1;
        $agency_id = config('app.agency');
        $agency = ListAgency::with('region')->where('id',$agency_id)->pluck('region_code');

        $data = LocationMunicipality::with('province.region')
        ->where(function($query) use ($address) {  
            $query->where('name','LIKE', '%'.$address.'%')->orWhere('old_name','LIKE', '%'.$address.'%');
        })
        ->whereHas('province',function ($query) use ($agency) {
            $query->whereHas('region',function ($query) use ($agency) {
                $query->where('region_code',$agency);
            });
        })->first();

        if($data == null){
            $data = LocationMunicipality::with('province.region')
            ->where(function($query) use ($address) {  
                $query->where('name','LIKE', '%'.$address.'%')->orWhere('old_name','LIKE', '%'.$address.'%');
            })->first();

            if($data != null){
                $is_within = 0;
            }
        }

        if($data != null){
            $address = [
                'type' => 'Main',
                'is_within' => $is_within,
                'municipality_code' => $data->code,
                'province_code' => $data->province->code,
                'region_code' => $data->province->region->code,
                'scholar_id' => $id,
                'created_at' => now(),
                'updated_at' => now()
            ];
            $a = ScholarAddress::insertOrIgnore($address);
        }
    }
}