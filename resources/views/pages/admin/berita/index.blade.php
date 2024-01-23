@extends('layouts.app')

@section('content')

<div class="col">
  <div class="card">
    <div class="card-body">
      <div class="row justify-content-between">
        <div class="col-4">
          <h5 class="card-title">Data Berita</h5>
        </div>
        <div class="col-4">
          <div class="d-flex justify-content-end">
          <button onclick="createBerita(0)" data-toggle="modal" data-target="#modal-create" type="button" class="btn btn-outline-primary m-b-xs "><i class="fas fa-plus-circle"></i> Data Berita</button>
        </div>
        </div>
      </div>
      <div class="row mt-2">
        <div class="table-responsive">
          <table id="datatable" class="table table-striped table-hover">
            <thead>
              <tr>
                <th>id</th>
                <th>Judul</th>
                <th>Deskripsi</th>
                <th>Tanggal</th>
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
@include('pages.admin.berita.modal.create')
@include('pages.admin.berita.modal.upload')
@endsection
@section('script')
<script type="text/javascript">
  $(document).ready(function(){

  tinymce.init({
  selector: 'textarea#deskripsi',
  height: 500,
  plugins: [
    'advlist', 'autolink', 'lists', 'link',
    'searchreplace', 'visualblocks', 'code', 'fullscreen',
    'insertdatetime', 'table', 'wordcount'
  ],
  toolbar: 'undo redo | blocks | ' +
  'bold italic backcolor | alignleft aligncenter ' +
  'alignright alignjustify | bullist numlist outdent indent | ' +
  'removeformat',
  content_style: 'body { font-family:Arial,sans-serif; font-size:12px }'
});
  })
    var datatable = $('#datatable').DataTable({
        processing: true,
        serverSide: false,
        paging:true,
        ajax:'{{ url('admin/berita/datatables') }}',
         columns: [
        {data: 'id', name:'id'},
        {data: 'judul', name:'judul'},
        {data: 'deskripsi', name:'deskripsi'},
        {data: 'tanggal', name:'tanggal'},
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
  function createBerita(id){
    $.ajax({
      method:'POST',
      url:'{{ url('admin/berita/create') }}',
      data:{
        id:id,
        '_token': $('input[name=_token]').val()
      },
      success:function(data){
        console.log(data)
        $('#id').val(id)
        $('#judul').val(data.berita.judul)
        var desk = data.berita.deskripsi
        if(id == 0)
        {
          desk = ''
        }
        tinymce.activeEditor.setContent(desk)
        $('#tanggal').val(data.berita.tanggal)
      }

  })
}
$('#frm_create_berita').on('submit',function(e){
  console.log('submitted')
    e.preventDefault();
    $(this).ajaxSubmit({
      success:function(data){
        console.log(data);
        toastr.success("Data berita Berhasil tersimpan!");
        $(this).find(":submit").removeAttr('disabled');
        $('#modal-create').modal('toggle');
        datatable.ajax.reload();
        // reload_datatable()
      }
    })
  })

function deleteBerita(id){

    Swal.fire({
          title               : "Anda Yakin?",
          text                : "Berita akan terhapus dari sistem",
          icon                : "warning",
          showCancelButton    : true,
          confirmButtonColor  : "#e6b034",
          confirmButtonText   : "Ya, Hapus Berita"
        }).then((result) => {
        if (result.value) {
            $.ajax({
                method:'POST',
              url:'{{ url('admin/berita/delete') }}',
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

if ($('.gambars').length <= 1) {
            $('.delete_gambars').hide();
            $('#delete_gambar1').hide();
      }
    $('#tambah-gambar').click(function(){
        var numb = $('.gambars').length;

        var newNumb = numb + 1;
        var newElemb = $('#frmgambar' + numb).clone().attr('id', 'frmgambar' + newNumb);

        newElemb.find('#gambar' + numb).attr('id', 'gambar' + newNumb).attr('name', 'file[' + newNumb + '][gambar]').val('');

        newElemb.find('#delete_gambar' + numb).attr('id', 'delete_gambar' + newNumb).attr('onclick', 'removegambar("#frmgambar' + newNumb + '")').show();

        $('#frmgambar' + numb).after(newElemb);

      });

    function removegambar(val,id){
        $(val).remove();
        $('input[name="delete_gambar[' + id + ']"]').val(id);
    }

    function cekupload(id){
      
    $.ajax({
      method:'POST',
      url:'{{ url('admin/berita/cekupload') }}',
      data:{
        id:id,
        '_token': $('input[name=_token]').val()
      },
      success:function(data){
        $('#preview_gambar').html('')
        $('#id_berita').val(id)
        console.log(data.gambar.length)
        if(data.gambar.length == 0){
          $('#preview_gambar').hide()
        }
        else{
          $('#preview_gambar').show()
          var i = 0;
          for(i = 0; i < data.gambar.length; i++){
            var number = i + 1;
            $('#preview_gambar').append(`
                              <div class="row mb-2">
                                <div class="col-md-2">
                                  <label class="control-label">gambar `+number+` </label>
                                </div>
                                <div class="col-md-10">
                                  <a href="{{ url('download/berita/gambar') }}/`+data.gambar[i].id+`" class="btn btn-success">DOWNLOAD GAMBAR</a>
                                </div>
                              </div>`)
          }
        }
      }
    })
  }
  $('#frm_upload_berita').on('submit',function(e){
    e.preventDefault();

    $(this).ajaxSubmit({
      success:function(data){
        toastr.success("Gambar berita Berhasil tersimpan!");
        $(this).find(":submit").removeAttr('disabled');
        $('#modal-upload').modal('toggle');
        datatable.ajax.reload();
      }
    })
  })

</script>
@endsection
