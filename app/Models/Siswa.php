<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'nik',
        'tgl',
        'telp',
        'jk',
        'alamat',
        'email',
        'kelas',
        'foto',
        'kk',
        'akta',
        'skl',
        'kis',
    ];
}
