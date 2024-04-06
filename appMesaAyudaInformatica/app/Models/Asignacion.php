<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Asignacion
 *
 * @property $id
 * @property $empleado_id
 * @property $problema_id
 * @property $created_at
 * @property $updated_at
 *
 * @property Empleado $empleado
 * @property Problema $problema
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Asignacion extends Model
{
    

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['empleado_id', 'problema_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function empleado()
    {
        return $this->belongsTo(\App\Models\Empleado::class, 'empleado_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function problema()
    {
        return $this->belongsTo(\App\Models\Problema::class, 'problema_id', 'id');
    }
    

}
