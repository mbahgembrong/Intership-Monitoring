<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Staf
 * @package App\Models
 * @version August 6, 2022, 3:06 pm UTC
 *
 * @property unsignedInteger $role_id
 * @property unsignedInteger $bidang_id
 * @property string $nama
 * @property string $alamat
 * @property string $phone
 * @property string $email
 * @property string $password
 */
class Staf extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'stafs';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'role_id',
        'bidang_id',
        'nama',
        'alamat',
        'phone',
        'email',
        'password'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'nama' => 'string',
        'alamat' => 'string',
        'phone' => 'string',
        'email' => 'string',
        'password' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'role_id' => 'required|integer',
        'bidang_id' => 'required|integer',
        'nama' => 'required|string',
        'alamat' => 'required|texarea',
        'phone' => 'required|numeric|unique:stafs,phone',
        'email' => 'required|email|unique:stafs,email',
        'password' => 'required|alpha_num|min:8'
    ];
    /**
     * Get all of the pkl for the Staf
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function pkl()
    {
        return $this->hasMany(Pkl::class, 'staff_id');
    }
}
