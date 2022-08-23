<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class TipoPlantum
 *
 * @property $id
 * @property $tipo_planta
 * @property $deleted_at
 * @property $created_at
 * @property $updated_at
 *
 * @property Planta[] $plantas
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class TipoPlantum extends Model
{
    use SoftDeletes;

    static $rules = [
		'tipo_planta' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['tipo_planta'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function plantas()
    {
        return $this->hasMany('App\Models\Planta', 'id_tipo_planta', 'id');
    }
    

}
