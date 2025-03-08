<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrangTua extends Model
{
    use HasFactory;

    protected $table = 'orang_tua';
    protected $fillable = [
        'nama_ayah',
        'nama_ibu',
        'pekerjaan_ayah',
        'pekerjaan_ibu',
        'penghasilan_ayah',
        'penghasilan_ibu',
        'status_ayah',
        'status_ibu',
        'alamat_orang_tua',
        'nomor_hp_orang_tua',
        'email_orang_tua',
    ];

    public function santri()
    {
        return $this->hasMany(Santri::class);
    }
}
