<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Role
 * @package App\Models
 * @version August 6, 2022, 2:59 pm UTC
 *
 * @property string $name
 */
class Role extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'roles';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'name'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required|string'
    ];

    /**
     * Get all of the staf for the Role
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function staf()
    {
        return $this->hasMany(Staf::class, 'role_id');
    }
}
