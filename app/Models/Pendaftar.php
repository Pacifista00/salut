<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pendaftar extends Model
{
    use HasFactory;

    protected $fillable = [
        'jenjang_pendidikan',
        'nama_lengkap',
        'tempat_lahir',
        'tanggal_lahir',
        'nama_ibu_kandung',
        'nik',
        'jalur_program',
        'jenjang_universitas',
        'program_studi',
        'kantor_cabang',
        'nomor_hp',
        'email',
        'jenjang_pendidikan_terakhir',
        'asal_sekolah',
        'nomor_ijazah',
        'tahun_ijazah',
        'nisn',
        'jurusan_asal'
    ];
}
