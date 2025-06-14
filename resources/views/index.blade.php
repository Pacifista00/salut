@extends('layouts.main')
@section('content')
    <section class="jumbotron pt-5">
        <div class="container">
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
    <section class="py-3 py-lg-5">
        <div class="container text-dark" data-aos="fade-up">
            <h1 class="text-center mb-3 mb-lg-4 my-text-blue">Salut DOKTORTJ</h1>
            <p class="text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi, obcaecati
                doloribus
                distinctio atque
                tempora asperiores. Explicabo quo dolor, maxime quibusdam fugiat alias nemo sint sit minus libero a
                distinctio tempore voluptatibus, aut, qui eveniet nostrum sapiente adipisci! Harum commodi ea dicta
                consequatur soluta a reprehenderit est tempora non, corporis dignissimos illum totam deleniti at officia
                iusto fuga dolore. Nam reprehenderit cupiditate, ad itaque minus deserunt ipsum sint nihil, esse molestias
                eligendi mollitia saepe? Ipsa, ullam voluptatibus accusamus qui pariatur commodi.</p>
            <div class="d-flex mt-4 gap-5 justify-content-center">
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
    <section class="py-3 py-lg-5 my-bg-gray" data-aos="fade-up">
        <div class="container text-dark">
            <h1 class="text-center mb-3 mb-lg-4 my-text-blue">Fakultas</h1>
            <div class="row">
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
                            <a href="#" class="btn my-btn rounded-pill">Go somewhere<i
                                    class="ms-2 fa-solid fa-arrow-right"></i></a>
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
                            <a href="#" class="btn my-btn rounded-pill">Go somewhere<i
                                    class="ms-2 fa-solid fa-arrow-right"></i></a>
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
                            <a href="#" class="btn my-btn rounded-pill">Go somewhere<i
                                    class="ms-2 fa-solid fa-arrow-right"></i></a>
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
                            <a href="#" class="btn my-btn rounded-pill">Go somewhere<i
                                    class="ms-2 fa-solid fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="bg-light py-lg-5">
        <div class="container text-dark">
            <div class="row">
                <div class="col-12 col-lg-5 text-center my-auto" data-aos="fade-right">
                    <img src="{{ asset('/assets/img/mhs.png') }}" alt="" width="270px">
                </div>
                <div class="col-12 col-lg-7" data-aos="fade-left">
                    <h1 class="mb-3 mb-lg-4 my-text-blue">Kenapa mendaftar di Salut DOKTORTJ Tegal</h1>
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
    <section class="my-bg-gray py-lg-5">
        <div class="container">
            <h1 class="text-center mb-3 mb-lg-4">Alur Pendaftaran</h1>
            <div class="row">
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
    <section class="my-bg-yellow py-lg-5">
        <div class="container">
            <div class="container text-center">
                <h1 class="mb-3 mb-lg-4">Masih bingung pilih kampus?</h1>
                <h4 class="mb-3 mb-lg-4">Yuk, kuliah sambil kerja di Universitas Terbuka dan raih cita-citamu bersama Salut
                    DOKTORTJ
                    Tegal. chat
                    admin kami di WhatsApp untuk info lengkap!</h4>
                <button class="btn btn-dark fs-4 px-4 py-2 rounded-pill"><i class="me-2 fa-brands fa-whatsapp"></i>Klik
                    disini!</button>
            </div>
        </div>
    </section>
    <section class="py-lg-5">
        <div class="container text-center">
            <h1 class="mb-3 mb-lg-4">FAQ</h1>
            <div class="accordion" id="accordionExample">
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            Accordion Item #2
                        </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <strong>This is the second item’s accordion body.</strong> It is hidden by default, until the
                            collapse plugin adds the appropriate classes that we use to style each element. These classes
                            control the overall appearance, as well as the showing and hiding via CSS transitions. You can
                            modify any of this with custom CSS or overriding our default variables. It’s also worth noting
                            that just about any HTML can go within the <code>.accordion-body</code>, though the transition
                            does limit overflow.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            Accordion Item #3
                        </button>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <strong>This is the third item’s accordion body.</strong> It is hidden by default, until the
                            collapse plugin adds the appropriate classes that we use to style each element. These classes
                            control the overall appearance, as well as the showing and hiding via CSS transitions. You can
                            modify any of this with custom CSS or overriding our default variables. It’s also worth noting
                            that just about any HTML can go within the <code>.accordion-body</code>, though the transition
                            does limit overflow.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseTwo">
                            Accordion Item #2
                        </button>
                    </h2>
                    <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <strong>This is the second item’s accordion body.</strong> It is hidden by default, until the
                            collapse plugin adds the appropriate classes that we use to style each element. These classes
                            control the overall appearance, as well as the showing and hiding via CSS transitions. You can
                            modify any of this with custom CSS or overriding our default variables. It’s also worth noting
                            that just about any HTML can go within the <code>.accordion-body</code>, though the transition
                            does limit overflow.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseTwo">
                            Accordion Item #2
                        </button>
                    </h2>
                    <div id="collapseFive" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <strong>This is the second item’s accordion body.</strong> It is hidden by default, until the
                            collapse plugin adds the appropriate classes that we use to style each element. These classes
                            control the overall appearance, as well as the showing and hiding via CSS transitions. You can
                            modify any of this with custom CSS or overriding our default variables. It’s also worth noting
                            that just about any HTML can go within the <code>.accordion-body</code>, though the transition
                            does limit overflow.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseTwo">
                            Accordion Item #2
                        </button>
                    </h2>
                    <div id="collapseSix" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <strong>This is the second item’s accordion body.</strong> It is hidden by default, until the
                            collapse plugin adds the appropriate classes that we use to style each element. These classes
                            control the overall appearance, as well as the showing and hiding via CSS transitions. You can
                            modify any of this with custom CSS or overriding our default variables. It’s also worth noting
                            that just about any HTML can go within the <code>.accordion-body</code>, though the transition
                            does limit overflow.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
