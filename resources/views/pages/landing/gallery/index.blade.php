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
                                <h2>GALLERY </h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

         <section class="project-style10-area">
            <div class="container">
                <div class="sec-title-style7 text-center">
                    <div class="icon">
                        <span class="icon-picasa-logo"></span>
                    </div>
                    <h2>Gallery Foto Satuan Polisi Pamong Praja <br> Provinsi Jawa Timur</h2>
                </div>
            </div>
            <div class="container">
                <div class="row filter-layout isotope-block">
                    <!--Start Single project style8-->
                    @foreach($berita as $b)
                    <div class="col-xl-6 col-lg-6 col-md-12 filter-item web-design apps-design">
                        <div class="single-project-style7 single-project-style7--instyle10">
                            <div class="img-holder">
                                <img style="height: 570px; width: 570px;" src="{{ asset('storage/uploads/berita/'.$b->gambar[0]->file) }}" alt="">
                            </div>
                            <div class="content-box">
                                <div class="inner">
                                    <div class="border-box"></div>
                                    <div class="inner-title">
                                        <h4><a href="{{ url('page/gallery/'.$b->id) }}">{{ $b->judul }}</a></h4>
                                        <p>{{ $b->tanggal }}</p>
                                    </div>
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