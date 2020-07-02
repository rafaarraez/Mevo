<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    //
    protected $table = 'products'; // Nombre de la tabla
    protected $primaryKey = 'id'; // Clave primaria
    protected $fillable = [
        'id',
        'name',
        'synonymous',
        'coa',
        'msds',
        'deadline',
        'approximate_date',
        'arrival_to',
        'quantity',
        'created_at',
        'updated_at'
    ];

    /**
     * @return HasMany
     */
    public function reserve(): HasMany
    {
        return $this->hasMany('App\ReservationProdutcs', 'id');
    }
}
