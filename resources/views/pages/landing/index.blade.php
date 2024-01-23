@extends('layouts.app_landing')
@section('content')

        <!-- Start Main Slider -->
        
        <section class="main-slider style1 style1--instyle3">
            <div class="slider-box">
                <!-- Banner Carousel -->
                <div class="banner-carousel owl-theme owl-carousel">
                    <!-- Slide -->
                    <div class="slide">
                        <div class="image-layer" style="background-image:url({{ asset('assets/landing/images/icon/IMG_2297.jpg') }})">
                        </div>
                        <div class="auto-container">
                            <div class="content">
                                <div class="sub-title">
                                    <h3>Selamat Datang Di Website Kami.</h3>
                                </div>
                                <div class="big-title">
                                    <h2>Satuan Polisi Pamong Praja <br> <span>Provinsi Jawa Timur.</span></h2>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Slide -->
                    <div class="slide">
                        <div class="image-layer" style="background-image:url({{ asset('assets/landing/images/icon/muri_baru.JPG') }})">
                        </div>
                        <div class="auto-container">
                            <div class="content">
                                <div class="sub-title">
                                    <h3>Tagline kami.</h3>
                                </div>
                                <div class="big-title">
                                    <h2>SIGAP<br> <span>Sinergis, Inovatif, Gerak cepat, Antisipatif, Persuasif.</span></h2>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Slide -->
                    <div class="slide">
                        <div class="image-layer" style="background-image:url({{ asset('assets/landing/images/slides/slider_5.jpg') }})">
                        </div>
                        <div class="auto-container">
                            <div class="content">
                                <div class="sub-title">
                                    <h3>Memperingati Hari Jadi Ke-77 Provinsi Jawa Timur.</h3>
                                </div>
                                <div class="big-title">
                                    <h2>KIRAB PATAKA<br> <span>JER BASUKI MAWA BEYA 2022.</span></h2>
                                </div>
                                <div class="btns-box">
                                    <a class="btn-one style2" href="#">
                                        <span class="border-box"></span>
                                        <span class="bg bg--gradient"></span>
                                        <span class="txt">Review<i class="icon-left-arrow arrow"></i></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!-- End Main Slider -->


        <!--Start About Style4 Area-->
        <section class="about-style4-area" >
            <div class="container">
                <div class="row text-right-rtl">

                    <div class="col-xl-6">
                        <div class="about-style4__image clearfix" style="margin-right: 0px;">
                            <img style="width: 650px;" src="{{ asset('assets/landing/images/icon/about.png') }}" alt="" />
                        </div>
                    </div>

                    <div class="col-xl-6">
                        <div class="about-style4__content">
                            <div class="sec-title">
                                <h2>Tentang Kami
                                </h2>
                            </div>
                            <div class="inner-content">
                                <h2></h2>
                                <div class="text">
                                    <p>Satuan Polisi Pamong Praja Provinsi Jawa Timur mempunyai tugas menegakkan peraturan daerah dan peraturan pelaksanaannya, menyelenggarakan ketertiban umum dan ketenteraman, pengawasan serta perlindungan masyarakat</p>
                                </div>

                                <ul>
                                    <li>
                                        <div class="icon">
                                            <span class="icon-right-arrow-2"></span>
                                        </div>

                                        <div class="text">
                                            <p>Penyusunan program dan pelaksanaan penegakan peraturan daerah dan peraturan gubernur, penyelenggaraan ketertiban umum dan ketenteraman masyarakat serta perlindungan masyarakat</p>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="icon">
                                            <span class="icon-right-arrow-2"></span>
                                        </div>

                                        <div class="text">
                                            <p>Pelaksanaan penegakan peraturan daerah dan peraturan gubernur</p>
                                        </div>
                                    </li>
                                </ul>

                                <div class="btns-box">
                                    <a class="btn-one" href="{{ url('page/tusi') }}">
                                        <span class="border-box"></span>
                                        <span class="bg bg--white"></span>
                                        <span class="txt">Selengkapnya<i class="icon-left-arrow arrow"></i>
                                        </span>
                                    </a>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!--End About Style4 Area-->
        <!--End Fact Counter Area-->

        <section class="team-style2-area" style="background-color:#f5f6f7; padding-bottom:20px; padding-top:20px;">
            <div class="container">
                <div class="sec-title-style2 style2instyle3 text-center">
                    <div class="icon">
                        <span class="icon-picasa-logo"></span>
                    </div>
                    <h2><span>Berita Terkait Satuan Polisi Pamong Praja Provinsi Jawa Timur</span></h2>
                </div>
                <div class="row">
                    <!--Start Single Team Style1-->

                    @foreach($berita as $b)
                    @if(count($b->gambar) > 0)
                    <div class="col-xl-4 col-lg-4">
                        <div class="single-team-style1">
                            <div class="img-holder">
                                <div class="inner">
                                    <img style="width: 370px; height: 277px;" src="{{ asset('storage/uploads/berita/'.$b->gambar[0]->file) }}" alt="" />
                                    <div class="social-link-box-style2">
                                        <div class="inner-box">
                                            <a href="{{ url('page/berita/'.$b->id) }}"><i class="fa fa-link" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="title-holder">
                                <div class="name">
                                    <h3><a href="{{ url('page/berita/'.$b->id) }}">{{ $b->judul }}</a></h3>
                                    <div class="bottom">
                                        <img src="assets/images/icon/thm-logo-2.png" alt="">
                                        <p></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endif
                    @endforeach
                    <!--End Single Team Style1-->
                </div>
                            <center>
                                <div class="btns-box">
                                    <a class="btn-one" href="{{ url('page/berita') }}">
                                        <span class="border-box"></span>
                                        <span class="bg bg--white"></span>
                                        <span class="txt">SEMUA BERITA<i class="icon-left-arrow arrow"></i>
                                        </span>
                                    </a>
                                </div>
                            </center>
            </div>
        </section>

        <section class="subscribe-style1-area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="subscribe-content-box" style="padding-top: 10px; padding-bottom: 25px;">
                            <div class="subscribe-content-box__bg" style="background-image: url({{ asset('assets/landing/images/pattern/thm-pattern-1.png') }});"></div>
                                <div class="sec-title-style2 style2instyle3 text-center">
                                    <div class="icon">
                                        <span class="icon-picasa-logo"></span>
                                    </div>
                                    <h2><span>Youtube Video</span> </h2>
                                </div>
                            <div class="row">
                                <div class="col-sm-4 col-md-4 col-lg-4">
                                   <iframe width="100%" height="315" src="https://www.youtube.com/embed/LfR-2fkLpRs" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                </div>
                                <div class="col-sm-4 col-md-4 col-lg-4">
                                    <iframe width="100%" height="315" src="https://www.youtube.com/embed/WHMCogvclbI" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                </div>
                                <div class="col-sm-4 col-md-4 col-lg-4">
                                    <iframe width="100%" height="315" src="https://www.youtube.com/embed/Qvi_-6_jpVE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>
        <!--Start Service Style3 Area-->
        <section class="service-style3-area">
            <div class="container">
                <div class="sec-title-style2 style2instyle3 text-center">
                    <div class="icon">
                        <span class="icon-picasa-logo"></span>
                    </div>
                    <h2><span>Gallery Foto</span> </h2>
                </div>
                <div class="row text-right-rtl">
                    <!--Start Single Service Style3-->
                    @foreach($gallery as $g)
                    <div class="col-xl-4 col-lg-4 col-md-12 wow fadeInUp" data-wow-delay="00ms"
                        data-wow-duration="1500ms">
                        <div class="single-service-style3">
                            <div class="img-holder">
                                <div class="inner">
                                    <img style="width: 360px; height: 263px;" src="{{ asset('storage/uploads/berita/'.$g->gambar[0]->file) }}" alt="">
                                    <div class="icon">
                                        <span class="fa fa-link"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="title-holder">
                                <h3><a href="{{ url('page/gallery/'.$g->id) }}">{{ $g->judul }}</a></h3>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>

                            <center>
                                <div class="btns-box">
                                    <a class="btn-one" href="{{ url('page/gallery') }}">
                                        <span class="border-box"></span>
                                        <span class="bg bg--white"></span>
                                        <span class="txt">GALLERY SELENGKAPNYA<i class="icon-left-arrow arrow"></i>
                                        </span>
                                    </a>
                                </div>
                            </center>
            </div>
        </section>
        <!--End Service Style3 Area-->

        <!--Start Awards Area-->
        <!--End Awards Area-->


        <section class="pt-5 partner-style2-area" style="background-color:#f5f6f7;">
            <div class="container">
                <div class="sec-title-style2 style2instyle3 text-center">
                    <div class="icon">
                        <span class="icon-picasa-logo"></span>
                    </div>
                    <h2><span>Situs Terkait</span></h2>
                </div>
                <div class="inner">
                    <ul class="partner-box partner-carousel-2 owl-carousel owl-theme owl-dot-style1 rtl-carousel">
                        <!--Start Single Partner Logo Box-->
                        <li class="single-partner-logo-box" style="background-color: white;">
                            <a href="https://jatimprov.go.id/"><img src="{{ asset('assets/landing/images/icon/jatimprov.jpg') }}" alt="Awesome Image"></a>
                        </li>
                        <!--End Single Partner Logo Box-->
                        <!--Start Single Partner Logo Box-->
                        <li class="single-partner-logo-box" style="background-color: white;">
                            <a href="https://lapor.go.id/"><img src="{{ asset('assets/landing/images/icon/lapor.jpg') }}" alt="Awesome Image"></a>
                        </li>
                        <!--End Single Partner Logo Box-->
                        <!--Start Single Partner Logo Box-->
                        <li class="single-partner-logo-box" style="background-color: white;">
                            <a href="https://sibekisar.jatimprov.go.id/"><img src="{{ asset('assets/landing/images/icon/sibekisar.jpg') }}" alt="Awesome Image"></a>
                        </li>
                        <!--End Single Partner Logo Box-->
                        <!--Start Single Partner Logo Box-->
                        <li class="single-partner-logo-box"  style="background-color: white;">
                            <a href="https://bakorwilbojonegoro.jatimprov.go.id/"><img src="{{ asset('assets/landing/images/icon/bakorwil_bojonegoro.png') }}" alt="Awesome Image"></a>
                        </li>
                        <!--End Single Partner Logo Box-->
                        <!--Start Single Partner Logo Box-->
                        <li class="single-partner-logo-box">
                            <a href="https://bakorwilmalang.jatimprov.go.id/"><img src="{{ asset('assets/landing/images/icon/bakorwil_malang.png') }}" alt="Awesome Image"></a>
                        </li>
                        <li class="single-partner-logo-box">
                            <a href="https://bakorwilmadiun.jatimprov.go.id/"><img src="{{ asset('assets/landing/images/icon/bakorwil_madiun.png') }}" alt="Awesome Image"></a>
                        </li>
                        <!--End Single Partner Logo Box-->
                    </ul>
                </div>
            </div>
        </section>
        <!--Start Team Style2 Area-->
        <!--End Team Style2 Area-->

        <!--Start Partner Style2 Area-->
        <!--End Partner Style2 Area-->


{{-- <div class="modal fade modal_poster" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
    <a href="{{ url('https://q7survey.com/spikpk') }}" target="_blank">
        <img src="{{ asset('assets/landing/images/icon/poster_spi.jpg') }}">
        </a>
    </div>
  </div>
</div> --}}
@endsection
@section('script')
 <script type="text/javascript">
$(document).on('ready', function() {
        // $('.modal_poster').modal('show');
    });
</script>
@endsection
