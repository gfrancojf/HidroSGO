<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;



use OwenIt\Auditing\Contracts\Auditable;

class TipoInfraestructura extends Model  implements Auditable
{
    use HasFactory;
    use SoftDeletes;
    use \OwenIt\Auditing\Auditable;

    protected $table = 'tipo_infraestructura';
    protected $perPage = 20;
    protected $guarded = ['id', 'created_at', 'updated_at'];
    protected $dates = ['deleted_at'];
public function infraestructuras()
    {
        return $this->hasMany('App\Models\Infraestructura', 'id_tipo_infraestructura', 'id');
    }



}