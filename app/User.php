<?php

namespace App;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'verification_token_expires_at' => 'datetime',
    ];

    /*
    * Relacion muchos a muchos con modelo Roles
    */
    public function roles()
    {
        return $this->belongsToMany(Role::class)->withTimestamps();
    }

    /**
     * Autorizacion de roles
     * @param string|array $roles
     */
    public function authorizeRoles($roles)
    {
        
        if ($this->hasAnyRole($roles)) {
                return true;
        }
        
        abort(401, 'Esta acción no está autorizada.');
    }

    /**
     * Check multiple roles
     * @param array $roles
     */
    public function hasAnyRole($roles){
    
        if (is_array($roles)) {
            foreach ($roles as $role) {
                if ($this->hasRole($role)) {
                    return true;
                }
            }
        }   
        
        else {
        
            if ($this->hasRole($roles)) {
                return true;
            }
        }
    return false;
    }

    /**
     * Verificar un rol
     * @param string $role
     */
    public function hasRole($role)
    {
        if ($this->roles()->where('name', $role)->first()) {
            return true;
        }

        return false;
    }

    public function products(): HasMany
    {
        return $this->hasMany('App\ReservationProducts', 'user_id');
    }

    public function personProfile(): HasOne
    {
        return $this->hasOne('App\UserProfile', 'user_id');
    }

    public function getRole(): HasOne
    {
        return $this->hasOne('App\RoleUser', 'user_id');
    }
}
