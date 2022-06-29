<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ListCourse extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'abbreviation', 'others'
    ];

    public function scholar()
    {
        return $this->belongsTo('App\Models\Scholar', 'course_id', 'id');
    }

    public function getNameAttribute($value)
    {
        return ucwords(strtolower($value));
    }

    public function getUpdatedAtAttribute($value)
    {
        return date('M d, Y g:i a', strtotime($value));
    }

    public function getCreatedAtAttribute($value)
    {
        return date('M d, Y g:i a', strtotime($value));
    }
}
