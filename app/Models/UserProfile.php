<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;
use Spatie\Activitylog\LogOptions;

class UserProfile extends Model
{
    use HasFactory, LogsActivity;
    
    protected $fillable = [
        'firstname', 
        'lastname', 
        'middlename',
        'suffix',
        'gender',
        'mobile'
    ];

    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults()
        ->logFillable()
        ->setDescriptionForEvent(fn(string $eventName) => "This profile has been {$eventName}")
        ->logOnlyDirty()
        ->dontSubmitEmptyLogs();
    }

    public function user()
    {
        return $this->belongsTo('App\Models\User', 'user_id', 'id');
    }

    public function getFirstnameAttribute($value){
        return ucwords($value);
    }

    public function getLastnameAttribute($value){
        return ucwords($value);
    }

    public function getMiddlenameAttribute($value){
        return ucwords($value);
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
