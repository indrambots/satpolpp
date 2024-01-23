<div class="modal fade" id="modal-filebobot" aria-modal="true" role="dialog">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header bg-diagonal bg-diagonal-primary bg-diagonal-r-light">
                <h5 class="modal-title text-white" style="z-index: 1;">
                    <i class="flaticon-upload text-white"> </i> Upload File Bukti Pendukung
                </h5>
            </div>
            <div class="modal-body">
              <form class="form-group row upload_dataPendukung" id="file-regulasi" method="POST" enctype="multipart/form-data" action="{{ url('inovasi/uploadFilePendukung') }}">
                {{ csrf_field() }}
                <div class="alert alert-primary w-100" id="alert_file_anggaran" role="alert">
                    Bukti File pendukung dapat didownload
                    <a id="link_file_anggaran" href="#" class="alert-link">pada link ini</a>.
                    <button type="button" class="btnalert btn btn-light-warning font-weight-bold mr-2">
                        Klik disini
                    </button> untuk mengupload ulang bukti.
                </div>
                <div class="upload w-100">
                    <label>File Bukti Regulasi</label>
                    <div class="input-group" id="file_regulasi">
                      <input type="file" accept="application/pdf,application/vnd.ms-excel" class="form-control" name="file">
                      <input type="hidden" class="form-control" value="regulasi" name="nama">
                      <div class="input-group-append">
                          <button class="input-group-text" style="background-color: #0bb783; cursor:pointer;" type="submit">
                            <i class="flaticon-upload text-white"></i>
                          </button>
                      </div>
                    </div>
                    <span class="form-text text-warning">Dibuktikan dengan halaman depan Perda atau Perkada atau SK Kepala Daerah atau SK Kepala Perangkat Daerah serta halaman yang memuat nama inovasi</span>
                    <div class="alert alert-secondary" id="alert_regulasi" role="alert">
                      Bukti File pendukung regulasi dapat didownload
                      <a href="#" class="btn btn-light-primary font-weight-bold mr-2">pada link ini</a>.
                        untuk mengupload ulang bukti regulasi
                        <a href="#" class="btn btn-light-warning font-weight-bold mr-2">
                          Klik disini
                        </a>
                    </div>
                </div>
              </form>
              <form class="form-group row upload_dataPendukung" id="file-ketersediaan_sdm" method="POST" enctype="multipart/form-data" action="{{ url('inovasi/uploadFilePendukung') }}" >
                {{ csrf_field() }}
                <div class="alert alert-primary w-100" id="alert_file_anggaran" role="alert">
                    Bukti File pendukung dapat didownload
                    <a id="link_file_anggaran" href="#" class="alert-link">pada link ini</a>.
                    <button type="button" class="btnalert btn btn-light-warning font-weight-bold mr-2">
                        Klik disini
                    </button> untuk mengupload ulang bukti.
                </div>
                <div class="upload w-100">
                    <label>File Bukti Ketersediaan SDM terhadap inovasi daerah</label>
                    <div class="input-group" id="file_ketersediaan_sdm">
                      <input type="file" accept="application/pdf,application/vnd.ms-excel" class="form-control" name="ketersediaan_sdm">
                      <div class="input-group-append">
                          <button class="input-group-text" style="background-color: #0bb783; cursor:pointer;" type="submit">
                            <i class="flaticon-upload text-white"></i>
                          </button>
                      </div>
                    </div>
                    <span class="form-text text-warning">Dibuktikan dengan SK atau ST yang ditetapkan oleh Kepala Daerah/Kepala Perangkat Daerah</span>
                    <div class="alert alert-secondary" id="alert_ketersediaan_sdm" role="alert">
                      Bukti File pendukung ketersediaan SDM dapat didownload
                      <a href="#" class="btn-light-warning">pada link ini</a>.
                      untuk mengupload ulang bukti ketersediaan SDM.
                        <a href="#" class="btn btn-light-warning font-weight-bold mr-2">
                          Klik disini
                        </a>
                    </div>
                </div>
              </form>
              <form class="form-group row upload_dataPendukung" id="file-dukungan_anggaran" method="POST" enctype="multipart/form-data" action="{{ url('inovasi/uploadFilePendukung') }}">
                {{ csrf_field() }}
                <div class="alert alert-primary w-100" id="alert_file_anggaran" role="alert">
                    Bukti File pendukung dapat didownload
                    <a id="link_file_anggaran" href="#" class="alert-link">pada link ini</a>.
                    <button type="button" class="btnalert btn btn-light-warning font-weight-bold mr-2">
                        Klik disini
                    </button> untuk mengupload ulang bukti.
                </div>
                <div class="upload w-100">
                    <label>File Bukti Dukungan Anggaran</label>
                    <div class="input-group" id="file_dukungan_anggaran">
                      <input type="file" accept="application/pdf,application/vnd.ms-excel" class="form-control" name="dukungan_anggaran">
                      <div class="input-group-append">
                          <button class="input-group-text" style="background-color: #0bb783; cursor:pointer;" type="submit">
                            <i class="flaticon-upload text-white"></i>
                          </button>
                      </div>
                    </div>
                    <span class="form-text text-warning">Dibuktikan dengan bab, bagian, dan halaman dokumen anggaran yang memuat program dan kegiatan inovasi daerah </span>
                    <div class="alert alert-secondary" id="alert_dukungan_anggaran" role="alert">
                      Bukti File pendukung dukungan anggaran dapat didownload
                      <a href="#" class="btn-light-warning">pada link ini</a>.
                      untuk mengupload ulang bukti dukungan anggaran.
                        <a href="#" class="btn btn-light-warning font-weight-bold mr-2">
                          Klik disini
                        </a>
                    </div>
                </div>
              </form>
              <form class="form-group row upload_dataPendukung" id="file-penggunaan_it" method="POST" enctype="multipart/form-data" action="{{ url('inovasi/uploadFilePendukung') }}">

                {{ csrf_field() }}
                <div class="alert alert-primary w-100" id="alert_file_anggaran" role="alert">
                    Bukti File pendukung dapat didownload
                    <a id="link_file_anggaran" href="#" class="alert-link">pada link ini</a>.
                    <button type="button" class="btnalert btn btn-light-warning font-weight-bold mr-2">
                        Klik disini
                    </button> untuk mengupload ulang bukti.
                </div>
                <div class="upload w-100">
                    <label>File Bukti penggunaan IT</label>
                    <div class="input-group" id="file_penggunaan_it">
                      <input type="file" accept="application/pdf,application/vnd.ms-excel" class="form-control" name="penggunaan_it">
                      <div class="input-group-append">
                          <button class="input-group-text" style="background-color: #0bb783; cursor:pointer;" type="submit">
                            <i class="flaticon-upload text-white"></i>
                          </button>
                      </div>
                    </div>
                    <span class="form-text text-warning">Dibuktikan dengan Foto Kegiatan/ Gambar Screenshot layar </span>
                    <div class="alert alert-secondary" id="alert_penggunaan_it" role="alert">
                      Bukti File pendukung penggunaan IT dapat didownload
                      <a href="#" class="btn-light-warning">pada link ini</a>.
                      untuk mengupload ulang bukti penggunaan IT.
                        <a href="#" class="btn btn-light-warning font-weight-bold mr-2">
                          Klik disini
                        </a>
                    </div>
                </div>
              </form>
              <form class="form-group row upload_dataPendukung" id="file-bimtek_inovasi" method="POST" enctype="multipart/form-data" action="{{ url('inovasi/uploadFilePendukung') }}">
                {{ csrf_field() }}
                <div class="alert alert-primary w-100" id="alert_file_anggaran" role="alert">
                    Bukti File pendukung dapat didownload
                    <a id="link_file_anggaran" href="#" class="alert-link">pada link ini</a>.
                    <button type="button" class="btnalert btn btn-light-warning font-weight-bold mr-2">
                        Klik disini
                    </button> untuk mengupload ulang bukti.
                </div>
                <div class="upload w-100">
                    <label>File Bukti Bimtek Inovasi</label>
                    <div class="input-group" id="file_bimtek_inovasi">
                      <input type="file" accept="application/pdf,application/vnd.ms-excel" class="form-control" name="bimtek_inovasi">
                      <div class="input-group-append">
                          <button class="input-group-text" style="background-color: #0bb783; cursor:pointer;" type="submit">
                            <i class="flaticon-upload text-white"></i>
                          </button>
                      </div>
                    </div>
                    <span class="form-text text-warning">Dibuktikan dengan SK Kegiatan/ Surat Tugas, Daftar Hadir, dan Undangan kegiatan Bimtek Sertakan bukti dukung sejumlah frekuensi pelaksanaan bimtek</span>
                    <div class="alert alert-secondary" id="alert_bimtek_inovasi" role="alert">
                      Bukti File pendukung Bimtek Inovasi dapat didownload
                      <a href="#" class="btn-light-warning">pada link ini</a>.
                       untuk mengupload ulang bukti Bimtek Inovasi.
                        <a href="#" class="btn btn-light-warning font-weight-bold mr-2">
                          Klik disini
                        </a>
                    </div>
                </div>
              </form>
              <form class="form-group row upload_dataPendukung" id="file-program_rkpd" method="POST" enctype="multipart/form-data" action="{{ url('inovasi/uploadFilePendukung') }}">
                {{ csrf_field() }}
                <div class="alert alert-primary w-100" id="alert_file_anggaran" role="alert">
                    Bukti File pendukung dapat didownload
                    <a id="link_file_anggaran" href="#" class="alert-link">pada link ini</a>.
                    <button type="button" class="btnalert btn btn-light-warning font-weight-bold mr-2">
                        Klik disini
                    </button> untuk mengupload ulang bukti.
                </div>
                <div class="uplaod w-100">
                    <label>File Bukti Program RKPD</label>
                    <div class="input-group" id="file_program_rkpd">
                      <input type="file" accept="application/pdf,application/vnd.ms-excel" class="form-control" name="program_rkpd">
                      <div class="input-group-append">
                          <button class="input-group-text" style="background-color: #0bb783; cursor:pointer;" type="submit">
                            <i class="flaticon-upload text-white"></i>
                          </button>
                      </div>
                    </div>
                    <span class="form-text text-warning">Dibuktikan dengan Bab, Bagian, dan Halaman Dokumen RPJMD/RKPD yang memuat program dan kegiatan inovasi daerah</span>
                    <div class="alert alert-secondary" id="alert_program_rkpd" role="alert">
                      Bukti File pendukung Program RKPD dapat didownload
                      <a href="#" class="btn-light-warning">pada link ini</a>.
                      untuk mengupload ulang bukti Program RKPD.
                        <a href="#" class="btn btn-light-warning font-weight-bold mr-2">
                          Klik disini
                        </a>
                    </div>
                </div>
              </form>
              <form class="form-group row upload_dataPendukung" id="file-keterlibatan_aktor" method="POST" enctype="multipart/form-data" action="{{ url('inovasi/uploadFilePendukung') }}">
                {{ csrf_field() }}
                <div class="alert alert-primary w-100" id="alert_file_anggaran" role="alert">
                    Bukti File pendukung dapat didownload
                    <a id="link_file_anggaran" href="#" class="alert-link">pada link ini</a>.
                    <button type="button" class="btnalert btn btn-light-warning font-weight-bold mr-2">
                        Klik disini
                    </button> untuk mengupload ulang bukti.
                </div>
                <div class="upload w-100">
                    <label>File Bukti Keterlibatan aktor</label>
                    <div class="input-group" id="file_keterlibatan_aktor">
                      <input type="file" accept="application/pdf,application/vnd.ms-excel" class="form-control" name="keterlibatan_aktor">
                      <div class="input-group-append">
                          <button class="input-group-text" style="background-color: #0bb783; cursor:pointer;" type="submit">
                            <i class="flaticon-upload text-white"></i>
                          </button>
                      </div>
                    </div>
                    <span class="form-text text-warning">Dibuktikan dengan Surat Keputusan Perangkat Daerah/Undangan rapat</span>
                    <div class="alert alert-secondary" id="alert_keterlibatan_aktor" role="alert">
                      Bukti File pendukung Keterlibatan aktor dapat didownload
                      <a href="#" class="btn-light-warning">pada link ini</a>.
                      untuk mengupload ulang bukti Keterlibatan aktor.
                        <a href="#" class="btn btn-light-warning font-weight-bold mr-2">
                          Klik disini
                        </a>
                    </div>
                </div>
              </form>

              <form class="form-group row upload_dataPendukung" id="file-pelaksana_inovasi" method="POST" enctype="multipart/form-data" action="{{ url('inovasi/uploadFilePendukung') }}">
                {{ csrf_field() }}
                <div class="alert alert-primary w-100" id="alert_file_anggaran" role="alert">
                    Bukti File pendukung dapat didownload
                    <a id="link_file_anggaran" href="#" class="alert-link">pada link ini</a>.
                    <button type="button" class="btnalert btn btn-light-warning font-weight-bold mr-2">
                        Klik disini
                    </button> untuk mengupload ulang bukti.
                </div>
                <div class="upload w-100">
                    <label>File Bukti Pelaksana inovasi daerah</label>
                    <div class="input-group" id="file_pelaksana_inovasi">
                      <input type="file" accept="application/pdf,application/vnd.ms-excel" class="form-control" name="pelaksana_inovasi">
                      <div class="input-group-append">
                          <button class="input-group-text" style="background-color: #0bb783; cursor:pointer;" type="submit">
                            <i class="flaticon-upload text-white"></i>
                          </button>
                      </div>
                    </div>
                    <span class="form-text text-warning">Dibuktikan dengan SK Penetapan oleh Kepala Daerah/Kepala Perangkat Daerah</span>
                    <div class="alert alert-secondary" id="alert_pelaksana_inovasi" role="alert">
                      Bukti File pendukung Pelaksana inovasi daerah dapat didownload
                      <a href="#" class="btn-light-warning">pada link ini</a>.
                      untuk mengupload ulang bukti Pelaksana inovasi daerah.
                        <a href="#" class="btn btn-light-warning font-weight-bold mr-2">
                          Klik disini
                        </a>
                    </div>
                </div>
              </form>

              <form class="form-group row upload_dataPendukung" id="file-jejaring_inovasi" method="POST" enctype="multipart/form-data" action="{{ url('inovasi/uploadFilePendukung') }}">
                {{ csrf_field() }}
                <div class="alert alert-primary w-100" id="alert_file_anggaran" role="alert">
                    Bukti File pendukung dapat didownload
                    <a id="link_file_anggaran" href="#" class="alert-link">pada link ini</a>.
                    <button type="button" class="btnalert btn btn-light-warning font-weight-bold mr-2">
                        Klik disini
                    </button> untuk mengupload ulang bukti.
                </div>
                <div class="upload w-100">
                    <label>File Bukti Jejaring inovasi</label>
                    <div class="input-group" id="file_jejaring_inovasi">
                      <input type="file" accept="application/pdf,application/vnd.ms-excel" class="form-control" name="jejaring_inovasi">
                      <div class="input-group-append">
                          <button class="input-group-text" style="background-color: #0bb783; cursor:pointer;" type="submit">
                            <i class="flaticon-upload text-white"></i>
                          </button>
                      </div>
                    </div>
                    <span class="form-text text-warning">Dibuktikan dengan SK/ST tim pengelola/penerapan inovasi daerah</span>
                    <div class="alert alert-secondary" id="alert_jejaring_inovasi" role="alert">
                      Bukti File pendukung Jejaring inovasi dapat didownload
                      <a href="#" class="btn-light-warning">pada link ini</a>.
                      untuk mengupload ulang bukti Jejaring inovasi.
                        <a href="#" class="btn btn-light-warning font-weight-bold mr-2">
                          Klik disini
                        </a>
                    </div>
                </div>
              </form>

              <form class="form-group row upload_dataPendukung" id="file-sosialisasi_inovasi" method="POST" enctype="multipart/form-data" action="{{ url('inovasi/uploadFilePendukung') }}">

                {{ csrf_field() }}
                <div class="alert alert-primary w-100" id="alert_file_anggaran" role="alert">
                    Bukti File pendukung dapat didownload
                    <a id="link_file_anggaran" href="#" class="alert-link">pada link ini</a>.
                    <button type="button" class="btnalert btn btn-light-warning font-weight-bold mr-2">
                        Klik disini
                    </button> untuk mengupload ulang bukti.
                </div>
                <div class="upload w-100">
                    <label>File Bukti Sosialisasi inovasi</label>
                    <div class="input-group" id="file_sosialisasi_inovasi">
                      <input type="file" accept="application/pdf,application/vnd.ms-excel" class="form-control" name="sosialisasi_inovasi">
                      <div class="input-group-append">
                          <button class="input-group-text" style="background-color: #0bb783; cursor:pointer;" type="submit">
                            <i class="flaticon-upload text-white"></i>
                          </button>
                      </div>
                    </div>
                    <span class="form-text text-warning">Dibuktikan dengan dokumentasi dan publikasi</span>
                    <div class="alert alert-secondary" id="alert_sosialisasi_inovasi" role="alert">
                      Bukti File pendukung Sosialisasi inovasi dapat didownload
                      <a href="#" class="btn-light-warning">pada link ini</a>.
                      untuk mengupload ulang bukti Sosialisasi inovasi.
                        <a href="#" class="btn btn-light-warning font-weight-bold mr-2">
                          Klik disini
                        </a>
                    </div>
                </div>
              </form>

              <form class="form-group row upload_dataPendukung" id="file-pedoman_teknis" method="POST" enctype="multipart/form-data" action="{{ url('inovasi/uploadFilePendukung') }}">

                {{ csrf_field() }}
                <div class="alert alert-primary w-100" id="alert_file_anggaran" role="alert">
                    Bukti File pendukung dapat didownload
                    <a id="link_file_anggaran" href="#" class="alert-link">pada link ini</a>.
                    <button type="button" class="btnalert btn btn-light-warning font-weight-bold mr-2">
                        Klik disini
                    </button> untuk mengupload ulang bukti.
                </div>
                <div class="upload w-100">
                    <label>File Bukti Pedoman teknis</label>
                    <div class="input-group" id="file_pedoman_teknis">
                      <input type="file" accept="application/pdf,application/vnd.ms-excel" class="form-control" name="pedoman_teknis">
                      <div class="input-group-append">
                          <button class="input-group-text" style="background-color: #0bb783; cursor:pointer;" type="submit">
                            <i class="flaticon-upload text-white"></i>
                          </button>
                      </div>
                    </div>
                    <span class="form-text text-warning">Dibuktikan dengan dokumen manual book/Buku petunjuk (pdf) atau screenshot penggunaan inovasi daerah (jpg/jpeg/png)</span>
                    <div class="alert alert-secondary" id="alert_pedoman_teknis" role="alert">
                      Bukti File pendukung Pedoman teknis dapat didownload
                      <a href="#" class="btn-light-warning">pada link ini</a>.
                      untuk mengupload ulang bukti Pedoman teknis.
                        <a href="#" class="btn btn-light-warning font-weight-bold mr-2">
                          Klik disini
                        </a>
                    </div>
                </div>
              </form>

              <form class="form-group row upload_dataPendukung" id="file-kemudahan_informasi" method="POST" enctype="multipart/form-data" action="{{ url('inovasi/uploadFilePendukung') }}">
                {{ csrf_field() }}
                <div class="alert alert-primary w-100" id="alert_file_anggaran" role="alert">
                    Bukti File pendukung dapat didownload
                    <a id="link_file_anggaran" href="#" class="alert-link">pada link ini</a>.
                    <button type="button" class="btnalert btn btn-light-warning font-weight-bold mr-2">
                        Klik disini
                    </button> untuk mengupload ulang bukti.
                </div>
                <div class="upload w-100">
                    <label>File Bukti Kemudahan informasi layanan</label>
                    <div class="input-group" id="file_kemudahan_informasi">
                      <input type="file" accept="application/pdf,application/vnd.ms-excel" class="form-control" name="kemudahan_informasi">
                      <div class="input-group-append">
                          <button class="input-group-text" style="background-color: #0bb783; cursor:pointer;" type="submit">
                            <i class="flaticon-upload text-white"></i>
                          </button>
                      </div>
                    </div>
                    <span class="form-text text-warning">Dibuktikan dengan Nomor layanan telp/ screenshot email/akun media sosial/nama aplikasi online/dokumen foto buku tamu layanan</span>
                    <div class="alert alert-secondary" id="alert_kemudahan_informasi" role="alert">
                      Bukti File pendukung Kemudahan informasi layanan dapat didownload
                      <a href="#" class="btn-light-warning">pada link ini</a>.
                      untuk mengupload ulang bukti Kemudahan informasi layanan.
                        <a href="#" class="btn btn-light-warning font-weight-bold mr-2">
                          Klik disini
                        </a>
                    </div>
                </div>
              </form>

              <form class="form-group row upload_dataPendukung" id="file-kemudahan_proses" method="POST" enctype="multipart/form-data" action="{{ url('inovasi/uploadFilePendukung') }}">
                {{ csrf_field() }}
                <div class="alert alert-primary w-100" id="alert_file_anggaran" role="alert">
                    Bukti File pendukung dapat didownload
                    <a id="link_file_anggaran" href="#" class="alert-link">pada link ini</a>.
                    <button type="button" class="btnalert btn btn-light-warning font-weight-bold mr-2">
                        Klik disini
                    </button> untuk mengupload ulang bukti.
                </div>
                <div class="upload w-100">
                    <label>File Bukti Kemudahan proses inovasi yang dihasilkan</label>
                    <div class="input-group" id="file_kemudahan_proses">
                      <input type="file" accept="application/pdf,application/vnd.ms-excel" class="form-control" name="kemudahan_proses">
                      <div class="input-group-append">
                          <button class="input-group-text" style="background-color: #0bb783; cursor:pointer;" type="submit">
                            <i class="flaticon-upload text-white"></i>
                          </button>
                      </div>
                    </div>
                    <span class="form-text text-warning">Dibuktikan dengan SOP pelaksanaan inovasi daerah yang memuat durasi waktu layanan</span>
                    <div class="alert alert-secondary" id="alert_kemudahan_proses" role="alert">
                      Bukti File pendukung Kemudahan proses inovasi yang dihasilkan dapat didownload
                      <a href="#" class="btn-light-warning">pada link ini</a>.
                      untuk mengupload ulang bukti Kemudahan proses inovasi yang dihasilkan.
                        <a href="#" class="btn btn-light-warning font-weight-bold mr-2">
                          Klik disini
                        </a>
                    </div>
                </div>
              </form>

              <form class="form-group row upload_dataPendukung" id="file-penyelesaian_layanan_pengaduan" method="POST" enctype="multipart/form-data" action="{{ url('inovasi/uploadFilePendukung') }}">
                {{ csrf_field() }}
                <div class="alert alert-primary w-100" id="alert_file_anggaran" role="alert">
                    Bukti File pendukung dapat didownload
                    <a id="link_file_anggaran" href="#" class="alert-link">pada link ini</a>.
                    <button type="button" class="btnalert btn btn-light-warning font-weight-bold mr-2">
                        Klik disini
                    </button> untuk mengupload ulang bukti.
                </div>
                <div class="upload w-100">
                    <label>File Bukti Penyelesaian layanan pengaduan</label>
                    <div class="input-group" id="file_penyelesaian_layanan_pengaduan">
                      <input type="file" accept="application/pdf,application/vnd.ms-excel" class="form-control" name="penyelesaian_layanan_pengaduan">
                      <div class="input-group-append">
                          <button class="input-group-text" style="background-color: #0bb783; cursor:pointer;" type="submit">
                            <i class="flaticon-upload text-white"></i>
                          </button>
                      </div>
                    </div>
                    <span class="form-text text-warning">Dibuktikan dengan Dokumen Foto Kegiatan penyelesaian pengaduan/ screenshot media layanan pengaduan</span>
                    <div class="alert alert-secondary" id="alert_penyelesaian_layanan_pengaduan" role="alert">
                      Bukti File pendukung Penyelesaian layanan pengaduan dapat didownload
                      <a href="#" class="btn-light-warning">pada link ini</a>.
                      untuk mengupload ulang bukti Penyelesaian layanan pengaduan.
                        <a href="#" class="btn btn-light-warning font-weight-bold mr-2">
                          Klik disini
                        </a>
                    </div>
                </div>
              </form>

              <form class="form-group row upload_dataPendukung" id="file-online_sistem" method="POST" enctype="multipart/form-data" action="{{ url('inovasi/uploadFilePendukung') }}">
                {{ csrf_field() }}
                <div class="alert alert-primary w-100" id="alert_file_anggaran" role="alert">
                    Bukti File pendukung dapat didownload
                    <a id="link_file_anggaran" href="#" class="alert-link">pada link ini</a>.
                    <button type="button" class="btnalert btn btn-light-warning font-weight-bold mr-2">
                        Klik disini
                    </button> untuk mengupload ulang bukti.
                </div>
                <div class="upload w-100">
                    <label>File Bukti Online sistem</label>
                    <div class="input-group" id="file_online_sistem">
                      <input type="file" accept="application/pdf,application/vnd.ms-excel" class="form-control" name="online_sistem">
                      <div class="input-group-append">
                          <button class="input-group-text" style="background-color: #0bb783; cursor:pointer;" type="submit">
                            <i class="flaticon-upload text-white"></i>
                          </button>
                      </div>
                    </div>
                    <span class="form-text text-warning">Dibuktikan dengan screenshot aplikasi layanan inovasi</span>
                    <div class="alert alert-secondary" id="alert_online_sistem" role="alert">
                      Bukti File pendukung Online sistem dapat didownload
                      <a href="#" class="btn-light-warning">pada link ini</a>.
                      untuk mengupload ulang bukti Online sistem.
                        <a href="#" class="btn btn-light-warning font-weight-bold mr-2">
                          Klik disini
                        </a>
                    </div>
                </div>
              </form>

              <form class="form-group row upload_dataPendukung" id="file-replikasi" method="POST" enctype="multipart/form-data" action="{{ url('inovasi/uploadFilePendukung') }}">
                {{ csrf_field() }}
                <div class="alert alert-primary w-100" id="alert_file_anggaran" role="alert">
                    Bukti File pendukung dapat didownload
                    <a id="link_file_anggaran" href="#" class="alert-link">pada link ini</a>.
                    <button type="button" class="btnalert btn btn-light-warning font-weight-bold mr-2">
                        Klik disini
                    </button> untuk mengupload ulang bukti.
                </div>
                <div class="upload w-100">
                    <label>File Bukti Replikasi</label>
                    <div class="input-group" id="file_replikasi">
                      <input type="file" accept="application/pdf,application/vnd.ms-excel" class="form-control" name="replikasi">
                      <div class="input-group-append">
                          <button class="input-group-text" style="background-color: #0bb783; cursor:pointer;" type="submit">
                            <i class="flaticon-upload text-white"></i>
                          </button>
                      </div>
                    </div>
                    <span class="form-text text-warning">Dibuktikan dengan screenshot aplikasi layanan inovasi</span>
                    <div class="alert alert-secondary" id="alert_replikasi" role="alert">
                      Bukti File pendukung Replikasi dapat didownload
                      <a href="#" class="btn-light-warning">pada link ini</a>.
                      untuk mengupload ulang bukti Replikasi.
                        <a href="#" class="btn btn-light-warning font-weight-bold mr-2">
                          Klik disini
                        </a>
                    </div>
                </div>
              </form>

              <form class="form-group row upload_dataPendukung" id="file-kecepatan_inovasi" method="POST" enctype="multipart/form-data" action="{{ url('inovasi/uploadFilePendukung') }}">
                {{ csrf_field() }}
                <div class="alert alert-primary w-100" id="alert_file_anggaran" role="alert">
                    Bukti File pendukung dapat didownload
                    <a id="link_file_anggaran" href="#" class="alert-link">pada link ini</a>.
                    <button type="button" class="btnalert btn btn-light-warning font-weight-bold mr-2">
                        Klik disini
                    </button> untuk mengupload ulang bukti.
                </div>
                <div class="upload w-100">
                    <label>File Bukti Kecepatan Inovasi</label>
                    <div class="input-group" id="file_kecepatan_inovasi">
                      <input type="file" accept="application/pdf,application/vnd.ms-excel" class="form-control" name="kecepatan_inovasi">
                      <div class="input-group-append">
                          <button class="input-group-text" style="background-color: #0bb783; cursor:pointer;" type="submit">
                            <i class="flaticon-upload text-white"></i>
                          </button>
                      </div>
                    </div>
                    <span class="form-text text-warning">Dibuktikan dengan dokumen/ laporan/ proposal inovasi daerah (tahapan-
                      tahapan proses penciptaan inovasi daerah)</span>
                    <div class="alert alert-secondary" id="alert_kecepatan_inovasi" role="alert">
                      Bukti File pendukung Kecepatan Inovasi dapat didownload
                      <a href="#" class="btn-light-warning">pada link ini</a>.
                      untuk mengupload ulang bukti Kecepatan Inovasi.
                        <a href="#" class="btn btn-light-warning font-weight-bold mr-2">
                          Klik disini
                        </a>
                    </div>
                </div>
              </form>

              <form class="form-group row upload_dataPendukung" id="file-kemanfaatan_inovasi" method="POST" enctype="multipart/form-data" action="{{ url('inovasi/uploadFilePendukung') }}">
                {{ csrf_field() }}
                <div class="alert alert-primary w-100" id="alert_file_anggaran" role="alert">
                    Bukti File pendukung dapat didownload
                    <a id="link_file_anggaran" href="#" class="alert-link">pada link ini</a>.
                    <button type="button" class="btnalert btn btn-light-warning font-weight-bold mr-2">
                        Klik disini
                    </button> untuk mengupload ulang bukti.
                </div>
                <div class="upload w-100">
                    <label>File Bukti Kemanfaatan Inovasi</label>
                    <div class="input-group" id="file_kemanfaatan_inovasi">
                      <input type="file" accept="application/pdf,application/vnd.ms-excel" class="form-control" name="kemanfaatan_inovasi">
                      <div class="input-group-append">
                          <button class="input-group-text" style="background-color: #0bb783; cursor:pointer;" type="submit">
                            <i class="flaticon-upload text-white"></i>
                          </button>
                      </div>
                    </div>
                    <span class="form-text text-warning">Dibuktikan dengan daftar penerima manfaat inovasi (untuk layanan luring) (pdf) atau screenshot jumlah pengguna/penerima manfaat inovasi daerah (untuk layanan daring) </span>
                    <div class="alert alert-secondary" id="alert_kemanfaatan_inovasi" role="alert">
                      Bukti File pendukung Kemanfaatan Inovasi dapat didownload
                      <a href="#" class="btn-light-warning">pada link ini</a>.
                      untuk mengupload ulang bukti Kemanfaatan Inovasi.
                        <a href="#" class="btn btn-light-warning font-weight-bold mr-2">
                          Klik disini
                        </a>
                    </div>
                </div>
              </form>

              <form class="form-group row upload_dataPendukung" id="file-monev" method="POST" enctype="multipart/form-data" action="{{ url('inovasi/uploadFilePendukung') }}">
                {{ csrf_field() }}
                <div class="alert alert-primary w-100" id="alert_file_anggaran" role="alert">
                    Bukti File pendukung dapat didownload
                    <a id="link_file_anggaran" href="#" class="alert-link">pada link ini</a>.
                    <button type="button" class="btnalert btn btn-light-warning font-weight-bold mr-2">
                        Klik disini
                    </button> untuk mengupload ulang bukti.
                </div>
                <div class="upload w-100">
                    <label>File Bukti Monitoring dan Evaluasi Inovasi Daerah</label>
                    <div class="input-group" id="file_monev">
                      <input type="file" accept="application/pdf,application/vnd.ms-excel" class="form-control" name="monev">
                      <div class="input-group-append">
                          <button class="input-group-text" style="background-color: #0bb783; cursor:pointer;" type="submit">
                            <i class="flaticon-upload text-white"></i>
                          </button>
                      </div>
                    </div>
                    <span class="form-text text-warning">Dibuktikan dengan screenshot testimoni pengguna (jpeg/jpg/png) atau laporan survei kepuasan masyarakat/laporan hasil penelitian (pdf)</span>
                    <div class="alert alert-secondary" id="alert_monev" role="alert">
                      Bukti File pendukung Monitoring dan Evaluasi Inovasi Daerah dapat didownload
                      <a href="#" class="btn-light-warning">pada link ini</a>.
                      untuk mengupload ulang bukti Monitoring dan Evaluasi Inovasi Daerah.
                        <a href="#" class="btn btn-light-warning font-weight-bold mr-2">
                          Klik disini
                        </a>
                    </div>
                </div>
              </form>

              <form class="form-group row upload_dataPendukung" id="file-kualitas_inovasi" method="POST" enctype="multipart/form-data" action="{{ url('inovasi/uploadFilePendukung') }}">
                {{ csrf_field() }}
                <div class="alert alert-primary w-100" id="alert_file_anggaran" role="alert">
                    Bukti File pendukung dapat didownload
                    <a id="link_file_anggaran" href="#" class="alert-link">pada link ini</a>.
                    <button type="button" class="btnalert btn btn-light-warning font-weight-bold mr-2">
                        Klik disini
                    </button> untuk mengupload ulang bukti.
                </div>
                <div class="upload w-100">
                    <label>File Bukti Kualitas Inovasi</label>
                    <div class="input-group" id="file_kualitas_inovasi">
                      <input type="file" accept="application/pdf,application/vnd.ms-excel" class="form-control" name="kualitas_inovasi">
                      <div class="input-group-append">
                          <button class="input-group-text" style="background-color: #0bb783; cursor:pointer;" type="submit">
                            <i class="flaticon-upload text-white"></i>
                          </button>
                      </div>
                    </div>
                    <span class="form-text text-warning">Dibuktikan dengan Mengunggah video penerapan inovasi dengan durasi maksimal 5 menit </span>
                    <div class="alert alert-secondary" id="alert_kualitas_inovasi" role="alert">
                      Bukti File pendukung Kualitas Inovasi dapat didownload
                      <a href="#" class="btn-light-warning">pada link ini</a>.
                      untuk mengupload ulang bukti Kualitas Inovasi.
                        <a href="#" class="btn btn-light-warning font-weight-bold mr-2">
                          Klik disini
                        </a>
                    </div>
                </div>
              </form>
            </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          </div>
        </div>
    </div>
</div>
@push('scriptTambahan')
    <script type="text/javascript">
        $('.upload_dataPendukung').on('submit',function(e){
            e.preventDefault();
            $(this).ajaxSubmit({
                data: {bobot_inovasi_id : idInovasi},
                success:({message})=>{
                        toastr.success(message);
                        $(this).find(":submit").removeAttr('disabled');
                        $(this).find("input:file").val('');
                        $(this).find('.alert').show()
                        $(this).find('.upload').hide()
                        window.datatable.ajax.reload();
                },
                error: ({message})=>{
                    toastr.success(message);
                }
            })
        })

        $('.btnalert').on('click',function(e){
            $(this).parents().eq(1).find('.alert').hide();
            $(this).parents().eq(1).find('.upload').show();
        })
    </script>
@endpush
