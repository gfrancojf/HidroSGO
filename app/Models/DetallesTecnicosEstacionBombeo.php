<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class DetallesTecnicosEstacionBombeo
 *
 * @property $id
 * @property $succion_min
 * @property $succion_max
 * @property $descarga_min
 * @property $descarga_max
 * @property $amp_min
 * @property $amp_max
 * @property $voltaje_min
 * @property $voltaje_max
 * @property $id_estacion_bombeo
 * @property $deleted_at
 * @property $created_at
 * @property $updated_at
 *
 * @property EstacionBombeo $estacionBombeo
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class DetallesTecnicosEstacionBombeo extends Model
{
    use SoftDeletes;

    static $rules = [
		'succion_min' => 'required',
		'succion_max' => 'required',
		'descarga_min' => 'required',
		'descarga_max' => 'required',
		'amp_min' => 'required',
		'amp_max' => 'required',
		'voltaje_min' => 'required',
		'voltaje_max' => 'required',
		'id_estacion_bombeo' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['succion_min','succion_max','descarga_min','descarga_max','amp_min','amp_max','voltaje_min','voltaje_max','id_estacion_bombeo'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function estacionBombeo()
    {
        return $this->hasOne('App\Models\EstacionBombeo', 'id', 'id_estacion_bombeo');
    }
    

}
