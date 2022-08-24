<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Captacion
 *
 * @property $id
 * @property $id_tipo_fuente
 * @property $id_fuente
 * @property $id_acueducto
 * @property $cuota
 * @property $extraccion
 * @property $observacion
 * @property $deleted_at
 * @property $created_at
 * @property $updated_at
 *
 * @property Acueducto $acueducto
 * @property TipoFuente $tipoFuente
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Captacion extends Model
{
    use SoftDeletes;

    static $rules = [
		'id_tipo_fuente' => 'required',
		'id_fuente' => 'required',
		'id_acueducto' => 'required',
		'cuota' => 'required',
		'extraccion' => 'required',
		'observacion' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['id_tipo_fuente','id_fuente','id_acueducto','cuota','extraccion','observacion'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function acueducto()
    {
        return $this->hasOne('App\Models\Acueducto', 'id', 'id_acueducto');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function tipoFuente()
    {
        return $this->hasOne('App\Models\TipoFuente', 'id', 'id_tipo_fuente');
    }


}
