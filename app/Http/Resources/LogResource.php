<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class LogResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)   
    {
        $causer = $this->causer->profile->firstname.' '.$this->causer->profile->lastname;
        if($this->log_name == "default"){
            $log = 'user';
            if($this->description == "created"){
                $subject = "Created user ".$this->subject->profile->firstname.' '.$this->subject->profile->lastname;
            }else{
                $subject = "Updated user ".$this->subject->profile->firstname.' '.$this->subject->profile->lastname;
            }
        }else if($this->log_name == "auth"){
            $log = $this->log_name;
            $subject = "logged in to the system";
        }else{
            $log = $this->log_name;
            $subject = '';
        }

        return [
            'type' => $log,
            'description' => $this->description,
            'subject' => $subject,
            'causer' => $causer,
            'details' => $this->properties,
            'created_at' => $this->created_at,
        ];
    }
}
