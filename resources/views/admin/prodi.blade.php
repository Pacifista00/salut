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
                                <h2 class="mb-0">Prodi</h2>
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
                <button class="btn btn-primary mb-2" data-bs-toggle="modal" data-bs-target="#modalTambahProdi">
                    <i class="ti ti-plus"></i> Tambah
                </button>
                <table id="tabelProdi" class="display" style="display: none;">
                    <thead>
                        <tr>
                            <th>Fakultas</th>
                            <th>Nama Prodi</th>
                            <th>Akreditasi</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($prodi as $prodiItem)
                            <tr>
                                <td>{{ $prodiItem->fakultas->nama_singkat }}</td>
                                <td>{{ $prodiItem->nama }}</td>
                                <td>{{ $prodiItem->akreditasi }}</td>
                                <td>
                                    <button class="btn btn-sm btn-warning" data-bs-toggle="modal"
                                        data-bs-target="#modalEditProdi{{ $prodiItem->id }}" data-id="{{ $prodiItem->id }}"
                                        data-nama="{{ $prodiItem->nama }}">
                                        <i class="ti ti-edit"></i> Edit
                                    </button>
                                    <button class="btn btn-sm btn-danger" data-bs-toggle="modal"
                                        data-bs-target="#modalHapusProdi{{ $prodiItem->id }}" data-id="{{ $prodiItem->id }}"
                                        data-nama="{{ $prodiItem->nama }}">
                                        <i class="ti ti-trash"></i> Hapus
                                    </button>
                                </td>
                            </tr>
                            <!-- Modal Edit Prodi -->
                            <div class="modal fade" id="modalEditProdi{{ $prodiItem->id }}" tabindex="-1"
                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <form action="{{ url('/dashboard/prodi/update/' . $prodiItem->id) }}"
                                            method="POST" class="w-100">
                                            @csrf
                                            @method('PUT')

                                            <div class="modal-header bg-primary px-4 py-3">
                                                <h5 class="modal-title text-light"
                                                    id="modalEditProdiLabel{{ $prodiItem->id }}">Edit Prodi</h5>
                                                <button type="button" class="btn-close btn-close-white fw-bold"
                                                    data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>

                                            <div class="modal-body px-4 py-3">
                                                <!-- Prodi -->
                                                <div class="mb-3">
                                                    <label for="fakultas{{ $prodiItem->id }}"
                                                        class="form-label fw-medium">Fakultas</label>
                                                    <select class="form-select rounded-pill"
                                                        id="fakultas{{ $prodiItem->id }}" name="fakultas_id" required>
                                                        <option value="" disabled hidden>Pilih Fakultas</option>
                                                        @foreach ($fakultas as $fakultasItem)
                                                            <option value="{{ $fakultasItem->id }}"
                                                                {{ $prodiItem->fakultas_id == $fakultasItem->id ? 'selected' : '' }}>
                                                                {{ $fakultasItem->nama_singkat }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                </div>

                                                <!-- Nama Prodi -->
                                                <div class="mb-3">
                                                    <label for="nama{{ $prodiItem->id }}" class="form-label fw-medium">Nama
                                                        Prodi</label>
                                                    <input type="text" class="form-control rounded-pill"
                                                        id="nama{{ $prodiItem->id }}" name="nama"
                                                        placeholder="Masukkan Nama Prodi" value="{{ $prodiItem->nama }}"
                                                        required>
                                                </div>

                                                <!-- Akreditasi -->
                                                <div class="mb-1">
                                                    <label for="akreditasi{{ $prodiItem->id }}"
                                                        class="form-label fw-medium">Akreditasi</label>
                                                    <select class="form-select rounded-pill"
                                                        id="akreditasi{{ $prodiItem->id }}" name="akreditasi" required>
                                                        <option value="" disabled hidden>Pilih Akreditasi</option>
                                                        @foreach (['A', 'B', 'C', 'D', 'E'] as $akreditasi)
                                                            <option value="{{ $akreditasi }}"
                                                                {{ $prodiItem->akreditasi == $akreditasi ? 'selected' : '' }}>
                                                                {{ $akreditasi }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="modal-footer">
                                                <button type="submit" class="btn btn-primary">
                                                    <i class="fas fa-save me-1"></i> Ubah
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="modal fade" id="modalHapusProdi{{ $prodiItem->id }}" tabindex="-1"
                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <form action="{{ url('/dashboard/prodi/destroy/' . $prodiItem->id) }}"
                                            method="POST" class="w-100">
                                            @csrf
                                            @method('DELETE')
                                            <div class="modal-header bg-primary px-4 py-3">
                                                <h5 class="modal-title text-light" id="exampleModalLabel">Hapus Prodi
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

    <!-- Modal Tambah Prodi -->
    <div class="modal fade" id="modalTambahProdi" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form action="{{ url('/dashboard/prodi/store') }}" method="POST" class="w-100">
                    @csrf
                    <div class="modal-header bg-primary px-4 py-3">
                        <h5 class="modal-title text-light" id="exampleModalLabel">Tambah Prodi</h5>
                        <button type="button" class="btn-close btn-close-white fw-bold" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <div class="modal-body px-4 py-3">
                        <div class="mb-3">
                            <label for="fakultas" class="form-label fw-medium">Fakultas</label>
                            <select class="form-select rounded-pill" id="fakultas" name="fakultas_id" required>
                                <option value="" disabled selected hidden>Pilih Fakultas</option>
                                @foreach ($fakultas as $fakultasItem)
                                    <option value="{{ $fakultasItem->id }}">{{ $fakultasItem->nama_singkat }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="nama" class="form-label fw-medium">Nama
                                Prodi</label>
                            <input type="text" class="form-control rounded-pill" id="nama" name="nama"
                                placeholder="Masukkan Nama Prodi" required>
                        </div>
                        <div class="mb-1">
                            <label for="akreditasi" class="form-label fw-medium">Akreditasi</label>
                            <select class="form-select rounded-pill" id="akreditasi" name="akreditasi" required>
                                <option value="" disabled selected hidden>Pilih Akreditasi</option>
                                <option value="A">A</option>
                                <option value="B">B</option>
                                <option value="C">C</option>
                                <option value="D">D</option>
                                <option value="E">E</option>
                            </select>
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
            new DataTable('#tabelProdi');
        });

        window.onload = function() {
            setTimeout(function() {
                $('#tabelProdi').fadeIn(); // Tampilkan tabel
                $('#loadingSpinner').fadeOut(); // Hilangkan loading
            });
        };
    </script>



    @include('admin.partials.footer')
@endsection
