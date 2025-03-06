<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProgramSekolah extends Model
{
    use HasFactory;

    protected $table = 'program_sekolah';
    protected $fillable = ['program', 'sekolah'];

    public function santri()
    {
        return $this->hasMany(Santri::class);
    }
}
