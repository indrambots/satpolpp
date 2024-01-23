@extends('layouts.app_landing')
@section('content')
<section class="breadcrumb-area">
            <div class="breadcrumb-area-bg" style="background-image: url({{ asset('assets/landing/images/icon/bggren.jpg')}});">
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="inner-content text-center">
                            <div class="title" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1500">
                                <h2> Tulis Pengaduan</h2>
                            </div>
                            <div class="sub-title" data-aos="fade-down" data-aos-easing="linear"
                                data-aos-duration="1500">
                                <h3>Apabila Anda mendapati adanya pelanggaran di lingkungan Satuan Polisi Pamong Praja Provinsi Jawa Timur, silahkan laporkan. Laporan Anda akan ditindaklanjuti apabila sesuai dengan syarat/kriteria Laporan. Anda tidak perlu khawatir terungkapnya identitas diri anda karena kami akan MERAHASIAKAN & MELINDUNGI Identitas Anda sebagai whistleblower. Kami sangat menghargai informasi yang Anda laporkan. </h3>
                        
                            </div>
                        </div>
                    </div>
                </div>
            </div>
</section>
<section class="about-style2-area">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="appointment-form-box">
                            <div class="bg-white"></div>
                            <div class="border-box"></div>
                            <div class="sec-title-style2 text-center">
                                <div class="icon">
                                    <span class="icon-picasa-logo"></span>
                                </div>
                                <h2><span>Form</span> Whistle Blowing System </h2>
                            </div>
                            <div class="appointment-form-box__inner">
                                <form id="wbs" name="appointment_form" class="default-form2" action="{{ url('wbs/save') }}" enctype="multipart/form-data" method="POST">
                                    {{ csrf_field() }}
                                    <div class="row">

                                        <div class="col-xl-12">
                                            <div class="form-group">
                                                <div class="label">
                                                    <label for="nama" style="line-height: 15px;">Nama Lengkap<span>*</span></label>
                                                </div>
                                                <div class="input-box">
                                                    <input type="text" name="nama" id="nama" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-12">
                                            <div class="form-group">
                                                <div class="label">
                                                    <label for="nama" style="line-height: 15px;">NIK<span>*</span></label>
                                                </div>
                                                <div class="input-box">
                                                    <input type="number" class="form-control" name="nik" id="nik" required>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-xl-6">
                                            <div class="form-group">
                                                <div class="label">
                                                    <label for="nama" style="line-height: 15px;">No Telp<span>*</span></label>
                                                </div>
                                                <div class="input-box">
                                                    <input type="number" class="form-control" name="no_telp" id="no_telp" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-6">
                                            <div class="form-group">
                                                <div class="label">
                                                    <label for="email" style="line-height: 15px;">Email<span>*</span></label>
                                                </div>
                                                <div class="input-box">
                                                    <input type="email" name="email" id="email" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-12">
                                            <div class="form-group">
                                                <div class="label">
                                                    <label for="nama" style="line-height: 15px;">Nama Terlapor<span>*</span></label>
                                                </div>
                                                <div class="input-box">
                                                    <input type="text" name="nama_terlapor" id="nama_terlapor" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-12">
                                            <div class="form-group">
                                                <div class="label">
                                                    <label for="nama" style="line-height: 15px;">Tanggal Kejadian<span>*</span></label>
                                                </div>
                                                <div class="input-box">
                                                    <input type="date" name="tanggal" id="tanggal" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-12">
                                            <div class="form-group">
                                                <div class="label">
                                                    <label for="nama" style="line-height: 15px;">Tempat Kejadian<span>*</span></label>
                                                </div>
                                                <div class="input-box">
                                                    <input type="text" name="tempat" id="tempat" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-12">
                                            <div class="form-group">
                                                <div class="label">
                                                    <label for="nama" style="line-height: 15px;">Detail Kejadian<span>*</span></label>
                                                </div>
                                                <div class="input-box">
                                                    <textarea name="detail_kejadian" rows="6" placeholder="Ceritakan dengan rinci kejadian yang anda laporkan" required></textarea>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-xl-12">
                                            <div class="form-group">
                                                <div class="label">
                                                    <label for="nama" style="line-height: 15px;">Bukti Dukung Kejadian<span>*</span></label>
                                                </div>
                                                <div class="input-box">
                                                    <input type="file" name="bukti" accept="application/pdf" />
                                                </div>
                                                <span class="text-warning">Mohon untuk mengupload file pdf</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-12">
                                    

                <canvas id="canvas" style="width:250px;">
                </canvas>
                                            <h2 style="font-size:14pt">
                                                Isikan Captcha diatas:
                                            </h2>
                                            <input class="form-control" name="code">
                                            </input>
                                        </div>
                                        <div class="col-xl-12">
                                            <div class="button-box text-center">
                                                <button class="btn-one" type="submit" data-loading-text="Please wait...">
                                                    <span class="border-box"></span>
                                                    <span class="bg bg--white"></span>
                                                    <span class="txt">SUBMIT LAPORAN<i class="icon-left-arrow arrow"></i></span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
@endsection
@section('script')
<script type="text/javascript">
    
      const captcha = new Captcha($('#canvas'),{
        length: 5
      });
        $('#wbs').on('submit', function(e) {
            e.preventDefault()
        const ans = captcha.valid($('input[name="code"]').val());
        if(ans == true)
        {
            $(this).ajaxSubmit({
              success:function(data){
                Swal.fire({
                          title               : "Berhasil",
                          text                : "Terima kasih, aduan anda telah kami terima dan akan kami dalami terlebih dahulu kasus anda",
                          icon                : "success",
                          showCancelButton    : false,
                        }).then((result) => {

                             window.top.close();
                        })
              }
            })
        }
        else {
            Swal.fire({
                          title               : "Gagal",
                          text                : "Periksa kembali captcha yang anda isikan",
                          icon                : "warning",
                          showCancelButton    : false,
                        })
        }
        captcha.refresh();
      })
</script>
@endsection