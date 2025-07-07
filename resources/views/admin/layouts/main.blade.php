<!DOCTYPE html>
<html lang="en">
<!-- [Head] start -->

<head>
    <title>{{ $judul }}</title>
    <!-- [Meta] -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description"
        content="Able Pro is trending dashboard template made using Bootstrap 5 design framework. Able Pro is available in Bootstrap, React, CodeIgniter, Angular,  and .net Technologies.">
    <meta name="keywords"
        content="Bootstrap admin template, Dashboard UI Kit, Dashboard Template, Backend Panel, react dashboard, angular dashboard">
    <meta name="author" content="Phoenixcoded">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <!-- [Favicon] icon -->
    <!-- [Font] Family -->
    <link rel="stylesheet" href="{{ asset('dashboard-assets/fonts/inter/inter.css') }}" id="main-font-link" />
    <!-- [Tabler Icons] https://tablericons.com -->
    <link rel="stylesheet" href="{{ asset('dashboard-assets/fonts/tabler-icons.min.css') }}">
    <!-- [Feather Icons] https://feathericons.com -->
    <link rel="stylesheet" href="{{ asset('dashboard-assets/fonts/feather.css') }}">
    <!-- [Font Awesome Icons] https://fontawesome.com/icons -->
    <link rel="stylesheet" href="{{ asset('dashboard-assets/fonts/fontawesome.css') }}">
    <!-- [Material Icons] https://fonts.google.com/icons -->
    <link rel="stylesheet" href="{{ asset('dashboard-assets/fonts/material.css') }}">
    <!-- [Template CSS Files] -->
    <link rel="stylesheet" href="{{ asset('dashboard-assets/css/style.css') }}" id="main-style-link">
    <link rel="stylesheet" href="{{ asset('dashboard-assets/css/style-preset.css') }}">
    <link rel="stylesheet" href="https://cdn.datatables.net/2.3.2/css/dataTables.dataTables.min.css">
</head>
<!-- [Head] end -->
<!-- [Body] Start -->

<body data-pc-preset="preset-1" data-pc-sidebar-caption="true" data-pc-layout="vertical" data-pc-direction="ltr"
    data-pc-theme_contrast="" data-pc-theme="light">
    @yield('dashboard-content')
    <!-- [Page Specific JS] start -->
    <script src="{{ asset('dashboard-assets/js/pages/dashboard-default.js') }}"></script>
    <!-- [Page Specific JS] end -->
    <!-- Required Js -->
    <script src="{{ asset('dashboard-assets/js/plugins/popper.min.js') }}"></script>
    <script src="{{ asset('dashboard-assets/js/plugins/simplebar.min.js') }}"></script>
    <script src="{{ asset('dashboard-assets/js/plugins/bootstrap.min.js') }}"></script>
    <script src="{{ asset('dashboard-assets/js/fonts/custom-font.js') }}"></script>
    <script src="{{ asset('dashboard-assets/js/script.js') }}"></script>
    <script src="{{ asset('dashboard-assets/js/theme.js') }}"></script>
    <script src="{{ asset('dashboard-assets/js/plugins/feather.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        @if (session('success'))
            Swal.fire({
                icon: 'success',
                title: 'Sukses!',
                text: '{{ session('success') }}',
            });
        @elseif (session('errors'))
            let errorMessages = '';
            @foreach (session('errors')->all() as $error)
                errorMessages += '• {{ $error }}\n';
            @endforeach
            Swal.fire({
                icon: 'error',
                title: 'Validasi Gagal',
                text: errorMessages,
            });
        @endif
    </script>
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

</body>
<!-- [Body] end -->

</html>
