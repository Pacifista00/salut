@extends('layouts.main')
@section('content')
    <section class="pt-5 form-page" style="background: linear-gradient(135deg, #f2f2f2, #e0e0ff);">
        <div class="container py-5">
            <div class="card p-4 mt-lg-5 shadow-lg border-0 rounded-4" data-aos="fade-down">
                <div class="card-body">
                    <h1 class="heading-form mb-4 text-center fw-bold">Formulir Pendaftaran</h1>
                    <form action="{{ route('daftar') }}" method="POST">
                        @csrf
                        <div class="row g-3">
                            <div class="col-md-6">
                                <label class="form-label">Jenjang Pendidikan</label>
                                <div class="input-group">
                                    <span class="input-group-text rounded-start-pill bg-white border-end-0">
                                        <i class="fa fa-graduation-cap"></i>
                                    </span>
                                    <select class="form-select rounded-end-pill border-start-0" name="jenjang_pendidikan"
                                        required>
                                        <option disabled {{ old('jenjang_pendidikan') ? '' : 'selected' }}>Pilih jenjang...
                                        </option>
                                        <option {{ old('jenjang_pendidikan') == 'Diploma dan Sarjana' ? 'selected' : '' }}>
                                            Diploma dan Sarjana</option>
                                        <option {{ old('jenjang_pendidikan') == 'Magister' ? 'selected' : '' }}>Magister
                                        </option>
                                        <option {{ old('jenjang_pendidikan') == 'Doktoral' ? 'selected' : '' }}>Doktoral
                                        </option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <label class="form-label">Nama Lengkap</label>
                                <div class="input-group">
                                    <span class="input-group-text rounded-start-pill bg-white border-end-0">
                                        <i class="fa fa-user"></i>
                                    </span>
                                    <input type="text" class="form-control rounded-end-pill border-start-0"
                                        name="nama_lengkap" value="{{ old('nama_lengkap') }}" required>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <label class="form-label">Tempat Lahir</label>
                                <div class="input-group">
                                    <span class="input-group-text rounded-start-pill bg-white border-end-0">
                                        <i class="fa fa-map-marker-alt"></i>
                                    </span>
                                    <input type="text" class="form-control rounded-end-pill border-start-0"
                                        name="tempat_lahir" value="{{ old('tempat_lahir') }}" required>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <label class="form-label">Tanggal Lahir</label>
                                <div class="input-group">
                                    <span class="input-group-text rounded-start-pill bg-white border-end-0">
                                        <i class="fa fa-calendar-alt"></i>
                                    </span>
                                    <input type="date" class="form-control rounded-end-pill border-start-0"
                                        name="tanggal_lahir" value="{{ old('tanggal_lahir') }}" required>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <label class="form-label">Nama Ibu Kandung</label>
                                <div class="input-group">
                                    <span class="input-group-text rounded-start-pill bg-white border-end-0">
                                        <i class="fa fa-female"></i>
                                    </span>
                                    <input type="text" class="form-control rounded-end-pill border-start-0"
                                        name="nama_ibu_kandung" value="{{ old('nama_ibu_kandung') }}" required>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <label class="form-label">NIK</label>
                                <div class="input-group">
                                    <span class="input-group-text rounded-start-pill bg-white border-end-0">
                                        <i class="fa fa-id-card"></i>
                                    </span>
                                    <input type="text" class="form-control rounded-end-pill border-start-0"
                                        name="nik" value="{{ old('nik') }}" required>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <label class="form-label">Jalur Program</label>
                                <div class="input-group">
                                    <span class="input-group-text rounded-start-pill bg-white border-end-0">
                                        <i class="fa fa-route"></i>
                                    </span>
                                    <select class="form-select rounded-end-pill border-start-0" name="jalur_program"
                                        required>
                                        <option disabled {{ old('jalur_program') ? '' : 'selected' }}>Pilih jalur...
                                        </option>
                                        <option {{ old('jalur_program') == 'RPL' ? 'selected' : '' }}>RPL</option>
                                        <option {{ old('jalur_program') == 'Non-RPL' ? 'selected' : '' }}>Non-RPL</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <label class="form-label">Jenjang di Universitas</label>
                                <div class="input-group">
                                    <span class="input-group-text rounded-start-pill bg-white border-end-0">
                                        <i class="fa fa-university"></i>
                                    </span>
                                    <select class="form-select rounded-end-pill border-start-0" name="jenjang_universitas"
                                        required>
                                        <option disabled {{ old('jenjang_universitas') ? '' : 'selected' }}>Pilih
                                            jenjang...</option>
                                        <option {{ old('jenjang_universitas') == 'D3' ? 'selected' : '' }}>D3</option>
                                        <option {{ old('jenjang_universitas') == 'D4' ? 'selected' : '' }}>D4</option>
                                        <option {{ old('jenjang_universitas') == 'S1' ? 'selected' : '' }}>S1</option>
                                        <option {{ old('jenjang_universitas') == 'S2' ? 'selected' : '' }}>S2</option>
                                        <option {{ old('jenjang_universitas') == 'S3' ? 'selected' : '' }}>S3</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <label class="form-label">Program Studi</label>
                                <div class="input-group">
                                    <span class="input-group-text rounded-start-pill bg-white border-end-0">
                                        <i class="fa fa-book"></i>
                                    </span>
                                    <input type="text" class="form-control rounded-end-pill border-start-0"
                                        name="program_studi" value="{{ old('program_studi') }}" required>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <label class="form-label">Kantor Cabang UT</label>
                                <div class="input-group">
                                    <span class="input-group-text rounded-start-pill bg-white border-end-0">
                                        <i class="fa fa-building"></i>
                                    </span>
                                    <input type="text"
                                        class="form-control rounded-end-pill bg-body-secondary text-secondary border-start-0"
                                        value="{{ old('kantor_cabang', 'Purwokerto') }}" name="kantor_cabang" readonly>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <label class="form-label">Nomor HP/WA</label>
                                <div class="input-group">
                                    <span class="input-group-text rounded-start-pill bg-white border-end-0">
                                        <i class="fa fa-phone"></i>
                                    </span>
                                    <input type="tel" class="form-control rounded-end-pill border-start-0"
                                        name="nomor_hp" value="{{ old('nomor_hp') }}" required>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <label class="form-label">Email</label>
                                <div class="input-group">
                                    <span class="input-group-text rounded-start-pill bg-white border-end-0">
                                        <i class="fa fa-envelope"></i>
                                    </span>
                                    <input type="email" class="form-control rounded-end-pill border-start-0"
                                        name="email" value="{{ old('email') }}" required>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <label class="form-label">Jenjang Pendidikan Terakhir</label>
                                <div class="input-group">
                                    <span class="input-group-text rounded-start-pill bg-white border-end-0">
                                        <i class="fa fa-graduation-cap"></i>
                                    </span>
                                    <select class="form-select rounded-end-pill border-start-0"
                                        name="jenjang_pendidikan_terakhir" required>
                                        <option disabled {{ old('jenjang_pendidikan_terakhir') ? '' : 'selected' }}>Pilih
                                            jenjang terakhir...</option>
                                        <option {{ old('jenjang_pendidikan_terakhir') == 'SMA/SMK' ? 'selected' : '' }}>
                                            SMA/SMK</option>
                                        <option {{ old('jenjang_pendidikan_terakhir') == 'D3' ? 'selected' : '' }}>D3
                                        </option>
                                        <option {{ old('jenjang_pendidikan_terakhir') == 'D4' ? 'selected' : '' }}>D4
                                        </option>
                                        <option {{ old('jenjang_pendidikan_terakhir') == 'S1' ? 'selected' : '' }}>S1
                                        </option>
                                        <option {{ old('jenjang_pendidikan_terakhir') == 'S2' ? 'selected' : '' }}>S2
                                        </option>
                                        <option {{ old('jenjang_pendidikan_terakhir') == 'S3' ? 'selected' : '' }}>S3
                                        </option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <label class="form-label">Asal Sekolah</label>
                                <div class="input-group">
                                    <span class="input-group-text rounded-start-pill bg-white border-end-0">
                                        <i class="fa fa-school"></i>
                                    </span>
                                    <input type="text" class="form-control rounded-end-pill border-start-0"
                                        name="asal_sekolah" value="{{ old('asal_sekolah') }}" required>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <label class="form-label">Nomor Ijazah Pendidikan Terakhir</label>
                                <div class="input-group">
                                    <span class="input-group-text rounded-start-pill bg-white border-end-0">
                                        <i class="fa fa-certificate"></i>
                                    </span>
                                    <input type="text" class="form-control rounded-end-pill border-start-0"
                                        name="nomor_ijazah" value="{{ old('nomor_ijazah') }}" required>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <label class="form-label">Tahun Ijazah</label>
                                <div class="input-group">
                                    <span class="input-group-text rounded-start-pill bg-white border-end-0">
                                        <i class="fa fa-calendar"></i>
                                    </span>
                                    <input type="number" class="form-control rounded-end-pill border-start-0"
                                        name="tahun_ijazah" value="{{ old('tahun_ijazah') }}" required>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <label class="form-label">NISN</label>
                                <div class="input-group">
                                    <span class="input-group-text rounded-start-pill bg-white border-end-0">
                                        <i class="fa fa-barcode"></i>
                                    </span>
                                    <input type="text" class="form-control rounded-end-pill border-start-0"
                                        name="nisn" value="{{ old('nisn') }}" required>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <label class="form-label">Jurusan Asal</label>
                                <div class="input-group">
                                    <span class="input-group-text rounded-start-pill bg-white border-end-0">
                                        <i class="fa fa-layer-group"></i>
                                    </span>
                                    <input type="text" class="form-control rounded-end-pill border-start-0"
                                        name="jurusan_asal" value="{{ old('jurusan_asal') }}" required>
                                </div>
                            </div>
                        </div>
                        <div class="mt-4 text-center">
                            <button type="submit" class="btn my-btn px-5 py-2 rounded-pill">Kirim</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
