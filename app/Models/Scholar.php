<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Scholar extends Model
{
    use HasFactory;

    protected $fillable = [
        'spas_id', 'name', 'school_id', 'course_id', 'municipality_code', 'information'
    ];

    public function endorsement()
    {
        return $this->hasOne('App\Models\Endorsement', 'scholar_id');
    } 

    public function school()
    {
        return $this->belongsTo('App\Models\SchoolCampus', 'school_id', 'id');
    }

    public function course()
    {
        return $this->belongsTo('App\Models\ListCourse', 'course_id', 'id');
    }

    public function municipality_code()
    {
        return $this->hasOne('App\Models\LocationMunicipality', 'municipality_code');
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
