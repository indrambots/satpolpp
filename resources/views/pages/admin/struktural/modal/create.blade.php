
<div class="modal fade" id="modal-create" tabindex="-1" aria-labelledby="exampleModalLabel" aria-modal="true" role="dialog">
  <div class="modal-dialog modal-lg">
    <form id="frm_create_struktural" enctype="multipart/form-data" method="POST" action="{{ url('admin/struktural/save') }}">
      {{ csrf_field() }}

      <input type="hidden" value="" name="id" id="id_struktural">
    <div class="modal-content">
      <div class="modal-header bg-diagonal bg-diagonal-primary bg-diagonal-r-light">
        <h5 class="modal-title text-white" style="z-index:1;" id="exampleModalLabel"><i class="far fa-lightbulb text-white"></i> Form Input Data Struktural</h5>
      </div>
      <div class="modal-body">
        <div class="mb-3 mt-4">
          <label for="nama" class="form-label"><strong>Nama</strong></label>
          <input type="text" class="form-control" name="nama" id="nama" placeholder="Nama Lengkap dengan gelar. . ." required>
        </div>

        <div class="mb-3 mt-4">
          <label for="nama" class="form-label"><strong>NIP</strong></label>
          <input type="number" class="form-control" name="nip" id="nip" placeholder="Nomor Induk Pegawai. . ." required>
        </div>
        <div class="mb-3 mt-4">
          <label for="bentuk" class="form-label"><strong>Tingkat Jabatan</strong></label>       
          <select class="form-control selectpicker" id="tingkat" name="tingkat" data-live-search="true" required>
            <option value="">--Pilih Tingkat Jabatan--</option>
            <option value="1">1 (KASAT)</option>
            <option value="2">2 (KABID)</option>
            <option value="3">3 (KASI)</option>        
          </select>
        <div class="mb-3 mt-4">
          <label for="nama" class="form-label"><strong>Nama Jabatan</strong></label>
          <input type="text" class="form-control" name="nama_jabatan" id="nama_jabatan" placeholder="Misal(Kepala Seksi Ketertiban). . ." required>
        </div>
        <div class="row mb-3">
          <div class="col-lg-6 col-md-6">
            <label><strong>File Foto</strong></label>
              <input type="file" class="form-control" name="foto">
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
