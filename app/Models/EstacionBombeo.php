<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class EstacionBombeo
 *
 * @property $id
 * @property $nombre
 * @property $cantidad_grupos
 * @property $id_tipo_estacion_bombeo
 * @property $id_tipo_servicio
 * @property $id_sistema
 * @property $id_acueducto
 * @property $id_estado
 * @property $id_municipio
 * @property $id_parroquia
 * @property $id_coordenadas
 * @property $deleted_at
 * @property $created_at
 * @property $updated_at
 *
 * @property Acueducto $acueducto
 * @property Bomba[] $bombas
 * @property DetallesTecnicosEstacionBombeo[] $detallesTecnicosEstacionBombeos
 * @property Estado $estado
 * @property Municipio $municipio
 * @property Parroquia $parroquia
 * @property Sistema $sistema
 * @property TipoEstacionBombeo $tipoEstacionBombeo
 * @property TipoServicioEstacionBombeo $tipoServicioEstacionBombeo
 * @property UbicacionGeografica $ubicacionGeografica
 * @property Valvula[] $valvulas
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class EstacionBombeo extends Model
{
    use SoftDeletes;

    static $rules = [
		'nombre' => 'required',
		'cantidad_grupos' => 'required',
		'id_tipo_estacion_bombeo' => 'required',
		'id_tipo_servicio' => 'required',
		'id_sistema' => 'required',
		'id_acueducto' => 'required',
		'id_estado' => 'required',
		'id_municipio' => 'required',
		'id_parroquia' => 'required',
		'id_coordenadas' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre','cantidad_grupos','id_tipo_estacion_bombeo','id_tipo_servicio','id_sistema','id_acueducto','id_estado','id_municipio','id_parroquia','id_coordenadas'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function acueducto()
    {
        return $this->hasOne('App\Models\Acueducto', 'id', 'id_acueducto');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function bombas()
    {
        return $this->hasMany('App\Models\Bomba', 'id_estacion_bombeo', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function detallesTecnicosEstacionBombeos()
    {
        return $this->hasMany('App\Models\DetallesTecnicosEstacionBombeo', 'id_estacion_bombeo', 'id');
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
    public function tipoEstacionBombeo()
    {
        return $this->hasOne('App\Models\TipoEstacionBombeo', 'id', 'id_tipo_estacion_bombeo');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function tipoServicioEstacionBombeo()
    {
        return $this->hasOne('App\Models\TipoServicioEstacionBombeo', 'id', 'id_tipo_servicio');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function ubicacionGeografica()
    {
        return $this->hasOne('App\Models\UbicacionGeografica', 'id', 'id_coordenadas');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function valvulas()
    {
        return $this->hasMany('App\Models\Valvula', 'id_estacion_bombeo', 'id');
    }
    

}
