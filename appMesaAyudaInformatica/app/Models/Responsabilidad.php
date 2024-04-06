<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Responsabilidad
 *
 * @property $id
 * @property $descripcion
 * @property $puesto_id
 * @property $created_at
 * @property $updated_at
 *
 * @property Puesto $puesto
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Responsabilidad extends Model
{
    

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['descripcion', 'puesto_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function puesto()
    {
        return $this->belongsTo(\App\Models\Puesto::class, 'puesto_id', 'id');
    }
    

}
