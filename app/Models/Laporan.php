<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Laporan
 * @package App\Models
 * @version August 6, 2022, 3:40 pm UTC
 *
 * @property unsignedInteger $pkl_id
 * @property string $laporan
 */
class Laporan extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'laporans';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'pkl_id',
        'laporan'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'laporan' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'pkl_id' => 'required|integer',
        'laporan' => 'required|string'
    ];
    /**
     * Get the pkl that owns the Laporan
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function pkl()
    {
        return $this->belongsTo(Pkl::class, 'pkl_id');
    }
}
