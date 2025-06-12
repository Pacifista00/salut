@extends('layouts.main')
@section('content')
    <section class="jumbotron pt-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 d-flex flex-column justify-content-center text-dark pt-5" style="height: 100%;">
                <h1 class="text-center fw-bold text-lg-start pb-2 hero-title">
                    Selamat Datang di Sentra Layanan Universitas Terbuka Salut DOKTORTJ Tegal
                </h1>
                <p class="fs-5 text-center text-lg-start">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Et
                    similique distinctio.
                </p>
                <div class="row pt-3">
                    <div class="col-lg-6 pb-2">
                        <button class="btn my-btn rounded-pill w-100 py-3 fs-4">DAFTAR<i class="ms-2 fa-solid fa-pen-clip"></i></button>
                    </div>
                    <div class="col-lg-6 pb-2">
                        <button class="btn my-btn-transparent rounded-pill w-100 py-3 fs-4">DOKTORTJ<i class="ms-2 fa-solid fa-arrow-up-right-from-square"></i></button>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 text-center d-flex justify-content-center align-items-end pt-5 position-relative">
                <img src="{{ asset('assets/img/Asset 2.png') }}" alt="" width="400px">

                <!-- <div class="floating-box box-mahasiswa">
                    <h5>Mahasiswa</h5>
                    <h6>1.234</h6>
                </div>

                <div class="floating-box box-dosen">
                    <h5>Dosen</h5>
                    <h6>56</h6>
                </div> -->
            </div>

        </div>
    </div>
</section>

    <section class="py-2 my-bg-blue">
        <div class="marquee-container">
            <div class="marquee fs-4">
                Selamat datang di website kami! ✨ Jangan lewatkan informasi terbaru setiap hari! Lorem ipsum dolor, sit amet consectetur adipisicing elit. Repellendus, dolor.
            </div>
        </div>
    </section>
    <section class="py-3 py-lg-5">
        <div class="container text-dark">
            <h1 class="text-center mb-3 mb-lg-4">Salut DOKTORTJ</h1>
            <p class="text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi, obcaecati doloribus
                distinctio atque
                tempora asperiores. Explicabo quo dolor, maxime quibusdam fugiat alias nemo sint sit minus libero a
                distinctio tempore voluptatibus, aut, qui eveniet nostrum sapiente adipisci! Harum commodi ea dicta
                consequatur soluta a reprehenderit est tempora non, corporis dignissimos illum totam deleniti at officia
                iusto fuga dolore. Nam reprehenderit cupiditate, ad itaque minus deserunt ipsum sint nihil, esse molestias
                eligendi mollitia saepe? Ipsa, ullam voluptatibus accusamus qui pariatur commodi.</p>
        </div>
    </section>
    <section class="my-bg-gray py-lg-5">
        <div class="container">
            <h1 class="text-center mb-4">Kenapa mendaftar di Salut DOKTORTJ</h1>
            <div class="row">
                <div class="col-6 text-center">
                    <ul class="list-group">
                        <li class="list-group-item border-0 bg-transparent"><i class="fa-solid fa-circle-check me-1"></i>An
                            item
                        </li>
                        <li class="list-group-item border-0 bg-transparent"><i class="fa-solid fa-circle-check me-1"></i>A
                            second
                            item</li>
                        <li class="list-group-item border-0 bg-transparent"><i class="fa-solid fa-circle-check me-1"></i>A
                            third
                            item</li>
                        <li class="list-group-item border-0 bg-transparent"><i class="fa-solid fa-circle-check me-1"></i>A
                            fourth
                            item</li>
                        <li class="list-group-item border-0 bg-transparent"><i class="fa-solid fa-circle-check me-1"></i>And
                            a
                            fifth one</li>
                    </ul>
                </div>
                <div class="col-6">
                    <ul class="list-group">
                        <li class="list-group-item border-0 bg-transparent"><i class="fa-solid fa-circle-check me-1"></i>An
                            item
                        </li>
                        <li class="list-group-item border-0 bg-transparent"><i class="fa-solid fa-circle-check me-1"></i>A
                            second
                            item</li>
                        <li class="list-group-item border-0 bg-transparent"><i class="fa-solid fa-circle-check me-1"></i>A
                            third
                            item</li>
                        <li class="list-group-item border-0 bg-transparent"><i class="fa-solid fa-circle-check me-1"></i>A
                            fourth
                            item</li>
                        <li class="list-group-item border-0 bg-transparent"><i class="fa-solid fa-circle-check me-1"></i>And
                            a
                            fifth one</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
@endsection
