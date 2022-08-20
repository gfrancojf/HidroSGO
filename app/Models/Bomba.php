<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Bomba
 *
 * @property $id
 * @property $grupo
 * @property $nro_etapas
 * @property $rotacion
 * @property $caudal
 * @property $presion
 * @property $rpm
 * @property $peso
 * @property $diametro_succion
 * @property $diametro_descarga
 * @property $tipo_sello
 * @property $operatividad
 * @property $id_estacion_bombeo
 * @property $id_fabricante
 * @property $deleted_at
 * @property $created_at
 * @property $updated_at
 *
 * @property EstacionBombeo $estacionBombeo
 * @property Fabricante $fabricante
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Bomba extends Model
{
    use SoftDeletes;

    static $rules = [
		'grupo' => 'required',
		'nro_etapas' => 'required',
		'rotacion' => 'required',
		'caudal' => 'required',
		'presion' => 'required',
		'rpm' => 'required',
		'peso' => 'required',
		'diametro_succion' => 'required',
		'diametro_descarga' => 'required',
		'tipo_sello' => 'required',
		'operatividad' => 'required',
		'id_estacion_bombeo' => 'required',
		'id_fabricante' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['grupo','nro_etapas','rotacion','caudal','presion','rpm','peso','diametro_succion','diametro_descarga','tipo_sello','operatividad','id_estacion_bombeo','id_fabricante'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function estacionBombeo()
    {
        return $this->hasOne('App\Models\EstacionBombeo', 'id', 'id_estacion_bombeo');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function fabricante()
    {
        return $this->hasOne('App\Models\Fabricante', 'id', 'id_fabricante');
    }
    

}
