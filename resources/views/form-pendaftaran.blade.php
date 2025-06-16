@extends('layouts.main')
@section('content')
    <section class="pt-5 form-page" style="background: linear-gradient(135deg, #f2f2f2, #e0e0ff);">
        <div class="container py-5">
            <div class="card p-4 mt-lg-5 shadow-lg border-0 rounded-4" data-aos="fade-down">
                <div class="card-body">
                    <h1 class="heading-form mb-4 text-center fw-bold">Formulir Pendaftaran</h1>
                    <form>
                        <div class="row g-3">

                            <div class="col-md-6">
                                <label class="form-label">Jenjang Pendidikan</label>
                                <div class="input-group">
                                    <span class="input-group-text rounded-start-pill bg-white border-end-0">
                                        <i class="fa fa-graduation-cap"></i>
                                    </span>
                                    <select class="form-select rounded-end-pill border-start-0" required>
                                        <option selected disabled>Pilih jenjang...</option>
                                        <option>Diploma dan Sarjana</option>
                                        <option>Magister</option>
                                        <option>Doktoral</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <label class="form-label">Nama Lengkap</label>
                                <div class="input-group">
                                    <span class="input-group-text rounded-start-pill bg-white border-end-0">
                                        <i class="fa fa-user"></i>
                                    </span>
                                    <input type="text" class="form-control rounded-end-pill border-start-0" required>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <label class="form-label">Tempat Lahir</label>
                                <div class="input-group">
                                    <span class="input-group-text rounded-start-pill bg-white border-end-0">
                                        <i class="fa fa-map-marker-alt"></i>
                                    </span>
                                    <input type="text" class="form-control rounded-end-pill border-start-0" required>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <label class="form-label">Tanggal Lahir</label>
                                <div class="input-group">
                                    <span class="input-group-text rounded-start-pill bg-white border-end-0">
                                        <i class="fa fa-calendar-alt"></i>
                                    </span>
                                    <input type="date" class="form-control rounded-end-pill border-start-0" required>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <label class="form-label">Nama Ibu Kandung</label>
                                <div class="input-group">
                                    <span class="input-group-text rounded-start-pill bg-white border-end-0">
                                        <i class="fa fa-female"></i>
                                    </span>
                                    <input type="text" class="form-control rounded-end-pill border-start-0" required>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <label class="form-label">NIK</label>
                                <div class="input-group">
                                    <span class="input-group-text rounded-start-pill bg-white border-end-0">
                                        <i class="fa fa-id-card"></i>
                                    </span>
                                    <input type="text" class="form-control rounded-end-pill border-start-0" required>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <label class="form-label">Jalur Program</label>
                                <div class="input-group">
                                    <span class="input-group-text rounded-start-pill bg-white border-end-0">
                                        <i class="fa fa-route"></i>
                                    </span>
                                    <select class="form-select rounded-end-pill border-start-0" required>
                                        <option selected disabled>Pilih jalur...</option>
                                        <option>RPL</option>
                                        <option>Non-RPL</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <label class="form-label">Jenjang di Universitas</label>
                                <div class="input-group">
                                    <span class="input-group-text rounded-start-pill bg-white border-end-0">
                                        <i class="fa fa-university"></i>
                                    </span>
                                    <select class="form-select rounded-end-pill border-start-0" required>
                                        <option selected disabled>Pilih jenjang...</option>
                                        <option>D3</option>
                                        <option>D4</option>
                                        <option>S1</option>
                                        <option>S2</option>
                                        <option>S3</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <label class="form-label">Program Studi</label>
                                <div class="input-group">
                                    <span class="input-group-text rounded-start-pill bg-white border-end-0">
                                        <i class="fa fa-book"></i>
                                    </span>
                                    <input type="text" class="form-control rounded-end-pill border-start-0" required>
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
                                        value="Purwokerto" readonly>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <label class="form-label">Nomor HP/WA</label>
                                <div class="input-group">
                                    <span class="input-group-text rounded-start-pill bg-white border-end-0">
                                        <i class="fa fa-phone"></i>
                                    </span>
                                    <input type="tel" class="form-control rounded-end-pill border-start-0" required>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <label class="form-label">Email</label>
                                <div class="input-group">
                                    <span class="input-group-text rounded-start-pill bg-white border-end-0">
                                        <i class="fa fa-envelope"></i>
                                    </span>
                                    <input type="email" class="form-control rounded-end-pill border-start-0" required>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <label class="form-label">Jenjang Pendidikan Terakhir</label>
                                <div class="input-group">
                                    <span class="input-group-text rounded-start-pill bg-white border-end-0">
                                        <i class="fa fa-graduation-cap"></i>
                                    </span>
                                    <select class="form-select rounded-end-pill border-start-0" required>
                                        <option selected disabled>Pilih jenjang terakhir...</option>
                                        <option>SMA/SMK</option>
                                        <option>D3</option>
                                        <option>D4</option>
                                        <option>S1</option>
                                        <option>S2</option>
                                        <option>S3</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <label class="form-label">Asal Sekolah</label>
                                <div class="input-group">
                                    <span class="input-group-text rounded-start-pill bg-white border-end-0">
                                        <i class="fa fa-school"></i>
                                    </span>
                                    <input type="text" class="form-control rounded-end-pill border-start-0" required>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <label class="form-label">Nomor Ijazah Pendidikan Terakhir</label>
                                <div class="input-group">
                                    <span class="input-group-text rounded-start-pill bg-white border-end-0">
                                        <i class="fa fa-certificate"></i>
                                    </span>
                                    <input type="text" class="form-control rounded-end-pill border-start-0" required>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <label class="form-label">Tahun Ijazah</label>
                                <div class="input-group">
                                    <span class="input-group-text rounded-start-pill bg-white border-end-0">
                                        <i class="fa fa-calendar"></i>
                                    </span>
                                    <input type="number" class="form-control rounded-end-pill border-start-0" required>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <label class="form-label">NISN</label>
                                <div class="input-group">
                                    <span class="input-group-text rounded-start-pill bg-white border-end-0">
                                        <i class="fa fa-barcode"></i>
                                    </span>
                                    <input type="text" class="form-control rounded-end-pill border-start-0" required>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <label class="form-label">Jurusan Asal</label>
                                <div class="input-group">
                                    <span class="input-group-text rounded-start-pill bg-white border-end-0">
                                        <i class="fa fa-layer-group"></i>
                                    </span>
                                    <input type="text" class="form-control rounded-end-pill border-start-0" required>
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
