{{-- <html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SATPOL PP</title>
    <link href='https://fonts.googleapis.com/css?family=Lato:300,400|Montserrat:700' rel='stylesheet' type='text/css'>
    <style>
        @import url(//cdnjs.cloudflare.com/ajax/libs/normalize/3.0.1/normalize.min.css);
        @import url(//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css);
    </style>
        <link rel="stylesheet" href="{{asset('assets/GSA/fa/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="https://2-22-4-dot-lead-pages.appspot.com/static/lp918/min/default_thank_you.css">
    <script src="https://2-22-4-dot-lead-pages.appspot.com/static/lp918/min/jquery-1.9.1.min.js"></script>
    <script src="https://2-22-4-dot-lead-pages.appspot.com/static/lp918/min/html5shiv.js"></script>
</head>
<body>
    <header class="site-header" id="header">
        <h1 class="site-header__title" data-lead-id="site-header-title">THANK YOU!</h1>
    </header>

    <div class="main-content">
        <i class="fa fa-check main-content__checkmark" id="checkmark"></i>
        <p class="main-content__body" style="text-align:justif" data-lead-id="main-content-body">Terima kasih atas partisipasinya yang luar biasa untuk mendukung Patroli SIJALINMAJATARU 2023 dan menjadi bagian dari sejarah pencatatan rekor Baru MURI : "Memukul Kentongan secara Serentak dengan Lokasi Terbanyak" untuk Provinsi Jawa Timur.
Alhamdulillah antusiasme Satlinmas Desa dan Kelurahan luar biasa.
Registrasi akan DITUTUP Hari ini Sabtu, 31 Desember 2022 PKL. 13.00 WIB, untuk persiapan secara teknis..</p>
    </div>

    <footer class="site-footer" id="footer">
        <p class="site-footer__fineprint" id="fineprint">Copyright @2022 | Satuan Polisi Pamong Praja Provinsi Jawa Timur</p>
    </footer>
</body>
</html> --}}
@extends('layouts.app_portal')
@section('content')
<div class="row justify-content-center">
    <div class="col-12 col-lg-12 col-xl-12 mb-2">
        <div class="card card-custom wave wave-animate-fast wave-primary">
            <div class="card-body text-center">
                <h1>
                    REGISTERASI UNDANGAN PATROLI SIJALINMAJATARU
                </h1>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <div class="card card-custom gutter-b example example-compact">
            <div class="card-header">
                <h3 class="card-title">
                    FORM REGISTERASI PESERTA
                </h3>
            </div>
            <!--begin::Form-->
            <form class="form" method="POST" action="{{ url('patroli/save-kepala') }}">
            {{ csrf_field() }}
                <div class="card-body">
                    <div class="form-group">
                        <label class="mr-20">
                            Pilih Kota :
                        </label>
                         <select style="width:90%" class="select2  form-control" id="kota" name="kota"  required >
                            <option value="">--Pilih Kota Asal--</option>
                            @foreach($kota as $k)
                                <option value="{{ $k->nama }}">{{ $k->nama }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="mr-20">
                            Jabatan :
                        </label>
                         <select style="width:90%" class="select2  form-control" id="jabatan" name="jabatan"  required >
                            <option value="">--Pilih Jabatan--</option>
                            <option value="kepala_daerah">Bupati/Walikota</option>
                            <option value="dandim">DANDIM</option>
                            <option value="kapolres">KAPOLRES/KAPOLRESTA</option>
                            <option value="kajari">KAJARI</option>
                            <option value="pimpinan_dprd">PIMPINAN DPRD</option>
                            <option value="kasatpol">KASATPOL PP</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>
                            Nama Lengkap :
                        </label>
                        <input class="form-control form-control-solid" placeholder="isian nama lengkap. . ." name="nama" type="nama" required>
                            <span class="form-text text-muted">
                                Mohon isi nama lengkap anda
                            </span>
                        </input>
                    </div>
                    <div class="form-group">
                        <label>
                            Penanggung Jawab :
                        </label>
                        <input class="form-control form-control-solid" placeholder="penanggung jawab. . ." name="pj" type="pj" required>
                            <span class="form-text text-muted">
                                Mohon isi nama penanggung jawab
                            </span>
                        </input>
                    </div>
                    <div class="form-group">
                        <label>
                            Alamat kantor anda:
                        </label>
                        <input class="form-control form-control-solid" placeholder="isian alamat. . ." name="alamat" type="text" required>
                            <span class="form-text text-muted">
                                Mohon isi alamat kantor
                            </span>
                        </input>
                    </div>
                    <div class="form-group">
                        <label>
                            Email:
                        </label>
                        <input class="form-control form-control-solid" placeholder="isian email. . ." name="email" type="email" required>
                            <span class="form-text text-muted">
                                Mohon isi alamat email anda
                            </span>
                        </input>
                    </div>
                    <div class="form-group">
                        <label>
                            Lokasi Pemukulan Kentongan:
                        </label>
                        <input class="form-control form-control-solid" placeholder="isian lokasi. . ." name="lokasi_pemukulan_kentongan" type="text" required>
                            <span class="form-text text-muted">
                                Mohon lokasi pemukulan kentongan
                            </span>
                        </input>
                    </div>
                    <div class="form-group">
                        <label>
                            Jumlah Peserta:
                        </label>
                        <input class="form-control form-control-solid" placeholder="isian jumlah peserta. . ." name="jum_peserta" type="number" required>
                            <span class="form-text text-muted">
                                Mohon isi jumlah peserta
                            </span>
                        </input>
                    </div>
                    <div class="form-group">
                        <label>
                            Kontak Person:
                        </label>
                        <input class="form-control form-control-solid" placeholder="contact person. . ." name="cp" type="number" required>
                            <span class="form-text text-muted">
                                Nomor hp contact person
                            </span>
                        </input>
                    </div>
                    <!--end: Code-->
                </div>
                <div class="card-footer">
                    <button class="btn btn-primary mr-2" type="submit">
                        REGISTER
                    </button>
                </div>
            </form>
            <!--end::Form-->
        </div>
    </div>
</div>
@endsection
@section('script')
<script type="text/javascript">
</script>
@endsection
