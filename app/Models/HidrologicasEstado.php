<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use OwenIt\Auditing\Contracts\Auditable;

/**
 * Class HidrologicasEstado
 *
 * @property $id
 * @property $id_estado
 * @property $id_hidrologica
 * @property $deleted_at
 * @property $created_at
 * @property $updated_at
 *
 * @property Estado $estado
 * @property Hidrologica $hidrologica
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class HidrologicasEstado extends Model implements Auditable
{
    use  SoftDeletes;
    use \OwenIt\Auditing\Auditable;

    static $rules = [
		'id_estado' => 'required',
		'id_hidrologica' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['id_estado','id_hidrologica'];


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
    public function hidrologica()
    {
        return $this->hasOne('App\Models\Hidrologica', 'id', 'id_hidrologica');
    }
    

}
