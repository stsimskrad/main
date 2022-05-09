<?php

namespace App\Http\Traits;

use App\Models\ListDropdown;
use App\Http\Resources\DefaultResource;

trait DropdownTrait {
    
    public function dropdown($classification,$type) {
        $query = ListDropdown::query();
        ($type != '-') ? $query->where('type',$type) : '';
        $data = $query->where('classification',$classification)->get();

        return DefaultResource::collection($data);
    }
}