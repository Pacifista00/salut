@extends('admin.layouts.main')
@section('dashboard-content')
    <!-- [ Pre-loader ] start -->
    <div class="loader-bg">
        <div class="loader-track">
            <div class="loader-fill"></div>
        </div>
    </div>
    <!-- [ Pre-loader ] End -->

    <div class="auth-main">
        <div class="auth-wrapper v1">
            <div class="auth-form">
                <div class="card my-5">
                    <div class="card-body">
                        <div class="text-center">
                            <a href="#" class="me-2"><img height="70px" src="{{ asset('img/logoUT.png') }}"
                                    alt="img"></a>
                            <a href="#"><img height="70px" src="{{ asset('img/logoDDI.png') }}" alt="img"></a>
                        </div>
                        {{-- <div class="saprator my-3">
                            <span>OR</span>
                        </div> --}}
                        <h3 class="text-center f-w-500 my-3">Login dengan akun anda</h3>
                        <div class="form-group mb-3">
                            <input type="email" class="form-control" id="floatingInput" placeholder="Email Address">
                        </div>
                        <div class="form-group mb-3">
                            <input type="password" class="form-control" id="floatingInput1" placeholder="Password">
                        </div>
                        {{-- <div class="d-flex mt-1 justify-content-between align-items-center">
                            <div class="form-check">
                                <input class="form-check-input input-primary" type="checkbox" id="customCheckc1"
                                    checked="">
                                <label class="form-check-label text-muted" for="customCheckc1">Remember me?</label>
                            </div>
                            <h6 class="text-secondary f-w-400 mb-0">Forgot Password?</h6>
                        </div> --}}
                        <div class="d-grid mt-4">
                            <button type="button" class="btn btn-primary">Login</button>
                        </div>
                        <div class="d-flex justify-content-between align-items-end mt-4">
                            <h6 class="f-w-500 mb-0">Belum mempunyai akun?</h6>
                            <a href="#" class="link-primary">Buat akun</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        change_box_container('false');
    </script>

    <script>
        layout_caption_change('true');
    </script>

    <script>
        layout_rtl_change('false');
    </script>

    <script>
        preset_change("preset-1");
    </script>
@endsection
