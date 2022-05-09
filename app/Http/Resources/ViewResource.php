<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ViewResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'email' => $this->email,
            'avatar' => $this->avatar,
            'role' => $this->role,
            'is_active' => $this->is_active,
            'profile' => (\Auth::user()->role == 'Scholar') ? $this->scholar : $this->profile 
        ];
    }
}
