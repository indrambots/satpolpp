@extends('layouts.app_portal')
@section('content')
<div class="container-fluid">
  <div class="row mb-2">
    <div class="col-md-12">
      <div class="card mt-2">
        <div class="card-header border-0" style="padding-bottom:0px;">
          <div class="card-title font-weight-bolder" style="padding-bottom: 0px; margin-bottom: 0px;">
            <div class="card-label">DATA PENDAFTAR SIJALINMAJATARU KABUPATEN/KOTA</div>
          </div>
        </div>
        <div class="card-body">
          <form class="form" id="form">
            {{ csrf_field() }}
            <div class="row">
              <div class="col-lg-3">
              <select class="form-control select2" name="kota" id="kota">
              <option value="">PILIH KABUPATEN/KOTA </option>
                  @foreach($kota as $k)
                    <option value="{{ $k->id }}">
                      {{ $k->nama }}
                    </option>
                  @endforeach
                </select>
              </div>
            </div>
            </form> 
            <div class="row mt-5 mb-2">  
            <div class="col-12">
            <label>Laporan Partisipasi Desa <strong id="kota_label"> Seluruh Jawa Timur</strong> Dalam Rangka <strong>SIJALINMAJATARU 2024</strong> </label>
            <table class="table table-bordered" id="table-pisah">
              <tr>
                <th>Kelurahan</th>
                <th>Desa</th>
              </tr>
              <tr>
                <td>Jumlah Kelurahan <span class="label label-xl label-rounded label-dark" id="jum_kel_only"  style="min-width: 55px !important;">{{ $jum_kelurahan }}</span></td>
                <td>Jumlah Desa <span class="label label-xl label-rounded label-dark" id="jum_des_only"  style="min-width: 55px !important;">{{ $jum_desa }}</span></td>
              </tr>
              <tr>
                <td> Jumlah Partisipasi Kelurahan  <span class="label label-xl label-rounded label-dark" id="partisipan_kel_only"  style="min-width: 55px !important;">{{ $partisipan_kelurahan }}</span></td>
                <td> Jumlah Partisipasi desa  <span class="label label-xl label-rounded label-dark" id="partisipan_des_only"  style="min-width: 55px !important;">{{ $partisipan_desa }}</span></td>
              </tr>
              <tr>
                <td> Presentase Keikutsertaan Kelurahan  <span class="label label-xl label-rounded label-dark" id="presentase_kel_only"  style="min-width: 55px !important;">{{ $presentase_kelurahan }} %</span></td>
                <td> Presentase Keikutsertaan desa  <span class="label label-xl label-rounded label-dark" id="presentase_des_only"  style="min-width: 55px !important;">{{ $presentase_desa }} %</span></td>
              </tr>
            </table>
            <table class="table table-bordered">
                <tbody>
                    <tr>
                      <th colspan="1">Jumlah Partisipasi Desa dan Kelurahan</th>
                      <td colspan="3"><span class="label label-xl label-rounded label-primary" id="jumlah_partisipasi"  style="min-width: 55px !important;">{{ $partisipan->jum }}</span> <button type="button" data-toggle="modal" data-target="#modal-lihat" id="lihat" class="btn btn-sm btn-outline-primary"><i class="fa fa-eye"> </i>Lihat Data </button></td>
                    </tr>
                    <tr>
                      <th width="25%">Jumlah Desa & Kelurahan </th>
                      <td><span class="label label-xl label-rounded label-primary" id="jumlah_desa" style="min-width: 55px !important;">8496</span></td>
                    </tr>
                    <tr>
                      <th>Presentase Total Peserta Desa dan Kelurahan</th>
                      <td><span class="label label-xl label-rounded label-primary"  style="min-width: 55px !important;"><strong id="presentase">{{ $presentase }} </strong> %</span></td>
                    </tr>
                    <tr>
                      <th colspan="2" class="text-right">Total Peserta Desa  <span class="label label-xl label-rounded label-dark" id="total_anggota" style="min-width: 100px !important;">{{ $total_anggota->jum }} Orang</span></th>
                    </tr>
                    <tr>
                      <th colspan="2" class="text-right">Total Peserta Undangan  <span class="label label-xl label-rounded label-dark"  style="min-width: 100px !important;" data-toggle="modal" data-target="#undangan">{{ $undangan }}</span></th>
                    </tr>
                    <tr>
                      <th colspan="2" class="text-right">Total Titik Masyarakat Umum  <span class="label label-xl label-rounded label-dark"  style="min-width: 55px !important;" data-toggle="modal" data-target="#undangan">{{ $umum }}</span></th>
                    </tr>
                    <tr>
                    <?php $dateindo = new \App\Libraries\DateIndo; 
                      $dateindo = $dateindo->hari();
                    ?>
                      <td colspan="2" class="text-right">* Data per {{ $dateindo.", ".date('d F Y')." Pukul: ".date('H.i') }} WIB</span></td>
                    </tr>
                </tbody>
            </table>   
</div>
</div>
            <div class="table-responsive">
          <table id="datatable" class="table table-striped table-hover">
            <thead>
              <tr>
                <th>Kecamatan</th>
                <th>Kelurahan/Desa</th>
                <th>Nama PIC/Penanggung Jawab</th>
                <th>Username Zoom Meeting</th>
                <th>Jumlah Anggota</th>
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
  <div class="modal fade" id="modal-lihat" tabindex="-1" aria-labelledby="exampleModalLabel" aria-modal="true" role="dialog">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header bg-diagonal bg-diagonal-primary bg-diagonal-r-light">
        <h5 class="modal-title text-white" style="z-index:1;" id="exampleModalLabel">Rekap Keikutsertaan Per Kabupaten/Kota</h5>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-12">
            <table style="width: 100%;" id="datatable_progress" class="table table-responsive table-bordered table-striped table-hover">
              <thead>
                <tr>
                  <th>Kabupaten/kota</th>
                  <th>Partisipasi Desa</th>
                  <th>Partisipasi Kelurahan</th>
                  <th>Presentase Keikutsertaan (%)</th>
                  <th>Presentase (%)</th>
                </tr>
              </thead>
              <tbody>
              </tbody>
            </table>
          </div>
        </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
  </div>
</div>

  <div class="modal fade" id="undangan" tabindex="-1" aria-labelledby="exampleModalLabel" aria-modal="true" role="dialog">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header bg-diagonal bg-diagonal-primary bg-diagonal-r-light">
        <h5 class="modal-title text-white" style="z-index:1;" id="exampleModalLabel">Rekap Keikutsertaan VIP </h5>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-sm-12">
            <table style="width: 100%;" id="datatable_undangan" class="table table-responsive table-bordered table-striped table-hover">
              <thead>
                <tr>
                  <th>Kabupaten/kota</th>
                  <th>Jabatan</th>
                  <th>Lokasi Pemukulan</th>
                  <th>Jumlah Peserta</th>
                </tr>
              </thead>
              <tbody>
              </tbody>
            </table>
          </div>
        </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
  </div>
</div>
  @endsection
  @section('script')
  <script type="text/javascript">
    $('#kota').on('change',function(){
      if($(this).val() !== ""){
        $('#table-pisah').hide();
        $('#lihat').hide();
    $('#datatable').show();
    datatable.ajax.reload()
     $.ajax({
      method:'POST',
      url:'{{ url("patroli/progress") }}',
      data:{
        kota: $('#kota').val(),
        '_token': $('input[name=_token]').val()
      },
      success:function(data){
        $('#kota_label').html(data.result[0].kota_label);
        $('#jumlah_desa').html(data.result[0].jumlah_desa);
        $('#jumlah_partisipasi').html(data.result[0].jumlah_partisipasi);
        $('#total_anggota').html(data.result[0].total_anggota);
        $('#presentase').html(data.result[0].presentase); 

        $('#presentase_des_only').html(data.result[0].presentase_des_only);
        $('#presentase_kel_only').html(data.result[0].presentase_des_only);

        $('#jum_des_only').html(data.result[0].presentase_des_only);
        $('#jum_des_only').html(data.result[0].presentase_des_only);


        $('#partisipan_des_only').html(data.result[0].presentase_des_only);
        $('#partisipan_des_only').html(data.result[0].presentase_des_only);
      }
    })
   }
   else{

        $('#table-pisah').show();
        $('#lihat').show();
    $('#datatable').hide();
   }
    })
    $('#datatable').hide();
      var datatable = $('#datatable').DataTable({
      processing    : true,
      serverSide    : false,
      paging        : true,      
        pageLength    : 50,
      ajax:  {
            "url": '{{ url('patroli/datatable_filter') }}',
            data: function(d){
                d.kota = $('#kota').val();
            }
        },
        columns: [
      {data: 'kecamatan',             name:'kecamatan'},
      {data: 'kelurahan',name:'kelurahan'},
      {data: 'pic',         name:'pic'},
      {data: 'username',       name:'username'},
      {data: 'jumlah_anggota',     name:'jumlah_anggota'},
    ]
  });
      var datatable_progress = $('#datatable_progress').DataTable({
      processing    : true,
      serverSide    : false,
      paging        : true,      
        pageLength    : 20,
      ajax:  {
            "url": '{{ url('patroli/datatable_progress') }}'
        },
      "order": [[ 3, "desc" ]],
        columns: [
      {data: 'kota',             name:'kota'},
      {data: 'partisipasi_desa',name:'partisipasi_desa'},
      {data: 'partisipasi_kelurahan',name:'partisipasi_kelurahan'},
      {data: 'partisipasi_keseluruhan',         name:'partisipasi_keseluruhan'},
      {data: 'presentase',         name:'presentase'},
    ]
  });

      var datatable_undangan = $('#datatable_undangan').DataTable({
      processing    : true,
      serverSide    : false,
      paging        : true,      
        pageLength    : 20,
      ajax:  {
            "url": '{{ url('patroli/datatable_undangan') }}'
        },
      "order": [[ 0, "desc" ]],
        columns: [
      {data: 'kota',             name:'kota'},
      {data: 'jabatan',name:'jabatan'},
      {data: 'lokasi_pemukulan',name:'lokasi_pemukulan'},
      {data: 'jumlah_peserta',         name:'jumlah_peserta'},
    ]
  });
  </script>
  @endsection