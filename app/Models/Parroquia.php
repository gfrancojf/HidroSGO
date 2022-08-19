<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;

class Parroquia extends Model implements Auditable
{
    use HasFactory;
    use \OwenIt\Auditing\Auditable;

    protected $table = 'parroquias';

    public $timestamps = false;

    protected $dates = ['deleted_at'];

    public function municipio()
    {
        return $this->belongsTo('Municipio', 'municipio_id', 'id');
    }
}
