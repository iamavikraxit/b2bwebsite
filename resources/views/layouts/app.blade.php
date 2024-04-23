<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="Mofi admin is super flexible, powerful, clean &amp; modern responsive bootstrap 5 admin template with unlimited possibilities.">
    <meta name="keywords"
        content="admin template, Mofi admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="pixelstrap">
    <link rel="icon" href="{{ asset('backend/images/favicon.png') }}" type="image/x-icon">
    <link rel="shortcut icon" href="{{ asset('backend/images/favicon.png') }}" type="image/x-icon">
    <title>{{ env('APP_NAME') }} | {{ env('APP_FULL_NAME') }}</title>
    <!-- Google font-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
    <link
        href="https://fonts.googleapis.com/css2?family=Outfit:wght@100;200;300;400;500;600;700;800;900&amp;display=swap"
        rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/css/font-awesome.css') }}">
    <!-- ico-font-->
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/css/vendors/icofont.css') }}">
    <!-- Themify icon-->
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/css/vendors/themify.css') }}">
    <!-- Flag icon-->
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/css/vendors/flag-icon.css') }}">
    <!-- Feather icon-->
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/css/vendors/feather-icon.css') }}">
    <!-- Plugins css start-->
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/css/vendors/slick.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/css/vendors/slick-theme.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/css/vendors/scrollbar.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/css/vendors/animate.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/css/vendors/datatables.css') }}">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('backend/css/vendors/date-range-picker/flatpickr.min.css') }}">
    <!-- Plugins css Ends-->
    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/css/vendors/bootstrap.css') }}">
    <!-- App css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/css/style.css') }}">
    <link id="color" rel="stylesheet" href="{{ asset('backend/css/color-1.css') }}" media="screen">
    <!-- Responsive css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/css/responsive.css') }}">
</head>

<body>
    <div class="loader-wrapper">
        <div class="loader loader-1">
            <div class="loader-outter"></div>
            <div class="loader-inner"></div>
            <div class="loader-inner-1"></div>
        </div>
    </div>
    <!-- loader ends-->
    <!-- tap on top starts-->
    <div class="tap-top"><i data-feather="chevrons-up"></i></div>
    <!-- tap on tap ends-->
    <!-- page-wrapper Start-->
    <div class="page-wrapper compact-wrapper" id="pageWrapper">
        <!-- Page Body Start-->
        @include('layouts.header')
        <div class="page-body-wrapper">
            @include('layouts.sidebar')
            <div class="page-body">
                @yield('content')
            </div>
            <!-- footer start-->
            <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div
                            class="col-md-12 footer-copyright d-flex flex-wrap align-items-center justify-content-between">
                            <p class="mb-0 f-w-600">Copyright 2024 © Mofi theme by pixelstrap </p>
                            <p class="mb-0 f-w-600">Hand crafted & made with
                                <svg class="footer-icon">
                                    <use href="../assets/svg/icon-sprite.svg#footer-heart"> </use>
                                </svg>
                            </p>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <!-- latest jquery-->
    <script src="{{ asset('backend/js/jquery.min.js') }}"></script>
    <!-- Bootstrap js-->
    <script src="{{ asset('backend/js/bootstrap/bootstrap.bundle.min.js') }}"></script>
    <!-- feather icon js-->
    <script src="{{ asset('backend/js/icons/feather-icon/feather.min.js') }}"></script>
    <script src="{{ asset('backend/js/icons/feather-icon/feather-icon.js') }}"></script>
    <!-- scrollbar js-->
    <script src="{{ asset('backend/js/scrollbar/simplebar.js') }}"></script>
    <script src="{{ asset('backend/js/scrollbar/custom.js') }}"></script>
    <!-- Sidebar jquery-->
    <script src="{{ asset('backend/js/config.js') }}"></script>
    <!-- Plugins JS start-->
    <script src="{{ asset('backend/js/sidebar-menu.js') }}"></script>
    <script src="{{ asset('backend/js/sidebar-pin.js') }}"></script>
    <script src="{{ asset('backend/js/slick/slick.min.js') }}"></script>
    <script src="{{ asset('backend/js/slick/slick.js') }}"></script>
    <script src="{{ asset('backend/js/header-slick.js') }}"></script>
    <script src="{{ asset('backend/js/chart/apex-chart/apex-chart.js') }}"></script>
    <script src="{{ asset('backend/js/chart/apex-chart/stock-prices.js') }}"></script>
    <script src="{{ asset('backend/js/chart/apex-chart/moment.min.js') }}"></script>
    <script src="{{ asset('backend/js/notify/bootstrap-notify.min.js') }}"></script>
    <!-- calendar js-->
    <script src="{{ asset('backend/js/dashboard/default.js') }}"></script>
    {{-- <script src="{{ asset('backend/js/notify/index.js') }}"></script> --}}
    <script src="{{ asset('backend/js/datatable/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('backend/js/datatable/datatables/datatable.custom.js') }}"></script>
    <script src="{{ asset('backend/js/datatable/datatables/datatable.custom1.js') }}"></script>
    <script src="{{ asset('backend/js/datepicker/date-range-picker/moment.min.js') }}"></script>
    <script src="{{ asset('backend/js/datepicker/date-range-picker/datepicker-range-custom.js') }}"></script>
    {{-- <script src="{{ asset('backend/js/typeahead/handlebars.js') }}"></script> --}}
    {{-- <script src="{{ asset('backend/js/typeahead/typeahead.bundle.js') }}"></script>
    <script src="{{ asset('backend/js/typeahead/typeahead.custom.js') }}"></script>
    <script src="{{ asset('backend/js/typeahead-search/handlebars.js') }}"></script>
    <script src="{{ asset('backend/js/typeahead-search/typeahead-custom.js') }}"></script> --}}
    <script src="{{ asset('backend/js/height-equal.js') }}"></script>
    <script src="{{ asset('backend/js/animation/wow/wow.min.js') }}"></script>
    <!-- Plugins JS Ends-->
    <!-- Theme js-->
    <script src="{{ asset('backend/js/script.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    @stack('js')
    {{-- <script src="{{ asset('backend/js/theme-customizer/customizer.js') }}"></script> --}}
    
   
    <!-- Plugin used-->
    <script>
        new WOW().init();
    </script>
</body>

</html>
