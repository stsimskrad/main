<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Endorsement extends Model
{
    use HasFactory;

    protected $fillable = [
        'is_approved', 'endorsed_to', 'endorsed_by', 'scholar_id', 'user_id'
    ];

    public function scholar()
    {
        return $this->belongsTo('App\Models\Scholar', 'scholar_id', 'id');
    }

    public function region_by()
    {
        return $this->belongsTo('App\Models\LocationRegion', 'endorsed_by', 'code');
    } 

    public function region_to()
    {
        return $this->belongsTo('App\Models\LocationRegion', 'endorsed_to', 'code');
    } 

    public function user()
    {
        return $this->belongsTo('App\Models\User', 'user_id','id');
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
