@extends('layouts.app_portal')
@section('content')
@if(Session::get('patroli') !== null)
<?php $pic = \App\Kota::find(Session::get('patroli')->kode_kab);
?>
<div class="row justify-content-center">
    <div class="col-12 col-lg-12 col-xl-12 mb-5">
        <div class="card card-custom wave wave-animate-fast wave-primary">
            <div class="card-body text-center">
                <h1>
                    Jangan lupa screenshoot pesan ini ya
                    <strong> <u> {{ Session::get('patroli')->username }} </u> </strong>
                </h1>
            </div>
        </div>
    </div>
    <div class="col-6 col-lg-6 col-xl-6 ">
        <div class="card card-custom wave wave-animate-fast wave-primary">
            <div class="card-body text-center">

                <label>Desa Anda masuk wilayah <span style="font-weight: 500; font-size: 1.2em; color: red;"> {{ $pic->wilayah }} </span> untuk koordinasi lebih lanjut dapat menghubungi PIC dibawah ini</label>
               <table class="table" border="0">
                   <tr>
                       <td> Nama</td>
                       <td>{{ $pic->pic }}</td>
                   </tr>
                   <tr>
                       <td> No HP/WA</td>
                       <td>{{ $pic->nohp }}</td>
                   </tr>
               </table>
            </div>
        </div>
    </div>
    <div class="col-6 col-lg-6 col-xl-6 mb-5">
        <div class="card card-custom wave wave-animate-fast wave-primary">
            <div class="card-body text-center">

                <label style="font-size: 1.4em; font-weight: 500;">Silahkan <a href="{{ $pic->tautan }}"><strong>KLIK GAMBAR DIBAWAH INI </strong> </a> untuk bergabung di grup whatsapp</label> <br>
                <a href="{{ $pic->tautan }}">
               <img src="{{ asset('assets/img/waicon.png') }}" style="width: 150px;">
               </a>
            </div>
        </div>
    </div>
</div>
<div class="alert alert-danger" role="alert"> <h3>Jangan lupa screenshoot pesan ini ya </h3></div>
@endif
@if(Session::get('cek') !== null)
<?php $pic = \App\Kota::find(Session::get('cek')->kode_kab); ?>
<div class="row justify-content-center">
    <div class="col-12 col-lg-12 col-xl-12 mb-2">
        <div class="card card-custom wave wave-animate-fast wave-primary">
            <div class="card-body text-center">
                <h1>
                    KELURAHAN/ DESA ANDA SUDAH MELAKUKAN REGISTERASI DENGAN USERNAME : <br>
                    <strong> <u> {{ Session::get('cek')->username }} </u> </strong> <br>
                    SILAHKAN MENGHUBUNGI :
                    {{ Session::get('cek')->nama }}

                    {{ Session::get('cek')->nohp }}
                </h1>
            </div>
        </div>
    </div>
    <div class="col-6 col-lg-6 col-xl-6 ">
        <div class="card card-custom wave wave-animate-fast wave-primary">
            <div class="card-body text-center">

                <label>Desa Anda masuk wilayah <span style="font-weight: 500; font-size: 1.2em; color: red;"> {{ $pic->wilayah }} </span> untuk koordinasi lebih lanjut dapat menghubungi PIC dibawah ini</label>
               <table class="table" border="0">
                   <tr>
                       <td> Nama</td>
                       <td>{{ $pic->pic }}</td>
                   </tr>
                   <tr>
                       <td> No HP/WA</td>
                       <td>{{ $pic->nohp }}</td>
                   </tr>
               </table>
            </div>
        </div>
    </div>
    <div class="col-6 col-lg-6 col-xl-6 mb-5">
        <div class="card card-custom wave wave-animate-fast wave-primary">
            <div class="card-body text-center">

                <label style="font-size: 1.4em; font-weight: 500;">Silahkan <a href="{{ $pic->tautan }}"><strong>KLIK GAMBAR DIBAWAH INI </strong> </a>untuk bergabung di grup whatsapp</label> <br>
                <a href="{{ $pic->tautan }}">
               <img src="{{ asset('assets/img/waicon.png') }}" style="width: 150px;">
               </a>
            </div>
        </div>
    </div>
</div>
@endif
@endsection