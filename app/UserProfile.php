<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class UserProfile extends Model
{
    protected $fillable = [
        'user_id',
        'name',
        'email',
        'mobile',
        'company_name',
        'organitational_level',
        'job',
        'position',
        'country',
        'state',
        'city',
        'status',
        'interests'
    ];

    public function user(): HasOne
    {
        return $this->hasOne('App\User', 'user_id');
    }
}
