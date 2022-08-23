<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Planta
 *
 * @property $id
 * @property $nombre
 * @property $caudal_diseño
 * @property $id_tipo_planta
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
 * @property Estado $estado
 * @property Municipio $municipio
 * @property Parroquia $parroquia
 * @property Sistema $sistema
 * @property TipoPlantum $tipoPlantum
 * @property UbicacionGeografica $ubicacionGeografica
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Planta extends Model
{
    use SoftDeletes;

    static $rules = [
		'nombre' => 'required',
		'caudal_diseño' => 'required',
		'id_tipo_planta' => 'required',
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
    protected $fillable = ['nombre','caudal_diseño','id_tipo_planta','id_sistema','id_acueducto','id_estado','id_municipio','id_parroquia','id_coordenadas'];


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
    public function tipoPlantum()
    {
        return $this->hasOne('App\Models\TipoPlantum', 'id', 'id_tipo_planta');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function ubicacionGeografica()
    {
        return $this->hasOne('App\Models\UbicacionGeografica', 'id', 'id_coordenadas');
    }
    

}
