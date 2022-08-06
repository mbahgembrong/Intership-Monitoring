<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Bidang
 * @package App\Models
 * @version August 6, 2022, 3:01 pm UTC
 *
 * @property string $name
 */
class Bidang extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'bidangs';


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
     * Get all of the staf for the Bidang
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function staf()
    {
        return $this->hasMany(Staf::class, 'bidang_id');
    }
    /**
     * Get all of the pkl for the Bidang
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function pkl()
    {
        return $this->hasMany(Pkl::class, 'bidang_id');
    }
}
