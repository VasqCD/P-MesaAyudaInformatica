<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Puesto
 *
 * @property $id
 * @property $nombre
 * @property $created_at
 * @property $updated_at
 *
 * @property Empleado[] $empleados
 * @property Responsabilidad[] $responsabilidads
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Puesto extends Model
{
    

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function empleados()
    {
        return $this->hasMany(\App\Models\Empleado::class, 'id', 'puesto_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function responsabilidads()
    {
        return $this->hasMany(\App\Models\Responsabilidad::class, 'id', 'puesto_id');
    }
    

}
