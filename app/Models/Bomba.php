<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use OwenIt\Auditing\Contracts\Auditable;


class Bomba extends Model implements Auditable
{
    use  SoftDeletes;
    use \OwenIt\Auditing\Auditable;


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


    protected $fillable = ['grupo','nro_etapas','rotacion','caudal','presion','rpm','peso','diametro_succion','diametro_descarga','tipo_sello','operatividad','id_estacion_bombeo','id_fabricante'];

    public function estacionBombeo()
    {
        return $this->hasOne('App\Models\EstacionBombeo', 'id', 'id_estacion_bombeo');
    }


    public function fabricante()
    {
        return $this->hasOne('App\Models\Fabricante', 'id', 'id_fabricante');
    }


}