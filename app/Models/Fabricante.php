<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Fabricante
 *
 * @property $id
 * @property $nombre
 * @property $modelo
 * @property $serial
 * @property $origen
 * @property $ficha
 * @property $deleted_at
 * @property $created_at
 * @property $updated_at
 *
 * @property Bomba[] $bombas
 * @property Valvula[] $valvulas
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Fabricante extends Model
{
    use SoftDeletes;

    static $rules = [
		'nombre' => 'required',
		'modelo' => 'required',
		'serial' => 'required',
		'origen' => 'required',
		'ficha' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre','modelo','serial','origen','ficha'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function bombas()
    {
        return $this->hasMany('App\Models\Bomba', 'id_fabricante', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function valvulas()
    {
        return $this->hasMany('App\Models\Valvula', 'id_fabricante', 'id');
    }
    

}
