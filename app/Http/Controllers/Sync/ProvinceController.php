<?php

namespace App\Http\Controllers\Sync;

use App\Models\LocationProvince;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProvinceController extends Controller
{
    public function fetch(){
        set_time_limit(0);
        try{
            $curl = curl_init();
            curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://psgc.gitlab.io/api/provinces/',
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
            $lists = $request->lists;
            $success = array();
            $failed = array();
            $duplicate = array();

            foreach($lists as $list){
                $count = LocationProvince::where('code',$list['code'])->count();

                if($count == 0){
                    $details = [
                        'code' => $list['code'],
                        'name' => $list['name'],
                        'region_code' => $list['regionCode']
                    ];

                    $data = LocationProvince::insertOrIgnore($details); 
                    if($data){
                        array_push($success,$list['code']);
                    }else{
                        array_push($failed,$list['code']);
                    }
                }else{
                    array_push($duplicate,$list['code']);
                }
            }

            $result = [
                'success' => $success,
                'failed' => $failed,
                'duplicate' => $duplicate,
            ];
            
            return $result;
        });

        return $result;
    }
}
