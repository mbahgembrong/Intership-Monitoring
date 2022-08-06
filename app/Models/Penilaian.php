<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Penilaian
 * @package App\Models
 * @version August 6, 2022, 3:46 pm UTC
 *
 * @property unsignedInteger $pkl_id
 * @property integer $kerajinan
 * @property integer $kejujuran
 * @property integer $kedisiplinan
 * @property integer $kerjasama
 * @property integer $inisiatif
 * @property integer $tanggung_jawab
 * @property integer $etika
 */
class Penilaian extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'penilaians';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'pkl_id',
        'kerajinan',
        'kejujuran',
        'kedisiplinan',
        'kerjasama',
        'inisiatif',
        'tanggung_jawab',
        'etika'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'kerajinan' => 'integer',
        'kejujuran' => 'integer',
        'kedisiplinan' => 'integer',
        'kerjasama' => 'integer',
        'inisiatif' => 'integer',
        'tanggung_jawab' => 'integer',
        'etika' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'pkl_id' => 'required|integer',
        'kerajinan' => 'required|integer',
        'kejujuran' => 'required|integer',
        'kedisiplinan' => 'required|integer',
        'kerjasama' => 'required|integer',
        'inisiatif' => 'required|integer',
        'tanggung_jawab' => 'required|integer',
        'etika' => 'required|integer'
    ];

    
}
