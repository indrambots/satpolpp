<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
        @yield('meta')
    {{-- <title>Satpol PP Jawa Timur</title> --}}

    <!-- responsive meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- For IE -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600&display=swap"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet">



    <link rel="stylesheet" href="{{ asset('assets/landing/css/animate.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/landing/css/aos.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/landing/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/landing/css/bootstrap-select.min.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/landing/css/custom-animate.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/landing/css/fancybox.min.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/landing/css/flaticon.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('assets/landing/css/imp.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/landing/css/jquery-ui.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/landing/css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/landing/css/owl.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/landing/css/rtl.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/landing/css/scrollbar.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/landing/css/icomoon.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/landing/css/jquery.bootstrap-touchspin.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/landing/css/nice-select.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/landing/css/twentytwenty.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/landing/css/vegas.min.css')}}">

    <!-- Module css -->
    <link rel="stylesheet" href="{{ asset('assets/landing/css/module-css/header-section.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/landing/css/module-css/banner-section.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/landing/css/module-css/about-section.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/landing/css/module-css/blog-section.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/landing/css/module-css/fact-counter-section.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/landing/css/module-css/faq-section.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/landing/css/module-css/contact-page.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/landing/css/module-css/breadcrumb-section.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/landing/css/module-css/team-section.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/landing/css/module-css/partner-section.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/landing/css/module-css/testimonial-section.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/landing/css/module-css/services-section.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/landing/css/module-css/project-section.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/landing/css/module-css/footer-section.css')}}">

    <link rel="stylesheet" href="{{ asset('assets/landing/css/style.css')}}">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.11.5/datatables.min.css"/>
 
    <link rel="stylesheet" href="{{ asset('assets/landing/css/responsive.css')}}">
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="{{ asset('assets/landing/images/icon/favicon.png')}}" sizes="32x32">
    <!-- Fixing Internet Explorer-->
    <!--[if lt IE 9]>
        <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <script src="assets/js/html5shiv.js"></script>
    <![endif]-->
    <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-44S1H0GN2F"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-44S1H0GN2F');
</script>
</head>

<body>

    <div class="boxed_wrapper ltr">

        <!-- Preloader -->
        <div class="loader-wrap">
            <div class="preloader">
                <div class="preloader-close">SATPOL PP JATIM</div>
            </div>
            <div class="layer layer-one"><span class="overlay"></span></div>
            <div class="layer layer-two"><span class="overlay"></span></div>
            <div class="layer layer-three"><span class="overlay"></span></div>
        </div>

        <!-- page-direction -->
        <div class="page_direction">
            <div class="demo-rtl direction_switch"><button class="rtl">RTL</button></div>
            <div class="demo-ltr direction_switch"><button class="ltr">LTR</button></div>
        </div>
        <!-- page-direction end -->

        <!-- Main header-->
        <header class="main-header header-style-four">
            <!--Start Header-->
            <div class="header-style4">
                <div class="container">
                    <div class="outer-box">
                        <!--Start Header Style4 Left-->
                        <div class="header-style4__left">
                            <div class="main-logo-box-four gradient_02" style="background-image:none;">
                                <a href="index.html">
                                    <img style="width: 100px;" src="{{ asset('assets/landing/images/icon/satpol.png') }}" alt="Awesome Logo" title="">
                                </a>
                            </div>
                        </div>
                        <!--End Header Style4 Left-->
                        <!--Start Header Style4 Right-->
                        <div class="header-style4__right">
                            <!--Start Header Style4 Right Top-->
                            <div class="header-style4__right-top">
                                <div class="header-social-link">
                                    <ul class="clearfix">
                                        <li>
                                            <a target="_blank" href="https://www.facebook.com/profile.php?id=100069090764586"><i class="icon-facebook"></i></a>
                                        </li>
                                        <li>
                                            <a target="_blank" href="https://youtube.com/channel/UCT-h238MbUvMFIEQYAZuL1g"><span class="fab fa fa-youtube-square"></a>
                                        </li>
                                        <li>
                                            <a target="_blank" href="https://www.instagram.com/satpolpp_jatim/"><i class="icon-instagram-1"></i></a>
                                        </li>
                                        <li><a href="#"><i class="fa-brands fa-tiktok"></i></a></li>
                                    </ul>
                                </div>

                            </div>
                            <!--End Header Style4 Right Top-->

                            <!--Start Header Style4 Right Bottom-->
                            <div class="header-style4__right-botton">
                                <div class="nav-outer style2 clearfix">

                                    <!--Mobile Navigation Toggler-->
                                    <div class="mobile-nav-toggler">
                                        <div class="inner">
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                        </div>
                                    </div>
                                    <!-- Main Menu -->
                                    <nav class="main-menu style2 navbar-expand-md navbar-light">
                                        <div class="collapse navbar-collapse show clearfix" id="navbarSupportedContent">
                                            <ul class="navigation clearfix">
                                                <li><a href="{{ url('') }}"><span>BERANDA</span></a></li>
                                                <li class="dropdown"><a href="#"><span>PROFIL</span></a>
                                                    <ul>
                                                        <li><a href="{{ url('page/sejarah') }}">Sejarah Singkat</a></li>
                                                        <li><a href="{{ url('page/program') }}">Program</a></li>
                                                        <li><a href="{{ url('page/visi') }}">Visi dan Misi</a></li>
                                                        <li><a href="{{ url('page/tusi') }}">Tugas dan Fungsi</a></li>
                                                        <li><a href="{{ url('page/kedudukan') }}">Kedudukan dan Lokasi</a></li>
                                                        <li><a href="{{ url('page/standard-pelayanan') }}">Standard Pelayanan</a></li>
                                                        <li><a href="{{ url('page/organisasi') }}">Struktur Organisasi</a></li>
                                                        <li><a href="{{ url('page/sp') }}">Standart Pelayanan</a></li>
                                                        <li><a href="{{ url('page/unit-kerja') }}">Unit Kerja</a></li>
                                                        <li><a href="{{ url('page/struktural') }}">Pejabat Struktural</a></li>
                                                        <li><a href="{{ url('page/kepegawaian') }}">Kepegawaian</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="{{ url('page/laporan-program') }}"><span>PROGRAM KEGIATAN</span></a>
                                                    {{-- <ul>
                                                        <li class="dropdown"><a href="#">Rencana Strategis</a>
                                                            <ul>
                                                                <li><a href="project.html">RENSTRA 2014 - 2019</a></li>
                                                            </ul>
                                                        </li>
                                                        <li class="dropdown"><a href="#">Rencana Anggaran</a>
                                                            <ul>
                                                                <li><a href="project.html">2018</a></li>
                                                                <li><a href="project.html">2019</a></li>
                                                            </ul>
                                                        </li>
                                                        <li><a href="#">Perjanjian Kinerja</a>
                                                        </li>
                                                        <li class="dropdown"><a href="#">Renja</a>
                                                            <ul>
                                                                <li><a href="project.html">2019</a></li>
                                                                <li><a href="project.html">2020</a></li>
                                                                <li><a href="project.html">2021</a></li>
                                                            </ul>
                                                        </li>
                                                    </ul> --}}
                                                </li>
                                                <li><a href="{{ url('page/laporan') }}"><span>LAPORAN KINERJA</span></a>
                                                           {{--  <ul>
                                                                <li><a href="project.html">Neraca</a></li>
                                                                <li><a href="project.html">LRA</a></li>
                                                                <li><a href="project.html">Aset</a></li>
                                                                <li><a href="project.html">LAKIP 2020</a></li>
                                                                <li><a href="project.html">Indikator Kinerja Utama</a></li>
                                                            </ul> --}}
                                                </li>
                                                <li class="dropdown"><a href="#"><span>PPID</span></a>
                                                            <ul>
                                                                      <li><a href="{{ url('page/ppid/profil') }}">Seputar PPID</a></li>
                                                                      <li><a href="{{ url('page/ppid/visi') }}">Visi dan Misi</a></li>
                                                                      <li><a href="{{ url('page/ppid/tusi') }}">Tugas dan Fungsi</a></li>

                                                                        <li class="dropdown"><a href="#"><span>Pelayanan</span></a>
                                                                            <ul>
                                                                              <li><a href="{{ url('page/ppid/datang') }}">Permohonan Informasi Datang Langsung</a></li>
                                                                              <li><a href="{{ url('page/ppid/alur-datang') }}">Alur Permohonan Datang Langsung</a></li>
                                                                              <li><a href="{{ url('page/ppid/keberatan') }}">Pengajuan Keberatan</a></li>
                                                                              <li><a href="{{ url('page/ppid/sengketa') }}">Alur Penyelesaian Sengketa</a></li>
                                                                            </ul>
                                                                        </li>
                                                                      <li><a href="{{ url('page/ppid/sop') }}">SOP PPID</a></li>
                                                                      <li><a href="{{ url('page/ppid/sk') }}">SK TIM PPID</a></li>
                                                                      <li><a href="{{ url('page/ppid/regulasi') }}">Regulasi PPID</a></li>
                                                                      <li><a href="{{ url('page/ppid/laporan') }}">Laporan PPID</a></li>
                                                            </ul>
                                                </li>
                                                <li class="dropdown"><a href="#"><span>INFORMASI</span></a>
                                                            <ul>
                                                                <li><a href="{{ url('kasandra') }}">Kasandra</a></li>
                                                                <li><a href="{{ url('wbs') }}">Whistle Blowing System (WBS) </a></li>
                                                                <li><a href="{{ url('page/berita') }}">Berita</a></li>
                                                                <li><a href="{{ url('page/gallery') }}">Gallery</a></li>
                                                                <li><a href="{{ url('kegiatan') }}">Kegiatan</a></li>
                                                            </ul>
                                                </li>
                                                <li><a href="https://pengaduan.satpolpp.jatimprov.go.id"><span>PENGADUAN!</span></a>
                                                           {{--  <ul>
                                                                <li><a href="project.html">Neraca</a></li>
                                                                <li><a href="project.html">LRA</a></li>
                                                                <li><a href="project.html">Aset</a></li>
                                                                <li><a href="project.html">LAKIP 2020</a></li>
                                                                <li><a href="project.html">Indikator Kinerja Utama</a></li>
                                                            </ul> --}}
                                                </li>
                                            </ul>
                                        </div>
                                    </nav>
                                    <!-- Main Menu End-->


                                </div>

                            </div>
                            <!--End Header Style4 Right Bottom-->
                        </div>
                        <!--End Header Style4 Right-->
                    </div>
                </div>
            </div>
            <!--End header-->

            <!--Sticky Header-->
            <div class="sticky-header">
                <div class="container">
                    <div class="sticky-header__inner clearfix">
                        <!--Logo-->
                        <div class="logo float-left" style="padding-bottom:0px; padding-top:5px;">
                            <a href="{{ url('/ ') }}" class="img-responsive">
                                <img src="{{ asset('assets/landing/images/icon/satpol.png') }}" style="width: 70px;" alt="" title="">
                            </a>
                        </div>
                        <!--Right Col-->
                        <div class="right-col float-right">
                            <!-- Main Menu -->
                            <nav class="main-menu clearfix">
                                <!--Keep This Empty / Menu will come through Javascript-->
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <!--End Sticky Header-->

            <!-- Mobile Menu  -->
            <div class="mobile-menu">
                <div class="menu-backdrop"></div>
                <div class="close-btn"><span class="icon fa fa-times-circle"></span></div>
                <nav class="menu-box">
                    <div class="nav-logo"><a href="index.html"><img src="assets/images/resources/mobilemenu-logo.png"
                                alt="" title=""></a></div>
                    <div class="menu-outer">
                        <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
                    </div>
                    <!--Social Links-->
                    <div class="social-links">
                        <ul class="clearfix">
                            <li><a href="https://www.facebook.com/profile.php?id=100069090764586"><span class="fab fa fa-facebook-square"></span></a></li>
                            <li><a href="#"><span class="fab fa fa-tiktok"></span></a></li>
                            <li><a href="https://www.instagram.com/satpolpp_jatim/"><span class="icon-instagram-1"></span></a></li>
                            <li><a href="https://www.youtube.com/channel/UC5nAJAUFwSi3hUObMi8TOhw"><span class="fab fa fa-youtube-square"></span></a></li>
                        </ul>
                    </div>
                </nav>
            </div>
            <!-- End Mobile Menu -->
        </header>

@yield('content')
        <div class="bottom-parallax">
            <!--Start footer area -->
            <footer class="footer-area">
                <!--Start Footer-->
                <div class="footer pdb">
                    <div class="container">
                        <div class="row text-right-rtl">

                            <!--Start single footer widget-->
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                <div class="single-footer-widget marbtm50">
                                    <div class="title">
                                        <h3><span>Lokasi</span></h3>
                                    </div>
                                <iframe src="https://www.google.com/maps/embed?pb=!4v1650935537088!6m8!1m7!1s3nFUMqDsij3UZ1RPoMCa2w!2m2!1d-7.305538224972181!2d112.7580782362697!3f200.15244591599657!4f-18.514115755271717!5f0.7820865974627469" width="500" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                    {{-- <div class="our-company-info">
                                        <div class="footer-logo">
                                            <a href="index.html">
                                                <img src="assets/images/footer/footer-logo.png" alt="">
                                            </a>
                                        </div>
                                        <div class="text-box">
                                            <p>All the the gehratiors necessary.</p>
                                        </div>
                                        <div class="footer-social-link">
                                            <ul class="clearfix">
                                                <li>
                                                    <a href="#"><i class="icon-facebook"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="icon-twitter"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="icon-linkedin"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="icon-instagram-1"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div> --}}
                                </div>
                            </div>
                            <!--End single footer widget-->

                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                                <div class="single-footer-widget">
                                    <div class="footer-widget-info-box">
                                    <div class="title">
                                        <h3><span>Informasi Lebih Lanjut dan Layanan Pengaduan dapat menghubungi media yang tercantum di bawah ini</span></h3>
                                    </div>
                                        <ul>
                                            <li>
                                                <a href="mailto:yourmail@email.com">jks.satpolpp@jatimprov.go.id</a>
                                            </li>
                                            <li>
                                                <a href="https://api.whatsapp.com/send?phone=6281939123456">CALL/WA 0811-3516-499</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!--End single footer widget-->

                        </div>
                    </div>
                </div>
                <!--End Footer-->

                <div class="footer-bottom">
                    <div class="container">
                        <div class="bottom-inner">
                            <div class="copyright">
                                <p>Copyright &copy; 2022 <a href="index.html">Satuan Polisi Pamong Praja Provinsi Jawa Timur</a> All Rights Reserved.</p>
                            </div>
                        </div>
                    </div>
                </div>

            </footer>
            <!--End footer area-->
        </div>



        <button class="scroll-top scroll-to-target" data-target="html">
            <span class="flaticon-up-arrow"></span>
        </button>

        <!-- search-popup -->
        <div id="search-popup" class="search-popup">
            <div class="close-search"><i class="icon-close"></i></div>
            <div class="popup-inner">
                <div class="overlay-layer"></div>
                <div class="search-form">
                    <form method="post" action="index.html">
                        <div class="form-group">
                            <fieldset>
                                <input type="search" class="form-control" name="search-input" value=""
                                    placeholder="Search Here" required>
                                <input type="submit" value="Search Now!" class="theme-btn style-four">
                            </fieldset>
                        </div>
                    </form>
                    <h3>Recent Search Keywords</h3>
                    <ul class="recent-searches">
                        <li><a href="index.html">Dental Braces</a></li>
                        <li><a href="index.html">Whitening</a></li>
                        <li><a href="index.html">Implants</a></li>
                        <li><a href="index.html">Dental Surgery</a></li>
                        <li><a href="index.html">Cleaning</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- search-popup end -->


    </div>


    <script src="{{ asset('assets/landing/js/jquery.js')}}"></script>
    <script src="{{ asset('assets/landing/js/aos.js')}}"></script>
    <script src="{{ asset('assets/landing/js/appear.js')}}"></script>
    <script src="{{ asset('assets/landing/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{ asset('assets/landing/js/bootstrap-select.min.js')}}"></script>
    <script src="{{ asset('assets/landing/js/isotope.js')}}"></script>
    <script src="{{ asset('assets/landing/js/jquery.countTo.js')}}"></script>
    <script src="{{ asset('assets/landing/js/jquery.easing.min.js')}}"></script>
    <script src="{{ asset('assets/landing/js/jquery.enllax.min.js')}}"></script>
    <script src="{{ asset('assets/landing/js/jquery.fancybox.js')}}"></script>
    <script src="{{ asset('assets/landing/js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{ asset('assets/landing/js/jquery.paroller.min.js')}}"></script>
    <script src="{{ asset('assets/landing/js/jquery-ui.js')}}"></script>
    <script src="{{ asset('assets/landing/js/map-script.js')}}"></script>
    <script src="{{ asset('assets/landing/js/owl.js')}}"></script>
    <script src="{{ asset('assets/landing/js/pagenav.js')}}"></script>
    <script src="{{ asset('assets/landing/js/parallax.min.js')}}"></script>
    <script src="{{ asset('assets/landing/js/scrollbar.js')}}"></script>
    <script src="{{ asset('assets/landing/js/TweenMax.min.js')}}"></script>
    <script src="{{ asset('assets/landing/js/validation.js')}}"></script>
    <script src="{{ asset('assets/landing/js/wow.js')}}"></script>
    <script src="{{ asset('assets/landing/js/jquery-sidebar-content.js')}}"></script>
    <script src="{{ asset('assets/landing/js/jquery.twentytwenty.js')}}"></script>
    <script src="{{ asset('assets/landing/js/jquery.event.move.js')}}"></script>
    <script src="{{ asset('assets/landing/js/element-in-view.js')}}"></script>
    <script src="{{ asset('assets/landing/js/knob.js')}}"></script>
    <script src="{{ asset('assets/landing/js/vegas.min.js')}}"></script>

    <script src="{{ asset('assets/landing/js/jquery.bootstrap-touchspin.js')}}"></script>
    <script src="{{ asset('assets/landing/js/jquery.nice-select.min.js')}}"></script>
    <script src="{{ asset('assets/js/pages/jquery-captcha.min.js')}}"></script>
 
    <script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.11.5/datatables.min.js"></script>
    <script src="{{ asset('assets/landing/js/tilt.jquery.js')}}"></script>

    <script src="{{ asset('assets/plugins/forms/submit/jquery.form.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- thm custom script -->
    <script src="{{ asset('assets/landing/js/custom.js')}}"></script>
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-44S1H0GN2F"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'G-44S1H0GN2F');
    </script>
    @yield('script')


</body>

</html>