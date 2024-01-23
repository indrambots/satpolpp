@extends('layouts.app_portal')
@section('content')
<div class="row justify-content-center">
    <div class="col-12 col-lg-12 col-xl-12 mb-2">
        <div class="card card-custom wave wave-animate-fast wave-primary">
            <div class="card-body text-center">
                <h1>
                    TERIMA KASIH SUDAH MENDAFTARKAN DIRI ANDA, BERIKUT DI BAWAH INI USERNAME UNTUK ZOOM ANDA, JANGAN LUPA SCREENSHOOT PESAN INI YA <br>
                    <strong> <u> {{ Session::get('reg')->username }} </u> </strong>
                </h1>
            </div>
        </div>
    </div>
    <div class="col-6 col-lg-6 col-xl-6 ">
        <div class="card card-custom wave wave-animate-fast wave-primary">
            <div class="card-body text-center">

                <label>Untuk koordinasi lebih lanjut dapat menghubungi PIC dibawah ini</label>
               <table class="table" border="0">
                   <tr>
                       <td> Nama</td>
                       <td>Galih</td>
                   </tr>
                   <tr>
                       <td> No HP/WA</td>
                       <td>081232852122</td>
                   </tr>
               </table>
            </div>
        </div>
    </div>
    <div class="col-6 col-lg-6 col-xl-6 mb-5">
        <div class="card card-custom wave wave-animate-fast wave-primary">
            <div class="card-body text-center">

                <label style="font-size: 1.4em; font-weight: 500;">Silahkan klik tautan ini untuk bergabung di grup whatsapp</label> <br>
                <a href="https://chat.whatsapp.com/CGRdeG3TVHA7ZWafRdKt1t">
               <img src="{{ asset('assets/img/waicon.png') }}" style="width: 150px;">
               </a>
            </div>
        </div>
    </div>
</div>
@endsection