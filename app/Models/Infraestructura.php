<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
<<<<<<< HEAD

/**
 * Class Infraestructura
 *
 * @property $id
 * @property $nombre
 * @property $propietario
 * @property $constructura
 * @property $proposito
 * @property $img
 * @property $id_estado
 * @property $id_municipio
 * @property $id_parroquia
 * @property $utm_a
 * @property $utm_b
 * @property $desc_ubicacion
 * @property $poblacion_servida
 * @property $id_infraestructura
 * @property $id_tipo_infraestructura
 * @property $id_sistema
 * @property $id_acueducto
 * @property $deleted_at
 * @property $created_at
 * @property $updated_at
 *
 * @property Acueducto $acueducto
 * @property Estado $estado
 * @property Municipio $municipio
 * @property Parroquia $parroquia
 * @property Sistema $sistema
 * @property TipoInfraestructura $tipoInfraestructura
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Infraestructura extends Model
{
    use SoftDeletes;

    static $rules = [
		'nombre' => 'required',
		'propietario' => 'required',
		'constructura' => 'required',
		'proposito' => 'required',
		'img' => 'required',
		'id_estado' => 'required',
		'id_municipio' => 'required',
		'id_parroquia' => 'required',
		'utm_a' => 'required',
		'utm_b' => 'required',
		'desc_ubicacion' => 'required',
		'poblacion_servida' => 'required',
		'id_infraestructura' => 'required',
		'id_tipo_infraestructura' => 'required',
		'id_sistema' => 'required',
		'id_acueducto' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre','propietario','constructura','proposito','img','id_estado','id_municipio','id_parroquia','utm_a','utm_b','desc_ubicacion','poblacion_servida','id_infraestructura','id_tipo_infraestructura','id_sistema','id_acueducto'];


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
    public function estado()
    {
        return $this->hasOne('App\Models\Estado', 'id', 'id_estado');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function municipio()
    {
        return $this->hasOne('App\Models\Municipio', 'id', 'id_municipio');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function parroquia()
    {
        return $this->hasOne('App\Models\Parroquia', 'id', 'id_parroquia');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function sistema()
    {
        return $this->hasOne('App\Models\Sistema', 'id', 'id_sistema');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function tipoInfraestructura()
    {
        return $this->hasOne('App\Models\TipoInfraestructura', 'id', 'id_tipo_infraestructura');
    }
    
=======
use OwenIt\Auditing\Contracts\Auditable;

class Infraestructura extends Model implements Auditable
{
    use HasFactory, SoftDeletes;
    use \OwenIt\Auditing\Auditable;


    protected $table = 'infraestructura';
    public static $rules = [
        'nombre' => 'required',
        'propietario' => 'required',
        'constructura' => 'required',
        'proposito' => 'required',
        'img' => 'required',
        'id_estado' => 'required',
        'id_municipio' => 'required',
        'id_parroquia' => 'required',
        'utm_a' => 'required',
        'utm_b' => 'required',
        'desc_ubicacion' => 'required',
        'id_tipo_infraestructura' => 'required',
        'id_sistema' => 'required',
        'id_acueducto' => 'required',

    ];
    protected $perPage = 20;
    protected $guarded = ['id', 'created_at', 'updated_at'];
    protected $dates = ['deleted_at'];
>>>>>>> franco

}
