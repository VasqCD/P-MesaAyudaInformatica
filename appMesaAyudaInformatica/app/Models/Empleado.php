<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Empleado
 *
 * @property $id
 * @property $nombre
 * @property $puesto_id
 * @property $created_at
 * @property $updated_at
 *
 * @property Puesto $puesto
 * @property Asignacion[] $asignacions
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Empleado extends Model
{
    

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre', 'puesto_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function puesto()
    {
        return $this->belongsTo(\App\Models\Puesto::class, 'puesto_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function asignacions()
    {
        return $this->hasMany(\App\Models\Asignacion::class, 'id', 'empleado_id');
    }
    

}
