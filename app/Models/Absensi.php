<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Absensi
 * @package App\Models
 * @version August 6, 2022, 3:33 pm UTC
 *
 * @property unsignedInteger $pkl_id
 * @property string $absensi
 */
class Absensi extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'absensis';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'pkl_id',
        'absensi'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'absensi' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'pkl_id' => 'required|integer',
        'absensi' => 'required'
    ];

    
}
