@extends('layouts.app_landing')
@section('content')
<section class="breadcrumb-area">
            <div class="breadcrumb-area-bg" style="background-image: url({{ asset('assets/landing/images/icon/zi.png')}});">
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="inner-content text-center">
                            <div class="title" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1500">
                                <h2>Anda Memasuki Kawasan</h2>
                            </div>
                            <div class="sub-title" data-aos="fade-down" data-aos-easing="linear"
                                data-aos-duration="1500">
                                <h3 style="font-size:20pt; font-weight: 500;">Zona Integritas Menuju Wilayah Bebas Dari Korupsi</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

<section class="appointment-style1-area" style="padding-bottom: 0px;">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="appointment-form-box" style="padding-top:50px; padding-bottom:75px;">
                            <div class="bg-white"></div>
                            <div class="border-box"></div>
                            <div class="sec-title-style2 text-center">
                                <h2>KOMITMEN BERSAMA</h2>
                            </div>
                            <div class="appointment-form-box__inner">
                                <h3 style="text-align: center;">Seluruh pegawai di lingkungan Satuan Polisi Pamong Praja Provinsi Jawa Timur berkomitmen penuh terhadap pembangunan Zona Integritas Menuju Wilayah Bebas dari Korupsi (WBK) dan Wilayah Birokrasi Bersih dan Melayani (WBBM)</h3>      
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="about-style2-area">
            <div class="container">
                <div class="row text-right-rtl">

                    <div class="col-xl-6">
                        <div class="about-style2__image">
                            <div class="outer-text">Pencanangan Zona Integritas</div>
                            <div class="inner-box">
                                <div class="icon">
                                    <span class="icon-picasa-logo"></span>
                                </div>
                                <div class="img-box float-bob-y">
                                    <img src="{{ asset('assets/landing/images/icon/about.png') }}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-6">
                        <div class="about-style2__content">
                            <div class="sec-title">
                                <div class="sub-title">
                                </div>
                                <h2> 
                                </h2>
                            </div>
                            <div class="inner-content">
                                <div class="table-responsive">
                                <table id="datatable" class="table table-striped table-hover">
                                    <thead>
                                      <tr>
                                        <th>Nama Dokumen</th>
                                        <th>Aksi</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Pedoman PembangunanZona Integritas</td>
                                            <td><a type="button" target="_blank" href=">https://drive.google.com/drive/folders/1HZj7rW4MBp5i5MvtoCjc_eQJgp9wN1Np" class="btn btn-lg btn-primary">
                <i class="flaticon-open-archive"></i>
            </a></td>
                                        </tr>
                                        <tr>
                                            <td>Piagam Pencanangan</td>
                                            <td><a type="button" target="_blank" href="https://drive.google.com/file/d/1KB39X4a7deBH1S7SlX37aRyoVRd9rR6d/view?usp=sharing" class="btn btn-lg btn-primary">
                <i class="flaticon-open-archive"></i>
            </a></td>
                                        </tr>
                                        <tr>
                                            <td>Spanduk Komitmen Bersama</td>
                                            <td><a type="button" target="_blank" href="https://drive.google.com/file/d/10Zne6kiP6bNKW0FYU52bfHRLK6EQYviZ/view?usp=sharing" class="btn btn-lg btn-primary">
                <i class="flaticon-open-archive"></i>
            </a></td>
                                        </tr>
                                        <tr>
                                            <td>Susunan Acara</td>
                                            <td><a type="button" target="_blank" href="https://drive.google.com/file/d/1MGkyUye7evAbSfhGDdKsALENfypkdu-w/view?usp=sharing" class="btn btn-lg btn-primary">
                <i class="flaticon-open-archive"></i>
            </a></td>
                                        </tr>
                                    </tbody>
                                  </table>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <section class="gallery-style1-area">
            <div class="container">
                <div class="row">
                    <!--Start Single Gallery Style1-->
                    <div class="col-xl-4 col-lg-4 col-md-4">
                        <div class="single-galley-style1">
                            <div class="img-holder">
                                <img src="{{ asset('assets/img/zi.png') }}" alt="">
                            </div>
                            <div class="overlay-content text-center">
                                <div class="zoom-button">
                                    <a class="lightbox-image" data-fancybox="gallery" href="{{ asset('assets/img/zi.png') }}">
                                        <i class="flaticon-plus"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-4">
                        <div class="single-galley-style1">
                            <div class="img-holder">
                                <img src="{{ asset('assets/img/zi3.png') }}" alt="">
                            </div>
                            <div class="overlay-content text-center">
                                <div class="zoom-button">
                                    <a class="lightbox-image" data-fancybox="gallery" href="{{ asset('assets/img/zi3.png') }}">
                                        <i class="flaticon-plus"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End Single Gallery Style1-->
              
                    <div class="col-xl-4 col-lg-4 col-md-4">
                        <div class="single-galley-style1">
                            <div class="img-holder">
                                <img src="{{ asset('assets/img/zi2.png') }}" alt="">
                            </div>
                            <div class="overlay-content text-center">
                                <div class="zoom-button">
                                    <a class="lightbox-image" data-fancybox="gallery" href="{{ asset('assets/img/zi2.png') }}">
                                        <i class="flaticon-plus"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End Single Gallery Style1-->
                </div>
                    <!--End Single Gallery Style1-->
              

            </div>
        </section>
@endsection