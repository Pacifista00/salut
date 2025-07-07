<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Fakultas;
use App\Models\Prodi;
use App\Models\Pendaftar;
use App\Models\Pengunjung;

class DashboardController extends Controller
{
    public function index(){
        return view("admin.dashboard", [
            'judul' => 'Dashboard | Home',
            'user' => auth()->user(),
            'prodi_count' => Prodi::count(),
            'pendaftar_count' => Pendaftar::count(),
            'fakultas_count' => Fakultas::count(),
            'pengunjung_count' => Pengunjung::count(),
        ]);
    }
}
