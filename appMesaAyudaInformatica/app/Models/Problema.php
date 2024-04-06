<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Problema
 *
 * @property $id
 * @property $descripcion
 * @property $estado
 * @property $fecha_creacion
 * @property $fecha_actualizacion
 * @property $created_at
 * @property $updated_at
 *
 * @property Asignacion[] $asignacions
 * @property Secuencium[] $secuencias
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Problema extends Model
{
    

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['descripcion', 'estado', 'fecha_creacion', 'fecha_actualizacion'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function asignacions()
    {
        return $this->hasMany(\App\Models\Asignacion::class, 'id', 'problema_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function secuencias()
    {
        return $this->hasMany(\App\Models\Secuencium::class, 'id', 'problema_id');
    }
    

}
