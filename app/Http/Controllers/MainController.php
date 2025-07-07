<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Fakultas;
use App\Models\Prodi;
use App\Models\Pendaftar;
use App\Models\Pengunjung;

class MainController extends Controller
{
    public function index(Request $request){
        $ip = $request->ip();
        $today = now()->format('Y-m-d');

        $exists = Pengunjung::where('ip_address', $ip)
                        ->whereDate('visited_at', $today)
                        ->exists();

        if (!$exists) {
            Pengunjung::create(['ip_address' => $ip]);
        }

        return view('index',[
            'judul' => 'SALUT DOKTORTJ',
            'fakultas' => Fakultas::with('prodi')->get(),
            'prodi_count' => Prodi::count(),
            'mahasiswa_count' => Pendaftar::count(),
            'fakultas_count' => Fakultas::count(),
            'pengunjung' => Pengunjung::count(),
        ]);
    }
    public function formPage(){
        return view('form-pendaftaran');
    }
}
