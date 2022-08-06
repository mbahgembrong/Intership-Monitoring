<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Pembimbing
 * @package App\Models
 * @version August 6, 2022, 3:22 pm UTC
 *
 * @property unsignedInteger $instansi_id
 * @property string $nama
 * @property string $alamat
 * @property string $phone
 * @property string $email
 * @property string $password
 */
class Pembimbing extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'pembimbings';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'instansi_id',
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
        'instansi_id' => 'required|integer',
        'nama' => 'required|string',
        'alamat' => 'required|string',
        'phone' => 'required|numeric|max:15|unique:pembimbings,phone',
        'email' => 'required|email|unique:pembimbings,email',
        'password' => 'required|alpha_num|min:8'
    ];

    
}
