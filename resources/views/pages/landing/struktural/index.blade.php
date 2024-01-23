@extends('layouts.app_landing')
@section('content')
<section class="breadcrumb-area">
            <div class="breadcrumb-area-bg" style="background-image: url({{ asset('assets/landing/images/icon/section.JPG')}});">
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="inner-content text-center">
                            <div class="sub-title" data-aos="fade-down" data-aos-easing="linear"
                                data-aos-duration="1500">
                                <h3>Satuan Polisi Pamong Praja Provinsi Jawa Timur</h3>
                            </div>
                            <div class="title" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1500">
                                <h2>Pejabat Struktral</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="about-style2-area">
            <div class="container">
            <div class="row">

                    <div class="col-xl-5 col-lg-4">
                        <div class="team-details-img-box" style="margin-top: -160px;">
                            <img src="{{ asset('assets/landing/images/icon/kasat.png') }}" alt="">
                        </div>
                    </div>
                    <div class="col-xl-7 col-lg-8">
                        <div class="team-details-content-box">
                            <div class="top-title">
                                <h3> MUHAMMAD HADI WAWAN GUNTORO S.STP., M.SI</h3>
                                <p>Kepala Satuan Polisi Pamong Praja Provinsi Jawa Timur</p>
                            </div>

                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="team-details-text-box3">
                                        <h3>Karir</h3>
                                        <h4>2010</h4>
                                        <p>Kepala Sub Bagian Biro Administrasi Pemerintahan dan Otonomi Daerah</p>
                                        <h4>2016</h4>
                                        <p>Kepala Bagian Biro Administrasi Kemasyarakatan</p>
                                        <h4>2017</h4>
                                        <p>Kepala Bagian Biro Administrasi Kesejahteraan Sosial</p>
                                        <h4>2020</h4>
                                        <p>Kepala Biro Organisasi</p>
                                        <h4>2021</h4>
                                        <p>Kepala Satuan Polisi Pamong Praja</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <center class="mt-5 mb-5">
                    <h2><span>Pejabat Struktural</span> Eselon 3</h2>
                </center>
                <div class="row">
                    @foreach($eselon3 as $e)
                    <div class="col-sm-4 col-md-4 col-xl-4 col-lg-4">
                        <div class="single-team-style1">
                            <div class="img-holder">
                                <div class="inner">
                                    <img src="{{ asset('storage/uploads/foto_struktural/'.$e->foto) }}" alt="" />
                                    <div class="social-link-box-style2">
                                        <div class="inner-box">
                                            <a class="lightbox-image" data-fancybox="kabid" href="{{ asset('storage/uploads/foto_struktural/'.$e->foto) }}"><i class="fa fa-user" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="title-holder">
                                <div class="name">
                                    <h3><a class="lightbox-image" data-fancybox="kabids" href="{{ asset('storage/uploads/foto_struktural/'.$e->foto) }}"> <span>{{ $e->nama }}</span></a></h3>
                                    <div class="bottom">
                                        <span class="icon-picasa-logo"></span>
                                        <p>{{ $e->nama_jabatan }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>

                <center class="mt-5 mb-5">
                    <h2><span>Pejabat Struktural</span> Eselon 4</h2>
                </center>
                <div class="row">
                    @foreach($eselon4 as $e)
                    <div class="col-sm-3 col-md-3 col-xl-3 col-lg-3">
                        <div class="single-team-style1">
                            <div class="img-holder">
                                <div class="inner">
                                    <img src="{{ asset('storage/uploads/foto_struktural/'.$e->foto) }}" alt="" />
                                    <div class="social-link-box-style2">
                                        <div class="inner-box">
                                            <a class="lightbox-image" data-fancybox="kasi" href="{{ asset('storage/uploads/foto_struktural/'.$e->foto) }}"><i class="fa fa-user" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="title-holder">
                                <div class="name">
                                    <h3><a class="lightbox-image" data-fancybox="kasiss" href="{{ asset('storage/uploads/foto_struktural/'.$e->foto) }}"> <span>{{ $e->nama }}</span></a></h3>
                                    <div class="bottom">
                                        <span class="icon-picasa-logo"></span>
                                        <p>{{ $e->nama_jabatan }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    </div>
            </div>
        </section>
@endsection