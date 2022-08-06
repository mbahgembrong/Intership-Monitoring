<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Siswa
 * @package App\Models
 * @version August 6, 2022, 3:16 pm UTC
 *
 * @property string $nama
 * @property string $phone
 * @property string $alamat
 * @property string $email
 * @property string $password
 * @property string $jenis_kelamin
 * @property string $foto
 */
class Siswa extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'siswas';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'nama',
        'phone',
        'alamat',
        'email',
        'password',
        'jenis_kelamin',
        'foto'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'nama' => 'string',
        'phone' => 'string',
        'alamat' => 'string',
        'email' => 'string',
        'password' => 'string',
        'jenis_kelamin' => 'string',
        'foto' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'nama' => 'required|string',
        'phone' => 'required|numeric|max:8|unique:siswas,phone',
        'alamat' => 'required|string',
        'email' => 'required|email|unique:siswas,email',
        'password' => 'required|alpha_num|min:8',
        'jenis_kelamin' => 'required|string',
        'foto' => 'required|file'
    ];

    /**
     * Get all of the pkl for the Siswa
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function pkl()
    {
        return $this->hasMany(Pkl::class, 'siswa_id');
    }
}
