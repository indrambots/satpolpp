<div class="modal fade" id="modal-file" tabindex="-1" role="dialog">
  <div class="modal-dialog modal-lg" role="document">
    <form enctype="multipart/form-data" method="POST" action="{{ url('inovasi\bobot\save') }}">
      {{ csrf_field() }}
      <div class="modal-content">
        <div class="modal-header bg-diagonal bg-diagonal-info bg-diagonal-r-primary">
          <h5 class="modal-title text-white" id="exampleModalLabel" style="z-index: 1;">Silahkan upload file pendukung inovasi anda disini</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <i aria-hidden="true" class="ki ki-close"></i>
          </button>
        </div>
        <div class="modal-body">

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-light-info font-weight-bold" data-dismiss="modal">Tutup</button>
          <button type="button" class="btn btn-info font-weight-bold">Simpan Perubahan</button>
        </div>
      </div>
    </form>
  </div>
</div>