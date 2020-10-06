<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\ReservationProducts;

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

    public function reserveUser(): HasMany
    {
        return $this->hasMany(ReservationProducts::class, 'user_id');
    }
}
