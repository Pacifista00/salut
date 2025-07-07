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
                                <h2 class="mb-0">Pendaftar</h2>
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
                <div style="overflow-x: auto; width: 100%;">
                    <table id="tabelPendaftar" class="display" style="display: none;">
                        <thead>
                            <tr>
                                {{-- <th>Jenjang Pendidikan</th> --}}
                                <th>Nama Lengkap</th>
                                {{-- <th>Tempat Lahir</th>
                                <th>Tanggal Lahir</th>
                                <th>Nama Ibu Kandung</th>
                                <th>NIK</th> --}}
                                <th>Jalur Program</th>
                                <th>Jenjang Univeritas</th>
                                <th>Program Studi</th>
                                {{-- <th>Kantor Cabang</th> --}}
                                <th>No HP</th>
                                <th>Email</th>
                                {{-- <th>Pendidikan Terakhir</th>
                                <th>Asal Sekolah</th>
                                <th>No Ijazah</th>
                                <th>Tahun Ijazah</th>
                                <th>NISN</th>
                                <th>Jurusan Asal</th> --}}
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($pendaftar as $pendaftarItem)
                                <tr>
                                    {{-- <td>{{ $pendaftarItem->jenjang_pendidikan }}</td> --}}
                                    <td>{{ $pendaftarItem->nama_lengkap }}</td>
                                    {{-- <td>{{ $pendaftarItem->tempat_lahir }}</td>
                                    <td>{{ $pendaftarItem->tanggal_lahir }}</td>
                                    <td>{{ $pendaftarItem->nama_ibu_kandung }}</td>
                                    <td>{{ $pendaftarItem->nik }}</td> --}}
                                    <td>{{ $pendaftarItem->jalur_program }}</td>
                                    <td>{{ $pendaftarItem->jenjang_universitas }}</td>
                                    <td>{{ $pendaftarItem->program_studi }}</td>
                                    {{-- <td>{{ $pendaftarItem->kantor_cabang }}</td> --}}
                                    <td>{{ $pendaftarItem->no_hp }}</td>
                                    <td>{{ $pendaftarItem->email }}</td>
                                    {{-- <td>{{ $pendaftarItem->jenjang_pendidikan_terakhir }}</td>
                                    <td>{{ $pendaftarItem->asal_sekolah }}</td>
                                    <td>{{ $pendaftarItem->nomor_ijazah }}</td>
                                    <td>{{ $pendaftarItem->tahun_ijazah }}</td>
                                    <td>{{ $pendaftarItem->nisn }}</td>
                                    <td>{{ $pendaftarItem->jurusan_asal }}</td> --}}
                                    <td>
                                        <button class="btn btn-sm btn-warning" data-bs-toggle="modal"
                                            data-bs-target="#modalEditPendaftar{{ $pendaftarItem->id }}">
                                            <i class="ti ti-edit me-1"></i>Edit
                                        </button>
                                        <button class="btn btn-sm btn-danger" data-bs-toggle="modal"
                                            data-bs-target="#modalHapusPendaftar{{ $pendaftarItem->id }}">
                                            <i class="ti ti-trash me-1"></i>Hapus
                                        </button>
                                    </td>
                                </tr>

                                <!-- Modal Edit -->
                                <div class="modal fade" id="modalEditPendaftar{{ $pendaftarItem->id }}" tabindex="-1"
                                    aria-labelledby="modalEditLabel{{ $pendaftarItem->id }}" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <form action="{{ url('/dashboard/pendaftar/update/' . $pendaftarItem->id) }}"
                                                method="POST">
                                                @csrf
                                                @method('PUT')
                                                <div class="modal-header bg-primary text-white">
                                                    <h5 class="modal-title text-light"
                                                        id="modalEditLabel{{ $pendaftarItem->id }}">
                                                        Edit
                                                        Pendaftar</h5>
                                                    <button type="button" class="btn-close btn-close-white"
                                                        data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="mb-1">
                                                        <label for="jenjangPendidikan" class="form-label fw-medium">Jenjang
                                                            Pendidikan</label>
                                                        <select class="form-select rounded-pill" id="jenjangPendidikan"
                                                            name="jenjang_pendidikan" required>
                                                            <option value="" disabled hidden
                                                                {{ $pendaftarItem->jenjang_pendidikan == '' ? 'selected' : '' }}>
                                                                Pilih Jenjang Pendidikan
                                                            </option>
                                                            <option value="Diploma dan Sarjana"
                                                                {{ $pendaftarItem->jenjang_pendidikan == 'Diploma dan Sarjana' ? 'selected' : '' }}>
                                                                Diploma dan Sarjana
                                                            </option>
                                                            <option value="Magister"
                                                                {{ $pendaftarItem->jenjang_pendidikan == 'Magister' ? 'selected' : '' }}>
                                                                Magister
                                                            </option>
                                                            <option value="Doktoral"
                                                                {{ $pendaftarItem->jenjang_pendidikan == 'Doktoral' ? 'selected' : '' }}>
                                                                Doktoral
                                                            </option>
                                                        </select>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="namaLengkap" class="form-label">Nama Lengkap</label>
                                                        <input id="namaLengkap" type="text" name="nama_lengkap"
                                                            class="form-control rounded-pill"
                                                            value="{{ $pendaftarItem->nama_lengkap }}" required>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="tempatLahir" class="form-label">Tempat lahir</label>
                                                        <input id="tempatLahir" type="text" name="tempat_lahir"
                                                            class="form-control rounded-pill"
                                                            value="{{ $pendaftarItem->tempat_lahir }}" required>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="tanggalLahir" class="form-label">Tanggal Lahir</label>
                                                        <input id="tanggalLahir" type="date" name="tanggal_lahir"
                                                            class="form-control rounded-pill"
                                                            value="{{ $pendaftarItem->tanggal_lahir }}" required>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="namaIbuKandung" class="form-label">Nama Ibu
                                                            Kandung</label>
                                                        <input id="namaIbuKandung" type="text" name="nama_ibu_kandung"
                                                            class="form-control rounded-pill"
                                                            value="{{ $pendaftarItem->nama_ibu_kandung }}" required>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="nik" class="form-label">NIK</label>
                                                        <input id="nik" type="number" name="nik"
                                                            class="form-control rounded-pill"
                                                            value="{{ $pendaftarItem->nik }}" required>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="jalurProgram" class="form-label">Jalur Program</label>
                                                        <input id="jalurProgram" type="text" name="jalur_program"
                                                            class="form-control rounded-pill"
                                                            value="{{ $pendaftarItem->jalur_program }}" required>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="jenjangUniversitas" class="form-label">Jenjang
                                                            Universitas</label>
                                                        <input id="jenjangUniversitas" type="text"
                                                            name="jenjang_universitas" class="form-control rounded-pill"
                                                            value="{{ $pendaftarItem->jenjang_universitas }}" required>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="programStudi" class="form-label">Program Studi</label>
                                                        <input id="programStudi" type="text" name="program_studi"
                                                            class="form-control rounded-pill"
                                                            value="{{ $pendaftarItem->program_studi }}" required>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="kantorCabang" class="form-label">Kantor Cabang</label>
                                                        <input id="kantorCabang" type="text" name="kantor_cabang"
                                                            class="form-control rounded-pill"
                                                            value="{{ $pendaftarItem->kantor_cabang }}" required>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="nomorHp" class="form-label">Nomor HP</label>
                                                        <input id="nomorHp" type="text" name="nomor_hp"
                                                            class="form-control rounded-pill"
                                                            value="{{ $pendaftarItem->nomor_hp }}" required>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="email" class="form-label">email</label>
                                                        <input id="email" type="text" name="email"
                                                            class="form-control rounded-pill"
                                                            value="{{ $pendaftarItem->email }}" required>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="jenjangPendidikanTerakhir" class="form-label">jenjang
                                                            Pendidikan Terakhir</label>
                                                        <select class="form-select rounded-pill" id="jenjangPendidikan"
                                                            name="jenjang_pendidikan_terakhir" required>
                                                            <option value="" disabled hidden
                                                                {{ $pendaftarItem->jenjang_pendidikan_terakhir == '' ? 'selected' : '' }}>
                                                                Pilih Jenjang Pendidikan
                                                            </option>
                                                            <option value="SMK/SMA"
                                                                {{ $pendaftarItem->jenjang_pendidikan_terakhir == 'SMK/SMA' ? 'selected' : '' }}>
                                                                SMA/SMK
                                                            </option>
                                                            <option value="D3"
                                                                {{ $pendaftarItem->jenjang_pendidikan_terakhir == 'D3' ? 'selected' : '' }}>
                                                                D3
                                                            </option>
                                                            <option value="D4"
                                                                {{ $pendaftarItem->jenjang_pendidikan_terakhir == 'D4' ? 'selected' : '' }}>
                                                                D4
                                                            </option>
                                                            <option value="S1"
                                                                {{ $pendaftarItem->jenjang_pendidikan_terakhir == 'S1' ? 'selected' : '' }}>
                                                                S1
                                                            </option>
                                                            <option value="S2"
                                                                {{ $pendaftarItem->jenjang_pendidikan_terakhir == 'S2' ? 'selected' : '' }}>
                                                                S2
                                                            </option>
                                                            <option value="S3"
                                                                {{ $pendaftarItem->jenjang_pendidikan_terakhir == 'S3' ? 'selected' : '' }}>
                                                                S3
                                                            </option>
                                                        </select>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="asalSekolah" class="form-label">Asal Sekolah</label>
                                                        <input id="asalSekolah" type="text" name="asal_sekolah"
                                                            class="form-control rounded-pill"
                                                            value="{{ $pendaftarItem->asal_sekolah }}" required>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="nomorIjazah" class="form-label">Nomor Ijazah</label>
                                                        <input id="nomorIjazah" type="text" name="nomor_ijazah"
                                                            class="form-control rounded-pill"
                                                            value="{{ $pendaftarItem->nomor_ijazah }}" required>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="tahunIjazah" class="form-label">Tahun Ijazah</label>
                                                        <input id="tahunIjazah" type="number" name="tahun_ijazah"
                                                            class="form-control rounded-pill"
                                                            value="{{ $pendaftarItem->tahun_ijazah }}" required>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="nisn" class="form-label">NISN</label>
                                                        <input id="nisn" type="text" name="nisn"
                                                            class="form-control rounded-pill"
                                                            value="{{ $pendaftarItem->nisn }}" required>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="jurusanAsal" class="form-label">Jurusan Asal</label>
                                                        <input id="jurusanAsal" type="text" name="jurusan_asal"
                                                            class="form-control rounded-pill"
                                                            value="{{ $pendaftarItem->jurusan_asal }}" required>
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

                                <!-- Modal Hapus -->
                                <div class="modal fade" id="modalHapusPendaftar{{ $pendaftarItem->id }}" tabindex="-1"
                                    aria-labelledby="modalHapusLabel{{ $pendaftarItem->id }}" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <form action="{{ url('/dashboard/pendaftar/destroy/' . $pendaftarItem->id) }}"
                                                method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <div class="modal-header bg-danger text-white">
                                                    <h5 class="modal-title text-light"
                                                        id="modalHapusLabel{{ $pendaftarItem->id }}">
                                                        Konfirmasi Hapus</h5>
                                                    <button type="button" class="btn-close btn-close-white"
                                                        data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <p>Yakin ingin menghapus data
                                                        <strong>{{ $pendaftarItem->nama_lengkap }}</strong>?
                                                    </p>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-bs-dismiss="modal">
                                                        Batal
                                                    </button>
                                                    <button type="submit" class="btn btn-danger">
                                                        <i class="fas fa-trash me-1"></i> Hapus
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



            </div>
            <!-- [ Main Content ] end -->
        </div>
    </div>


    <!-- [ Main Content ] end -->
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="https://cdn.datatables.net/2.3.2/js/dataTables.js"></script>

    <script>
        $(document).ready(function() {
            // Inisialisasi DataTable
            new DataTable('#tabelPendaftar');
        });

        window.onload = function() {
            setTimeout(function() {
                $('#tabelPendaftar').fadeIn(); // Tampilkan tabel
                $('#loadingSpinner').fadeOut(); // Hilangkan loading
            });
        };
    </script>



    @include('admin.partials.footer')
@endsection
