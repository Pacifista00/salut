<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pendaftar;
use App\Models\Prodi;

class PendaftarController extends Controller
{
    public function index(){
        $pendaftar = Pendaftar::all();
        $prodi = Prodi::all();

        return view('admin.pendaftar', [
            'pendaftar' => $pendaftar,
            'prodi' => $prodi,
            'judul' => 'Dashboard | Pendaftar',
            'user' => auth()->user()
        ]);
    }
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'jenjang_pendidikan' => 'required|string',
            'nama_lengkap' => 'required|string|max:255',
            'tempat_lahir' => 'required|string|max:255',
            'tanggal_lahir' => 'required|date_format:Y-m-d',
            'nama_ibu_kandung' => 'required|string|max:255',
            'nik' => 'required|string|digits:16',
            'jalur_program' => 'required|string',
            'jenjang_universitas' => 'required|string',
            'program_studi' => 'required|string',
            'kantor_cabang' => 'nullable|string',
            'nomor_hp' => 'required|string|max:20',
            'email' => 'required|email|unique:pendaftars,email,' . $id,
            'jenjang_pendidikan_terakhir' => 'required|string',
            'asal_sekolah' => 'required|string',
            'nomor_ijazah' => 'required|string',
            'tahun_ijazah' => 'required|digits:4|integer',
            'nisn' => 'required|string|max:20',
            'jurusan_asal' => 'required|string',
        ]);

        $pendaftar = Pendaftar::findOrFail($id);
        $pendaftar->update($validated);

        return redirect()->back()->with('success', 'Data berhasil diperbarui!');
    }
    public function destroy($id){
        $pendaftar = Pendaftar::find($id);

        $pendaftar->delete();

        return redirect()->back()->with('success', 'Pendaftar berhasil dihapus.');
    }
}
