<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use OwenIt\Auditing\Contracts\Auditable;

class Infraestructura extends Model implements Auditable
{
    use  SoftDeletes;
    use \OwenIt\Auditing\Auditable;



    static $rules = [
		'nombre' => 'required',
		'propietario' => 'required',
		'constructura' => 'required',
		'proposito' => 'required',
		'img' => 'required',
		'id_estado' => 'required',
		'id_municipio' => 'required',
		'id_parroquia' => 'required',
		'utm_a' => 'required',
		'utm_b' => 'required',
		'desc_ubicacion' => 'required',
		'poblacion_servida' => 'required',
		'id_infraestructura' => 'required',
		'id_tipo_infraestructura' => 'required',
		'id_sistema' => 'required',
		'id_acueducto' => 'required',
    ];


    protected $table = 'infraestructura';
    protected $perPage = 20;
    protected $guarded = ['id', 'created_at', 'updated_at'];
    protected $dates = ['deleted_at'];

    public function acueducto()
    {
        return $this->hasOne('App\Models\Acueducto', 'id', 'id_acueducto');
    }

    public function estado()
    {
        return $this->hasOne('App\Models\Estado', 'id', 'id_estado');
    }

    public function municipio()
    {
        return $this->hasOne('App\Models\Municipio', 'id', 'id_municipio');
    }

    public function parroquia()
    {
        return $this->hasOne('App\Models\Parroquia', 'id', 'id_parroquia');
    }


    public function sistema()
    {
        return $this->hasOne('App\Models\Sistema', 'id', 'id_sistema');
    }


    public function tipoInfraestructura()
    {
        return $this->hasOne('App\Models\TipoInfraestructura', 'id', 'id_tipo_infraestructura');
    }


}
