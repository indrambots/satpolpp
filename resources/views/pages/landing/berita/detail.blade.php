@extends('layouts.app_landing')
@section('meta')
<meta property="og:title" content="{!! $berita->judul !!}">
<meta property="og:image" content="{{ asset('storage/uploads/berita/'.$berita->gambar[0]->file) }}">
<meta property="og:description" content="SIGAP PRESS RELEASE Satuan Polisi Pamong Praja Provinsi Jawa Timur
Jl. Jagir Wonokromo No.352, Sidosermo, Kec. Wonocolo, Surabaya, Jawa Timur 60239">
{{-- <meta property="og:url" content="{{ asset('storage/uploads/berita/'.$berita->gambar[0]->file) }}"> --}}
@endsection
@section('content')

<section class="breadcrumb-area">
            <div class="breadcrumb-area-bg" style="background-image: url({{ asset('assets/landing/images/icon/back.jpg')}});">
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
                                <h2>Berita </h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="blog-page-three">
            <div class="container">
            <div class="row">
            <div class="col-xl-8 col-lg-7">
                        <div class="blog-details-content">
                            <div class="single-blog-style1">

                            <div class="theme_carousel blog-style10-carousel center-box owl-dot-style1 owl-theme owl-carousel"
                                data-options='{"loop": true, "margin": 20, "autoHeight":true, "autoWidth":true, "lazyload":true, "nav": true, "dots": true, "autoplay": true, "autoplayTimeout": 5000, "smartSpeed": 500}'>
                                @foreach($berita->gambar as $g)
                                <div class="img-holder">
                                    <div class="inner" style=" width:700px; height: 400px">
                                        <a class="lightbox-image" data-fancybox="gallery" href="{{ asset('storage/uploads/berita/'.$g->file) }}">
                                            <img style="width:700px; height: 400px" src="{{ asset('storage/uploads/berita/'.$g->file) }}" alt="" />
                                        </a>
                                    </div>
                                    <div class="date-box" style="bottom: 10px;">
                                        <h6>{{ $berita->tanggal }}</h6>
                                    </div>
                                </div>
                                @endforeach
                                </div>
                                <div class="text-holder">
                                    <div class="text-inner">
                                        <h3 class="blog-title">
                                           {!! $berita->judul !!}
                                        </h3>
                                        <div class="text">
                                           {!! $berita->deskripsi !!}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
@endsection