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
                                <h2>Survey Kepuasan Masyarakat</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="about-style2-area">
            <div class="container">
                <div class="row text-right-rtl">

                    <div class="col-xl-12">
                        <div class="about-style2__content">
                            <div class="sec-title">
                                <div class="sub-title">
                                    <h3></h3>
                                </div>
                                <h2> Nilai Indeks Kepuasan Masyrakat (IKM) bersumber dari SuKMa-e Jatim <span style="color:#06c706; font-weight: 750;">86.35</span> data per 1 Januari 2023 s/d Juli 2023   
                                </h2>
                            </div>
                            <div class="inner-content">

                            <img  src="{{ asset('assets/landing/images/icon/sukma.jpg') }}"> <br> <br>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </section>
@endsection