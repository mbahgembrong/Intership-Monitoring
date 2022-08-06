<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Pkl
 * @package App\Models
 * @version August 6, 2022, 3:57 pm UTC
 *
 * @property unsignedInteger $siswa_id
 * @property unsignedInteger $staff_id
 * @property unsignedInteger $bidang_id
 * @property unsignedInteger $pembimbing_id
 * @property unsignedInteger $instansi_id
 * @property string $status
 * @property string $waktu_mulai
 * @property string $waktu_selesai
 * @property string $id_sertifikat
 * @property string $keterangan
 * @property string $no_induk
 * @property string $semester
 * @property string $jurusan
 * @property string $file
 */
class Pkl extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'pkls';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'siswa_id',
        'staff_id',
        'bidang_id',
        'pembimbing_id',
        'instansi_id',
        'status',
        'waktu_mulai',
        'waktu_selesai',
        'id_sertifikat',
        'keterangan',
        'no_induk',
        'semester',
        'jurusan',
        'file'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'status' => 'string',
        'waktu_mulai' => 'date',
        'waktu_selesai' => 'date',
        'id_sertifikat' => 'string',
        'keterangan' => 'string',
        'no_induk' => 'string',
        'semester' => 'string',
        'jurusan' => 'string',
        'file' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'siswa_id' => 'required|integer',
        'staff_id' => 'nullable|integer',
        'bidang_id' => 'nullable|integer',
        'pembimbing_id' => 'nullable|integer',
        'instansi_id' => 'nullable|integer',
        'status' => 'nullable|string',
        'waktu_mulai' => 'required',
        'waktu_selesai' => 'required',
        'id_sertifikat' => 'nulllable|string',
        'keterangan' => 'nulllable|string',
        'no_induk' => 'required|numeric',
        'semester' => 'required|numeric',
        'jurusan' => 'required|string',
        'file' => 'required|file'
    ];

    /**
     * Get the siswa that owns the Pkl
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function siswa()
    {
        return $this->belongsTo(Siswa::class, 'siswa_id');
    }
    /**
     * Get the staf that owns the Pkl
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function staf()
    {
        return $this->belongsTo(Staf::class, 'staff_id');
    }
    /**
     * Get the bidang that owns the Pkl
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function bidang()
    {
        return $this->belongsTo(Bidang::class, 'bidang_id');
    }
    /**
     * Get the pembimbing that owns the Pkl
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function pembimbing()
    {
        return $this->belongsTo(Pembimbing::class, 'pembimbing_id');
    }
    /**
     * Get the instansi that owns the Pkl
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function instansi()
    {
        return $this->belongsTo(Instansi::class, 'instansi_id');
    }
    /**
     * Get all of the absensi for the Pkl
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function absensi()
    {
        return $this->hasMany(Absensi::class, 'pkl_id');
    }
    /**
     * Get all of the laporan for the Pkl
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function laporan()
    {
        return $this->hasMany(Laporan::class, 'pkl_id');
    }
    /**
     * Get the penilaian associated with the Pkl
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function penilaian()
    {
        return $this->hasOne(Penilaian::class, 'pkl_id');
    }
}
