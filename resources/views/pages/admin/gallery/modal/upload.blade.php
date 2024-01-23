
<div class="modal fade" id="modal-upload" tabindex="-1" aria-labelledby="exampleModalLabel" aria-modal="true" role="dialog">
  <div class="modal-dialog modal-lg">
    <form id="frm_upload_berita" enctype="multipart/form-data" method="POST" action="{{ url('admin/gallery/upload') }}">
      {{ csrf_field() }}

      <input type="hidden" value="" name="id" id="id_berita">
    <div class="modal-content">
      <div class="modal-header bg-diagonal bg-diagonal-primary bg-diagonal-r-light">
        <h5 class="modal-title text-white" style="z-index:1;" id="exampleModalLabel"><i class="far fa-lightbulb text-white"></i> Form Upload Gambar Terkait Gallery</h5>
      </div>
      <div class="modal-body">
        <div id="frmgambar1" class="form-horizontal gambars">
                              <div class="form-group">
                                <label class="control-label col-md-2">gambar : </label>
                                <div class="row">
                                  <div class="col-md-10">
                                    <input type="file" name="file[1][gambar]" id="gambar1" class="form-control"  required>
                                  </div>
                                  <div class="col-md-2">
                                    <button type="button" class="btn btn-danger btn-sm delete_gambars" id="delete_gambar1"> <i class="fa fa-trash"></i> </button> 
                                  </div>
                                </div>
                              </div>
                            </div>
                              <div class="form-group">
                                <button id="tambah-gambar" type="button" class="col-md-offset-6 btn btn-md btn-primary">
                                  <i class="ti-plus"> </i>Tambah Gambar
                                </button>
                              </div>
                              <div class="form-horizontal" id="preview_gambar">
                              <div class="row">
                                <div class="col-md-2">
                                  <label class="control-label">gambar 1 </label>
                                </div>
                                <div class="col-md-10">
                                  <a href="" class="btn btn-success">DOWNLOAD GAMBAR</a>
                                </div>
                              </div>
                            </div>
                            </div>
                            
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save</button>
      </div>
    </div>
  </form>
  </div>
</div>
