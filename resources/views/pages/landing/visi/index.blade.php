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
                                <h3>Pemerintah Provinsi Jawa Timur</h3>
                            </div>
                            <div class="title" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1500">
                                <h2>Visi dan Misi</h2>
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
                            <div class="outer-text">VISI DAN MISI PEMERINTAH PROVINSI JAWA TIMUR</div>
                            <div class="inner-box">
                                <div class="icon">
                                    <span class="icon-picasa-logo"></span>
                                </div>
                                <div class="img-box float-bob-y">
                                    <img src="{{ asset('assets/landing/images/icon/visi.jpg') }}" alt="">
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
                                <h2> Visi dan Misi Pemerintah Provinsi Jawa Timur
                                </h2>
                            </div>
                            <div class="inner-content">
                                <div class="text">
                                    <h3>Visi</h3>
                                    <p>"Terwujudnya masyarakat Jawa Timur yang adil, sejahtera, unggul dan berakhlak dengan tata kelola pemerintahan yang partisipatoris inklusif melalui kerja sama dan semangat gotong royong"</p>
                                    <br>
                                    <h3>Misi</h3>
                                    <p>
                                        <ol>
                                            <li>Keseimbangan pembangunan ekonomi, baik antar kelompok, antar sektor maupun antar wilayah</li>
                                            <li>Terciptanya kesejahteraan yang berkeadilan sosial dengan memperhatikan kelompok masyarakat yang rentan.</li>
                                            <li>Pemenuhan dasar kebutuhan masyarakat Jawa Timur yang meliputi jaminan kesehatan masyarakat, jaminan pendidikan serta membangun kedaulatan pangan</li>
                                            <li>Kemudahan akses terhadap lapangan pekerjaan dan keterhubungan wilayah</li>
                                            <li>Tata kelola pemerintahan yang bersih, terbuka, dan partisipatoris</li>
                                            <li>Memperkuat demokrasi kewargaan untuk yang menghadirkan ruang sosial yang menghargai prinsip kebhinekaan</li>
                                            <li>Pembangunan yang berwawasan lingkungan untuk menjamin keselarasan ruang ekologi, ruang sosial, ruang ekonomi dan ruang budaya</li>
                                        </ol>
                                    </p>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </section>
@endsection