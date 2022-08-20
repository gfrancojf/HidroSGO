<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use OwenIt\Auditing\Contracts\Auditable;

/**
 * Class Sistema
 *
 * @property $id
 * @property $sistemas
 * @property $deleted_at
 * @property $created_at
 * @property $updated_at
 *
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Sistema extends Model implements Auditable
{
    use SoftDeletes;
    use \OwenIt\Auditing\Auditable;

    public static $rules = [
        'sistemas' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $table = 'sistemas';
    //protected $fillable = ['sistemas'];
}
