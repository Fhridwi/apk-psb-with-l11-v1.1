<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Vinkla\Hashids\Facades\Hashids;


class Santri extends Model
{
    use HasFactory;

    public $incrementing = false; 
    protected $keyType = 'string';
    protected $table = 'santri';
    protected $fillable = [
        'no_pendaftaran',
        'email',
        'nama_lengkap',
        'tempat_lahir',
        'tanggal_lahir',
        'jenis_kelamin',
        'anak_ke',
        'asal_sekolah',
        'alamat',
        'program_sekolah_id',
        'orang_tua_id',
        'wali_id',
        'tahun_id',
        'dokumen_santri_id',
        'status_pendaftaran',
        'akun_id'
    ];

    protected static function boot()
    {
        parent::boot();
        static::creating(function ($model) {
            $model->id = Hashids::encode(time()); 
        });
    }

    public function programSekolah()
    {
        return $this->belongsTo(ProgramSekolah::class);
    }

    public function orangTua()
    {
        return $this->belongsTo(OrangTua::class);
    }

    public function wali()
    {
        return $this->belongsTo(Wali::class);
    }
    public function tahunAjaran()
    {
        return $this->belongsTo(TahunAjaran::class);
    }

    public function dokumenSantri()
    {
        return $this->belongsTo(DokumenSantri::class);
    }

    public function akun()
{
    return $this->belongsTo(User::class, 'akun_id');
}

}

