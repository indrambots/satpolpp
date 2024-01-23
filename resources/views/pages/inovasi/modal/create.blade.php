
<div class="modal fade" id="modal-create" tabindex="-1" aria-labelledby="exampleModalLabel" aria-modal="true" role="dialog">
  <div class="modal-dialog modal-lg">
    <form id="frm_create_inovasi" enctype="multipart/form-data" method="POST" action="{{ url('inovasi/save') }}">
      {{ csrf_field() }}

      <input type="hidden" value="" name="id" id="id_inovasi">
    <div class="modal-content">
      <div class="modal-header bg-diagonal bg-diagonal-primary bg-diagonal-r-light">
        <h5 class="modal-title text-white" style="z-index:1;" id="exampleModalLabel"><i class="far fa-lightbulb text-white"></i> Form Buat Inovasi</h5>
      </div>
      <div class="modal-body">
        <div class="mb-3 mt-4">
          <label for="nama" class="form-label"><strong>Nama Inovasi</strong></label>
          <input type="text" class="form-control" name="nama" id="nama" placeholder="Nama Inovasi. . ." required>
        </div>
          <div class="row  mb-3">
            <div class="col-md-6 col-lg-6">
              <div class="form-group">
                <label><strong>Tahapan Inovasi</strong></label>
                    <div class="radio-inline">
                      <label class="radio radio-lg" for="tahapan_insiatif">
                      <input type="radio" name="tahapan" id="tahapan_insiatif" value="Inisiatif">
                      <span></span> Inisiatif
                      </label>
                      <label class="radio radio-lg" for="tahapan_uji">
                      <input type="radio" name="tahapan" id="tahapan_uji" value="Uji Coba">
                      <span></span> Uji Coba
                      </label>
                      <label class="radio radio-lg" for="tahapan_penerapan">
                      <input type="radio" name="tahapan" id="tahapan_penerapan" value="Penerapan">
                      <span></span>Penerapan
                      </label>
                    </div>
              </div>
            </div>
          <div class="col-md-6 col-lg-6">
            <div class="form-group">
            <label><strong>Inisiator Inovasi</strong></label>
                <div class="radio-inline">
                  <label class="radio radio-lg" for="inisiator_kepala_daerah">
                  <input type="radio" name="inisiator" id="inisiator_kepala_daerah" value="Kepala Daerah">
                    <span></span> Kepala Daerah
                  </label>
                  <label class="radio radio-lg" for="inisiator_dprd">
                  <input type="radio" name="inisiator" id="inisiator_dprd" value="Anggota DPRD">
                    <span></span> Anggota DPRD
                  </label>
                  <label class="radio radio-lg" for="inisiator_opd">
                  <input type="radio" name="inisiator" id="inisiator_opd" value="Perangkat Daerah">
                    <span></span> Perangkat Daerah
                  </label>
                  <label class="radio radio-lg" for="inisiator_asn">
                  <input type="radio" name="inisiator" id="inisiator_asn" value="ASN">
                    <span></span> ASN
                  </label>
                  <label class="radio radio-lg" for="inisiator_masyarakat">
                  <input type="radio" name="inisiator" id="inisiator_masyarakat" value="Masyarakat">
                    <span></span> Masyarakat
                  </label>
                </div>
            </div>
          </div>
        </div>

        <div class="row mb-3">
          <div class="col-md-6 col-lg-6">
            <label><strong>Jenis Inovasi</strong></label>
              <div class="radio-inline">
                <label class="radio radio-xl" for="jenis_digital">
                <input type="radio" name="jenis" id="jenis_digital" value="Digital">
                  <span></span> Digital
                </label>
                <label class="radio radio-xl" for="inisiator_non_digital">
                <input type="radio" name="jenis" id="inisiator_non_digital" value="Non Digital">
                  <span></span> Non Digital
                </label>
              </div>
          </div>
          <div class="col-md-6 col-lg-6">
            <div class="form-group">
              <label><strong>COVID 19</strong></label>
              <div class="radio-inline">
                <label class="radio radio-xl" for="covid">
                  <input type="radio" name="covid" id="covid" value="Covid 19">
                   <span></span> Covid 19
                  </label>
                  <label class="radio radio-xl" for="non_covid">
                  <input type="radio" name="covid" id="non_covid" value="Non Covid 19">
                    <span></span> Non Covid 19
                  </label>
              </div>
            </div>
          </div>
        </div>

        <div class="mb-3">
          <label for="bentuk" class="form-label"><strong>Bentuk</strong></label>
          <select class="form-control selectpicker" id="bentuk" name="bentuk" data-live-search="true" required>
            <option value="">--Pilih Bentuk Inovasi--</option>
            @foreach($bentuk as $b)
              <option value="{{ $b->narasi }}">{{ $b->narasi }}</option>
            @endforeach
          </select>
        </div>

        <div class="mb-3">
          <label for="bentuk" class="form-label"><strong>Urusan</strong></label>
          <select class="form-control selectpicker" id="urusan" data-live-search="true" name="urusan[]" multiple="multiple" required>
            <option value="" >--Pilih Urusan Inovasi--</option>
            @foreach($category as $u)
              <option value="{{ $u->nama }}">{{ $u->nama }}</option>
            @endforeach
          </select>
        </div>
        <div class="row mb-3">
          <div class="col-md-6 col-lg-6">
            <label for="waktu_uji_coba" class="form-label"><strong>Waktu Uji Coba</strong></label>
            <input style="width: 90%;" type="text" class="form-control datepicker" id="waktu_uji_coba" name="waktu_uji_coba" required>
          </div>
          <div class="col-md-6 col-lg-6">
            <label for="waktu_penerapan" class="form-label"><strong>Waktu Penerapan</strong></label>
            <input type="text" style="width: 90%;" class="form-control datepicker" id="waktu_penerapan" name="waktu_penerapan" required>
          </div>
        </div>
        <div class="row mb-3">
          <div class="col-lg-6 col-md-6">
            <label><strong>File Anggaran</strong></label>
            <div class="alert alert-primary" id="alert_file_anggaran" role="alert">
              Bukti File pendukung anggaran dapat didownload
              <a id="link_file_anggaran" href="#" class="alert-link">pada link ini</a>.
                <button type="button" id="upload-anggaran" class="btn btn-light-warning font-weight-bold mr-2">
                  Klik disini
                </button> untuk mengupload ulang bukti anggaran.
              </div>
              <input type="file" class="form-control" name="file_anggaran">
          </div>
          <div class="col-lg-6 col-md-6">
            <label><strong>File Profil Bisnis</strong></label>
            <div class="alert alert-primary" id="alert_profil_bisnis" role="alert">
              Bukti File pendukung profil bisnis dapat didownload
              <a id="link_file_profil_bisnis" class="alert-link">pada link ini</a>.
                <button type="button" id="upload-profil_bisnis" class="btn btn-light-warning font-weight-bold mr-2">
                  Klik disini
                </button> untuk mengupload ulang bukti profil bisnis.
              </div>
              <input type="file" class="form-control" name="file_profil_bisnis">
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
