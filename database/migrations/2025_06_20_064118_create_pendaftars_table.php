<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('pendaftars', function (Blueprint $table) {
            $table->id();
            $table->string('jenjang_pendidikan');
            $table->string('nama_lengkap');
            $table->string('tempat_lahir');
            $table->date('tanggal_lahir');
            $table->string('nama_ibu_kandung');
            $table->integer('nik');
            $table->string('jalur_program');
            $table->string('jenjang_universitas');
            $table->string('program_studi');
            $table->string('kantor_cabang')->default('Purwokerto');
            $table->string('nomor_hp');
            $table->string('email')->unique();
            $table->string('jenjang_pendidikan_terakhir');
            $table->string('asal_sekolah');
            $table->integer('nomor_ijazah');
            $table->year('tahun_ijazah');
            $table->integer('nisn');
            $table->string('jurusan_asal');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pendaftars');
    }
};
