<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fakultas extends Model
{
    use HasFactory;

    protected $fillable = ['nama_singkat', 'nama_lengkap'];

    public function prodi()
    {
        return $this->hasMany(Prodi::class);
    }
}
