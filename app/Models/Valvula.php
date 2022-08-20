<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Valvula
 *
 * @property $id
 * @property $diametro
 * @property $presion_nominal
 * @property $id_tipo_valvula
 * @property $accionamiento
 * @property $fc
 * @property $id_estacion_bombeo
 * @property $id_fabricante
 * @property $operatividad
 * @property $deleted_at
 * @property $created_at
 * @property $updated_at
 *
 * @property EstacionBombeo $estacionBombeo
 * @property Fabricante $fabricante
 * @property TipoValvula $tipoValvula
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Valvula extends Model
{
    use SoftDeletes;

    static $rules = [
		'diametro' => 'required',
		'presion_nominal' => 'required',
		'id_tipo_valvula' => 'required',
		'accionamiento' => 'required',
		'fc' => 'required',
		'id_estacion_bombeo' => 'required',
		'id_fabricante' => 'required',
		'operatividad' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['diametro','presion_nominal','id_tipo_valvula','accionamiento','fc','id_estacion_bombeo','id_fabricante','operatividad'];


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
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function tipoValvula()
    {
        return $this->hasOne('App\Models\TipoValvula', 'id', 'id_tipo_valvula');
    }
    

}
