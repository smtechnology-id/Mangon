<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- favicon -->
    <link rel="shortcut icon" href="{{ asset('assets/images/logo.png') }}" type="image/x-icon" />

    <!-- josefin sans font -->
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">

    <!-- heebo font -->
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@300;400;500;600;700&display=swap"
        rel="stylesheet" />

    <title>Mangon - Aplikasi Pengambilan Keputusan Pemilihan Lokasi Toko</title>
    

    <!-- font-awesome -->
    <link rel="stylesheet" href="{{ asset('assets/css/all.min.css') }}">

    <!-- flaticon -->
    <link rel="stylesheet" href="{{ asset('assets/font/flaticon.css') }}">

    <!-- bootstrap -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">

    <!-- menu -->
    <link rel="stylesheet" href="{{ asset('assets/css/menu.css') }}">

    <!-- odometer -->
    <link rel="stylesheet" href="{{ asset('assets/css/odometer.css') }}">

    <!-- venobox -->
    <link rel="stylesheet" href="{{ asset('assets/css/venobox.css') }}">

    <!-- swiper-slider -->
    <link rel="stylesheet" href="{{ asset('assets/css/swiper-bundle.min.css') }}">

    <!-- scroll animation -->
    <link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}">

    <!-- style -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

    <!-- responsive -->
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">
</head>

<body>
    <!-- start preloader area -->

    <!-- end preloader area -->

    <!-- start top-tp button area -->
    <button class="top-btn">
        <i class="fas fa-chevron-up"></i>
    </button>
    <!-- end top-tp button area -->

    <!-- start header area -->
    <header>
        <!-- start menubar area -->
        <section class="menubar">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <nav class="navbar p-0">
                            <!-- header logo -->
                            <a class="navbar-brand p-0" href="index.html">
                                <img src="{{ asset('assets/images/logo.png') }}" alt="Logo" />
                            </a>
                            <div class="header-menu position-static">
                                <ul class="menu">
                                    <li><a href="{{ route('index') }}">Home</a></li>
                                    <li><a href="{{ route('index') }}/#about">About</a></li>
                                </ul>
                            </div>
                            <div class="right-part">
                                <ul class="d-flex align-items-center">
                                   
                                    <li><a href="{{ route('hitung', ['kode' => $kode]) }}">Hitung</a></li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </section>
        <!-- end menubar area -->
    </header>
    <!-- end header area -->

    <!-- start banner area -->
    @yield('content')
    <!-- end about area -->
    <!-- start footer area -->
    <footer class="footer" data-img="{{ asset('assets/images/footer-bg.jpg') }}">
        <!-- start footer-top area -->
        <section class="footer-top pt-100 pb-60">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="content">
                            <div class="title">
                                <img src="{{ asset('assets/images/logo.png') }}" alt="" srcset="">
                            </div>
                            <p class="desc">Selamat Datang di Aplikasi Mangon</p>
                            
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="content">
                            <div class="title">
                                <h5>quick links</h5>
                            </div>
                            <ul class="navigation">
                                <li><a href="{{ route('index') }}">Home</a></li>
                                <li><a href="{{ route('index') }}/#about">About</a></li>
                                <li><a href="{{ route('hitung', ['kode' => $kode]) }}">Hitung</a></li>
                               
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!-- end footer-top area -->

        <!-- start footer-bottom area -->
        <section class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="bg">
                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <p>Copyright &copy; 2021 Al Right Reserved</p>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <ul class="d-flex justify-content-end">
                                        <li><a href="index.html">home</a></li>
                                        <li><a href="about.html">about</a></li>
                                        <li><a href="service.html">service</a></li>
                                        <li><a href="contact.html">contact</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end footer-bottom area -->
    </footer>
    <!-- end footer area -->

    <!-- start modal area -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">search here</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="search-area">
                        <input type="search" placeholder="search..." class="inputs">
                        <button class="search-btn"><i class="flaticon-loupe"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end modal area -->

    <!-- start custom cursor area -->
    <div class="custom-cursor">
        <div id="cursor">
            <div id="cursor-ball"></div>
        </div>
    </div>
    <!-- end custom cursor area -->

    <!-- jquery -->
    <script src="{{ asset('assets/plugins/jquery-3.4.1.min.js') }}"></script>

    <!-- bootstrap -->
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>

    <!-- menu -->
    <script src="{{ asset('assets/plugins/menu.min.js') }}"></script>

    <!-- odometer -->
    <script src="{{ asset('assets/plugins/appear.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/odometer.min.js') }}"></script>

    <!-- mixitup -->
    <script src="{{ asset('assets/plugins/mixitup.min.js') }}"></script>

    <!-- directional hover -->
    <script src="{{ asset('assets/plugins/jquery.directional-hover.min.js') }}"></script>

    <!-- cursor move -->
    <script src="{{ asset('assets/plugins/tweenmax.js') }}"></script>

    <!-- venobox -->
    <script src="{{ asset('assets/plugins/venobox.min.js') }}"></script>

    <!-- swiper-slider -->
    <script src="{{ asset('assets/plugins/swiper-bundle.min.js') }}"></script>

    <!-- wow js -->
    <script src="{{ asset('assets/plugins/wow.min.js') }}"></script>

    <!-- Google map -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjkssBA3hMeFtClgslO2clWFR6bRraGz0"></script>

    <!-- script -->
    <script src="{{ asset('assets/js/script.js') }}"></script>
</body>

</html>