<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ReservationProducts extends Model
{
    //
    protected $table = 'reservation_products'; // Nombre de la tabla
    protected $primaryKey = 'id'; // Clave primaria
    protected $fillable = [
        'id',
        'user_id',
        'product_id',
        'quantity'
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
}
