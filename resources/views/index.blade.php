@extends('layouts.main')
@section('content')
    <section id="home" class="jumbotron pt-5">
        <div class="container px-4">
            <div class="row align-items-center">
                <div class="col-lg-6 d-flex flex-column justify-content-center text-dark pt-5" style="height: 100%;">
                    <div data-aos="fade-up">
                        <h1 class="text-center fw-bold text-lg-start pb-2 hero-title">
                            Selamat Datang di Sentra Layanan Universitas Terbuka Salut DOKTORTJ Tegal
                        </h1>
                        <p class="fs-5 text-center text-lg-start">
                            Daftar Kuliah sekarang di DOKTORTJ dan ikuti kursus Digital Transformation gratis
                        </p>
                    </div>
                    <div class="row pt-3" data-aos="fade-up">
                        <div class="col-lg-6 pb-2">
                            <a href="{{ route('form-pendaftaran') }}">
                                <button class="btn my-btn rounded-pill w-100 py-3 fs-4">DAFTAR<i
                                        class="ms-2 fa-solid fa-pen-clip"></i></button>
                            </a>
                        </div>
                        <div class="col-lg-6 pb-2">
                            <a href="https://doktortj.com/" target="__blank">
                                <button class="btn my-btn-yellow rounded-pill w-100 py-3 fs-4">DOKTORTJ<i
                                        class="ms-2 fa-solid fa-arrow-up-right-from-square"></i></button>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 text-center d-flex justify-content-center align-items-end pt-5 position-relative"
                    data-aos="fade-up">
                    <img src="{{ asset('img/Asset 2.png') }}" alt="" width="400px">
                </div>

            </div>
        </div>
    </section>
    <section class="py-2 my-bg-blue">
        <div class="marquee-container">
            <div class="marquee fs-4">
                Selamat datang di website resmi Sentra Layanan Universitas Terbuka DOKTORTJ Tegal! ✨ Dapatkan informasi
                terkini seputar layanan dan kegiatan kami.
            </div>
        </div>
    </section>
    <section id="tentang">
        <div class="container p-4 text-dark">
            <h1 class="text-center mb-3 mb-lg-4 text-dark sub-title pb-3 fw-semibold" data-aos="fade-up">PROFIL PERUSAHAAN
            </h1>
            <div class="row align-items-center align-items-lg-start" data-aos="fade-up">
                <div class="col-lg-6">
                    <div style="max-width: 100%; display: flex; justify-content: center;">
                        <iframe class="mb-3" width="560" height="315"
                            src="https://www.youtube.com/embed/vrZlsUbfRGU?si=maxAMGRcyKLrni2m" title="YouTube video player"
                            frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            referrerpolicy="strict-origin-when-cross-origin" allowfullscreen
                            style="
            border-radius: 12px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.2);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        "
                            onmouseover="this.style.transform='scale(1.03)'; this.style.boxShadow='0 15px 30px rgba(0, 0, 0, 0.3)'"
                            onmouseout="this.style.transform='scale(1)'; this.style.boxShadow='0 10px 25px rgba(0, 0, 0, 0.2)'"></iframe>
                    </div>

                </div>
                <div class="col-lg-6 mb-4 mb-md-0">
                    <p class="text-center text-lg-start">
                        DOKTORTJ adalah Sentra Layanan Universitas Terbuka (SALUT) resmi yang berlokasi di Tegal. Kami
                        hadir sebagai mitra terpercaya Universitas Terbuka dalam menyediakan akses pendidikan tinggi yang
                        fleksibel, berkualitas, dan terjangkau bagi seluruh lapisan masyarakat.
                        Selain itu, DOKTORTJ juga menyediakan fasilitas pendukung pembelajaran seperti ruang belajar,
                        koneksi internet, konsultasi dengan tutor, serta pelatihan soft skill dan digital yang relevan
                        dengan kebutuhan zaman.
                    </p>

                    <div class="d-flex gap-5 justify-content-center" data-aos="fade-up">
                        <div class="mb-2 text-center">
                            <h1 class="stat-number" data-target="20">{{ $prodi_count }}</h1>
                            <p>Prodi</p>
                        </div>
                        <div class="mb-2 text-center">
                            <h1 class="stat-number" data-target="20">{{ $mahasiswa_count }}</h1>
                            <p>Mahasiswa</p>
                        </div>
                        <div class="mb-2 text-center">
                            <h1 class="stat-number" data-target="4">{{ $fakultas_count }}</h1>
                            <p>Fakultas</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="fakultas" class="my-bg-blue">
        <div class="container text-dark p-4">
            <h1 class="text-center mb-3 mb-lg-4 text-light sub-title pb-3 fw-semibold" data-aos="fade-up">FAKULTAS</h1>
            <div class="row" data-aos="fade-up">
                @foreach ($fakultas as $fakultasItem)
                    <div class="col-lg-3 mb-2">
                        <div class="card rounded-5 py-2">
                            <div class="card-body text-center">
                                <div class="text-center">
                                    <img class="center mb-2" src="{{ asset('img/logoUT.png') }}" alt=""
                                        width="130px">
                                </div>
                                <h5 class="card-title">{{ $fakultasItem->nama_singkat }}</h5>
                                {{-- <p>Some quick example text to build on the card title and make up the bulk of
                                    the
                                    card’s content.</p> --}}
                                <button type="button" class="btn my-btn-yellow rounded-pill" data-bs-toggle="modal"
                                    data-bs-target="#modalProdi{{ $fakultasItem->id }}">
                                    Lihat Prodi<i class="ms-2 fa-solid fa-arrow-right"></i>
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Modal -->
                    <div class="modal fade" id="modalProdi{{ $fakultasItem->id }}" tabindex="-1"
                        aria-labelledby="modalProdiLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header my-bg-blue text-white">
                                    <h5 class="modal-title" id="modalProdiLabel">{{ $fakultasItem->nama_lengkap }}
                                    </h5>
                                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <ul class="list-group list-group-flush">
                                        @foreach ($fakultasItem->prodi as $prodiItem)
                                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                                {{ $prodiItem->nama }}
                                                <span
                                                    class="badge bg-success rounded-pill">{{ $prodiItem->akreditasi }}</span>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
                {{-- <div class="col-lg-3 mb-2">
                    <div class="card rounded-5 py-2">
                        <div class="card-body text-center">
                            <div class="text-center">
                                <img class="center mb-2" src="{{ asset('img/logoUT.png') }}" alt="" width="130px">
                            </div>
                            <h5 class="card-title">FEB</h5>
                            <p>Some quick example text to build on the card title and make up the bulk of
                                the
                                card’s content.</p>
                            <button type="button" class="btn my-btn-yellow rounded-pill" data-bs-toggle="modal"
                                data-bs-target="#modalProdi">
                                Lihat Prodi<i class="ms-2 fa-solid fa-arrow-right"></i>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 mb-2">
                    <div class="card rounded-5 py-2">
                        <div class="card-body text-center">
                            <div class="text-center">
                                <img class="center mb-2" src="{{ asset('img/logoUT.png') }}" alt=""
                                    width="130px">
                            </div>
                            <h5 class="card-title">FST</h5>
                            <p>Some quick example text to build on the card title and make up the bulk of
                                the
                                card’s content.</p>
                            <button type="button" class="btn my-btn-yellow rounded-pill" data-bs-toggle="modal"
                                data-bs-target="#modalProdi">
                                Lihat Prodi<i class="ms-2 fa-solid fa-arrow-right"></i>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 mb-2">
                    <div class="card rounded-5 py-2">
                        <div class="card-body text-center">
                            <div class="text-center">
                                <img class="center mb-2" src="{{ asset('img/logoUT.png') }}" alt=""
                                    width="130px">
                            </div>
                            <h5 class="card-title">FKIP</h5>
                            <p>Some quick example text to build on the card title and make up the bulk of
                                the
                                card’s content.</p>
                            <button type="button" class="btn my-btn-yellow rounded-pill" data-bs-toggle="modal"
                                data-bs-target="#modalProdi">
                                Lihat Prodi<i class="ms-2 fa-solid fa-arrow-right"></i>
                            </button>
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>
    </section>
    <section class="bg-light">
        <div class="container text-dark p-4">
            <div class="row">
                <div class="col-12 col-lg-5 text-center my-auto mb-3 mb-lg-0" data-aos="fade-up">
                    <img src="{{ asset('img/mhs.png') }}" alt="" width="270px">
                </div>
                <div class="col-12 col-lg-7" data-aos="fade-up">
                    <h1 class="mb-3 mb-lg-4 text-dark fw-semibold">Kenapa mendaftar kuliah di Universitas Terbuka?</h1>
                    <div class="row px-3">
                        <ul class="col-lg-6 list-group">
                            <li class="list-group-item border-0 bg-transparent text-dark py-1 px-0"><i
                                    class="fa-solid fa-circle-check me-1 my-text-blue"></i>Perguruan Tinggi Negeri |
                                PTN
                            </li>
                            <li class="list-group-item border-0 bg-transparent text-dark py-1 px-0"><i
                                    class="fa-solid fa-circle-check me-1 my-text-blue"></i>Berakreditasi A oleh BAN-PTN
                            </li>
                            <li class="list-group-item border-0 bg-transparent text-dark py-1 px-0"><i
                                    class="fa-solid fa-circle-check me-1 my-text-blue"></i>Berakreditasi Internasional.
                            </li>
                            <li class="list-group-item border-0 bg-transparent text-dark py-1 px-0"><i
                                    class="fa-solid fa-circle-check me-1 my-text-blue"></i>Kuliah Fleksibel dimana saja
                            </li>
                            <li class="list-group-item border-0 bg-transparent text-dark py-1 px-0"><i
                                    class="fa-solid fa-circle-check me-1 my-text-blue"></i>Tanpa Batasan Usia dan Tahun
                                Ijazah.</li>
                        </ul>
                        <ul class="col-lg-6 list-group">
                            <li class="list-group-item border-0 bg-transparent text-dark py-1 px-0"><i
                                    class="fa-solid fa-circle-check me-1 my-text-blue"></i>Tanpa Tes Masuk
                            </li>
                            <li class="list-group-item border-0 bg-transparent text-dark py-1 px-0"><i
                                    class="fa-solid fa-circle-check me-1 my-text-blue"></i>Biaya Murah Tanpa Uang
                                Gedung
                            </li>
                            <li class="list-group-item border-0 bg-transparent text-dark py-1 px-0"><i
                                    class="fa-solid fa-circle-check me-1 my-text-blue"></i>Kuliah Fleksibel bisa sambil
                                kerja
                            </li>
                            <li class="list-group-item border-0 bg-transparent text-dark py-1 px-0"><i
                                    class="fa-solid fa-circle-check me-1 my-text-blue"></i>Tanpa Skripsi dan Tanpa DO
                            </li>
                            <li class="list-group-item border-0 bg-transparent text-dark py-1 px-0"><i
                                    class="fa-solid fa-circle-check me-1 my-text-blue"></i>Menerima Alih Kredit | RPL
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="alur" class="my-bg-gray">
        <div class="container p-4">
            <h1 class="text-center mb-3 mb-lg-4 sub-title pb-3 fw-semibold" data-aos="fade-up">ALUR PENDAFTARAN</h1>
            <div class="row" data-aos="fade-up">
                <div class="col-lg-3 text-center">
                    <img src="{{ asset('img/alur1.png') }}" alt="" height="170px">
                    <h5 class="pt-2">Pilih Prodi</h5>
                    <p>Tentukan program studi sesuai minatmu.</p>
                </div>
                <div class="col-lg-3 text-center">
                    <img src="{{ asset('img/alur2.png') }}" alt="" height="170px">
                    <h5 class="pt-2">Isi Formulir</h5>
                    <p>Lengkapi data diri pada formulir online.</p>
                </div>
                <div class="col-lg-3 text-center">
                    <img src="{{ asset('img/alur3.png') }}" alt="" height="170px">
                    <h5 class="pt-2">Konfirmasi</h5>
                    <p>Datang ke kantor DOKTORTJ Digital Institute.</p>
                </div>
                <div class="col-lg-3 text-center">
                    <img src="{{ asset('img/alur4.png') }}" alt="" height="170px">
                    <h5 class="pt-2">Tunggu Email</h5>
                    <p>Info selanjutnya akan dikirim via email.</p>
                </div>

            </div>
        </div>
    </section>
    <section id="lokasi" class="bg-light">
        <div class="container p-4">
            <div class="row">
                <div class="col-lg-6 mb-4" data-aos="fade-up">
                    <div class="col">
                        <h1 class="mb-3 mb-lg-4 text-dark sub-title pb-3 fw-semibold">LOKASI KAMI</h1>
                    </div>
                    <div class="col">
                        <h5 class="mb-2">Alamat</h5>
                        <p class="mb-0">Jl. Rajawali 8 No D20, Kademangan, Kademangaran, Kec. Dukuhturi, Kabupaten Tegal,
                            Jawa Tengah 52193</p>
                    </div>
                    <div class="col mt-2">
                        <h5 class="mb-2">Kontak</h5>
                        <p class="mb-0">(+62) 856-0085-6097</p>
                    </div>
                    <div class="col mt-2">
                        <h5 class="mb-2">Email</h5>
                        <p class="mb-0">salutdoktortjtegal080623@gmail.com</p>
                    </div>
                </div>
                <div class="col-lg-6" data-aos="fade-up">
                    <div class="ratio ratio-16x9">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3961.0144471630874!2d109.15028847410615!3d-6.88887236740887!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6fb99821f712dd%3A0xb17c4c7f35ceb4e6!2sDoktorTJ%20%26%20Coding%20Cafe!5e0!3m2!1sid!2sid!4v1749890716271!5m2!1sid!2sid"
                            width="800" height="600" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <section class="my-bg-blue">
        <div class="container text-light p-4">
            <div class="container text-center">
                <h1 class="mb-1 mb-lg-2 fw-bold  text-uppercase" data-aos="fade-up"># Semua Bisa Kuliah di Kampus Negeri
                </h1>
                <h1 class="mb-3 mb-lg-4 fw-bold  text-uppercase" data-aos="fade-up">Jangan Takut Kuliah</h1>
                <h1 class="mb-3 mb-lg-4 fw-semibold" data-aos="fade-up">Masih bingung pilih kampus?</h1>
                <p class="fs-5 mb-3 mb-lg-4" data-aos="fade-up">Yuk, kuliah sambil kerja di Universitas Terbuka dan raih
                    cita-citamu bersama
                    Salut
                    DOKTORTJ
                    Tegal. chat
                    admin kami di WhatsApp untuk info lengkap!</p>
                <a href="https://wa.me/6285600856097" target="_blank"
                    class="btn my-btn-yellow fw-semibold fs-5 px-4 py-2 rounded-pill" data-aos="fade-up"><i
                        class="me-2 fa-brands fa-whatsapp fw-semibold"></i>Klik
                    disini!</a>
            </div>
        </div>
    </section>
    <section id="faq">
        <div class="container p-4 text-center">
            <h1 class="mb-3 sub-title pb-3 fw-semibold" data-aos="fade-up">FAQ</h1>
            <div class="accordion my-5" id="accordionExample" data-aos="fade-up">

                <!-- Item 1 -->
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingOne">
                        <button class="accordion-button collapsed fs-5 fw-medium" type="button"
                            data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false"
                            aria-controls="collapseOne">
                            Informasi Umum
                        </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <strong>DOKTORTJ</strong> adalah Sentra Layanan Universitas Terbuka (SALUT) resmi yang berlokasi
                            di Tegal. Kami hadir sebagai mitra terpercaya Universitas Terbuka dalam menyediakan akses
                            pendidikan tinggi yang fleksibel, berkualitas, dan terjangkau bagi seluruh lapisan masyarakat.
                        </div>
                    </div>
                </div>

                <!-- Item 2 -->
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingTwo">
                        <button class="accordion-button collapsed fs-5 fw-medium" type="button"
                            data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false"
                            aria-controls="collapseTwo">
                            Persyaratan Pendaftaran
                        </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <strong>Berkas Wajib Calon Mahasiswa:</strong>
                            <ul class="list-unstyled">
                                <li>Fotocopy Ijazah SLTA | Sederajat atau Paket C(legalisir stempel basah)</li>
                                <li>Fotocopy Surat Keterangan Lulus(SKL) SLTA Lulus Tahun 2025(legalisir stempel basah)</li>
                                <li>Scan KTP Asli</li>
                                <li>Pas Foto 4x3 dan 4x6 masing-masing 1 lembar</li>
                                <li>Materai 10.000, 1 lembar</li>
                                <li>Pengisian Formulir Pendaftaran di Kantor Salut DOKTORTJ Tegal</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Item 3 -->
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingThree">
                        <button class="accordion-button collapsed fs-5 fw-medium" type="button"
                            data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false"
                            aria-controls="collapseThree">
                            Berkas Tambahan
                        </button>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <strong>Berkas tambahan jalur RPL:</strong>
                            <ul class="list-unstyled">
                                <li>Fotocopy Ijazah dan Transkrip Nilai perguruan tinggi asal (legalisir stempel basah)</li>
                                <li>Surat keterangan pindah atau pengunduran diri <em>(khusus pindahan)</em></li>
                            </ul>

                            <strong>Berkas tambahan khusus FKIP:</strong>
                            <ul class="list-unstyled">
                                <li>Legalisir SK pengangkatan Guru dan SK mengajar asli minimal 1 tahun</li>
                                <li>Surat keterangan mampu membaca Al-Qur'an <em>(khusus Prodi Pendidikan Agama Islam /
                                        PAI)</em></li>
                            </ul>
                        </div>

                    </div>
                </div>

                <!-- Item 4 -->
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingFour">
                        <button class="accordion-button collapsed fs-5 fw-medium" type="button"
                            data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false"
                            aria-controls="collapseFour">
                            Fasilitas yang Tersedia
                        </button>
                    </h2>
                    <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            Dapatkan kursus Digital Transformation <strong>GRATIS</strong> ketika kamu mendaftar Universitas
                            Terbuka (UT)
                            melalui DoktorTJ untuk bekal karier di era modern!
                        </div>
                    </div>
                </div>

                <!-- Item 5 -->
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingFive">
                        <button class="accordion-button collapsed fs-5 fw-medium" type="button"
                            data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false"
                            aria-controls="collapseFive">
                            Kontak dan Bantuan
                        </button>
                    </h2>
                    <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <strong>Hubungi kami jika membutuhkan bantuan.</strong> Melalui nomor WhatsApp berikut :
                            085600856097
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
