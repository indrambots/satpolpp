@extends('layouts.app_portal')
@section('content')
<div class="row justify-content-center">
    <div class="col-12 col-lg-12 col-xl-12 mb-2">
        <div class="card card-custom wave wave-animate-fast wave-primary">
            <div class="card-body text-center">
                <h1>
                    TERIMA KASIH SUDAH MENDAFTARKAN DIRI ANDA, BERIKUT DI BAWAH INI USERNAME UNTUK ZOOM ANDA, JANGAN LUPA TEKAN GAMBAR TELEGRAM DAN SCREENSHOOT PESAN INI YA <br>
                    <strong> <u> {{ Session::get('reg')->username }} </u> </strong>
                </h1>
            </div>
        </div>
    </div>
    <div class="col-12 col-lg-12 col-xl-12 mb-5">
        <div class="card card-custom wave wave-animate-fast wave-primary">
            <div class="card-body text-center">

                <label style="font-size: 1.4em; font-weight: 500;">Silahkan klik tautan ini untuk bergabung di grup Telegram</label> <br>
                <a href="https://t.me/satlinmasindonesia">
               <img src="{{ asset('assets/img/telegram.png') }}" style="width: 150px;">
               </a>
            </div>
        </div>
    </div>
</div>
@endsection