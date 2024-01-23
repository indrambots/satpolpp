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
                                <h2>Kegiatan / Acara </h2>
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
                        <div class="about-style2__image">
                            {{-- <div class="outer-text">Daftar Kegiatan / Acara </div> --}}
                            <div class="inner-content">

                                <div class="table-responsive">
                                <table id="datatable" class="table table-striped table-hover" data-page-length='15'>
                                    <thead>
                                      <tr>
                                        <th>#</th>
                                        <th>Nama Kegiatan</th>
                                        <th>Tema</th>
                                        <th>Tanggal</th>
                                        <th>Materi</th>
                                        <th>Dokumentasi</th>
                                        {{-- <th>Absensi</th> --}}
                                      </tr>
                                    </thead>
                                    <tbody>
                                    	@foreach($acara as $a)
                                    		<tr>
                                    			<td>{{$loop->iteration}}</td>
                                    			<td>{{$a->nama}}</td>
                                    			<td>{{$a->tema}}</td>
                                    			<td>{{$a->tanggal}}</td>
                                    			<td><a class="btn btn-md btn-success" href="{{$a->link_materi}}" target="_blank"><i class="fas fa-file-download"></i></a></td>
                                    			<td><a class="btn btn-md btn-success" href="{{$a->link_dokumentasi}}" target="_blank"><i class="fas fas fa-photo-video"></i></a></td>
                                    			{{-- <td>
                                                    @if(date('d') == date('d',strtotime($a->tanggal))) 
                                                    <a class="btn btn-success" href="{{ url('absensi/'.$a->id)}}" target="_blank"><i class="far fa-user-circle"></i> Absen</a>
                                                    @else
                                                    <button class="btn btn-dark" ><i class="far fa-user-circle"></i> Tutup</button>
                                                    @endif
                                                </td> --}}
                                    		</tr>
                                    	@endforeach
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
<script>
    $('#datatable').DataTable({})
</script>
@endsection