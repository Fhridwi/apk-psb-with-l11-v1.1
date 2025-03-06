<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DokumenSantri extends Model
{
    use HasFactory;

    protected $table = 'dokumen_santri';
    protected $fillable = [
        'scan_foto',
        'scan_kk',
        'scan_ktp_ayah',
        'scan_ktp_ibu',
    ];

    public function santri()
    {
        return $this->hasOne(Santri::class);
    }
}
