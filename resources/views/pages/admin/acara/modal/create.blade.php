
<div class="modal fade" id="modal-create" tabindex="-1" aria-labelledby="exampleModalLabel" aria-modal="true" role="dialog">
  <div class="modal-dialog modal-lg">
    <form id="frm_create_acara" enctype="multipart/form-data" method="POST" action="{{ url('admin/acara/save') }}">
      {{ csrf_field() }}

      <input type="hidden" value="" name="id" id="id">
    <div class="modal-content">
      <div class="modal-header bg-diagonal bg-diagonal-primary bg-diagonal-r-light">
        <h5 class="modal-title text-white" style="z-index:1;" id="exampleModalLabel"><i class="far fa-lightbulb text-white"></i> Form Buat Acara / Kegiatan</h5>
      </div>
      <div class="modal-body">
        <div class="mb-3 mt-4">
          <label for="judul" class="form-label"><strong>Judul / Nama Acara</strong></label>
          <input type="text" class="form-control" name="nama" id="nama" placeholder="Judul Acara. . ." required>
        </div>
        <div class="mb-3 mt-4">
          <label class="form-label"><strong>Tema / Deskripsi Acara</strong></label>
          {{-- <textarea name="deskripsi" class="summernote" id="deskripsi"></textarea> --}}
          <textarea name="tema" class="form-control" id="tema" rows="4"></textarea>
        </div>
        <div class="mb-3 mt-4">
          <label for="Tempat" class="form-label"><strong>Tempat Acara</strong></label>
          <input type="text" class="form-control" name="tempat" id="tempat" placeholder="Tempat Acara. . ." required>
        </div>
        <div class="mb-3 mt-4">
          <label for="tanggal" class="form-label"><strong>Tanggal Acara</strong></label>
          <input type="text" class="datepicker form-control" name="tanggal" id="tanggal" placeholder="Tanggal Acara. . ." required>
        </div>
        <div class="mb-3 mt-4">
          <label for="judul" class="form-label"><strong>Link Dokumentasi</strong></label>
          <input type="text" class="form-control" name="link_dokumentasi" id="link_dokumentasi" placeholder="link google photo. . ." required>
        </div>
        <div class="mb-3 mt-4">
          <label for="judul" class="form-label"><strong>Link Materi</strong></label>
          <input type="text" class="form-control" name="link_materi" id="link_materi" placeholder="link materi. . ." >
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
