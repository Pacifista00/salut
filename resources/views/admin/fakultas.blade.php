@extends('admin.layouts.main')
@section('dashboard-content')
    @include('admin.partials.sidebar')
    <!-- [ Sidebar Menu ] end --> <!-- [ Header Topbar ] start -->
    <header class="pc-header">
        <div class="header-wrapper"> <!-- [Mobile Media Block] start -->
            <div class="me-auto pc-mob-drp">
                <ul class="list-unstyled">
                    <!-- ======= Menu collapse Icon ===== -->
                    <li class="pc-h-item pc-sidebar-collapse">
                        <a href="#" class="pc-head-link ms-0" id="sidebar-hide">
                            <i class="ti ti-menu-2"></i>
                        </a>
                    </li>
                    <li class="pc-h-item pc-sidebar-popup">
                        <a href="#" class="pc-head-link ms-0" id="mobile-collapse">
                            <i class="ti ti-menu-2"></i>
                        </a>
                    </li>
                </ul>
            </div>
            <!-- [Mobile Media Block end] -->
            <div class="ms-auto my-auto">
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="btn btn-primary">
                        <svg class="pc-icon me-2">
                            <use xlink:href="#custom-logout-1-outline"></use>
                        </svg>Logout
                    </button>
                </form>
            </div>
        </div>
    </header>
    <!-- [ Header ] end -->



    <!-- [ Main Content ] start -->
    <div class="pc-container">
        <div class="pc-content">
            <!-- [ breadcrumb ] start -->
            <div class="page-header">
                <div class="page-block">
                    <div class="row align-items-center">
                        {{-- <div class="col-md-12">
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="../dashboard/index.html">Home</a></li>
                                <li class="breadcrumb-item"><a href="javascript: void(0)">Dashboard</a></li>
                                <li class="breadcrumb-item" aria-current="page">Home</li>
                            </ul>
                        </div> --}}
                        <div class="col-md-12">
                            <div class="page-header-title">
                                <h2 class="mb-0">Fakultas</h2>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <!-- [ breadcrumb ] end -->
            <!-- [ Main Content ] start -->
            <div class="container">
                <div id="loadingSpinner"
                    style="position: fixed; top: 0; left: 0; width: 100%; height: 100%; background: rgba(255,255,255,0.8); z-index: 9999; display: flex; justify-content: center; align-items: center;">
                    <div class="spinner-border text-primary" role="status">
                        <span class="visually-hidden">Loading...</span>
                    </div>
                </div>
                <button class="btn btn-primary mb-2" data-bs-toggle="modal" data-bs-target="#modalTambahFakultas">
                    <i class="ti ti-plus"></i> Tambah
                </button>
                <table id="tabelFakultas" class="display" style="display: none;">
                    <thead>
                        <tr>
                            <th>Nama singkat</th>
                            <th>Nama lengkap</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($fakultas as $fakultasItem)
                            <tr>
                                <td>{{ $fakultasItem->nama_singkat }}</td>
                                <td>{{ $fakultasItem->nama_lengkap }}</td>
                                <td>
                                    <button class="btn btn-sm btn-warning" data-bs-toggle="modal"
                                        data-bs-target="#modalEditFakultas{{ $fakultasItem->id }}"
                                        data-id="{{ $fakultasItem->id }}" data-nama="{{ $fakultasItem->nama }}">
                                        <i class="ti ti-edit"></i> Edit
                                    </button>
                                    <button class="btn btn-sm btn-danger" data-bs-toggle="modal"
                                        data-bs-target="#modalHapusFakultas{{ $fakultasItem->id }}"
                                        data-id="{{ $fakultasItem->id }}" data-nama="{{ $fakultasItem->nama }}">
                                        <i class="ti ti-trash"></i> Hapus
                                    </button>
                                </td>
                            </tr>
                            <!-- Modal Edit Fakultas -->
                            <div class="modal fade" id="modalEditFakultas{{ $fakultasItem->id }}" tabindex="-1"
                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <form action="{{ url('/dashboard/fakultas/update/' . $fakultasItem->id) }}"
                                            method="POST" class="w-100">
                                            @csrf
                                            @method('PUT')
                                            <div class="modal-header bg-primary px-4 py-3">
                                                <h5 class="modal-title text-light" id="exampleModalLabel">Ubah Fakultas</h5>
                                                <button type="button" class="btn-close btn-close-white"
                                                    data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body px-4 py-3">
                                                <div class="mb-3">
                                                    <label for="namaSingkat" class="form-label fw-medium">Nama
                                                        Fakultas Singkat</label>
                                                    <input type="text" class="form-control rounded-pill" id="namaSingkat"
                                                        name="nama_singkat" value="{{ $fakultasItem->nama_singkat }}"
                                                        required>
                                                </div>
                                                <div class="mb-1">
                                                    <label for="namaLengkap" class="form-label fw-medium">Nama Fakultas
                                                        Lengkap
                                                    </label>
                                                    <input type="text" class="form-control rounded-pill" id="namaLengkap"
                                                        name="nama_lengkap" value="{{ $fakultasItem->nama_lengkap }}"
                                                        required>
                                                </div>

                                            </div>
                                            <div class="modal-footer">
                                                {{-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                                                    <i class="fas fa-times me-1"></i> Close
                                                </button> --}}
                                                <button type="submit" class="btn btn-primary">
                                                    <i class="fas fa-save me-1"></i> Ubah
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="modal fade" id="modalHapusFakultas{{ $fakultasItem->id }}" tabindex="-1"
                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <form action="{{ url('/dashboard/fakultas/destroy/' . $fakultasItem->id) }}"
                                            method="POST" class="w-100">
                                            @csrf
                                            @method('DELETE')
                                            <div class="modal-header bg-primary px-4 py-3">
                                                <h5 class="modal-title text-light" id="exampleModalLabel">Hapus Fakultas
                                                </h5>
                                                <button type="button" class="btn-close btn-close-white"
                                                    data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body px-4 py-3">
                                                <p>Yakin ingin menghapus data ini?</p>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                                                    <i class="fas fa-times me-1"></i> Batal
                                                </button>
                                                <button type="submit" class="btn btn-danger">
                                                    <i class="fas fa-save me-1"></i> Hapus
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </tbody>
                </table>

            </div>
            <!-- [ Main Content ] end -->
        </div>
    </div>

    <!-- Modal Tambah Fakultas -->
    <div class="modal fade" id="modalTambahFakultas" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form action="{{ url('/dashboard/fakultas/store') }}" method="POST" class="w-100">
                    @csrf
                    <div class="modal-header bg-primary px-4 py-3">
                        <h5 class="modal-title text-light" id="exampleModalLabel">Tambah Fakultas</h5>
                        <button type="button" class="btn-close btn-close-white fw-bold" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <div class="modal-body px-4 py-3">
                        <div class="mb-3">
                            <label for="namaSingkat" class="form-label fw-medium">Nama
                                Fakultas Singkat</label>
                            <input type="text" class="form-control rounded-pill" id="namaSingkat" name="nama_singkat"
                                placeholder="Masukkan Nama Fakultas Singkat" required>
                        </div>
                        <div class="mb-1">
                            <label for="namaLengkap" class="form-label fw-medium">Nama
                                Fakultas Lengkap</label>
                            <input type="text" class="form-control rounded-pill" id="namaLengkap" name="nama_lengkap"
                                placeholder="Masukkan Nama Fakultas Lengkap" required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        {{-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                            <i class="fas fa-times me-1"></i> Close
                        </button> --}}
                        <button type="submit" class="btn btn-primary">
                            <i class="fas fa-save me-1"></i> Tambah
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>


    <!-- [ Main Content ] end -->
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="https://cdn.datatables.net/2.3.2/js/dataTables.js"></script>

    <script>
        $(document).ready(function() {
            // Inisialisasi DataTable
            new DataTable('#tabelFakultas');
        });

        window.onload = function() {
            setTimeout(function() {
                $('#tabelFakultas').fadeIn(); // Tampilkan tabel
                $('#loadingSpinner').fadeOut(); // Hilangkan loading
            });
        };
    </script>



    @include('admin.partials.footer')
@endsection
