
<div class="modal fade modal-deskripsi" tabindex="-1" aria-labelledby="exampleModalLabel" aria-modal="true" role="dialog">
  <div class="modal-dialog modal-lg">
    <form id="frm_deskripsi_inovasi" enctype="multipart/form-data" method="POST" action="{{ url('inovasi/deskripsi') }}">
      {{ csrf_field() }}
      <input type="hidden" value="" name="id" id="id_inovasi_deskripsi">
    <div class="modal-content">
      <div class="modal-header bg-diagonal bg-diagonal-primary bg-diagonal-r-light">
        <h5 class="modal-title text-white" style="z-index:1;" id="exampleModalLabel"><i class="far fa-lightbulb text-white"></i> Penjelasan Inovasi</h5>
      </div>
      <div class="modal-body">
        <div class="mb-3 mt-4">
          <label class="form-label"><strong>Rancang bangun dan pokok perubahan yang dilakukan</strong></label>
          <textarea name="rancang_bangun" class="summernote" id="rancang_bangun"></textarea>
        </div>

        <div class="mb-3 mt-4">
          <label class="form-label"><strong>Manfaat Inovasi Yang Diperoleh</strong></label>
          <textarea name="manfaat" class="summernote" id="manfaat"></textarea>
        </div>
        
        <div class="mb-3 mt-4">
          <label class="form-label"><strong>Hasil Inovasi</strong></label>
          <textarea name="hasil" class="summernote" id="hasil"></textarea>
        </div>
        <div class="mb-3 mt-4">
          <label class="form-label"><strong>Tujuan Inovasi</strong></label>
          <textarea name="tujuan" class="summernote" id="tujuan"></textarea>
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