@extends('layouts.app_landing')
@section('content')
<section class="breadcrumb-area">
            <div class="breadcrumb-area-bg" style="background-image: url({{ asset('assets/landing/images/icon/sampul.jpg')}});">
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
                                <h2>Kepegawaian </h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
</section>
<section class="fact-counter-area">
            <div class="container">
                <div class="row">
                    <!--Start Single Fact Counter-->
                    <div class="col-xl-3">
                        <div class="single-fact-counter text-center">
                            <div class="inner">
                                <div class="count-outer count-box counted">
                                    <span class="count-text" data-speed="3000" data-stop="4.6">124</span>
                                </div>
                            </div>
                            <div class="title">
                                <h3>Total ASN </h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3">
                        <div class="single-fact-counter text-center">
                            <div class="inner">
                                <div class="count-outer count-box counted">
                                    <span class="count-text" data-speed="3000" data-stop="4.6">14</span>
                                </div>
                            </div>
                            <div class="title">
                                <h3>Jabatan Struktural </h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3">
                        <div class="single-fact-counter text-center">
                            <div class="inner">
                                <div class="count-outer count-box counted">
                                    <span class="count-text" data-speed="3000" data-stop="4.6">83</span>
                                </div>
                            </div>
                            <div class="title">
                                <h3>Jabatan Pelaksana </h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3">
                        <div class="single-fact-counter text-center">
                            <div class="inner">
                                <div class="count-outer count-box counted">
                                    <span class="count-text" data-speed="3000" data-stop="4.6">27</span>
                                </div>
                            </div>
                            <div class="title">
                                <h3>Jabatan Fungsional </h3>
                            </div>
                        </div>
                    </div>
                    <!--End Single Fact Counter-->

                    <!--End Single Fact Counter-->
                </div>
            </div>
        </section>
        <section class="about-style2-area">
            <div class="container">
                <div class="row text-right-rtl">

                    <div class="col-xl-6">
                    <h3>Presentase ASN Berdasarkan Jenis Kelamin</h3>
                            <div id="jenis_kelamin" >
                            </div>
                    </div>
                    <div class="col-xl-6">
                    <h3>Presentase ASN Berdasarkan Usia</h3>
                            <div id="usia" >
                            </div>
                    </div>

                </div>

            </div>
        </section>
        <section class="fact-counter-area">
            <div class="container">
                <div class="row text-right-rtl">

                    <div class="col-xl-6">
                    <h3>Jumlah ASN Berdasarkan Pendidikan</h3>
                            <div id="pendidikan" >
                            </div>
                    </div>
                    <div class="col-xl-6">
                    <h3>Jumlah ASN Berdasarkan Golongan</h3>
                            <div id="golongan" >
                            </div>
                    </div>

                </div>

            </div>
        </section>
@endsection
@section('script')
<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
<script type="text/javascript">
    var options = {
          series: [114,10],
          chart: {
          width: 400,
          type: 'pie',
        },
        labels: ['ASN Pria', 'ASN Wanita'],
        responsive: [{
          breakpoint: 124,
          options: {
            chart: {
              width: 400
            },
            legend: {
              position: 'top'
            }
          }
        }]
        };

        var chart = new ApexCharts(document.querySelector("#jenis_kelamin"), options);
        chart.render();

        var option_usia = {
          series: [4,9,63,41,7],
          chart: {
          width: 400,
          type: 'pie',
        },
        labels: ['20 - 29','30-39','40-49','50 - 55', '> 55'],
        responsive: [{
          breakpoint: 124,
          options: {
            chart: {
              width: 400
            },
            legend: {
              position: 'top'
            }
          }
        }]
        };

        var chart_usia = new ApexCharts(document.querySelector("#usia"), option_usia);
        chart_usia.render();


        var options_pendidikan = {
          series: [{
            name:'ASN Berdasarkan pendidikan',
          data: [46,1,64,12]
        }],
          chart: {
          type: 'bar',
          height: 400
        },
        plotOptions: {
          bar: {
            borderRadius: 4,
            horizontal: true,
          }
        },
        dataLabels: {
          enabled: true
        },
        xaxis: {
          categories: ['SLTA','D-IV','S-1','S-2'
          ],
        },
        legend:{
            show:true,
            position:'bottom'
        }
        };

        var chart_pendidikan = new ApexCharts(document.querySelector("#pendidikan"), options_pendidikan);
        chart_pendidikan.render();


        var options_golongan = {
          series: [{
            name:'ASN Berdasarkan Golongan',
          data: [0,61,54,9]
        }],
          chart: {
          type: 'bar',
          height: 400
        },
        plotOptions: {
          bar: {
            borderRadius: 4,
            vertical: true,
          }
        },
        dataLabels: {
          enabled: true
        },
        xaxis: {
          categories: ['GOL-I','GOL-II','GOL-III','GOL-IV'
          ],
        },
        legend:{
            show:true,
            position:'bottom'
        },
        };

        var chart_golongan = new ApexCharts(document.querySelector("#golongan"), options_golongan);
        chart_golongan.render();
</script>
@endsection