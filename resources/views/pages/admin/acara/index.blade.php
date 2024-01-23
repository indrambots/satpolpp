@extends('layouts.app')
@section('content')
<div class="col">
  <div class="card">
    <div class="card-body">
      <div class="row justify-content-between">
        <div class="col-4">
          <h5 class="card-title">Data Acara / Kegiatan</h5>
        </div>
        <div class="col-4">
          <div class="d-flex justify-content-end">
          <button onclick="createBerita(0)" data-toggle="modal" data-target="#modal-create" type="button" class="btn btn-outline-primary m-b-xs "><i class="fas fa-plus-circle"></i> Buat Acara / Kegiatan </button>
        </div>
        </div>
      </div>
      <div class="row mt-2">
        <div class="table-responsive">
          <table id="datatable" class="table table-striped table-hover">
            <thead>
              <tr>
                <th>id</th>
                <th>Nama Acara</th>
                <th>Tema</th>
                <th>Tanggal</th>
                <th>Tempat</th>
                <th>Link</th>
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
@include('pages.admin.acara.modal.create')
@endsection
@section('script')
<script type="text/javascript">
    var datatable = $('#datatable').DataTable({
        processing: true,
        serverSide: false,
        paging:true,
        ajax:'{{ url('admin/acara/datatables') }}',
         columns: [
        {data: 'id', name:'id'},
        {data: 'nama', name:'nama'},
        {data: 'tema', name:'tema'},
        {data: 'tanggal', name:'tanggal'},
        {data: 'tempat', name:'tempat'},
        {data: 'link', name:'link'},
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
	
  function createBerita(id){
    $.ajax({
      method:'POST',
      url:'{{ url('admin/acara/create') }}',
      data:{
        id:id,
        '_token': $('input[name=_token]').val()
      },
      success:function(data){
        console.log(data)
        $('#id').val(id)
        $('#nama').val(data.acara.nama)
        $('#tanggal').val(data.acara.tanggal)
        $('#tempat').val(data.acara.tempat)
        $('#tema').val(data.acara.tema)
        $('#link_dokumentasi').val(data.acara.link_dokumentasi)
        $('#link_materi').val(data.acara.link_materi)
      }

  })
}
$('#frm_create_acara').on('submit',function(e){
  console.log('submitted')
    e.preventDefault();
    $(this).ajaxSubmit({
      success:function(data){
        console.log(data);
        toastr.success("Data Acara Berhasil tersimpan!");
        $(this).find(":submit").removeAttr('disabled');
        $('#modal-create').modal('toggle');
        datatable.ajax.reload();
        // reload_datatable()
      }
    })
  })
</script>
@endsection