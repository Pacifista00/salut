@extends('layouts.main')
@section('content')
    <section id="home" class="jumbotron pt-5">
        <div class="container px-4">
            <div class="row align-items-center">
                <div class="col-lg-6 d-flex flex-column justify-content-center text-dark pt-5" style="height: 100%;">
                    <div data-aos="fade-right">
                        <h1 class="text-center fw-bold text-lg-start pb-2 hero-title">
                            Selamat Datang di Sentra Layanan Universitas Terbuka Salut DOKTORTJ Tegal
                        </h1>
                        <p class="fs-5 text-center text-lg-start">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Et
                            similique distinctio.
                        </p>
                    </div>
                    <div class="row pt-3" data-aos="fade-up">
                        <div class="col-lg-6 pb-2">
                            <button class="btn my-btn rounded-pill w-100 py-3 fs-4">DAFTAR<i
                                    class="ms-2 fa-solid fa-pen-clip"></i></button>
                        </div>
                        <div class="col-lg-6 pb-2">
                            <button class="btn my-btn-yellow rounded-pill w-100 py-3 fs-4">DOKTORTJ<i
                                    class="ms-2 fa-solid fa-arrow-up-right-from-square"></i></button>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 text-center d-flex justify-content-center align-items-end pt-5 position-relative"
                    data-aos="fade-left">
                    <img src="{{ asset('assets/img/Asset 2.png') }}" alt="" width="400px">
                </div>

            </div>
        </div>
    </section>
    <section class="py-2 my-bg-blue">
        <div class="marquee-container">
            <div class="marquee fs-4">
                Selamat datang di website kami! ✨ Jangan lewatkan informasi terbaru setiap hari! Lorem ipsum dolor, sit amet
                consectetur adipisicing elit. Repellendus, dolor.
            </div>
        </div>
    </section>
    <section id="tentang">
        <div class="container p-4 text-dark">
            <h1 class="text-center mb-3 mb-lg-4 text-dark" data-aos="fade-up">Salut DOKTORTJ</h1>
            <p class="text-center" data-aos="fade-up">Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi,
                obcaecati
                doloribus
                distinctio atque
                tempora asperiores. Explicabo quo dolor, maxime quibusdam fugiat alias nemo sint sit minus libero a
                distinctio tempore voluptatibus, aut, qui eveniet nostrum sapiente adipisci! Harum commodi ea dicta
                consequatur soluta a reprehenderit est tempora non, corporis dignissimos illum totam deleniti at officia
                iusto fuga dolore. Nam reprehenderit cupiditate, ad itaque minus deserunt ipsum sint nihil, esse molestias
                eligendi mollitia saepe? Ipsa, ullam voluptatibus accusamus qui pariatur commodi.</p>
            <div class="d-flex mt-4 gap-5 justify-content-center" data-aos="fade-up">
                <div class="mb-2">
                    <div class="text-center">
                        <h1 class="stat-number" data-target="20">0</h1>
                        <p>Prodi</p>
                    </div>
                </div>
                <div class="mb-2">
                    <div class="text-center">
                        <h1 class="stat-number" data-target="20">0</h1>
                        <p>Mahasiswa</p>
                    </div>
                </div>
                <div class="mb-2">
                    <div class="text-center">
                        <h1 class="stat-number" data-target="4">0</h1>
                        <p>Fakultas</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="fakultas" class="my-bg-blue">
        <div class="container text-dark p-4">
            <h1 class="text-center mb-3 mb-lg-4 text-light" data-aos="fade-up">Fakultas</h1>
            <div class="row" data-aos="fade-up">
                <div class="col-lg-3 mb-2">
                    <div class="card rounded-5 py-2">
                        <div class="card-body text-center">
                            <div class="text-center">
                                <img class="center mb-2" src="{{ asset('/assets/img/logoUT.png') }}" alt=""
                                    width="130px">
                            </div>
                            <h5 class="card-title">FHISIP</h5>
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
                                <img class="center mb-2" src="{{ asset('/assets/img/logoUT.png') }}" alt=""
                                    width="130px">
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
                                <img class="center mb-2" src="{{ asset('/assets/img/logoUT.png') }}" alt=""
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
                                <img class="center mb-2" src="{{ asset('/assets/img/logoUT.png') }}" alt=""
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
                </div>
            </div>
        </div>
    </section>
    <section class="bg-light">
        <div class="container text-dark p-4">
            <div class="row">
                <div class="col-12 col-lg-5 text-center my-auto mb-3 mb-lg-0" data-aos="fade-right">
                    <img src="{{ asset('/assets/img/mhs.png') }}" alt="" width="270px">
                </div>
                <div class="col-12 col-lg-7" data-aos="fade-left">
                    <h1 class="mb-3 mb-lg-4 text-dark">Kenapa mendaftar di Salut DOKTORTJ Tegal</h1>
                    <div>
                        <ul class="list-group">
                            <li class="list-group-item border-0 bg-transparent text-dark py-1 px-0"><i
                                    class="fa-solid fa-circle-check me-1 my-text-blue"></i>Lorem ipsum dolor sit amet
                                consectetur
                                adipisicing elit. Numquam, quo.
                            </li>
                            <li class="list-group-item border-0 bg-transparent text-dark py-1 px-0"><i
                                    class="fa-solid fa-circle-check me-1 my-text-blue"></i>Lorem ipsum dolor sit amet
                                consectetur
                                adipisicing elit. Officia, aut!</li>
                            <li class="list-group-item border-0 bg-transparent text-dark py-1 px-0"><i
                                    class="fa-solid fa-circle-check me-1 my-text-blue"></i>Lorem ipsum dolor sit amet
                                consectetur
                                adipisicing elit. Doloribus, ipsam.</li>
                            <li class="list-group-item border-0 bg-transparent text-dark py-1 px-0"><i
                                    class="fa-solid fa-circle-check me-1 my-text-blue"></i>Lorem ipsum dolor sit amet
                                consectetur
                                adipisicing elit. Maiores, odit?</li>
                            <li class="list-group-item border-0 bg-transparent text-dark py-1 px-0"><i
                                    class="fa-solid fa-circle-check me-1 my-text-blue"></i>Lorem ipsum dolor sit amet
                                consectetur
                                adipisicing elit. Velit, voluptatibus.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="alur" class="my-bg-gray">
        <div class="container p-4">
            <h1 class="text-center mb-3 mb-lg-4" data-aos="fade-up">Alur Pendaftaran</h1>
            <div class="row" data-aos="fade-up">
                <div class="col lg-4 text-center">
                    <img src="{{ asset('assets/img/alur1.png') }}" alt="" height="170px">
                    <h5 class="pt-2">Pilih Prodi</h5>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing.</p>
                </div>
                <div class="col lg-4 text-center">
                    <img src="{{ asset('assets/img/alur2.png') }}" alt="" height="170px">
                    <h5 class="pt-2">Isi Formulir</h5>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing.</p>
                </div>
                <div class="col lg-4 text-center">
                    <img src="{{ asset('assets/img/alur3.png') }}" alt="" height="170px">
                    <h5 class="pt-2">Konfirmasi</h5>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing.</p>
                </div>
                <div class="col lg-4 text-center">
                    <img src="{{ asset('assets/img/alur4.png') }}" alt="" height="170px">
                    <h5 class="pt-2">Tunggu Email</h5>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing.</p>
                </div>
            </div>
        </div>
    </section>
    <section id="lokasi" class="bg-light">
        <div class="container p-4">
            <div class="row">
                <div class="col-lg-6 mb-4" data-aos="fade-right">
                    <div class="col">
                        <h1 class="mb-3 mb-lg-4 text-dark">Lokasi Kami</h1>
                    </div>
                    <div class="col">
                        <h5 class="mb-2">Alamat</h5>
                        <p class="mb-0">Jl. Rajawali 8 No D20, Kademangan, Kademangaran, Kec. Dukuhturi, Kabupaten Tegal,
                            Jawa Tengah 52193</p>
                    </div>
                    <div class="col mt-2">
                        <h5 class="mb-2">Kontak</h5>
                        <p class="mb-0">(+62) 888-8888-8888</p>
                    </div>
                    <div class="col mt-2">
                        <h5 class="mb-2">Email</h5>
                        <p class="mb-0">example@mail.com</p>
                    </div>
                </div>
                <div class="col-lg-6" data-aos="fade-left">
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
                <h1 class="mb-3 mb-lg-4" data-aos="fade-up">Masih bingung pilih kampus?</h1>
                <p class="fs-5 mb-3 mb-lg-4" data-aos="fade-up">Yuk, kuliah sambil kerja di Universitas Terbuka dan raih
                    cita-citamu bersama
                    Salut
                    DOKTORTJ
                    Tegal. chat
                    admin kami di WhatsApp untuk info lengkap!</p>
                <a href="#" class="btn my-btn-yellow fw-semibold fs-5 px-4 py-2 rounded-pill" data-aos="fade-up"><i
                        class="me-2 fa-brands fa-whatsapp fw-semibold"></i>Klik
                    disini!</a>
            </div>
        </div>
    </section>
    <section id="faq">
        <div class="container p-4 text-center">
            <h1 class="mb-3" data-aos="fade-up">FAQ</h1>
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
                            <strong>Ini adalah bagian pertama dari accordion.</strong> Anda bisa meletakkan informasi
                            penting di sini.
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
                            <strong>Berisi syarat-syarat yang harus dipenuhi calon pendaftar.</strong> Bisa berupa dokumen
                            atau kriteria tertentu.
                        </div>
                    </div>
                </div>

                <!-- Item 3 -->
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingThree">
                        <button class="accordion-button collapsed fs-5 fw-medium" type="button"
                            data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false"
                            aria-controls="collapseThree">
                            Jadwal Kegiatan
                        </button>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <strong>Informasi seputar tanggal dan waktu kegiatan.</strong> Cocok untuk agenda seminar,
                            pelatihan, dsb.
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
                            <strong>Berisi informasi tentang fasilitas.</strong> Seperti ruang kelas, Wi-Fi, kantin, parkir,
                            dll.
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
                            <strong>Hubungi kami jika membutuhkan bantuan.</strong> Sertakan email, nomor telepon, atau link
                            WhatsApp.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
