<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use OwenIt\Auditing\Contracts\Auditable;

class PozoProfundo extends Model implements Auditable
{
    use SoftDeletes;
    use \OwenIt\Auditing\Auditable;

    public static $rules = [
        'nombre' => 'required',
        'estado' => 'required',
        'municipio' => 'required',
        'parroquia' => 'required',
        'sector' => 'required',
        'coordenadas' => 'required',
        'acueducto' => 'required',
        'proposito' => 'required',
        'propietario' => 'required',
        'caudal_diseno' => 'required',
    ];

    protected $perPage = 20;


    protected $guarded = ['id', 'created_at', 'updated_at'];

    protected $dates = ['deleted_at'];

   
    public function acueducto()
    {
// <<<<<<< HEAD
//         return $this->hasOne('App\Models\Acueducto','acueducto');
// =======
        return $this->hasOne('App\Models\Acueducto', 'id', 'id_acueducto');
// >>>>>>> 393e7f628c8fb60e7fd24cbd9bd2626c9bb8aba8
    }


    public function estado()
    {
// <<<<<<< HEAD
//         return $this->hasOne('App\Models\Estado','estado');
// =======
        return $this->hasOne('App\Models\Estado', 'id', 'id_estado');
// >>>>>>> 393e7f628c8fb60e7fd24cbd9bd2626c9bb8aba8
    }

  
    public function municipio()
    {
// <<<<<<< HEAD
//         return $this->hasOne('App\Models\Municipio','municipio');
// =======
        return $this->hasOne('App\Models\Municipio', 'id', 'id_municipio');
// >>>>>>> 393e7f628c8fb60e7fd24cbd9bd2626c9bb8aba8
    }

    public function parroquia()
    {
// <<<<<<< HEAD
//         return $this->hasOne('App\Models\Parroquia','parroquia');
// =======
        return $this->hasOne('App\Models\Parroquia', 'id', 'id_parroquia');
// >>>>>>> 393e7f628c8fb60e7fd24cbd9bd2626c9bb8aba8
    }

      public function ubicacionGeografica()
    {
// <<<<<<< HEAD
//         return $this->hasOne('App\Models\UbicacionGeografica','coordenadas');
// =======
        return $this->hasOne('App\Models\UbicacionGeografica', 'id', 'id_coordenadas');
// >>>>>>> 393e7f628c8fb60e7fd24cbd9bd2626c9bb8aba8
    }
}
