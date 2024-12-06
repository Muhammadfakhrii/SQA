<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    use HasFactory;

    protected $fillable = [
        'nrp',
        'jurusan',
        'nama_lengkap',
        'tempat_lahir',
        'tanggal_lahir',
        'hobi',
        'alamat',
        'foto'
    ];
}