<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    use HasFactory;

    protected $fillable = [
        'nik',
        'tgl',
        'telp',
        'jk',
        'alamat',
        'kk',
        'akta',
        'skl',
        'kis',
    ];
}
