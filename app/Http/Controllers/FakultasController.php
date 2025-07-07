<?php

namespace App\Http\Controllers;

use App\Models\Fakultas;
use Illuminate\Http\Request;

class FakultasController extends Controller
{
    public function index()
    {
        $fakultas = Fakultas::all();

        return view(
            'admin.fakultas',
            [
                'fakultas' => $fakultas,
                'judul' => 'Dashboard | Fakultas',
                'user' => auth()->user()
            ]
        );
    }
    public function store(Request $request)
    {
        $request->validate([
            'nama_singkat' => 'required|string|max:255',
            'nama_lengkap' => 'required|string|max:255',
        ]);

        Fakultas::create([
            'nama_singkat' => $request->nama_singkat,
            'nama_lengkap' => $request->nama_lengkap,
        ]);

        return redirect()->back()->with('success', 'Fakultas berhasil ditambahkan.');
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_singkat' => 'required|string|max:255',
            'nama_lengkap' => 'required|string|max:255',
        ]);

        $fakultas = Fakultas::find($id);

        $fakultas->update([
            'nama_singkat' => $request->nama_singkat,
            'nama_lengkap' => $request->nama_lengkap,
        ]);
    
        return redirect()->back()->with('success', 'Fakultas berhasil diubah.');
    }
    public function destroy($id)
    {
        $fakultas = Fakultas::find($id);

        $fakultas->delete();

        return redirect()->back()->with('success', 'Fakultas berhasil dihapus.');
    }
}
