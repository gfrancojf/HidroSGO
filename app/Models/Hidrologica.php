<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use OwenIt\Auditing\Contracts\Auditable;

/**
 * Class Hidrologica
 *
 * @property $id
 * @property $hidrologica
 * @property $deleted_at
 * @property $created_at
 * @property $updated_at
 *
 * @property Estado[] $estados
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Hidrologica extends Model implements Auditable
{
  use  SoftDeletes;
  use \OwenIt\Auditing\Auditable;

    static $rules = [
		'hidrologica' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['hidrologica'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function estados()
    {
        return $this->hasMany('App\Models\Estado', 'id_hidrologica', 'id');
    }
    

}
