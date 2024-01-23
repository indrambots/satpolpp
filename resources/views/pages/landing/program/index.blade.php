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
                                <h2>Program dan Kegiatan </h2>
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
                            <div class="outer-text">Program</div>
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

                    <div class="col-xl-6">
                        <div class="about-style2__content">
                            <div class="sec-title">
                                <div class="sub-title">
                                    <h3></h3>
                                </div>
                                <h2> Program dan Kegiatan Tahun Anggaran 2022
                                </h2>
                            </div>
                            <div class="inner-content">
                                <div class="text">
                                    <p>There are many variations of passages of Lorem Ipsum available, but majority have
                                        suffered alteration in some form, by injected humour, or randomised words which
                                        don't look even slightly believable.</p>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </section>
@endsection