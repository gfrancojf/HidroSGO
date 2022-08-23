<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Estado
 *
 * @property $id
 * @property $estado
 * @property $iso_3166-2
 * @property $created_at
 * @property $updated_at
 *
 * @property Acueducto[] $acueductos
 * @property Ciudade[] $ciudades
 * @property DiqueToma[] $diqueTomas
 * @property Embalse[] $embalses
 * @property EstacionBombeo[] $estacionBombeos
 * @property Infraestructura[] $infraestructuras
 * @property Municipio[] $municipios
 * @property Planta[] $plantas
 * @property PozoProfundo[] $pozoProfundos
 * @property TomaRio[] $tomaRios
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Estado extends Model
{
    
    static $rules = [
		'estado' => 'required',
		'iso_3166-2' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['estado','iso_3166-2'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function acueductos()
    {
        return $this->hasMany('App\Models\Acueducto', 'id_estado', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function ciudades()
    {
        return $this->hasMany('App\Models\Ciudade', 'estado_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function diqueTomas()
    {
        return $this->hasMany('App\Models\DiqueToma', 'id_estado', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function embalses()
    {
        return $this->hasMany('App\Models\Embalse', 'id_estado', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function estacionBombeos()
    {
        return $this->hasMany('App\Models\EstacionBombeo', 'id_estado', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function infraestructuras()
    {
        return $this->hasMany('App\Models\Infraestructura', 'id_estado', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function municipios()
    {
        return $this->hasMany('App\Models\Municipio', 'estado_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function plantas()
    {
        return $this->hasMany('App\Models\Planta', 'id_estado', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function pozoProfundos()
    {
        return $this->hasMany('App\Models\PozoProfundo', 'id_estado', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function tomaRios()
    {
        return $this->hasMany('App\Models\TomaRio', 'id_estado', 'id');
    }
    

}
