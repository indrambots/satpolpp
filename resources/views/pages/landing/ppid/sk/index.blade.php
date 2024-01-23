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
                                <h2>SK TIM PPID </h2>
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
                            <div class="outer-text">SK Tim PPID</div>
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
                                <h2> Surat Keputusan Mengenai Tim PPID 
                                </h2>
                            </div>
                            <div class="inner-content">
                                <div class="text">
                                    <div class="table-responsive">
                                        <table id="datatable" class="table table-striped table-hover">
                                            <thead>
                                              <tr>
                                                <th>#</th>
                                                <th>Nama Dokumen</th>
                                                <th>Aksi</th>
                                              </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>SK TIM PPID TAHUN 2022 </td>
                                                    <td><a target="_blank" href="https://drive.google.com/file/d/12PiRrskeL85t6y0TtgntSoTOLg9prQLp/view?usp=sharing" class="btn btn-md btn-primary" style="color: white;"> LIHAT DOKUMEN</a></td>
                                                </tr>
                                                <tr>
                                                    <td>2</td>
                                                    <td>SK TIM PPID TAHUN 2023 </td>
                                                    <td><a target="_blank" href="https://drive.google.com/file/d/1o7od3Vwr8uQOboh4xDGX_AV3fJeyzpok/view" class="btn btn-md btn-primary" style="color: white;"> LIHAT DOKUMEN</a></td>
                                                </tr>
                                            </tbody>
                                          </table>
                                        </div>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </section>
@endsection