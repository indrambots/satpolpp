@extends('layouts.app')

@section('content')

<div class="col">
  <div class="card">
    <div class="card-body">
      <div class="row justify-content-between">
        <div class="col-4">
          <h5 class="card-title">Data Dokumen</h5>
        </div>
        <div class="col-4">
          <div class="d-flex justify-content-end">
          <button onclick="createDokumen(0)" data-toggle="modal" data-target="#modal-create" type="button" class="btn btn-outline-primary m-b-xs "><i class="fas fa-plus-circle"></i> Data Dokumen</button>
        </div>
        </div>
      </div>
      <div class="row mt-2">
        <div class="table-responsive">
          <table id="datatable" class="table table-striped table-hover">
            <thead>
              <tr>
                <th>id</th>
                <th>Nama Dokumen</th>
                <th>Jenis Dokumen</th>
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
@include('pages.admin.dokumen.modal.create')
@endsection
@section('script')
<script type="text/javascript">
    var datatable = $('#datatable').DataTable({
        processing: true,
        serverSide: false,
        paging:true,
        ajax:'{{ url('admin/dokumen/datatables') }}',
         columns: [
        {data: 'id', name:'id'},
        {data: 'nama', name:'nama'},
        {data: 'jenis', name:'jenis'},
        {data: 'aksi', name:'aksi'},
        ],
        "order": [[ 0, "desc" ]],
        "columnDefs": [
            {
                "targets": [ 0 ],
                "visible": false,
                "searchable": false
            },
          ],
      })
  $('#alert_file_dokumen').hide();
    $('#upload-dokumen').on('click',function(){
      $('#alert_file_dokumen').slideUp();
      $("input[name=file_dokumen]").slideDown();
  })
  function createDokumen(id){
    $.ajax({
      method:'POST',
      url:'{{ url('admin/dokumen/create') }}',
      data:{
        dokumen_id:id,
        '_token': $('input[name=_token]').val()
      },

      success:function(data){
        console.log(data)
        $('#id').val(id)
        $('#nama_dokumen').val(data.dokumen.nama)
        $('#alert_file_dokumen').hide();
            if(data.dokumen.file !== null){
                $('#alert_file_dokumen').show();
                $("input[name=file_dokumen]").hide();
                $("#link_file_dokumen").attr('href', '{{ url('download/dokumen/') }}/'+id);
            }
        if(id == 0){
            $("input[name=file_dokumen]").show();
        }
      }

  })
}
$('#frm_create_dokumen').on('submit',function(e){
    e.preventDefault();
    $(this).ajaxSubmit({
      success:function(data){
        console.log(data);
        toastr.success("Data Dokumen Berhasil tersimpan!");
        $(this).find(":submit").removeAttr('disabled');
        $('#modal-create').modal('toggle');
        datatable.ajax.reload();
        // reload_datatable()
      }
    })
  })

function deleteDokumen(id){

    Swal.fire({
          title               : "Anda Yakin?",
          text                : "Dokumen akan terhapus dari sistem",
          icon                : "warning",
          showCancelButton    : true,
          confirmButtonColor  : "#e6b034",
          confirmButtonText   : "Ya, Hapus Dokumen"
        }).then((result) => {
        if (result.value) {
            $.ajax({
                method:'POST',
              url:'{{ url('admin/dokumen/delete') }}',
              data:{
                id:id
              },
              success:function(data){
                datatable.ajax.reload()
              }
            })
        }
    })
}
</script>
@endsection
