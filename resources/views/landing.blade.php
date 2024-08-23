@extends('layouts.app')

@section('content')
<section class="home1 banner" data-img="{{ asset('assets/images/home1/banner/banner-bg.png') }}">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="content">
                    <div class="row">
                        <div class="col-lg-7 order-1 order-lg-0">
                            <div class="text-area">
                                <h1 class="wow fadeInUp" data-wow-delay="0.2s" data-wow-duration="1s">Welcome To</h1>
                                <h1 class="wow fadeInUp" data-wow-delay="0.4s" data-wow-duration="1s">Mangon
                                </h1>
                                <p class="wow fadeInUp" data-wow-delay="0.6s" data-wow-duration="1s"> Solusi untuk membantu calon pelaku usaha untuk memilih lokasi strategis pembukaan kedai minuman. </p>
                                <ul class="d-flex wow fadeInUp" data-wow-delay="0.8s" data-wow-duration="1s">
                                    
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-5 order-0 order-lg-1">
                            <div class="image-area text-end wow fadeInRight" data-wow-delay="0.3s"
                                data-wow-duration="1s">
                                <img src="{{ asset('assets/images/img-1.png') }}" alt="Banner">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end banner area -->
<!-- start about area -->
<section class="home1 about p-120" id="about">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="row align-items-center">
                    <div class="col-lg-5">
                        <div class="image text-center wow fadeInLeft" data-wow-delay="0.3s" data-wow-duration="1s">
                            <img src="{{ asset('assets/images/img-2.jpg') }}" alt="About">
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="content wow fadeInRight" data-wow-delay="0.3s" data-wow-duration="1s">
                            <h3>Strategi Sukses dalam Usaha Minuman</h3>
                            <p>Usaha minuman seperti franchise, warkop, starling, maupun angkring adalah salah satu peluang bisnis menjanjikan jika dikelola dengan persiapan matang. Memulai usaha ini tidaklah mudah, karena banyak aspek yang harus dipersiapkan dengan teliti.</p>
                            <p>Kurangnya persiapan dapat menyebabkan kegagalan bisnis, sehingga penting bagi pelaku usaha untuk melakukan persiapan dengan matang dan tidak terburu-buru. Agar usaha berjalan lancar, dibutuhkan persiapan mulai dari modal hingga strategi pemasaran yang tepat.</p>
                            <p>Pemilihan lokasi usaha juga sangat krusial. Banyak pelaku usaha yang hanya mempertimbangkan lokasi dekat jalan raya tanpa memperhatikan faktor lain, yang sering kali berujung pada kegagalan. Website Manggon hadir untuk membantu calon pelaku usaha dalam memilih lokasi strategis untuk pembukaan kedai minuman.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="home1 about p-120" id="about">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="row align-items-center">
                    
                    <div class="col-lg-7">
                        <div class="content wow fadeInRight" data-wow-delay="0.3s" data-wow-duration="1s">
                            <h3>Beberapa kriteria lokasi yang kami pertimbangkan dalam penunjang keputusan ini adalah:</h3>
                            <ul>
                                <li class="d-flex">
                                    <div class="text">
                                        <p>Apakah lokasi dekat dengan keramaian seperti perkantoran, sekolah, pusat perbelanjaan?</p>
                                    </div>
                                </li>
                                <li class="d-flex">
                                    <div class="text">
                                        <p>Visibilitas lokasi apakah mudah terlihat dari jalan raya atau tidak?</p>
                                    </div>
                                </li>
                                <li class="d-flex">
                                    <div class="text">
                                        <p>Kepadatan lalu lintas, semakin ramai jalan raya semakin susah pengendara untuk menepi.</p>
                                    </div>
                                </li>
                                <li class="d-flex">
                                    <div class="text">
                                        <p>Kepadatan penduduk dan pejalan kaki, semakin ramai pejalan kaki peluang pembeli juga semakin tinggi.</p>
                                    </div>
                                </li>
                                <li class="d-flex">
                                    <div class="text">
                                        <p>Tempat parkir memadai. Apakah lokasi kedai menyediakan tempat parkir yang memadai untuk kendaraan roda dua dan empat?</p>
                                    </div>
                                </li>
                                <li class="d-flex">
                                    <div class="text">
                                        <p>Jumlah pesaing di sekitar, semakin banyak pesaing semakin rendah pula peluang pembeli.</p>
                                    </div>
                                </li>
                                <li class="d-flex">
                                    <div class="text">
                                        <p>Suasana sekitar nyaman atau tidak untuk kedai minuman, pelanggan terkadang merasa risih jika tempat sekitar kotor atau banyak polusi seperti disamping bengkel atau got.</p>
                                    </div>
                                </li>
                                <li class="d-flex">
                                    <div class="text">
                                        <p>Ketersediaan tempat duduk, pelanggan akan lebih sabar menunggu saat tersedia tempat duduk, sambil beristirahat sejenak.</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="image text-center wow fadeInLeft" data-wow-delay="0.3s" data-wow-duration="1s">
                            <img src="{{ asset('assets/images/img-3.jpg') }}" alt="About">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection