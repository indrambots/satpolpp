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
                                <h2>Standar Operasional Prosedur (SOP) </h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="about-style2-area">
            <div class="container">
                <div class="row text-right-rtl">

                    <div class="col-xl-4">
                        <div class="about-style2__image">
                            <div class="outer-text">S O P</div>
                            <div class="inner-box">
                                <div class="icon">
                                    <span class="icon-picasa-logo"></span>
                                </div>
                                <div class="img-box float-bob-y">
                                    <img src="{{ asset('assets/landing/images/icon/program.png') }}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-8">
                        <div class="about-style2__content">
                            <div class="sec-title">
                                <div class="sub-title">
                                    <h3></h3>
                                </div>
                                <h2> Standar Operasional Prosedur
                                </h2>
                            </div>
                               <iframe src="https://drive.google.com/file/d/1NJ9H_k6GTglHFg_7eI_wOo8wm_Wv4bMc/preview" width="100%" height="580" allow="autoplay"></iframe>
                        </div>
                    </div>

                </div>

            </div>
        </section>
@endsection