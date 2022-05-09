<?php

namespace App\Http\Controllers\Sync;

use App\Models\LocationRegion;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RegionController extends Controller
{
    public function fetch(){
        set_time_limit(0);
        try{
            $curl = curl_init();
            curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://psgc.gitlab.io/api/regions.json',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_SSL_VERIFYHOST => false,
            CURLOPT_SSL_VERIFYPEER => false,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'GET',
            ));

            $response = curl_exec($curl);
            curl_close($curl);
            return response()->json(json_decode($response));
        } catch (Exception $e) {
            echo 'Caught exception: ',  $e->getMessage(), "\n";
        }
    }

    public function store(Request $request){
        set_time_limit(0);
        $result = \DB::transaction(function () use ($request){
            $regions = $request->lists;
            $success = array();
            $failed = array();
            $duplicate = array();

            foreach($regions as $region){
                $count = LocationRegion::where('code',$region['code'])->count();

                if($count == 0){
                    $details = [
                        'code' => $region['code'],
                        'name' => $region['name'],
                        'region' => $region['regionName'],
                        'island' => $region['islandGroupCode'],
                    ];

                    $data = LocationRegion::insertOrIgnore($details); 
                    if($data){
                        array_push($success,$region['code']);
                    }else{
                        array_push($failed,$region['code']);
                    }
                }else{
                    array_push($duplicate,$region['code']);
                }
            }
        });
    }
}
