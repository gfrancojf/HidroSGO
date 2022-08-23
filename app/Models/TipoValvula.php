<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class TipoValvula
 *
 * @property $id
 * @property $tipo_valvula
 * @property $deleted_at
 * @property $created_at
 * @property $updated_at
 *
 * @property Valvula[] $valvulas
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class TipoValvula extends Model
{
    use SoftDeletes;

    static $rules = [
		'tipo_valvula' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['tipo_valvula'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function valvulas()
    {
        return $this->hasMany('App\Models\Valvula', 'id_tipo_valvula', 'id');
    }
    

}
