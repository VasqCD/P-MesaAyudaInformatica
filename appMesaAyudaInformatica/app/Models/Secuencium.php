<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Secuencium
 *
 * @property $id
 * @property $problema_id
 * @property $evento
 * @property $descripcion
 * @property $fecha
 * @property $created_at
 * @property $updated_at
 *
 * @property Problema $problema
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Secuencium extends Model
{
    

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['problema_id', 'evento', 'descripcion', 'fecha'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function problema()
    {
        return $this->belongsTo(\App\Models\Problema::class, 'problema_id', 'id');
    }
    

}
