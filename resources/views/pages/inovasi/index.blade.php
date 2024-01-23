@extends('layouts.app')
@section('content')
<div class="col mb-2">
  <div class="alert alert-custom alert-notice alert-light-dark fade show mb-5" role="alert">
    <div class="alert-icon">
      <i class="flaticon-warning"></i>
    </div>
    <div class="alert-text"><strong>Informasi!</strong> Total Nilai Kematangan yang akan dihitung = <strong> Kematangan Semua Inovasi </strong>/ <strong>Jumlah Semua Inovasi </strong></div>
    <div class="alert-close">
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">
          <i class="ki ki-close"></i>
        </span>
      </button>
    </div>
  </div>
</div>
<div class="col">
  <div class="card">
    <div class="card-body">
      <div class="row justify-content-between">
        <div class="col-4">
          <h5 class="card-title">Data Inovasi</h5>
        </div>
        <div class="col-4">
          <div class="d-flex justify-content-end">
          <button onclick="isiInovasi(0)" data-toggle="modal" data-target="#modal-create" type="button" class="btn btn-outline-primary m-b-xs "><i class="fas fa-plus-circle"></i> Buat Inovasi</button>
        </div>
        </div>
      </div>
      <div class="row mt-2">
        <div class="table-responsive">
          <table id="datatable" class="table table-striped table-hover">
            <thead>
              <tr>
                <th>id</th>
                <th>PD</th>
                <th>Nama Inovasi</th>
                <th>Jenis Inovasi</th>
                <th>Tahapan Inovasi</th>
                <th>Waktu Uji Coba</th>
                <th>Waktu Penerapan</th>
                <th>Kematangan</th>
                <th>Aksi</th>
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
@include('pages.inovasi.modal.create')
@include('pages.inovasi.modal.bobot')
@include('pages.inovasi.modal.filebobot')
@include('pages.inovasi.modal.deskripsi')
@endsection
@section('script')
<script>

  $('#alert_file_anggaran').hide()
  $('.alert-secondary').hide()
  $('.alert-primary').hide()
  function isiBobot(inovasi_id){
    $('#modal-bobot').modal('show');
    $('#frm_bobot').find(":submit").removeAttr('disabled');
    $.ajax({
      method:'POST',
      url:'{{ url('inovasi/bobot/create') }}',
      data:{
        inovasi_id:inovasi_id,
        '_token': $('input[name=_token]').val()
      },
      success:function(data){
        $("#frm_bobot input").prop('required',true);
        console.log(data)
        $('#id_bobot').val(data.bobot.id);
        $('#id_inovasi_bobot').val(inovasi_id)
        if(data.bobot.id == 0){
          $('#frm_bobot').find("input[type=radio]").prop('checked', false);
        }
        else{
          $("#frm_bobot input[name=regulasi]").val([''+data.bobot.regulasi+'']);
          $("#frm_bobot input[name=ketersediaan_sdm]").val([data.bobot.ketersediaan_sdm]);
          $("#frm_bobot input[name=dukungan_anggaran]").val([data.bobot.dukungan_anggaran]);
          $("#frm_bobot input[name=penggunaan_it]").val([data.bobot.penggunaan_it]);
          $("#frm_bobot input[name=bimtek_inovasi]").val([data.bobot.bimtek_inovasi]);
          $("#frm_bobot input[name=program_rkpd]").val([data.bobot.program_rkpd]);
          $("#frm_bobot input[name=keterlibatan_aktor]").val([data.bobot.keterlibatan_aktor]);
          $("#frm_bobot input[name=pelaksana_inovasi]").val([data.bobot.pelaksana_inovasi]);
          $("#frm_bobot input[name=jejaring_inovasi]").val([data.bobot.jejaring_inovasi]);
          $("#frm_bobot input[name=sosialisasi_inovasi]").val([data.bobot.sosialisasi_inovasi]);
          $("#frm_bobot input[name=pedoman_teknis]").val([data.bobot.pedoman_teknis]);
          $("#frm_bobot input[name=kemudahan_informasi]").val([data.bobot.kemudahan_informasi]);
          $("#frm_bobot input[name=kemudahan_proses]").val([data.bobot.kemudahan_proses]);
          $("#frm_bobot input[name=penyelesaian_layanan_pengaduan]").val([data.bobot.penyelesaian_layanan_pengaduan]);
          $("#frm_bobot input[name=online_sistem]").val([data.bobot.online_sistem]);
          $("#frm_bobot input[name=replikasi]").val([data.bobot.replikasi]);
          $("#frm_bobot input[name=kecepatan_inovasi]").val([data.bobot.kecepatan_inovasi]);
          $("#frm_bobot input[name=kemanfaatan_inovasi]").val([data.bobot.kemanfaatan_inovasi]);
          $("#frm_bobot input[name=monev]").val([data.bobot.monev]);
          $("#frm_bobot input[name=kualitas_inovasi]").val([data.bobot.kualitas_inovasi]);
        }
      }
    })
  }
  const fileBobot = (id)=>{
    window.idInovasi = id;
    $.ajax({
        method:'GET',
        url:"{{ url('inovasi/onloadfilependukung') }}",
        data:{
            bobot_inovasi_id:id,
            '_token': $('input[name=_token]').val()
        },
        success : ({listFile})=>{
            $.each($(".upload_dataPendukung"), (i, obj)=>{
                if(listFile.length>0 && listFile.some(item=> ('file-'+item.nama) == $(obj).attr('id') ) ){
                    $(obj).find('.alert').show()
                    $(obj).find('.upload').hide()
                }
                else{
                    $(obj).find('.alert').hide();
                    $(obj).find('.upload').show()
                }
            });
            $('#modal-filebobot').modal('toggle');
        },
        error: ({message})=>{
            toastr.success(message);
        }
    })
  }
  function isiInovasi(id){

    $('#frm_create_inovasi').find(":submit").removeAttr('disabled');
    $.ajax({
      method:'POST',
      url:'{{ url('inovasi/create') }}',
      data:{
        id:id,
        '_token': $('input[name=_token]').val()
      },
      success:function(data){
        console.log(data)
        $('#id_inovasi').val(id)
        $("input[name=nama]").val(null)
        $("input[type=radio][name=tahapan]").prop('checked', false);
        $("input[type=radio][name=inisiator]").prop('checked', false);
        $("input[type=radio][name=jenis]").prop('checked', false);
        $("input[type=radio][name=covid]").prop('checked', false);
        $('#bentuk').val('').trigger('change')
        $('#urusan').val('').trigger('change')
        $("input[name=waktu_uji_coba]").val(null)
        $("input[name=waktu_penerapan]").val(null)
        $("input[name=file_anggaran]").val(null)
        $('#alert_file_anggaran').hide();
        $("input[name=file_anggaran]").show();
        $("#link_file_anggaran").attr('href', '#');
        $("input[name=file_profil_bisnis]").val(null);
        $('#alert_profil_bisnis').hide();
        $("input[name=file_profil_bisnis]").show();
        $("#link_file_profil_bisnis").attr('href', '#');
        if(id !== 0){
          $("input[name=nama]").val(data.inovasi.nama);
          $("input[name=tahapan]").val([data.inovasi.tahapan]);
          $("input[name=inisiator]").val([data.inovasi.inisiator]);
          $("input[name=jenis]").val([data.inovasi.jenis]);
          $("input[name=covid]").val([data.inovasi.covid]);
          $('#bentuk').val(data.inovasi.bentuk).trigger('change')
          $('#urusan').val( JSON.parse(data.inovasi.kategori)).trigger('change')
          $("input[name=waktu_uji_coba]").val(data.inovasi.waktu_uji_coba)
          $("input[name=waktu_penerapan]").val(data.inovasi.waktu_uji_coba)
          if(data.inovasi.file_anggaran !== null){
            $('#alert_file_anggaran').show();
            $("input[name=file_anggaran]").hide();
            $("#link_file_anggaran").attr('href', '{{ url('download/inovasi/file_anggaran/') }}/'+data.inovasi.id);
          }
          if(data.inovasi.file_profil_bisnis !== null){
            $('#alert_profil_bisnis').show();
            $("input[name=file_profil_bisnis]").hide();
            $("#link_file_profil_bisnis").attr('href', '{{ url('download/inovasi/file_profil_bisnis') }}/'+data.inovasi.id);
          }
        }
      }
    })
  }

  $('#frm_create_inovasi').on('submit',function(e){
    e.preventDefault();
    $(this).ajaxSubmit({
      success:function(data){
        console.log(data);
        toastr.success("Data Proposal Berhasil tersimpan!");
        $(this).find(":submit").removeAttr('disabled');
        $('#modal-create').modal('toggle');
        reload_datatable()
      }
    })
  })

  function isiDeskripsi(id){

    $('#frm_deskripsi_inovasi').find(":submit").removeAttr('disabled');
    $('input[name=manfaat]').val('')
    $.ajax({
      method:'POST',
      url:'{{ url('inovasi/create') }}',
      data:{
      id:id,
      '_token': $('input[name=_token]').val()
      },
      success:function(data){
        $('#id_inovasi_deskripsi').val(id)
        $('#manfaat').summernote({
          toolbar: [
            [ 'style', [ 'style' ] ],
            [ 'font', [ 'bold', 'italic', 'underline', 'subscript'] ],
            [ 'fontname', [ 'fontname' ] ],
            [ 'fontsize', [ 'fontsize' ] ],
            [ 'color', [ 'color' ] ],
            [ 'para', [ 'ol', 'ul', 'paragraph', 'height' ] ],
            [ 'table', [ 'table' ] ],
            [ 'insert', [ 'link'] ],
            [ 'view', [ 'undo', 'redo','codeview', ] ]
        ],
        height: 150
        })

        $('#manfaat').summernote('code',data.inovasi.manfaat)
        $('#hasil').summernote({
          toolbar: [
            [ 'style', [ 'style' ] ],
            [ 'font', [ 'bold', 'italic', 'underline', 'subscript'] ],
            [ 'fontname', [ 'fontname' ] ],
            [ 'fontsize', [ 'fontsize' ] ],
            [ 'color', [ 'color' ] ],
            [ 'para', [ 'ol', 'ul', 'paragraph', 'height' ] ],
            [ 'table', [ 'table' ] ],
            [ 'insert', [ 'link'] ],
            [ 'view', [ 'undo', 'redo','codeview', ] ]
        ],
        height: 150
        })

        $('#hasil').summernote('code',data.inovasi.hasil)
        $('#rancang_bangun').summernote({
          toolbar: [
            [ 'style', [ 'style' ] ],
            [ 'font', [ 'bold', 'italic', 'underline', 'subscript'] ],
            [ 'fontname', [ 'fontname' ] ],
            [ 'fontsize', [ 'fontsize' ] ],
            [ 'color', [ 'color' ] ],
            [ 'para', [ 'ol', 'ul', 'paragraph', 'height' ] ],
            [ 'table', [ 'table' ] ],
            [ 'insert', [ 'link'] ],
            [ 'view', [ 'undo', 'redo','codeview', ] ]
        ],
        height: 150
        })

        $('#rancang_bangun').summernote('code',data.inovasi.rancang_bangun)
        $('#tujuan').summernote({
          toolbar: [
            [ 'style', [ 'style' ] ],
            [ 'font', [ 'bold', 'italic', 'underline', 'subscript'] ],
            [ 'fontname', [ 'fontname' ] ],
            [ 'fontsize', [ 'fontsize' ] ],
            [ 'color', [ 'color' ] ],
            [ 'para', [ 'ol', 'ul', 'paragraph', 'height' ] ],
            [ 'table', [ 'table' ] ],
            [ 'insert', [ 'link'] ],
            [ 'view', [ 'undo', 'redo','codeview', ] ]
        ],
        height: 150
        })

        $('#tujuan').summernote('code',data.inovasi.tujuan)
      }
  })
}
$('#frm_deskripsi_inovasi').on('submit',function(e){
    e.preventDefault();
    $(this).ajaxSubmit({
      success:function(data){
        console.log(data);
        toastr.success("Data Deskripsi Inovasi Berhasil tersimpan!");
        $(this).find(":submit").removeAttr('disabled');
        $('.modal-deskripsi').modal('toggle');
        reload_datatable()
      }
    })
  })
  var datatable = $('#datatable').DataTable({
        processing: true,
        serverSide: false,
        paging:true,
        ajax:'{{ url('inovasi/datatables') }}',
         columns: [
        {data: 'id', name:'id'},
        {data: 'perangkat_daerah', name:'perangkat_daerah'},
        {data: 'nama', name:'nama'},
        {data: 'jenis', name:'jenis'},
        {data: 'tahapan', name:'tahapan'},
        {data: 'waktu_uji_coba', name:'waktu_uji_coba'},
        {data: 'waktu_penerapan', name:'waktu_penerapan'},
        {data: 'kematangan', name:'kematangan'},
        {data: 'aksi', name:'aksi'}
        ],
        "order": [[ 0, "desc" ]],
        "columnDefs": [
            {
                "targets": [ 0 ],
                "visible": false,
                "searchable": false
            },
          ],

        "initComplete":function( settings, json){
          $('.popover_bobot').popover({
            trigger:'hover',
            title:'Pengisian Bobot',
            content:'Isian bobot akan berpengaruh terhadap nilai kematangan inovasi',
            placement:'bottom'
          });
          $('.popover_file_bobot').popover({
            trigger:'hover',
            title:'Upload File Pendukung',
            content:'File Pendukung ini sebagai bukti pengisian bobot',
            placement:'bottom'
          });
          $('.popover_edit').popover({
            trigger:'hover',
            content:'Klik Untuk Ubah data proposal inovasi',
            placement:'bottom'
          });
          $('.popover_delete').popover({
            trigger:'hover',
            content:'Klik Untuk Hapus data proposal inovasi',
            placement:'bottom'
          });
          $('.popover_penjelasan').popover({
            trigger:'hover',
            title:'Penjelasan Tambahan Proposal Inovasi',
            content:'Berisi manfaat,tujuan,rancang bangun',
            placement:'bottom'
          });
          $('.popover_kematangan').popover({
            trigger:'hover',
            content:'Klik untuk melihat rekap nilai pengisian bobot',
            placement:'bottom'
          });
        }
    });
@if(Auth::user()->level !== 1)

datatable.column(1).visible(false);
@endif
    $('#upload-anggaran').on('click',function(){
      $('#alert_file_anggaran').slideUp();
      $("input[name=file_anggaran]").slideDown();
    });
    $('#upload-profil_bisnis').on('click',function(){
      $('#alert_profil_bisnis').slideUp();
      $("input[name=file_profil_bisnis]").slideDown();
    });

  $('#frm_bobot').on('submit',function(e){
    e.preventDefault();
    $(this).ajaxSubmit({
      success:function(data){
        console.log(data);
        $('#modal-bobot').modal('toggle');
        toastr.success("Data Bobot Berhasil Tersimpan!");
        reload_datatable()
      }
    })
  })

  function deleteInovasi(id){
    Swal.fire({
          title               : "Anda Yakin?",
          text                : "Data Inovasi akan terhapus dari sistem",
          icon                : "warning",
          showCancelButton    : true,
          confirmButtonColor  : "#e6b034",
          confirmButtonText   : "Ya, Hapus Data Inovasi"
        }).then((result) => {
        if (result.value) {
          $.ajax({
            method:'POST',
            url:'{{ url('inovasi/delete') }}',
            data:{
              id:id,
              _token:'{{ csrf_token() }}'
            },
            success:function(data){
              Swal.fire({
                title               : "Berhasil",
                text                : "Data Inovasi Berhasil Terhapus dari Sistem",
                icon                : "success",
              })
              reload_datatable()
            }
          })
        }
      })
    }
    // $(document).ready(()=>{
    //     $('.upload_dataPendukung').on('submit',(e)=>{
    //         e.preventDefault();
    //         $(this).ajaxSubmit({
    //             data: {bobot_inovasi_id : idInovasi},
    //             success:(data)=>{
    //                 toastr.success("File Berhasil Di upload!");
    //                 $(this).find(":submit").removeAttr('disabled');
    //                 window.datatable.ajax.reload();
    //             },
    //             error: ({message}) => {
    //                 toastr.success(message);
    //             }
    //         });
    //     });
    //     })

    function reload_datatable(){
      datatable.ajax.reload(function(){

          $('.popover_bobot').popover({
            trigger:'hover',
            title:'Pengisian Bobot',
            content:'Isian bobot akan berpengaruh terhadap nilai kematangan inovasi',
            placement:'bottom'
          });
          $('.popover_file_bobot').popover({
            trigger:'hover',
            title:'Upload File Pendukung',
            content:'File Pendukung ini sebagai bukti pengisian bobot',
            placement:'bottom'
          });
          $('.popover_edit').popover({
            trigger:'hover',
            content:'Klik Untuk Ubah data proposal inovasi',
            placement:'bottom'
          });
          $('.popover_delete').popover({
            trigger:'hover',
            content:'Klik Untuk Hapus data proposal inovasi',
            placement:'bottom'
          });
          $('.popover_penjelasan').popover({
            trigger:'hover',
            title:'Penjelasan Tambahan Proposal Inovasi',
            content:'Berisi manfaat,tujuan,rancang bangun',
            placement:'bottom'
          });
          $('.popover_kematangan').popover({
            trigger:'hover',
            content:'Klik untuk melihat rekap nilai pengisian bobot',
            placement:'bottom'
          });
              },true);
    }
</script>
@endsection
