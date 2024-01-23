@extends('layouts.app_portal')
@section('content')
 <div class="row justify-content-center">
        <div class="col-8 col-lg-8 col-xl-8 mb-5">
            <div class="card card-custom wave wave-animate-fast wave-primary">
                <div class="card-body text-center">
                    <a href="javascript:void(0);" data-toggle="modal" data-target="#desitar">
                        <span class="svg-icon svg-icon-primary svg-icon-6x">
                            <img src="{{ asset('assets/img/desitar.png') }}" style="width: 400px; height: 150px;">
                        </span>
                    </a>
                    <br>
                    <a href="javascript:void(0);" data-toggle="modal" data-target="#desitar"
                        class="text-dark text-hover-primary font-weight-bold font-size-h4 mb-3">POSKOLIN DESITAR</a>
                </div>
            </div>
        </div>
        </div>
 <div class="row justify-content-center">
        <div class="col-4 col-lg-4 col-xl-4 mb-5">
            <div class="card card-custom wave wave-animate-fast wave-primary">
                <div class="card-body text-center">
                    <a href="{{ url('kasandra') }}">
                        <span class="svg-icon svg-icon-primary svg-icon-6x">
                            <img src="{{ asset('assets/img/sigaplogo.PNG') }}" style="width: 150px; height: 150px;">
                        </span>
                    </a>
                    <br>
                    <a href="{{ url('kasandra') }}"
                        class="text-dark text-hover-primary font-weight-bold font-size-h4 mb-3">KASANDRA</a>
                </div>
            </div>
        </div>
        <div class="col-4 col-lg-4 col-xl-4 mb-5">
            <div class="card card-custom wave wave-animate-fast wave-primary">
                <div class="card-body text-center">
                    <a href="http://sijalinmaja.jatimprov.go.id">
                        <span class="svg-icon svg-icon-primary svg-icon-6x">
                            <img src="{{ asset('assets/img/sigaplogo.PNG') }}" style="width: 150px; height: 150px;">
                        </span>
                    </a>
                    <br>
                    <a href="http://sijalinmaja.jatimprov.go.id"
                        class="text-dark text-hover-primary font-weight-bold font-size-h4 mb-3">SIJALINMAJA</a>
                </div>
            </div>
        </div>
        <div class="col-4 col-lg-4 col-xl-4 mb-5">
            <div class="card card-custom wave wave-animate-fast wave-primary">
                <div class="card-body text-center">
                    <a href="javascript:void(0);" data-toggle="modal" data-target="#puskogap">
                        <span class="svg-icon svg-icon-primary svg-icon-6x">
                            <img src="{{ asset('assets/img/sigaplogo.PNG') }}" style="width: 150px; height: 150px;">
                        </span>
                    </a>
                    <br>
                    <a href="javascript:void(0);" data-toggle="modal" data-target="#puskogap"
                        class="text-dark text-hover-primary font-weight-bold font-size-h4 mb-3">PUSKOGAP</a>
                </div>
            </div>
        </div>
         <div class="col-4 col-lg-4 col-xl-4 mb-5">
            <div class="card card-custom wave wave-animate-fast wave-primary">
                <div class="card-body text-center">
                    <a href="javascript:void(0);" data-toggle="modal" data-target="#kakanda">
                        <span class="svg-icon svg-icon-primary svg-icon-6x">
                            <img src="{{ asset('assets/img/sigaplogo.PNG') }}" style="width: 150px; height: 150px;">
                        </span>
                    </a>
                    <br>
                    <a href="javascript:void(0);" data-toggle="modal" data-target="#kakanda"
                        class="text-dark text-hover-primary font-weight-bold font-size-h4 mb-3">KAKANDA</a>
                </div>
            </div>
        </div>
        <div class="col-4 col-lg-4 col-xl-4 mb-5">
            <div class="card card-custom wave wave-animate-fast wave-primary">
                <div class="card-body text-center">
                    <a href="https://simlinmas.kemendagri.go.id/management/login">
                        <span class="svg-icon svg-icon-primary svg-icon-6x">
                           <img src="{{ asset('assets/img/linmas.png') }}" style="width: 150px; height: 150px;">
                        </span>
                    </a>
                    <br>
                    <a href="https://simlinmas.kemendagri.go.id/management/login"
                        class="text-dark text-hover-primary font-weight-bold font-size-h4 mb-3">SIMLINMAS</a>
                </div>
            </div>
        </div>
        <div class="col-4 col-lg-4 col-xl-4 mb-5">
            <div class="card card-custom wave wave-animate-fast wave-primary">
                <div class="card-body text-center">
                    <a href="https://linktr.ee/KIPJBMB2022">
                        <span class="svg-icon svg-icon-primary svg-icon-6x">
                           <img src="{{ asset('assets/img/benderah.png') }}" style="width: 200px; height: 150px;">
                        </span>
                    </a>
                    <br>
                    <a href="https://linktr.ee/KIPJBMB2022"
                        class="text-dark text-hover-primary font-weight-bold font-size-h4 mb-3">KIP JBMB 2022</a>
                </div>
            </div>
        </div>
        <div class="col-4 col-lg-4 col-xl-4 mb-5">
            <div class="card card-custom wave wave-animate-fast wave-primary">
                <div class="card-body text-center">
                    <a href="javascript:void(0);" data-target="#redkar" data-toggle="modal">
                        <span class="svg-icon svg-icon-primary svg-icon-6x">
                           <img src="{{ asset('assets/img/redkar.png') }}" style="width: 150px; height: 150px;">
                        </span>
                    </a>
                    <br>
                    <a href="javascript:void(0);" data-target="#redkar" data-toggle="modal"
                        class="text-dark text-hover-primary font-weight-bold font-size-h4 mb-3">Relawan Pemadam Kebakaran</a>
                </div>
            </div>
        </div>
        <div class="col-4 col-lg-4 col-xl-4 mb-5">
            <div class="card card-custom wave wave-animate-fast wave-primary">
                <div class="card-body text-center">
                    <a href="javascript:void(0);" data-target="#saka" data-toggle="modal">
                        <span class="svg-icon svg-icon-primary svg-icon-6x">
                           <img src="{{ asset('assets/img/saka.png') }}" style="width: 150px; height: 150px;">
                        </span>
                    </a>
                    <br>
                    <a href="javascript:void(0);" data-target="#saka" data-toggle="modal"
                        class="text-dark text-hover-primary font-weight-bold font-size-h4 mb-3">Saka Praja Wibawa</a>
                </div>
            </div>
        </div>
 </div>
 <div class="modal fade" id="desitar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog modal-xl" role="document">
    <div class="modal-content">
      <div class="modal-header modal-header bg-diagonal bg-diagonal-primary bg-diagonal-r-light">
        <h5 class="modal-title" id="exampleModalLongTitle" style="color: white; z-index: 2;">Poskolin DESITAR (Desa Sigap Cetar)</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p style="text-align: justify;">Merupakan sebuah gambaran desa di Jawa Timur dengan perlindungan masyarakat untuk menuju wilayah yang tenteram, tertib, aman, unggul dan patuh dengan peradaban masyarakat  yang lebih modern Untuk mencapai Desa Sigap Cetar, Satpol PP Prov Jatim membuat beberapa program antara lain : </p>
        <div class="row">
            <div class="col-6">
                <div class="card-body exs mb-5" style="background:url('data:image/svg+xml,%3csvg width='100%25' height='100%25' xmlns='http://www.w3.org/2000/svg'%3e%3crect width='100%25' height='100%25' fill='none' stroke='%23505050D1' stroke-width='4' stroke-dasharray='14%2c 23%2c 16' stroke-dashoffset='0' stroke-linecap='square'/%3e%3c/svg%3e') ">
                <h3>KASANDRA</h3>
                <p style="text-align:justify;">Apa itu kasandra ? Kasandra adalah singkatan dari kamus penegakan peraturan daerah dan peraturan kepala daerah. Tujuan dibentuknya kasandra adalah menghimpun, mempermudah pelaksanaan tugas Satpol PP dalam menegakkan Peraturan Daerah dan Peraturan Kepala Daerah di wilayah Provinsi Jawa Timur </p>
                </div>
            </div>
            <div class="col-6">
                <div class="card-body exs mb-5" style="background:url('data:image/svg+xml,%3csvg width='100%25' height='100%25' xmlns='http://www.w3.org/2000/svg'%3e%3crect width='100%25' height='100%25' fill='none' stroke='%23505050D1' stroke-width='4' stroke-dasharray='14%2c 23%2c 16' stroke-dashoffset='0' stroke-linecap='square'/%3e%3c/svg%3e') ">

                <h3>KAKANDA</h3>
                <p style="text-align: justify;"> Membentuk kakanda (kader penegakan perda), fungsi dari kakanda adalah sebagai agen Satpol PP Prov Jawa Timur dalam mensosialisasikan Perda/Perkada Prov Jawa Timur serta meningkatkan kesadaran daan kepatuhan hukum bagi masyarakat</p>
                </div>
            </div>
            <div class="col-6">
                <div class="card-body exs mb-5"style="background:url('data:image/svg+xml,%3csvg width='100%25' height='100%25' xmlns='http://www.w3.org/2000/svg'%3e%3crect width='100%25' height='100%25' fill='none' stroke='%23505050D1' stroke-width='4' stroke-dasharray='14%2c 23%2c 16' stroke-dashoffset='0' stroke-linecap='square'/%3e%3c/svg%3e') ">
                <h3>SIJALINMAJA</h3>
                <p style="text-align: justify;">SIJALINMAJA (Sistem Integrasi Jaga Lindungi Masyarakat Jawa Timur) merupakan sistem yang memetakan gangguan ketentraman dan ketertiban umum di seluruh Jawa Timur. Sehingga nantinya dapat diketahui daerah mana saja yang memiliki tingkat kerawanan gangguan trantibum tinggi agar selanjutnya dapat dilakukan tindak lanjut SatpolPP Jawa Timur bersama dengan SatpolPP Kabupaten/Kota. </p>
                </div>
            </div>
            <div class="col-6">
                <div class="card-body exs mb-5" style="background:url('data:image/svg+xml,%3csvg width='100%25' height='100%25' xmlns='http://www.w3.org/2000/svg'%3e%3crect width='100%25' height='100%25' fill='none' stroke='%23505050D1' stroke-width='4' stroke-dasharray='14%2c 23%2c 16' stroke-dashoffset='0' stroke-linecap='square'/%3e%3c/svg%3e') ">

                 <h3>KEJAR SIROMA</h3>
                <p style="text-align: justify;">Kelas Belajar Sigap, Romantis (Sinergis, Gerak Cepat, Antisipatif, Persuasif, Pro Aktif, Humanis, Taktis dan Strategis) merupakan program wadah/tempat diskusi, saling bertukar pikiran,dan koordinasi dalam rangka peningkatan kompetensi warga Satpol PP Prov Jawa Timur melalui pemanfaatan teknologi (zoom meeting).
Program ini nantinya akan diadopsi di Desa dengan nama <strong>Kejar Desitar</strong>tujuannya adalah sebagai wadah edukasi peningkatan pengetahuan dan keterampilan bagi Masyarakat Desa dengan menggunakan Teknologi terkini
</p>
                </div>
            </div>
        </div>
        <p>
        Jika semua program ini sudah berjalan, Satpol PP Prov Jawa Timur akan membuat Label/tanda untuk desa-desa di Jawa Timur. Desa yang mendapatkan label Desa Sigap Cetar harus memenuhi beberapa indikator, seperti berikut :<br>
1.  Sadar hukum<br>
2.  Anti narkotika<br>
3.  Sigap bencana<br>
4.  Desa yang sudah terbentuk satlinmas di wilayah masing-masing<br>
Sehingga diharapkan Desa yang telah mendapatkan label sebagai Desa Sigap Cetar akan menjadi Desa idaman dengan peradaban yang maju, kehidupan masyarakat yang aman, tenteram, damai, sejahtera dan melek teknologi.</p>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="puskogap" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog modal-xl" role="document">
    <div class="modal-content">
      <div class="modal-header modal-header bg-diagonal bg-diagonal-primary bg-diagonal-r-light">
        <h5 class="modal-title" id="exampleModalLongTitle" style="color: white; z-index: 2;">PUSKOGAP</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p style="text-align: justify;">
            Pusat Komando Sigap atau dikenal dengan PUSKOGAP adalah sistem integrasi lintas sektor dan bidang dalam penyelenggaraan penugasan operasi yang menjadi kewenangan Satpol PP Provinsi Jawa Timur, sehingga tercipta sinergi, kolaborasi dan efektivitas sumber daya dalam mewujudkan keberhasilan setiap operasi. PUSKOGAP merupakan gagasan Kepala Satuan Polisi Pamong Praja Provinsi Jawa Timur Bapak Muhammad Hadi Wawan Guntoro, S.STP, M.Si, CIPA. Inovasi ini diharapkan mampu menyelesaikan permasalahan pelaksanaan tugas dan fungsi melalui sistem manajemen yang terstruktur.<br></p>
<div class="row justify-content-center">
<div class="col-lg-6">
<strong>Struktur PUSKOGAP<br>
KEPALA SATUAN POLISI PAMONG PRAJA<br> </strong>
1.  SEKRETARIAT PUSKOGAP<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; a.  KAPUSKOGAP<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; b.  WAKAPUSKOGAP/KASET<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; c.  RENOPS<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; d.  SUNPUB<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; e.  MONLAK<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; f.  IT<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; g.  SPT<br>
2.  PAMWAL<br>
3.  POSGAP<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; a.  POSGAP 352<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; b.  POSGAP CANDI 1 – Kediaman Ibu Gubernur Jawa Timur<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; c.  POSGAP CANDI 2 – Gedung Negara Grahadi<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; d.  POSGAP CANDI 3 – Kantor Gubernur Jawa Timur<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; e.  POSGAP CANDI 4 – Rumah Dinas Wakil Gubernur Jawa Timur<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; f.  POSGAP CANDI 5 – Rumah Dinas Sekda Jawa Timur<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; g.  POSGAP IMAM BONJOL (IB)<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; h.  POSGAP BKOW 
</div>
</div>
        </div>
      </div>
    </div>
</div>

<div class="modal fade" id="kakanda" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog modal-xl" role="document">
    <div class="modal-content">
      <div class="modal-header modal-header bg-diagonal bg-diagonal-primary bg-diagonal-r-light">
        <h5 class="modal-title" id="exampleModalLongTitle" style="color: white; z-index: 2;">Kakanda (Kawan Penegak Peraturan Daerah dan Kepala Daerah)</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      Kakanda merupakan kader hukum dalam hal ini perda dan perkada yang akan memberikan pemahaman kepada masyarakat tentang peraturan daerah dan peraturan kepala daerah serta turut serta dalam penyelenggaraan ketertiban umum dan ketentraman masyarakat. Tujuannya adalah untuk menumbuh kembangkan partisipasi masyarakat dalam penyelenggaraan ketertiban umum dan ketentraman masyarakat.
      </div>
      <div class="modal-footer">
        <a href="https://forms.gle/c8KMYdwhXhYYzHir7" class="btn btn-lg btn-primary" >
                                <i class="fas fa-user-friends"></i> AYO DAFTAR KAKANDA DISINI
                            </a>
      </div>
      </div>
    </div>
</div>

<div class="modal fade" id="redkar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog modal-xl" role="document">
    <div class="modal-content">
      <div class="modal-header modal-header bg-diagonal bg-diagonal-primary bg-diagonal-r-light">
        <h5 class="modal-title" id="exampleModalLongTitle" style="color: white; z-index: 2;">Redkar (Relawan Pemadam Kebakaran)</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
     Relawan Pemadam Kebakaran yang selanjutnya disebut dengan REDKAR adalah organisasi sosial berbasis masyarakat yang secara sukarela berpartisipasi mewujudkan ketahanan lingkungan dari bahaya kebakaran, dibentuk dari, oleh dan untuk warga masyarakat sampai dengan tingkat Kelurahan </div>
      <div class="modal-footer">
        <a href="https://forms.gle/gG9s9xnZcqrpdipS7" class="btn btn-lg btn-primary" >
            <i class="fas fa-user-friends"></i> AYO DAFTAR REDKAR DISINI
        </a>
      </div>
      </div>
    </div>
</div>
<div class="modal fade" id="saka" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog modal-xl" role="document">
    <div class="modal-content">
      <div class="modal-header modal-header bg-diagonal bg-diagonal-primary bg-diagonal-r-light">
        <h5 class="modal-title" id="exampleModalLongTitle" style="color: white; z-index: 2;">Saka Praja Wibawa</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
     </div>
      <div class="modal-footer">
        <a href="https://forms.gle/jZCTT1hVZV56DDVE6" class="btn btn-lg btn-primary" >
            <i class="fas fa-user-friends"></i> AYO DAFTAR SAKA PRAJA WIBAWA DISINI
        </a>
      </div>
      </div>
    </div>
</div>
@endsection