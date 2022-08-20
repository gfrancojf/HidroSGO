<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Acueducto
 *
 * @property $id
 * @property $nombre
 * @property $estado
 * @property $capacidad_distribucion
 * @property $capacidad_modificada
 * @property $created_at
 * @property $updated_at
 *
 * @property Estado $estado
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Acueductos extends Model
{
    
    static $rules = [
		'nombre' => 'required',
		'estado' => 'required',
		'capacidad_distribucion' => 'required',
		'capacidad_modificada' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre','estado','capacidad_distribucion','capacidad_modificada'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function estado()
    {
        return $this->hasOne('App\Models\Estado', 'id', 'estado');
    }
    

}
