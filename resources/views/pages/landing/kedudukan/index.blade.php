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
                                <h2>Kedudukan dan Lokasi </h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
</section>
<section class="location-info-area">
            <div class="container">
                <div class="row">
                    <!--Start Single Location Info Box-->
                    <div class="col-xl-12">
                        <div class="single-location-info-box">
                            <div class="img-holder">
                                <div class="inner">
                                    <img src="{{ asset('assets/landing/images/icon/kantor.jpg') }}" alt="">
                                </div>
                                <div class="flag">
                                    <img src="assets/images/resources/flag-1.jpg" alt="">
                                </div>
                            </div>
                            <div class="title-holder">
                                <h2>Kedudukan dan Alamat kami yang dapat dijangkau</h2>
                                <ul class="pt-2">
                                    <li>
                                        <div class="inner-title">
                                            <h4><i class="fas fa-map-marked-alt"> </i> Alamat</h4>
                                        </div>
                                        <div class="inner-text" style="padding-left: 100px;">
                                            <p style="font-size: 14pt;">Jln. Jagir Wonokromo No. 352, Kelurahan Wonocolo, Kecamatan Wonokromo, Surabaya</p>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="inner-title">
                                            <h4><i class="fas fa-address-book"> </i> Telephone</h4>
                                        </div>
                                        <div class="inner-text" style="padding-left: 100px;">
                                            <p style="font-size: 14pt;"> (031) 8412159</p>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="inner-title">
                                            <h4><i class="fas fa-mail-bulk"> </i> Email</h4>
                                        </div>
                                        <div class="inner-text" style="padding-left: 100px;">
                                            <p style="font-size: 14pt;"> jatim.polpp@gmail.com</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!--End Single Location Info Box-->
                </div>
            </div>
        </section>
        <section class="google-map-style2-area">
            <div class="auto-container">
                <div class="contact-page-map-outer">
                    <!--Map Canvas-->
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d989.3569437314159!2d112.758612!3d-7.305744!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xf680a30f9f59e315!2sSatpol%20PP%20Prov%20Jatim!5e0!3m2!1sen!2sus!4v1655952397347!5m2!1sen!2sus" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </section>
@endsection