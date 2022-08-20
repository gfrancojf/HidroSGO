<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class TipoInfraestructura
 *
 * @property $id
 * @property $tipo_infraestructura
 * @property $deleted_at
 * @property $created_at
 * @property $updated_at
 *
 * @property Infraestructura[] $infraestructuras
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class TipoInfraestructura extends Model
{
    use SoftDeletes;

    static $rules = [
		'tipo_infraestructura' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['tipo_infraestructura'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function infraestructuras()
    {
        return $this->hasMany('App\Models\Infraestructura', 'id_tipo_infraestructura', 'id');
    }
    

}
