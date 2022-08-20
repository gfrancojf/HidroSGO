<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use OwenIt\Auditing\Contracts\Auditable;


class TipoFuente extends Model implements Auditable
{
    use SoftDeletes;
    use \OwenIt\Auditing\Auditable;

    public static $rules = [
        'tipo' => 'required',
    ];

    protected $perPage = 20;


    protected $table = 'tipo_fuentes';
    // protected $fillable = ['tipo'];


    public function captacions()
    {
        return $this->hasMany('App\Models\Captacion', 'tipo_fuentes', 'id');
    }
}
