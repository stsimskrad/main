<?php

namespace App\Http\Traits;

use App\Models\Scholar;
use App\Models\ScholarFinancial;
use App\Models\ScholarFinancialList;
use App\Http\Resources\DefaultResource;

trait FinancialCreateTrait {
    
    public function create($group_id,$request,$users) 
    {
        $duplicate = [];
        $success = [];
        $all = 0;

        foreach($users as $user){
            $profile = Scholar::with('profile')->where('id',$user)->first();
            $test = []; $ay = $request->ay;

            \DB::beginTransaction();
            $data = new ScholarFinancial;
            $data->total = 1;
            $data->attachment = json_encode($test);
            $data->scholar_id = $user; //$id[0];
            $data->group_id = $group_id;

            if($data->save()){
                $lists = $request->lists;
                $total = 0;
                foreach($lists as $key=>$list){
                    $type = $list['benefit']['type'];
                    $amounts = $list['amount'];
                    $flags = $list['flag'];
                    $benefit_id = $list['benefit']['id'];
                    // dd($list['benefit']['id']);
                    if($list['benefit']['name'] == 'Stipend'){
                        foreach($amounts as $key=>$amount){
                            $f = $flags[$key]['val']['id'];

                            $count = ScholarFinancialList::
                            where(function($query) use ($type,$ay,$f,$benefit_id) {  
                                $query->where('benefit_id',$benefit_id);
                                $query->where('flag',$f);
                            })
                            ->whereHas('financial', function ($query) use ($ay,$user){
                                $query->where('scholar_id',$user);
                                $query->whereHas('group', function ($q) use ($ay){
                                    $q->where('academic_year',$ay);
                                });
                            })->count();
                            
                            if($count == 0){
                                $b = new ScholarFinancialList;
                                $b->benefit_id = $list['benefit']['id'];
                                $b->financial_id = $data->id;
                                $b->flag = $flags[$key]['val']['id'];
                                $b->type =  $list['benefit']['type'];
                                $b->amount = $amount['val'];
                                if($b->save()){
                                    \DB::commit();
                                    $res = [
                                        'user' => $profile->profile->firstname.' '.$profile->profile->lastname,
                                        'type' => $list['benefit']['type'],
                                        'flag' => $flags[$key]['val']['name'],
                                        'benefit' => $list['benefit']['name']
                                    ];
                                    array_push($success,$res);
                                }
                                $total = $total + $amounts[0]['val'];
                            }else{
                                $res = [
                                    'user' => $profile->profile->firstname.' '.$profile->profile->lastname,
                                    'type' => $list['benefit']['type'],
                                    'flag' => $flags[$key]['val']['name'],
                                    'benefit' => $list['benefit']['name']
                                ];
                                array_push($duplicate,$res);
                            }
                        }
                    }else{
                        $count = ScholarFinancialList::
                        where(function($query) use ($type,$ay,$flags,$benefit_id) {  
                            $query->where('benefit_id',$benefit_id);
                            ($type == 'Term') ? $query->where('flag',$flags) : '';
                            ($type == 'Academic Year') ? $query->where('flag',$ay) : '';
                        })
                        ->whereHas('financial', function ($query) use ($ay,$user){
                            $query->where('scholar_id',$user);
                            $query->whereHas('group', function ($q) use ($ay){
                                $q->where('academic_year',$ay);
                            });
                        })->count();

                        if($count == 0){
                            $amounts = $lists[$key]['amount'];
                            $flags = $lists[$key]['flag'];
                            $b = new ScholarFinancialList;
                            $b->benefit_id = $list['benefit']['id'];
                            $b->financial_id = $data->id;
                            $b->flag = $flags;
                            $b->type =  $list['benefit']['type'];
                            $b->amount = $amounts[0]['val'];
                            
                            if($b->save()){
                                \DB::commit();
                                $res = [
                                    'user' => $profile->profile->firstname.' '.$profile->profile->lastname,
                                    'type' => $type,
                                    'flag' => $flags,
                                    'benefit' => $list['benefit']['name']
                                ];
                                array_push($success,$res);
                            }
                            $total = $total + $amounts[0]['val'];
                        }else{
                            $res = [
                                'user' => $profile->profile->firstname.' '.$profile->profile->lastname,
                                'type' => $type,
                                'flag' => $flags,
                                'benefit' => $list['benefit']['name']
                            ];
                            array_push($duplicate,$res);
                        }
                    }
                }
                $data->total = $total;
                $data->save();
                $all = $all + $total;
            }
        }
        $result = [
            'success' => $success,
            'duplicate' => $duplicate,
            'total' => $all
        ];

        return $result;
    }

}