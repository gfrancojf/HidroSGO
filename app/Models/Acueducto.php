<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Acueducto
 *
 * @property $id
 * @property $nombre
 * @property $id_estado
 * @property $capacidad_distribucion
 * @property $capacidad_modificada
 * @property $deleted_at
 * @property $created_at
 * @property $updated_at
 *
 * @property Captacion[] $captacions
 * @property DiqueToma[] $diqueTomas
 * @property EstacionBombeo[] $estacionBombeos
 * @property Estado $estado
 * @property Infraestructura[] $infraestructuras
 * @property Planta[] $plantas
 * @property PozoProfundo[] $pozoProfundos
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Acueducto extends Model
{
    use SoftDeletes;

    static $rules = [
		'nombre' => 'required',
		'id_estado' => 'required',
		'capacidad_distribucion' => 'required',
		'capacidad_modificada' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre','id_estado','capacidad_distribucion','capacidad_modificada'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function captacions()
    {
        return $this->hasMany('App\Models\Captacion', 'id_acueducto', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function diqueTomas()
    {
        return $this->hasMany('App\Models\DiqueToma', 'id_acueducto', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function estacionBombeos()
    {
        return $this->hasMany('App\Models\EstacionBombeo', 'id_acueducto', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function estado()
    {
        return $this->hasOne('App\Models\Estado', 'id', 'id_estado');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function infraestructuras()
    {
        return $this->hasMany('App\Models\Infraestructura', 'id_acueducto', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function plantas()
    {
        return $this->hasMany('App\Models\Planta', 'id_acueducto', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function pozoProfundos()
    {
        return $this->hasMany('App\Models\PozoProfundo', 'id_acueducto', 'id');
    }
    

}
