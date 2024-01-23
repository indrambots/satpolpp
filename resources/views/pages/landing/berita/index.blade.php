@extends('layouts.app_landing')
@section('content')
<section class="breadcrumb-area">
            <div class="breadcrumb-area-bg" style="background-image: url({{ asset('assets/landing/images/icon/section22.jpg')}});">
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

        <section class="blog-page-two">
            <div class="container">
            <div class="row">
            @foreach($berita as $b)
                <div class="col-xl-4 col-lg-4 col-md-4">
                        <div class="single-blog-style1 single-blog-style1--instyle8 style10">
                            <div class="img-holder">
                                <div class="inner">
                                    <img src="{{ asset('storage/uploads/berita/'.$b->gambar[0]->file) }}" alt="" />
                                </div>
                                <div class="date-box">
                                    <h6>{{ $b->tanggal }}</h6>
                                </div>
                            </div>
                            <div class="text-holder">
                                <div class="text-inner">
                                    <h3 class="blog-title">
                                        <a href="{{ url('page/berita/'.$b->id) }}">{!!  substr($b->judul, 0, 100) !!}.</a>
                                    </h3>
                                    <div class="text">
                                        {{-- {!!  substr($b->deskripsi, 0, 100) !!} --}}
                                    </div>
                                </div>
                                <div class="single-blog-style10-btn">
                                    <a class="btn-two" href="{{ url('page/berita/'.$b->id) }}">
                                        Selengkapnya<span class="icon-left-arrow"></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
            @endforeach
            </div>
                    <div class="row">
                        <div class="col-xl-12">
                            {{ $berita->links() }}
                        </div>
                    </div>
            </div>
        </section>
@endsection