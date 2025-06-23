<nav class="navbar navbar-expand-lg fixed-top w-100 transition-navbar" data-aos="fade-down">
    <div class="container">
        <a class="navbar-brand" href="#">
            <img height="35px" src="{{ asset('img/logo.png') }}" alt="">
        </a>

        <!-- Hamburger button -->
        <button class="navbar-toggler border-0 d-lg-none" type="button" id="hamburgerBtn">
            <i class="fa-solid fa-bars-staggered text-dark fs-2"></i>
        </button>

        <!-- Desktop Nav -->
        <div class="collapse navbar-collapse d-none d-lg-flex" id="navbarText">
            <ul class="navbar-nav me-auto mb-lg-0 mx-auto">
                <li class="nav-item mx-2">
                    <a class="nav-link text-dark" href="{{ url('/#home') }}">Home</a>
                </li>
                <li class="nav-item mx-2">
                    <a class="nav-link text-dark" href="{{ url('/#tentang') }}">Tentang</a>
                </li>
                <li class="nav-item mx-2">
                    <a class="nav-link text-dark" href="{{ url('/#fakultas') }}">Fakultas</a>
                </li>
                <li class="nav-item mx-2">
                    <a class="nav-link text-dark" href="{{ url('/#alur') }}">Alur Pendaftaran</a>
                </li>
                <li class="nav-item mx-2">
                    <a class="nav-link text-dark" href="{{ url('/#lokasi') }}">Lokasi</a>
                </li>
                <li class="nav-item mx-2">
                    <a class="nav-link text-dark" href="{{ url('/#faq') }}">FAQ</a>
                </li>
            </ul>
            <span>
                <a href="{{ route('form-pendaftaran') }}" class="btn my-btn px-5 rounded-pill">Daftar</a>
            </span>
        </div>

        <!-- Mobile Fullscreen Nav -->
        <div class="mobile-fullscreen-navbar d-flex flex-column align-items-center justify-content-start"
            id="mobileMenu">
            <div class="w-100 d-flex justify-content-between p-4">
                <img height="35px" src="{{ asset('img/logo.png') }}" alt="">
                <button class="btn btn-close btn-close-dark" id="closeBtn"></button>
            </div>
            <ul class="navbar-nav text-center mt-4">
                <li class="nav-item my-2">
                    <a class="nav-link text-dark fs-4" href="{{ url('/#home') }}">Home</a>
                </li>
                <li class="nav-item my-2">
                    <a class="nav-link text-dark fs-4" href="{{ url('/#tentang') }}">Tentang</a>
                </li>
                <li class="nav-item my-2">
                    <a class="nav-link text-dark fs-4" href="{{ url('/#fakultas') }}">Fakultas</a>
                </li>
                <li class="nav-item my-2">
                    <a class="nav-link text-dark fs-4" href="{{ url('/#alur') }}">Alur Pendaftaran</a>
                </li>
                <li class="nav-item my-2">
                    <a class="nav-link text-dark fs-4" href="{{ url('/#lokasi') }}">Lokasi</a>
                </li>
                <li class="nav-item my-2">
                    <a class="nav-link text-dark fs-4" href="{{ url('/#faq') }}">FAQ</a>
                </li>
            </ul>
            <div class="mt-4">
                <a href="{{ route('form-pendaftaran') }}" class="btn my-btn px-5 rounded-pill">Daftar</a>
            </div>
        </div>
    </div>
</nav>
