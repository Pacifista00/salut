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
            ['fakultas' => $fakultas]
        );
    }
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255|unique:fakultas,nama',
        ]);

        Fakultas::create([
            'nama' => $request->nama,
        ]);

        return redirect()->back()->with('success', 'Fakultas berhasil ditambahkan.');
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required|string|max:255|unique:fakultas,nama',
        ]);

        $fakultas = Fakultas::find($id);

        $fakultas->update([
            'nama' => $request->nama,
        ]);

        return redirect()->back()->with('success', 'Fakultas berhasil ditambahkan.');
    }
    public function destroy($id)
    {
        $fakultas = Fakultas::find($id);

        $fakultas->delete();

        return redirect()->back()->with('success', 'Fakultas berhasil ditambahkan.');
    }
}
