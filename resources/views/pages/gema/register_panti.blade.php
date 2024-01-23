@extends('layouts.app_portal')
@section('meta')
<meta property="og:title" content="PENDATAAN KEBUTUHAN PRIORITAS LKSA">
<meta property="og:image" content="{{ asset('assets/media/bg/sigap.png') }}">
<meta property="og:description" content="Satuan Polisi Pamong Praja Provinsi Jawa Timur
Jl. Jagir Wonokromo No.352, Sidosermo, Kec. Wonocolo, Surabaya, Jawa Timur 60239">
@endsection
@section('content')
 <div class="row">
    <div class="col-lg-12">
        <div class="card card-custom gutter-b example example-compact">
            <div class="card-header">
                <h3 class="card-title">
                    FORM PRIORITAS KEBUTUHAN PENERIMA BANTUAN
                </h3>
            </div>
            <!--begin::Form-->
            <form class="form" method="POST" action="{{ url('gema/register/save') }}">
                <input type="hidden" name="kota" value="" id="kota">
                <input type="hidden" name="kecamatan" value="" id="kecamatan">
                <input type="hidden" name="kelurahan" value="" id="kelurahan">
            {{ csrf_field() }}
                <div class="card-body">
                    <div class="form-group">
                        <label>
                            Nama LKSA:
                        </label>
                        <select style="width:90%" name="id" class="select2 form-control" id="lksa" required>
                                <option value="">-- PILIH NAMA LKSA --</option>
                            @foreach($lksa as $a)
                                <option value="{{$a->id}}"><strong>({{$a->kota}})</strong> {{$a->nama}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label>
                            Jenis LKSA:
                        </label>
                        <select style="width:90%" name="jenis_lksa" class="select2 form-control" id="jenis_lksa" required>
                                <option value="">-- PILIH JENIS LKSA --</option>
                                <option value="Asrama Menampung Anak Yatim/Piatu dan Tidak Tergabung dengan komplek panti werda/lainnya">Asrama Menampung Anak Yatim/Piatu dan Tidak Tergabung dengan komplek panti werda/lainnya</option>
                                <option value="Berbentuk Pesantren dan Menampung Anak Yatim/Piatu">Berbentuk Pesantren dan Menampung Anak Yatim/Piatu</option>
                                <option value="Asrama Menampung Anak Yatim/Piatu Tergabung dengan komplek panti werda/lainnya">Asrama Menampung Anak Yatim/Piatu Tergabung dengan komplek panti werda/lainnya</option>
                                <option value="Komplek panti werda/lainnya">Komplek panti werda/lainnya</option>
                                <option value="Hanya Berbentuk Yayasan Tidak Memiliki Asrama">Hanya Berbentuk Yayasan Tidak Memiliki Asrama</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>
                            Nama Ketua LKSA
                        </label>
                        <input class="form-control form-control-solid" id="ketua" placeholder="nama ketua. . ." name="ketua" type="text" required>
                            <span class="form-text text-muted">
                                Mohon diisi nama ketua/penanggung jawab
                            </span>
                    </div>
                    <div class="form-group">
                        <label>
                           No Hp
                        </label>
                        <input class="form-control form-control-solid" id="no_hp" placeholder="no hp ketua. . ." name="no_hp" type="text" required>
                            <span class="form-text text-muted">
                                Mohon diisi no hp ketua/penanggung jawab yang dapat dihubungi
                            </span>
                    </div>
                    <div class="form-group">
                        <label>
                            Nama Penanggung Jawab Kegiatan Baksos
                        </label>
                        <input class="form-control form-control-solid" id="penanggung_jawab_baksos" placeholder="nama Penanggung Jawab Kegiatan Baksos. . ." name="penanggung_jawab_baksos" type="text" required>
                            <span class="form-text text-muted">
                                Mohon diisi nama Penanggung Jawab Kegiatan Baksos
                            </span>
                    </div>
                    <div class="form-group">
                        <label>
                           No Hp Penanggung Jawab Kegiatan Baksos
                        </label>
                        <input class="form-control form-control-solid" id="no_hp_pj" placeholder="no hp ketua. . ." name="no_hp_pj" type="text" required>
                            <span class="form-text text-muted">
                                Mohon diisi no hp Penanggung Jawab Kegiatan Baksos yang dapat dihubungi
                            </span>
                    </div>
                    <div class="form-group">
                      <label class="mr-20">
                        Pilih Kota :
                      </label>
                       <select style="width:90%" class="select2  form-control" id="kota_" name="kota_"  required >
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
                       <select style="width:90%" class="select2  form-control" id="kecamatan_" name="kecamatan_"  required >
                      <option value="">--Pilih Kecamatan--</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label>
                        Pilih Kelurahan/Desa :
                      </label>
                       <select style="width:90%" class="select2  form-control" id="kelurahan_" name="kelurahan_"  required >
                      <option value="">--Pilih Kelurahan--</option>
                      </select>
                    </div>
                    <div class="form-group">
                        <label>
                            Alamat Lengkap:
                        </label>
                        <input class="form-control form-control-solid" placeholder="isian alamat kantor. . ." id="alamat" type="text" name="alamat" required>
                            <span class="form-text text-muted">
                                Mohon isi alamat LKSA
                            </span>
                    </div>
                    <div class="alert alert-warning" role="alert">A. Kebutuhan lembaga.</div>
                    <h3> Kebutuhan Bangunan </h3>
                    <hr>
                    <div class="form-group row">
                        <div class="col-lg-4 mb-5">
                            <label>Plafon/asbes (buah)</label>
                            <input type="number" name="plafon" value="0" class="form-control" placeholder="Jumlah Kebutuhan . . .">
                            
                        </div>
                        <div class="col-lg-4">
                            <label>Kusen pintu/jendela (buah)</label>
                            <input type="number" name="kusen" value="0" class="form-control" placeholder="Jumlah Kebutuhan. . .">
                            
                        </div>
                        
                        <div class="col-lg-4">
                            <label>Tembok Semen (sak)</label>
                            <input type="number" name="semen" value="0" class="form-control" placeholder="Jumlah Kebutuhan. . .">
                            
                        </div>
                    </div>
                    <!--end: KEBUTUHAN BANGUNAN-->

                    <div class="alert alert-warning" role="alert">B. Kebutuhan Bersama.</div>
                    <h3> Kebutuhan Sembako </h3>
                    <hr>
                    <div class="form-group row">
                        <div class="col-lg-12 mb-5">
                            <label>Paket sembako (beras, minyak goreng, gula pasir, mi instan) (paket)</label>
                            <input type="number" name="paket_sembako" value="0" class="form-control" placeholder="Jumlah Kebutuhan . . .">
                            
                        </div>
                    </div>

                    <h3> Alat Tidur </h3>
                    <hr>
                    <div class="form-group row">
                        <div class="col-lg-12 mb-5">
                            <label>Alas tidur (buah)</label>
                            <input type="number" name="alat_tidur" value="0" class="form-control" placeholder="Jumlah Kebutuhan . . .">
                            
                        </div>
                    </div>

                    <h3> Alat Ibadah </h3>
                    <hr>
                    <div class="form-group row">
                        <div class="col-lg-3 mb-5">
                            <label>Sarung (pcs)</label>
                            <input type="number" name="sarung" value="0" class="form-control" placeholder="Jumlah Kebutuhan . . .">
                            
                        </div>
                        <div class="col-lg-3">
                            <label>Mukena (pcs)</label>
                            <input type="number" name="mukena" value="0" class="form-control" placeholder="Jumlah Kebutuhan. . .">
                            
                        </div>
                        
                        <div class="col-lg-3">
                            <label>Sajadah (pcs)</label>
                            <input type="number" name="sajadah" value="0" class="form-control" placeholder="Jumlah Kebutuhan. . .">
                            
                        </div>
                        <div class="col-lg-3">
                            <label>Al-Quran (pcs)</label>
                            <input type="number" name="quran" value="0" class="form-control" placeholder="Jumlah Kebutuhan. . .">
                            
                        </div>
                    </div>

                    <h3> Alat Olahraga </h3>
                    <hr>
                    <div class="form-group row">
                        <div class="col-lg-4 mb-5">
                            <label>Bola Voli (buah)</label>
                            <input type="number" name="bola_voli" value="0" class="form-control" placeholder="Jumlah Kebutuhan . . .">
                            
                        </div>
                        <div class="col-lg-4">
                            <label>Bola Basket (buah)</label>
                            <input type="number" name="bola_basket" value="0" class="form-control" placeholder="Jumlah Kebutuhan. . .">
                            
                        </div>
                        
                        <div class="col-lg-4">
                            <label>Bola Sepak (buah)</label>
                            <input type="number" name="bola_sepak" value="0" class="form-control" placeholder="Jumlah Kebutuhan. . .">
                            
                        </div>

                        <div class="col-lg-4">
                            <label>Mainan anak laki-laki (buah)</label>
                            <input type="number" name="mainan_laki" value="0" class="form-control" placeholder="Jumlah Kebutuhan. . .">
                        </div>
                        <div class="col-lg-4">
                            <label>Mainan anak perempuan (buah)</label>
                            <input type="number" name="mainan_perempuan" value="0" class="form-control" placeholder="Jumlah Kebutuhan. . .">
                        </div>
                    </div>

                    <h3> Literasi </h3>
                    <hr>
                    <div class="form-group row">
                        <div class="col-lg-6 mb-5">
                            <label>Buku Pelajaran (buah)</label>
                            <input type="number" name="buku_pelajaran" value="0" class="form-control" placeholder="Jumlah Kebutuhan . . .">
                            
                        </div>
                        <div class="col-lg-6">
                            <label>Buku Dongeng (buah)</label>
                            <input type="number" name="buku_dongeng" value="0" class="form-control" placeholder="Jumlah Kebutuhan. . .">
                            
                        </div>
                    </div>

                    <div class="alert alert-warning" role="alert">C. Kebutuhan Individu.</div>
                    <h3> Pakaian Layak Pakai </h3>
                    <hr>
                    <div class="form-group row">
                        <div class="col-lg-4 mb-5">
                            <label>Pakaian Usia Balita (buah)</label>
                            <input type="number" name="usia_balita" value="0" class="form-control" placeholder="Jumlah Kebutuhan . . .">
                            
                        </div>
                        <div class="col-lg-4">
                            <label>Pakaian Usia Anak (buah)</label>
                            <input type="number" name="usia_anak" value="0" class="form-control" placeholder="Jumlah Kebutuhan. . .">
                            
                        </div>
                        
                        <div class="col-lg-4">
                            <label>Pakaian Usia Remaja (buah)</label>
                            <input type="number" name="usia_remaja" value="0" class="form-control" placeholder="Jumlah Kebutuhan. . .">
                            
                        </div>
                    </div>

                        
                    <h3> Alat tulis </h3>
                    <hr>
                        <div class="form-group row">
                            <div class="col-lg-12">
                                <label>Paket alat tulis (tas, buku tulis, pulpen, pensil, penghapus) (paket)</label>
                                <input type="number" name="paket_alat_tulis" value="0" class="form-control" placeholder="Jumlah Kebutuhan. . .">
                                
                            </div>
                        </div>   

                    <h3> Data Kependudukan </h3>
                    <hr>
                        <div class="form-group row">
                            <div class="col-lg-6">
                                <label>Akta Kelahiran (buah)</label>
                                <input type="number" name="akta" value="0" class="form-control" placeholder="Jumlah Kebutuhan. . .">
                            </div>
                            <div class="col-lg-6">
                                <label>KTP (buah)</label>
                                <input type="number" name="ktp" value="0" class="form-control" placeholder="Jumlah Kebutuhan. . .">
                            </div>
                        </div>

                    <h3> KONSELING </h3>
                    <hr>
                        <div class="form-group row">
                            <div class="col-lg-12">
                                <label>Konseling pribadi (orang)</label>
                                <input type="number" name="konseling_pribadi" value="0" class="form-control" placeholder="Jumlah Kebutuhan. . .">
                                
                            </div>
                        </div>

                    <h3> Kesehatan </h3>
                    <hr>
                        <div class="form-group row">
                            <div class="col-lg-6">
                                <label>Cek kesehatan (orang)</label>
                                <input type="number" name="cek_kesehatan" value="0" class="form-control" placeholder="Jumlah Kebutuhan. . .">
                            </div>
                            <div class="col-lg-6">
                                <label>Konsultasi kesehatan anak (orang)</label>
                                <input type="number" name="konsultasi_kesehatan_anak" value="0" class="form-control" placeholder="Jumlah Kebutuhan. . .">
                            </div>
                        </div> 
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
  $('#lksa').on('change',function(){
    $.ajax({
      method:'POST',
      url:'{{ url("gema/filter-panti") }}',
      data:{
        id: $(this).val(),
        '_token': $('input[name=_token]').val()
      },
      success:function(data){
        console.log(data);
        $('#ketua').val(data.lksa.ketua);
        $('#no_hp').val(data.lksa.no_hp);
        $('#alamat').val(data.lksa.alamat);
        $('#kota_').val(data.kota.id).trigger('change');
        $('#kota').val($("#kota_ option:selected").text());
        $('#kecamatan').val($("#kecamatan_ option:selected").text());
        $('#kelurahan').val($("#kelurahan_ option:selected").text());
      }
    })
  })

  $('#kota_').on('change',function(){
    $.ajax({
      method:'POST',
      url:'{{ url("patroli/filter-kec") }}',
      data:{
        kota: $(this).val(),
        '_token': $('input[name=_token]').val()
      },
      success:function(data){
        console.log(data);
        $('#kecamatan_').html(data.view_kecamatan);
        $('#kelurahan_').html(data.view_kelurahan);
        $('#kota').val($("#kota_ option:selected").text());
        $('#kecamatan').val($("#kecamatan_ option:selected").text());
        $('#kelurahan').val($("#kelurahan_ option:selected").text());
      }
    })
  })

  $('#kecamatan_').on('change',function(){
    $.ajax({
      method:'POST',
      url:'{{ url("patroli/filter-kel") }}',
      data:{
        kota: $('#kota_').val(),
        kecamatan: $(this).val(),
        '_token': $('input[name=_token]').val()
      },
      success:function(data){
        console.log(data);
        $('#kelurahan_').html(data.view_kelurahan);
        $('#kecamatan').val($("#kecamatan_ option:selected").text());
        $('#kelurahan').val($("#kelurahan_ option:selected").text());
      }
    })
  })

  $('#kelurahan_').on('change',function(){
    $('#kelurahan').val($("#kelurahan_ option:selected").text());
  })
   $('.related-field').on('input', function() {
                const filledFields = $('.related-field').filter(function() {
                    return $(this).val() > 0;
                });

                if (filledFields.length >= 5) {
                    $('.related-field').not(filledFields).prop('readonly', true);
                } else {
                    $('.related-field').prop('readonly', false);
                }
            });
   $('#no_hp').on('input', function() {
        const inputValue = $(this).val();
        const sanitizedValue = inputValue.replace(/[^0-9+]/g, '');
        $(this).val(sanitizedValue); 
    });
</script>
@endsection
