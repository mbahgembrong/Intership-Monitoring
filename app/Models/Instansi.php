<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Instansi
 * @package App\Models
 * @version August 6, 2022, 3:10 pm UTC
 *
 * @property string $nama
 * @property string $alamat
 * @property string $telp
 * @property string $pendidikan
 */
class Instansi extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'instansis';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'nama',
        'alamat',
        'telp',
        'pendidikan'
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
        'telp' => 'string',
        'pendidikan' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'nama' => 'required|string',
        'alamat' => 'required|string',
        'telp' => 'required|numeric|max:15|unique:instansis,phone',
        'pendidikan' => 'required|string'
    ];

    
}
