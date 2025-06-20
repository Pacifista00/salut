<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Pendaftar;

class PendaftaranController extends Controller
{
    public function daftar(Request $request){
         $validator = Validator::make($request->all(), [
            'jenjang_pendidikan' => 'required|string',
            'nama_lengkap' => 'required|string|max:255',
            'tempat_lahir' => 'required|string|max:255',
            'tanggal_lahir' => 'required|date_format:Y-m-d',
            'nama_ibu_kandung' => 'required|string|max:255',
            'nik' => 'required|numeric|digits:16',
            'jalur_program' => 'required|string',
            'jenjang_universitas' => 'required|string',
            'program_studi' => 'required|string',
            'kantor_cabang' => 'nullable|string',
            'nomor_hp' => 'required|string|max:20',
            'email' => 'required|email|unique:pendaftars,email',
            'jenjang_pendidikan_terakhir' => 'required|string',
            'asal_sekolah' => 'required|string',
            'nomor_ijazah' => 'required|numeric',
            'tahun_ijazah' => 'required|digits:4|integer',
            'nisn' => 'required|numeric|max:20',
            'jurusan_asal' => 'required|string',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        Pendaftar::create($request->all());

        return redirect()->back()->with('success', 'Data pendaftaran berhasil disimpan!');
    }
}
