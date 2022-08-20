<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use OwenIt\Auditing\Contracts\Auditable;


class DiqueToma extends Model implements Auditable
{
    use  SoftDeletes;
    use \OwenIt\Auditing\Auditable;

    public static $rules = [
        'estado' => 'required',
        'parroquia' => 'required',
        'municipio' => 'required',
        'ref_sector' => 'required',
        'utm_a' => 'required',
        'utm_b' => 'required',
        'acueducto' => 'required',
        'toma_rio' => 'required',
        'caudal_diseño' => 'required',
        'caudal_recibe' => 'required',
        'estatus' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['estado', 'parroquia', 'municipio', 'ref_sector', 'utm_a', 'utm_b', 'acueducto', 'toma_rio', 'caudal_diseño', 'caudal_recibe', 'estatus'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function acueducto()
    {
        return $this->belongsTo(Acueducto::class, 'id_acueducto');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function estado()
    {
        return $this->belongsTo(Estado::class, 'id_estado');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function municipio()
    {
        return $this->belongsTo(Municipio::class, 'id_municipio');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function parroquia()
    {
        return $this->belongsTo(Parroquia::class, 'id_parroquia');
    }
}
