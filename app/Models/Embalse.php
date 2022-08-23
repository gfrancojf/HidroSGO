<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use OwenIt\Auditing\Contracts\Auditable;

/**
 * Class Embalse
 *
 * @property $id
 * @property $reg
 * @property $nombre
 * @property $estado
 * @property $municipio
 * @property $parroquia
 * @property $desc_ubicacion
 * @property $utm_a
 * @property $utm_b
 * @property $proposito
 * @property $propietario
 * @property $constructora
 * @property $cronologia
 * @property $deleted_at
 * @property $created_at
 * @property $updated_at
 * @property Estado $estado
 * @property Municipio $municipio
 * @property Parroquia $parroquia
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Embalse extends Model implements Auditable
{
    use  SoftDeletes;
    use \OwenIt\Auditing\Auditable;

    public static $rules = [
        'reg' => 'required',
        'nombre' => 'required',
        'estado' => 'required',
        'municipio' => 'required',
        'parroquia' => 'required',
        'desc_ubicacion' => 'required',
        'utm_a' => 'required',
        'utm_b' => 'required',
        'proposito' => 'required',
        'propietario' => 'required',
        'constructora' => 'required',
        'cronologia' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['reg', 'nombre', 'estado', 'municipio', 'parroquia', 'desc_ubicacion', 'utm_a', 'utm_b', 'proposito', 'propietario', 'constructora', 'cronologia'];

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
