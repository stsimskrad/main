<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ListBenefit extends Model
{
    use HasFactory;
<<<<<<< HEAD

=======
>>>>>>> c5e76286841c3c7decb067c241d88e49a9a1cfd3
    protected $fillable = [
        'name', 'type', 'amount' ,'is_summer' ,'is_fixed' ,'is_active', 'information'
    ];

    public function getNameAttribute($value)
    {
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
