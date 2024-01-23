
<div class="modal fade" id="modal-create" tabindex="-1" aria-labelledby="exampleModalLabel" aria-modal="true" role="dialog">
  <div class="modal-dialog modal-lg">
    <form id="frm_create_dokumen" enctype="multipart/form-data" method="POST" action="{{ url('admin/dokumen/save') }}">
      {{ csrf_field() }}

      <input type="hidden" value="" name="id" id="id">
    <div class="modal-content">
      <div class="modal-header bg-diagonal bg-diagonal-primary bg-diagonal-r-light">
        <h5 class="modal-title text-white" style="z-index:1;" id="exampleModalLabel"><i class="far fa-lightbulb text-white"></i> Form Input Dokumen</h5>
      </div>
      <div class="modal-body">
        <div class="mb-3 mt-4">
          <label for="nama" class="form-label"><strong>Nama Dokumen</strong></label>
          <input type="text" class="form-control" name="nama" id="nama_dokumen" placeholder="Misal (Renstra 2014 - 2019). . ." required>
        </div>
        <div class="mb-3 mt-4">
          <label for="bentuk" class="form-label"><strong>Jenis Dokumen</strong></label>
          <select class="form-control selectpicker" id="jenis" name="jenis" data-live-search="true" required>
            <option value="">--Pilih Jenis Dokumen--</option>
            @foreach($jenis as $b)
              <option value="{{ $b->id }}">{{ $b->nama }}</option>
            @endforeach
          </select>
        </div>
        <div class="row mb-3">
          <div class="col-lg-6 col-md-6">
            <label><strong>File Dokumen</strong></label>
            <div class="alert alert-primary" id="alert_file_dokumen" role="alert">
              File Dokumen dapat didownload
              <a id="link_file_dokumen" href="#" class="alert-link">pada link ini</a>.
                <button type="button" id="upload-dokumen" class="btn btn-light-warning font-weight-bold mr-2">
                  Klik disini
                </button> untuk mengupload ulang dokumen.
              </div>
              <input type="file" id="file_dokumen" class="form-control" name="file_dokumen">
          </div>
        </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save</button>
      </div>
    </div>
  </div>
  </form>
  </div>
</div>
