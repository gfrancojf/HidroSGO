<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;

class Ciudad extends Model implements Auditable
{
    use \OwenIt\Auditing\Auditable;
    use HasFactory;

    protected $table = 'ciudades';

    public $timestamps = false;

    protected $dates = ['deleted_at'];

    public function estado()
    {
        return $this->belongsTo('Estado', 'id_estado', 'id');
    }
}
