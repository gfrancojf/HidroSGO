<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use OwenIt\Auditing\Contracts\Auditable;

class Infraestructura extends Model implements Auditable
{
    use HasFactory, SoftDeletes;
    use \OwenIt\Auditing\Auditable;


    protected $table = 'infraestructura';
    public static $rules = [
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
        'id_tipo_infraestructura' => 'required',
        'id_sistema' => 'required',
        'id_acueducto' => 'required',

    ];
    protected $perPage = 20;
    protected $guarded = ['id', 'created_at', 'updated_at'];
    protected $dates = ['deleted_at'];

}
