<?php

namespace App;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Model;

class RoleUser extends Model
{	
	protected $table = 'role_user'; // Nombre de la tabla
    protected $primaryKey = 'id'; // Clave primaria
    protected $fillable = [
        'id',
        'role_id',
        'user_id'
    ];

    public function userRole(): HasOne
    {
        return $this->hasOne('App\User', 'id');
    }
}