<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Notifikasi
 * @package App\Models
 * @version August 6, 2022, 3:55 pm UTC
 *
 * @property string $user
 * @property unsignedInteger $foreign_id
 * @property string $keterangan
 * @property boolean $read
 */
class Notifikasi extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'notifikasis';


    protected $dates = ['deleted_at'];

    private $user_key = ["siswa", "staf", "pembimbing"];



    public $fillable = [
        'user',
        'foreign_id',
        'keterangan',
        'read'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'user' => 'string',
        'keterangan' => 'string',
        'read' => 'boolean'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'user' => 'required|string',
        'foreign_id' => 'required|integer',
        'keterangan' => 'required|string',
        'read' => 'nullable'
    ];
}
