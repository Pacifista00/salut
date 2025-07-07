<?php

namespace App\Http\Controllers;

use App\Models\Prodi;
use App\Models\Fakultas;
use Illuminate\Http\Request;

class ProdiController extends Controller
{
    public function index()
    {
        $prodi = Prodi::with('fakultas')->get();
        $fakultas = Fakultas::all();

        return view('admin.prodi', [
            'prodi' => $prodi,
            'fakultas' => $fakultas,
            'judul' => 'Dashboard | Prodi',
            'user' => auth()->user()
        ]);
    }
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'akreditasi' => 'required|string|in:A,B,C,D,E',
            'fakultas_id' => 'required|exists:fakultas,id'
        ]);

        Prodi::create([
            'nama' => $request->nama,
            'akreditasi' => $request->akreditasi,
            'fakultas_id' => $request->fakultas_id,
        ]);

        return redirect()->back()->with('success', 'Prodi berhasil ditambahkan.');
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'akreditasi' => 'required|string|in:A,B,C,D,E',
            'fakultas_id' => 'required|exists:fakultas,id'
        ]);

        $prodi = Prodi::find($id);

        $prodi->update([
            'nama' => $request->nama,
            'akreditasi' => $request->akreditasi,
            'fakultas_id' => $request->fakultas_id,
        ]);
    
        return redirect()->back()->with('success', 'Prodi berhasil diperbarui.');
    }
    public function destroy($id)
    {
        $prodi = Prodi::find($id);

        $prodi->delete();

        return redirect()->back()->with('success', 'Prodi berhasil dihapus.');
    }
}
