<html lang="en">
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
</html>

{{-- <div class="row">
    <div class="col-lg-12">
        <div class="card card-custom gutter-b example example-compact">
            <div class="card-header">
                <h3 class="card-title">
                    FORM REGISTERASI PESERTAA
                </h3>
            </div>
            <!--begin::Form-->
            <form class="form" method="POST" action="{{ url('patroli/save') }}">
            {{ csrf_field() }}
                <div class="card-body">
                    <div class="form-group">
                        <label>
                            Nama Lengkap PIC Desa:
                        </label>
                        <input class="form-control form-control-solid" placeholder="isian nama lengkap. . ." name="nama" type="nama" required>
                            <span class="form-text text-muted">
                                Mohon isi nama lengkap anda
                            </span>
                        </input>
                    </div>
                    <div class="form-group">
                        <label>
                            Nomor Handphone/WA:
                        </label>
                        <input class="form-control form-control-solid" placeholder="isian nomor hp. . ." name="nohp" type="number" required>
                            <span class="form-text text-muted">
                                Mohon isi nomor hp/wa yang dapat dihubungi
                            </span>
                        </input>
                    </div>
                    <div class="form-group">
                      <label class="mr-20">
                        Pilih Kota :
                      </label>
                       <select style="width:90%" class="select2  form-control" id="kota" name="kota"  required >
                      <option value="">--Pilih Kota Asal--</option>
                        @foreach($kota as $k)
                          <option value="{{ $k->id }}">{{ $k->nama }}</option>
                        @endforeach
                      </select>
                    </div>
                    <div class="form-group">
                      <label class="mr-20">
                        Pilih Kecamatan :
                      </label>
                       <select style="width:90%" class="select2  form-control" id="kecamatan" name="kecamatan"  required >
                      <option value="">--Pilih Kecamatan--</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label>
                        Pilih Kelurahan/Desa :
                      </label>
                       <select style="width:90%" class="select2  form-control" id="kelurahan" name="kelurahan"  required >
                      <option value="">--Pilih Kelurahan--</option>
                      </select>
                    </div>
                    <div class="form-group">
                        <label>
                            Alamat Kantor Kelurahan/Desa:
                        </label>
                        <input class="form-control form-control-solid" placeholder="isian alamat kantor. . ." type="text" name="alamat" required>
                            <span class="form-text text-muted">
                                Mohon isi alamat kantor kelurahan/desa
                            </span>
                        </input>
                    </div>
                    <div class="form-group">
                        <label>
                            Email:
                        </label>
                        <input class="form-control form-control-solid" placeholder="isian email. . ." type="email" name="email" required>
                            <span class="form-text text-muted">
                                Mohon isi email anda
                            </span>
                        </input>
                    </div>
                        <div class="alert alert-primary" role="alert">Mohon untuk mengisi minimal 10 nama anggota yang akan mengikuti patroli di desa / kelurahan anda di kolom yang telah disediakan di bawah ini.</div>
                    <div class="form-group row">
                        <div class="col-lg-4 mb-5">
                            <label>Anggota Patroli 1</label>
                            <input type="text" name="anggota[]" class="form-control" placeholder="Isikan Nama Anggota . . ." required>
                            
                        </div>
                        <div class="col-lg-4">
                            <label>Anggota Patroli 2</label>
                            <input type="text" name="anggota[]" class="form-control" placeholder="Isikan Nama Anggota. . ." required>
                            
                        </div>
                        <div class="col-lg-4">
                            <label>Anggota Patroli 3</label>
                            <input type="text" name="anggota[]" class="form-control" placeholder="Isikan Nama Anggota. . ." required>
                            
                        </div>
                        <div class="col-lg-4 mb-5">
                            <label>Anggota Patroli 4</label>
                            <input type="text" name="anggota[]" class="form-control" placeholder="Isikan Nama Anggota. . ." required>
                            
                        </div>
                        <div class="col-lg-4">
                            <label>Anggota Patroli 5</label>
                            <input type="text" name="anggota[]" class="form-control" placeholder="Isikan Nama Anggota. . ." required>
                            
                        </div>
                        <div class="col-lg-4">
                            <label>Anggota Patroli 6</label>
                            <input type="text" name="anggota[]" class="form-control" placeholder="Isikan Nama Anggota. . ." required>
                            
                        </div>
                        <div class="col-lg-4 mb-5">
                            <label>Anggota Patroli 7</label>
                            <input type="text" name="anggota[]" class="form-control" placeholder="Isikan Nama Anggota. . ." required>
                            
                        </div>
                        <div class="col-lg-4">
                            <label>Anggota Patroli 8</label>
                            <input type="text" name="anggota[]" class="form-control" placeholder="Isikan Nama Anggota. . ." required>
                            
                        </div>
                        <div class="col-lg-4">
                            <label>Anggota Patroli 9</label>
                            <input type="text" name="anggota[]" class="form-control" placeholder="Isikan Nama Anggota. . ." required>
                            
                        </div>
                        <div class="col-lg-4 mb-5">
                            <label>Anggota Patroli 10</label>
                            <input type="text" name="anggota[]" class="form-control" placeholder="Isikan Nama Anggota. . ." required>
                            
                        </div>
                        <div class="col-lg-4">
                            <label>Anggota Patroli 11</label>
                            <input type="text" name="anggota[]" class="form-control" placeholder="Isikan Nama Anggota. . .">
                            
                        </div>
                        <div class="col-lg-4">
                            <label>Anggota Patroli 12</label>
                            <input type="text" name="anggota[]" class="form-control" placeholder="Isikan Nama Anggota. . .">
                            
                        </div>
                        <div class="col-lg-4 mb-5">
                            <label>Anggota Patroli 13</label>
                            <input type="text" name="anggota[]" class="form-control" placeholder="Isikan Nama Anggota. . .">
                            
                        </div>
                        <div class="col-lg-4">
                            <label>Anggota Patroli 14</label>
                            <input type="text" name="anggota[]" class="form-control" placeholder="Isikan Nama Anggota. . .">
                            
                        </div>
                        <div class="col-lg-4">
                            <label>Anggota Patroli 15</label>
                            <input type="text" name="anggota[]" class="form-control" placeholder="Isikan Nama Anggota. . .">
                            
                        </div>
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
</div> --}}
{{-- @endsection
@section('script')
<script type="text/javascript">
  $('#kota').on('change',function(){
    $.ajax({
      method:'POST',
      url:'{{ url("patroli/filter-kec") }}',
      data:{
        kota: $(this).val(),
        '_token': $('input[name=_token]').val()
      },
      success:function(data){
        console.log(data);
        $('#kecamatan').html(data.view_kecamatan);
        $('#kelurahan').html(data.view_kelurahan);
      }
    })
  })

  $('#kecamatan').on('change',function(){
    $.ajax({
      method:'POST',
      url:'{{ url("patroli/filter-kel") }}',
      data:{
        kota: $('#kota').val(),
        kecamatan: $(this).val(),
        '_token': $('input[name=_token]').val()
      },
      success:function(data){
        console.log(data);
        $('#kelurahan').html(data.view_kelurahan);
      }
    })
  })
</script>
@endsection --}}
