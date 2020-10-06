<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use App\UserProfile;

/*
** status
** 1: reserva sin verificar
** 2: concretdo esperando que llegue
** 3: entregada en puerto
** 4: cancelada o no concretada
*/

class ReservationProducts extends Model
{
    //
    protected $table = 'reservation_products'; // Nombre de la tabla
    protected $primaryKey = 'id'; // Clave primaria
    protected $fillable = [
        'id',
        'user_id',
        'product_id',
        'quantity',
        'status'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function products(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo('App\Products', 'product_id');
    }

    public function user(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo('App\User', 'user_id');
    }

    public function userPersonProfile(): HasOne
    {
        return $this->hasOne(UserProfile::class, 'user_id', 'user_id');
    }
}
