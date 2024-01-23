@extends('layouts.app_landing')
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
                                <h2>Gallery </h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="blog-page-three">
            <div class="container">
            <div class="row">
            <div class="col-xl-12 col-lg-12">
                        <div class="blog-details-content">
                            <div class="single-blog-style1">

                            <div class="theme_carousel blog-style10-carousel center-box owl-dot-style1 owl-theme owl-carousel"
                                data-options='{"loop": true, "margin": 20, "autoHeight":true, "autoWidth":true, "lazyload":true, "nav": true, "dots": true, "autoplay": true, "autoplayTimeout": 5000, "smartSpeed": 500}'>
                                @foreach($berita->gambar as $g)
                                <div class="img-holder">
                                    <div class="inner" style=" width:770px; height: 570px">
                                        <a class="lightbox-image" data-fancybox="gallery" href="{{ asset('storage/uploads/berita/'.$g->file) }}">
                                            <img style="width:770px; height: 570px" src="{{ asset('storage/uploads/berita/'.$g->file) }}" alt="" />
                                        </a>
                                    </div>
                                    <div class="date-box" style="bottom: 10px;">
                                        <h6>{{ $berita->judul }}</h6>
                                    </div>
                                </div>
                                @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
@endsection