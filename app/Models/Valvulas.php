<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use OwenIt\Auditing\Contracts\Auditable;

class Valvulas extends Model implements Auditable
{
    use HasFactory;


    use SoftDeletes;
    use \OwenIt\Auditing\Auditable;
    protected $table = 'valvulas';

    public static $rules = [
        'diametro' => 'required',
        'presion_nominal' => 'required',
        'accionamiento' => 'required',
        'fc' => 'required',
        'id_estacion_bombeo' => 'required',
        'id_fabricante' => 'required',
        'operatividad' => 'required',
        'id_tipo_valvula' => 'required',      
    ];
    protected $perPage = 20;
    protected $guarded = ['id', 'created_at', 'updated_at'];
    protected $dates = ['deleted_at'];

}
