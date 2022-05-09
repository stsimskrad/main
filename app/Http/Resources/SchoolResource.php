<?php

namespace App\Http\Resources;

use Hashids\Hashids;
use Illuminate\Http\Resources\Json\JsonResource;

class SchoolResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        $hashids = new Hashids('krad',10);
        $code = $hashids->encode($this->id);

        return [
            'id' => $this->id,
            'code' => $code,
            'name' => ucwords(strtolower($this->name)),
            'deped_id' => $this->deped_id,
            'term' => $this->term,
            'grading' => $this->grading,
            'class' => $this->class,
            'campus' => $this->campus(),
            'campuses' => CampusResource::collection($this->campuses),
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at
        ];
    }
}
