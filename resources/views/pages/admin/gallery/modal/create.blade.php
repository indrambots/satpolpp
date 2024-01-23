
<div class="modal fade" id="modal-create" tabindex="-1" aria-labelledby="exampleModalLabel" aria-modal="true" role="dialog">
  <div class="modal-dialog modal-lg">
    <form id="frm_create_berita" enctype="multipart/form-data" method="POST" action="{{ url('admin/gallery/save') }}">
      {{ csrf_field() }}

      <input type="hidden" value="" name="id" id="id">
    <div class="modal-content">
      <div class="modal-header bg-diagonal bg-diagonal-primary bg-diagonal-r-light">
        <h5 class="modal-title text-white" style="z-index:1;" id="exampleModalLabel"><i class="far fa-lightbulb text-white"></i> Form Buat Gallery</h5>
      </div>
      <div class="modal-body">
        <div class="mb-3 mt-4">
          <label for="judul" class="form-label"><strong>Judul Gallery</strong></label>
          <input type="text" class="form-control" name="judul" id="judul" placeholder="Judul Gallery. . ." required>
        </div>
        <div class="mb-3 mt-4">
          <label class="form-label"><strong>Deskripsi</strong></label>
          <textarea name="deskripsi" class="summernote" id="deskripsi"></textarea>
        </div>
        <div class="mb-3 mt-4">
          <label for="tanggal" class="form-label"><strong>Tanggal Gallery</strong></label>
          <input type="text" class="datepicker form-control" name="tanggal" id="tanggal" placeholder="Tanggal Gallery. . ." required>
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
