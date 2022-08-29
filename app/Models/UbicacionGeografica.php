<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class UbicacionGeografica
 *
 * @property $id
 * @property $coordenadas
 * @property $deleted_at
 * @property $created_at
 * @property $updated_at
 *
 * @property DiqueToma[] $diqueTomas
 * @property Embalse[] $embalses
 * @property EstacionBombeo[] $estacionBombeos
 * @property Planta[] $plantas
 * @property PozoProfundo[] $pozoProfundos
 * @property TomaRio[] $tomaRios
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class UbicacionGeografica extends Model
{
    use SoftDeletes;

    static $rules = [
		'coordenadas' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['coordenadas'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function diqueTomas()
    {
        return $this->hasMany('App\Models\DiqueToma', 'id_coordenadas', 'id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function embalses()
    {
        return $this->hasMany('App\Models\Embalse', 'id_coordenadas', 'id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function estacionBombeos()
    {
        return $this->hasMany('App\Models\EstacionBombeo', 'id_coordenadas', 'id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function plantas()
    {
        return $this->hasMany('App\Models\Planta', 'id_coordenadas', 'id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function pozoProfundos()
    {
        return $this->hasMany('App\Models\PozoProfundo', 'id_coordenadas', 'id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function tomaRios()
    {
        return $this->hasMany('App\Models\TomaRio', 'id_coordenadas', 'id');
    }


}
