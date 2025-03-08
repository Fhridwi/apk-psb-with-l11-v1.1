<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wali extends Model
{
    use HasFactory;

    protected $table = 'wali';
    protected $fillable = [
        'hubungan_wali',
        'nama_wali',
        'pekerjaan_wali',
        'penghasilan_wali',
        'alamat_wali',
        'nomor_hp_wali',
        'email_wali',
    ];

    public function santri()
    {
        return $this->hasMany(Santri::class);
    }
}
