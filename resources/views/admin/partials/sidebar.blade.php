<!-- [ Pre-loader ] start -->
<div class="loader-bg">
    <div class="loader-track">
        <div class="loader-fill"></div>
    </div>
</div>
<!-- [ Pre-loader ] End -->
<!-- [ Sidebar Menu ] start -->
<nav class="pc-sidebar">
    <div class="navbar-wrapper">
        <div class="m-header">
            <a class="pt-3" href="../dashboard/index.html" class="b-brand text-primary">
                <!-- ========   Change your logo from here   ============ -->
                {{-- <span class="badge bg-light-success rounded-pill ms-2 theme-version">v2.5.0</span> --}}
                <span>
                    <h3>Dashboard Admin</h3>
                </span>
            </a>
        </div>
        <div class="navbar-content">
            <div class="card pc-user-card">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div class="flex-shrink-0">
                            <img src="{{ asset('dashboard-assets/images/user/avatar-1.jpg') }}" alt="user-image"
                                class="user-avtar wid-45 rounded-circle" />
                        </div>
                        <div class="flex-grow-1 ms-3 me-2">
                            <h6 class="mb-0">Jonh Smith</h6>
                            <small>Administrator</small>
                        </div>
                        <a class="btn btn-icon btn-link-secondary avtar" data-bs-toggle="collapse"
                            href="#pc_sidebar_userlink">
                            <svg class="pc-icon">
                                <use xlink:href="#custom-sort-outline"></use>
                            </svg>
                        </a>
                    </div>
                    <div class="collapse pc-user-links" id="pc_sidebar_userlink">
                        <div class="pt-3">
                            <a href="#!">
                                <i class="ti ti-user"></i>
                                <span>My Account</span>
                            </a>
                            <a href="#!">
                                <i class="ti ti-settings"></i>
                                <span>Settings</span>
                            </a>
                            <a href="#!">
                                <i class="ti ti-lock"></i>
                                <span>Lock Screen</span>
                            </a>
                            <a href="#!">
                                <i class="ti ti-power"></i>
                                <span>Logout</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <ul class="pc-navbar">
                <li class="pc-item pc-caption">
                    <label>Navigation</label>
                </li>

                <li class="pc-item active">
                    <a href="../dashboard/index.html" class="pc-link">
                        <span class="pc-micon">
                            <i class="fas fa-home"></i>
                        </span>
                        <span class="pc-mtext">Dashboard</span>
                    </a>
                </li>
                <li class="pc-item">
                    <a href="../dashboard/index.html" class="pc-link">
                        <span class="pc-micon">
                            <i class="fas fa-university"></i>
                        </span>
                        <span class="pc-mtext">Fakultas</span>
                    </a>
                </li>
                <li class="pc-item">
                    <a href="../dashboard/index.html" class="pc-link">
                        <span class="pc-micon">
                            <i class="fas fa-book-open"></i>
                        </span>
                        <span class="pc-mtext">Prodi</span>
                    </a>
                </li>
                <li class="pc-item">
                    <a href="../dashboard/index.html" class="pc-link">
                        <span class="pc-micon">
                            <i class="fas fa-user-plus"></i>
                        </span>
                        <span class="pc-mtext">Pendaftar</span>
                    </a>
                </li>
            </ul>

        </div>
    </div>
</nav>
