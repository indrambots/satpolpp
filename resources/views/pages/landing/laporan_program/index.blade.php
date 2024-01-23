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
                            <div class="outer-text">Program dan Kegiatan</div>
                            <div class="inner-box">
                                <div class="icon">
                                    <span class="icon-picasa-logo"></span>
                                </div>
                                <div class="img-box float-bob-y">
                                    <img src="{{ asset('assets/landing/images/icon/laporan_kinerja.png') }}" alt="">
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
                                <h2> Dokumen Program & Kegiatan Satuan Polisi Pamong Praja Provinsi Jawa Timur
                                </h2>
                            </div>
                            <div class="inner-content">
                                <div class="table-responsive">
                                <table id="datatable" class="table table-striped table-hover">
                                    <thead>
                                      <tr>
                                        <th>id</th>
                                        <th>Nama Dokumen</th>
                                        <th>Aksi</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                    </tbody>
                                  </table>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </section>
@endsection
@section('script')
<script type="text/javascript">
    var datatable = $('#datatable').DataTable({
        processing: true,
        serverSide: false,
        paging:true,
        ajax:'{{ url('page/laporan-datatable/1') }}',
         columns: [
        {data: 'id', name:'id'},
        {data: 'nama', name:'nama'},
        {data: 'aksi', name:'aksi'},
        ],
        "order": [[ 0, "desc" ]],
        "columnDefs": [
            {
                "targets": [ 0 ],
                "visible": false,
                "searchable": false
            },
          ],
      })
    console.log(datatable)
    </script>
@endsection