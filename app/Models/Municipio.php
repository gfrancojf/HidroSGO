<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;

class Municipio extends Model implements Auditable
{
    use HasFactory;
    use \OwenIt\Auditing\Auditable;

    protected $table = 'municipios';

    public $timestamps = false;

    protected $dates = ['deleted_at'];

    public function estado()
    {
        return $this->belongsTo('Estado', 'estado_id', 'id');
    }

    public function parroquias()
    {
        return $this->hasMany('Parroquia', 'municipio_id', 'id');
    }
}
