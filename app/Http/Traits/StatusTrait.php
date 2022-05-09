<?php

namespace App\Http\Traits;

use App\Models\Scholar;
use App\Models\ScholarStatus;

trait StatusTrait {
    
    public function storeStatus($request){

        if($request->id){
            $data = ScholarStatus::create([
                'scholar_id' => $request->id,
                'status_id' => $request->status_id,
                'updated_by' => \Auth::user()->id,
            ]);
        }else{
            foreach($request->selected as $select){
                $scholars = ScholarStatus::create([
                    'scholar_id' => $select,
                    'status_id' => $request->status_id,
                    'updated_by' => \Auth::user()->id
                ]);
            }
        }

       return true;
    }
}