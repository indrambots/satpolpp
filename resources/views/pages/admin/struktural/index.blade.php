@extends('layouts.app')

@section('content')

<div class="col">
  <div class="card">
    <div class="card-body">
      <div class="row justify-content-between">
        <div class="col-4">
          <h5 class="card-title">Data Struktural</h5>
        </div>
        <div class="col-4">
          <div class="d-flex justify-content-end">
          <button onclick="createStruktural(0)" data-toggle="modal" data-target="#modal-create" type="button" class="btn btn-outline-primary m-b-xs "><i class="fas fa-plus-circle"></i> Data Struktural</button>
        </div>
        </div>
      </div>
      <div class="row mt-2">
        <div class="table-responsive">
          <table id="datatable" class="table table-striped table-hover">
            <thead>
              <tr>
                <th>id</th>
                <th>Nama</th>
                <th>NIP</th>
                <th>Tingkat</th>
                <th>Jabatan</th>
                <th>Foto</th>
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
@include('pages.admin.struktural.modal.create')
@endsection
@section('script')
<script type="text/javascript">
    var datatable = $('#datatable').DataTable({
        processing: true,
        serverSide: false,
        paging:true,
        ajax:'{{ url('admin/struktural/datatables') }}',
         columns: [
        {data: 'id', name:'id'},
        {data: 'nama', name:'nama'},
        {data: 'nip', name:'nip'},
        {data: 'tingkat', name:'tingkat'},
        {data: 'nama_jabatan', name:'nama_jabatan'},
        {data: 'foto', name:'foto'},
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
  function createStruktural(id){
    $.ajax({
      method:'POST',
      url:'{{ url('admin/struktural/create') }}',
      data:{
        id:id,
        '_token': $('input[name=_token]').val()
      },

      success:function(data){
        console.log(data)
        $('#id_struktural').val(id)
        $('#nama').val(data.struktural.nama)
        $('#nama_jabatan').val(data.struktural.nama_jabatan)
        $('#nip').val(data.struktural.nip)
      }

  })
}
$('#frm_create_struktural').on('submit',function(e){
    e.preventDefault();
    $(this).ajaxSubmit({
      success:function(data){
        console.log(data);
        toastr.success("Data Struktural Berhasil tersimpan!");
        $(this).find(":submit").removeAttr('disabled');
        $('#modal-create').modal('toggle');
        datatable.ajax.reload();
        // reload_datatable()
      }
    })
  })

function deleteStruktural(id){

    Swal.fire({
          title               : "Anda Yakin?",
          text                : "Data Struktural akan terhapus dari sistem",
          icon                : "warning",
          showCancelButton    : true,
          confirmButtonColor  : "#e6b034",
          confirmButtonText   : "Ya, Hapus Data"
        }).then((result) => {
        if (result.value) {
            $.ajax({
                method:'POST',
              url:'{{ url('admin/struktural/delete') }}',
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
