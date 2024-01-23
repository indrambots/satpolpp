<div class="modal fade" id="modal-bobot" aria-modal="true" role="dialog">
  <form id="frm_bobot" enctype="multipart/form-data" method="POST" action="{{ url('inovasi\bobot\save') }}">
    {{ csrf_field() }}
    <input type="hidden" name="id" id="id_bobot">
    <input type="hidden" name="inovasi_id" id="id_inovasi_bobot">
  <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
          <div class="modal-header bg-diagonal bg-diagonal-primary bg-diagonal-r-light">
              <h5 class="modal-title text-white" style="z-index: 1;">
                  <i class="flaticon-file-1 text-white"> </i> Pengisian Bobot
              </h5>
              <button class="close" data-dismiss="modal" type="button">
                  <i aria-hidden="true" class="ki ki-close">
                  </i>
              </button>
          </div>
          <div class="modal-body">
            <div class="row mb-2">
              <div class="col-md-6 col-lg-6">
                <div class="form-group">
                  <label><strong>Pilih jenis regulasi inovasi daerah yang ditetapkan</strong></label>
                  <div class="radio-list">
                    <span class="form-text text-warning">Nilai (1) x Bobot (4) = 4</span>
                    <label class="radio radio-xl" for="1">
                      <input type="radio" name="regulasi" id="1" value="1">
                       <span></span> SK Kepala Perangkat Daerah
                      </label>
                      <span class="form-text text-warning">Nilai 2 x Bobot (4) = 8</span>
                      <label class="radio radio-xl" for="2">
                      <input type="radio" name="regulasi" id="2" value="2">
                        <span></span> SK Kepala Daerah
                      </label>
                      <span class="form-text text-warning">Nilai 3 x Bobot (4) = 12</span>
                      <label class="radio radio-xl" for="3">
                      <input type="radio" name="regulasi" id="3" value="3">
                        <span></span> Peraturan Kepala Daerah / Peraturan Daerah
                      </label>
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-lg-6">
                <div class="form-group">
                  <label ><strong>Pilih jumlah SDM yang mengelola inovasi daerah</label>
                  <div class="radio-list">
                    <span class="form-text text-warning">Nilai (1) x Bobot (2) = 2</span>
                    <label class="radio radio-xl">
                      <input type="radio" name="ketersediaan_sdm"  value="1">
                       <span></span> 1-10 SDM
                      </label>
                      <span class="form-text text-warning">Nilai (2) x Bobot (2) = 4</span>
                      <label class="radio radio-xl">
                      <input type="radio" name="ketersediaan_sdm"  value="2">
                        <span></span> 11-30 SDM
                      </label>
                      <span class="form-text text-warning">Nilai (3) x Bobot (2) = 6</span>
                      <label class="radio radio-xl">
                      <input type="radio" name="ketersediaan_sdm"  value="3">
                        <span></span> Lebih Dari 30
                      </label>
                  </div>
                </div>
              </div>
            </div>
            
            <div class="row mb-2">
              <div class="col-md-6 col-lg-6">
                <div class="form-group">
                  <label><strong>Pilih tahapan inovasi daerah yang didukung anggaran</strong></label>
                  <div class="radio-list">
                    <span class="form-text text-warning">Nilai (1) x Bobot (4) = 4</span>
                    <label class="radio radio-xl">
                      <input type="radio" name="dukungan_anggaran" value="1">
                       <span></span> Anggaran tersedia pada kegiatan inisiasi inovasi daerah
                      </label>
                      <span class="form-text text-warning">Nilai (2) x Bobot (4) = 8</span>
                      <label class="radio radio-xl">
                      <input type="radio" name="dukungan_anggaran"  value="2">
                        <span></span> Anggaran tersedia pada kegiatan uji coba inovasi daerah
                      </label>
                      <span class="form-text text-warning">Nilai (3) x Bobot (4) = 12</span>
                      <label class="radio radio-xl">
                      <input type="radio" name="dukungan_anggaran" value="3">
                        <span></span> Peraturan Kepala Daerah / Peraturan Daerah
                      </label>
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-lg-6">
                <div class="form-group">
                  <label ><strong> Pilih jenis informasi dan teknologi yang digunakan dalam pelaksanaan inovasi daerah</label>
                  <div class="radio-list">
                    <span class="form-text text-warning">Nilai (1) x Bobot (2) = 2</span>
                    <label class="radio radio-xl">
                      <input type="radio" name="penggunaan_it"  value="1">
                       <span></span> Pelaksanaan kerja secara manual/non elektronik
                      </label>
                      <span class="form-text text-warning">Nilai (2) x Bobot (2) = 4</span>
                      <label class="radio radio-xl">
                      <input type="radio" name="penggunaan_it"  value="2">
                        <span></span> Pelaksanaan kerja secara elektronik
                      </label>
                      <span class="form-text text-warning">Nilai (3) x Bobot (2) = 6</span>
                      <label class="radio radio-xl">
                      <input type="radio" name="penggunaan_it"  value="3">
                        <span></span> Pelaksanaan kerja sudah didukung sistem informasi online/ daring
                      </label>
                  </div>
                </div>
              </div>
            </div>
            <div class="row mb-2">
              <div class="col-md-6 col-lg-6">
                <div class="form-group">
                  <label><strong>Pilih frekuensi kegiatan bimtek inovasi daerah terkait dalam 2 (dua) tahun terakhiri</strong></label>
                  <div class="radio-list">
                    <span class="form-text text-warning">Nilai (1) x Bobot (2) = 2</span>
                    <label class="radio radio-xl">
                      <input type="radio" name="bimtek_inovasi" value="1">
                       <span></span> Dalam 2 tahun terakhir pernah 1 kali bimtek 
                      </label>
                      <span class="form-text text-warning">Nilai (2) x Bobot (2) = 4</span>
                      <label class="radio radio-xl">
                      <input type="radio" name="bimtek_inovasi"  value="2">
                        <span></span> Dalam 2 tahun terakhir pernah 2 kali bimtek
                      </label>
                      <span class="form-text text-warning">Nilai (3) x Bobot (2) = 6</span>
                      <label class="radio radio-xl">
                      <input type="radio" name="bimtek_inovasi" value="3">
                        <span></span> Dalam 2 tahun terakhir pernah lebih dari 2 kali bimtek
                      </label>
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-lg-6">
                <div class="form-group">
                  <label ><strong> Pilih dokumen dan/atau waktu pelaksanaan program kegiatan inovasi daerah</label>
                  <div class="radio-list">
                    <span class="form-text text-warning">Nilai (1) x Bobot (2) = 2</span>
                    <label class="radio radio-xl">
                      <input type="radio" name="program_rkpd"  value="1">
                       <span></span> Pemerintah daerah sudah menuangkan program inovasi daerah dalam RPJMD
                      </label>
                      <span class="form-text text-warning">Nilai (2) x Bobot (2) = 4</span>
                      <label class="radio radio-xl">
                      <input type="radio" name="program_rkpd"  value="2">
                        <span></span> Pemerintah  daerah sudah  menuangkan  program  inovasi daerah  dalam RKPD  dan telah  diterapkan  dalam 1 tahun  terakhir
                      </label>
                      <span class="form-text text-warning">Nilai (3) x Bobot (2) = 6</span>
                      <label class="radio radio-xl">
                      <input type="radio" name="program_rkpd"  value="3">
                        <span></span> Pemerintah  daerah sudah  menuangkan  program  inovasi  daerah dalam  RKPD dan  telah  diterapkan  dalam 2  tahun terakhir
                      </label>
                  </div>
                </div>
              </div>
            </div>

            <div class="row mb-2">
              <div class="col-md-6 col-lg-6">
                <div class="form-group">
                  <label><strong>Pilih jumlah unsur stakeholder yang terlibat dalam pelaksanaan inovasi daerah</strong></label>
                  <div class="radio-list">
                    <span class="form-text text-warning">Nilai (1) x Bobot (1) = 1</span>
                    <label class="radio radio-xl">
                      <input type="radio" name="keterlibatan_aktor" value="1">
                       <span></span> Inovasi melibatkan 4 aktor</label>
                       <span class="form-text text-warning">Nilai (2) x Bobot (1) = 2</span>
                      <label class="radio radio-xl">
                      <input type="radio" name="keterlibatan_aktor"  value="2">
                        <span></span> Inovasi  melibatkan 5  aktor
                      </label>
                      <span class="form-text text-warning">Nilai (3) x Bobot (1) = 3</span>
                      <label class="radio radio-xl">
                      <input type="radio" name="keterlibatan_aktor" value="3">
                        <span></span> Inovasi  melibatkan  lebih dari 5  aktor
                      </label>
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-lg-6">
                <div class="form-group">
                  <label ><strong> Pilih tingkatan penetapan tim pelaksana inovasi daerah</label>
                  <div class="radio-list">
                    <span class="form-text text-warning">Nilai (1) x Bobot (2) = 2</span>
                    <label class="radio radio-xl">
                      <input type="radio" name="pelaksana_inovasi"  value="1">
                       <span></span> Ada pelaksana namun tidak ditetapkan dengan SK Kepala Perangkat Daerah </label>
                       <span class="form-text text-warning">Nilai (2) x Bobot (2) = 4</span>
                      <label class="radio radio-xl">
                      <input type="radio" name="pelaksana_inovasi"  value="2">
                        <span></span> Ada pelaksana dan ditetapkan dengan SK Kepala Perangkat Daerah
                      </label>
                      <span class="form-text text-warning">Nilai (3) x Bobot (2) = 6</span>
                      <label class="radio radio-xl">
                      <input type="radio" name="pelaksana_inovasi"  value="3">
                        <span></span> Ada pelaksana dan ditetapkan dengan SK Kepala Daerah
                      </label>
                  </div>
                </div>
              </div>
            </div>

            <div class="row mb-2">
              <div class="col-md-6 col-lg-6">
                <div class="form-group">
                  <label><strong>Pilih jumlah perangkat daerah yang terlibat dalam penerapan inovasi</strong></label>
                  <div class="radio-list">
                    <span class="form-text text-warning">Nilai (1) x Bobot (1) = 1</span>
                    <label class="radio radio-xl">
                      <input type="radio" name="jejaring_inovasi" value="1">
                       <span></span> Inovasi melibatkan 1-2 Perangkat Daerah</label>
                       <span class="form-text text-warning">Nilai (2) x Bobot (1) = 2</span>
                      <label class="radio radio-xl">
                      <input type="radio" name="jejaring_inovasi"  value="2">
                        <span></span> Inovasi  melibatkan 3-4  Perangkat  Daerah
                      </label>
                      <span class="form-text text-warning">Nilai (3) x Bobot (1) = 3</span>
                      <label class="radio radio-xl">
                      <input type="radio" name="jejaring_inovasi" value="3">
                        <span></span> Inovasi  melibatkan 5  Perangkat  Daerah atau  lebih
                      </label>
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-lg-6">
                <div class="form-group">
                  <label ><strong> Pilih bukti kegiatan penyebarluasan informasi kebijakan inovasi daerah</label>
                  <div class="radio-list">
                    <span class="form-text text-warning">Nilai (1) x Bobot (2) = 2</span>
                    <label class="radio radio-xl">
                      <input type="radio" name="sosialisasi_inovasi"  value="1">
                       <span></span> Foto kegiatan berspanduk </label>
                       <span class="form-text text-warning">Nilai (2) x Bobot (2) = 4</span>
                      <label class="radio radio-xl">
                      <input type="radio" name="sosialisasi_inovasi"  value="2">
                        <span></span> URL Media Sosial 
                      </label>
                      <span class="form-text text-warning">Nilai (3) x Bobot (2) = 6</span>
                      <label class="radio radio-xl">
                      <input type="radio" name="sosialisasi_inovasi"  value="3">
                        <span></span> Media Berita
                      </label>
                  </div>
                </div>
              </div>
            </div>

            <div class="row mb-2">
              <div class="col-md-6 col-lg-6">
                <div class="form-group">
                  <label><strong>Pilih jenis pedoman teknis yang tersedia</strong></label>
                  <div class="radio-list">
                    <span class="form-text text-warning">Nilai (1) x Bobot (2) = 2</span>
                    <label class="radio radio-xl">
                      <input type="radio" name="pedoman_teknis" value="1">
                       <span></span> Telah terdapat Pedoman teknis berupa buku manual</label>
                       <span class="form-text text-warning">Nilai (2) x Bobot (2) = 4</span>
                      <label class="radio radio-xl">
                      <input type="radio" name="pedoman_teknis"  value="2">
                        <span></span> Telah terdapat Pedoman teknis berupa buku dalam  bentuk  elektronik
                      </label>
                      <span class="form-text text-warning">Nilai (3) x Bobot (2) = 6</span>
                      <label class="radio radio-xl">
                      <input type="radio" name="pedoman_teknis" value="3">
                        <span></span> Telah terdapat Pedoman teknis berupa  buku yang  dapat diakses secara online
                      </label>
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-lg-6">
                <div class="form-group">
                  <label ><strong> Pilih jenis media informasi layanan yang tersedia</label>
                  <div class="radio-list">
                    <span class="form-text text-warning">Nilai (1) x Bobot (2) = 2</span>
                    <label class="radio radio-xl">
                      <input type="radio" name="kemudahan_informasi"  value="1">
                       <span></span> Layanan Telp atau tatap muka langsung/noken </label>
                       <span class="form-text text-warning">Nilai (2) x Bobot (2) = 4</span>
                      <label class="radio radio-xl">
                      <input type="radio" name="kemudahan_informasi"  value="2">
                        <span></span> Layanan  Email/Media  Sosial</label>
                        <span class="form-text text-warning">Nilai (3) x Bobot (2) = 6</span>
                      <label class="radio radio-xl">
                      <input type="radio" name="kemudahan_informasi"  value="3">
                        <span></span> Layanan  melalui  aplikasi online</label>
                  </div>
                </div>
              </div>
            </div>

            <div class="row mb-2">
              <div class="col-md-6 col-lg-6">
                <div class="form-group">
                  <label><strong>Pilih Waktu yang diperlukan untuk memperoleh proses penggunaan hasil inovasi</strong></label>
                  <div class="radio-list">
                    <span class="form-text text-warning">Nilai (1) x Bobot (2) = 2</span>
                    <label class="radio radio-xl">
                      <input type="radio" name="kemudahan_proses" value="1">
                       <span></span> Hasil inovasi diperoleh dalam waktu 6 hari keatas</label>
                       <span class="form-text text-warning">Nilai (2) x Bobot (2) = 4</span>
                      <label class="radio radio-xl">
                      <input type="radio" name="kemudahan_proses"  value="2">
                        <span></span> Hasil inovasi diperoleh dalam waktu 2-
                        5 hari
                      </label>
                      <span class="form-text text-warning">Nilai (3) x Bobot (2) = 6</span>
                      <label class="radio radio-xl">
                      <input type="radio" name="kemudahan_proses" value="3">
                        <span></span> Hasil inovasi diperoleh dalam waktu 1 hari
                      </label>
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-lg-6">
                <div class="form-group">
                  <label ><strong> Pilih rentang rasio penyelesaian pengaduan dalam tahun terakhir</label>
                  <div class="radio-list">
                    <span class="form-text text-warning">Nilai (1) x Bobot (2) = 2</span>
                    <label class="radio radio-xl">
                      <input type="radio" name="penyelesaian_layanan_pengaduan"  value="1">
                       <span></span> ≤ 30% </label>
                       <span class="form-text text-warning">Nilai (2) x Bobot (2) = 4</span>
                      <label class="radio radio-xl">
                      <input type="radio" name="penyelesaian_layanan_pengaduan"  value="2">
                        <span></span> 31% s.d. 60%</label>
                        <span class="form-text text-warning">Nilai (3) x Bobot (2) = 6</span>
                      <label class="radio radio-xl">
                      <input type="radio" name="penyelesaian_layanan_pengaduan"  value="3">
                        <span></span> ≥61%</label>
                  </div>
                </div>
              </div>
            </div>
            <div class="row mb-2">
              <div class="col-md-6 col-lg-6">
                <div class="form-group">
                  <label><strong>Pilih jaringan prosedur secara daring yang tersedia</strong></label>
                  <div class="radio-list">
                    <span class="form-text text-warning">Nilai (1) x Bobot (2) = 2</span>
                    <label class="radio radio-xl">
                      <input type="radio" name="online_sistem" value="1">
                       <span></span> Ada dukungan melalui informasi website atau sosial media</label>
                       <span class="form-text text-warning">Nilai (2) x Bobot (2) = 4</span>
                      <label class="radio radio-xl">
                      <input type="radio" name="online_sistem"  value="2">
                        <span></span> Ada dukungan melalui web aplikasi
                      </label>
                      <span class="form-text text-warning">Nilai (3) x Bobot (2) = 6</span>
                      <label class="radio radio-xl">
                      <input type="radio" name="online_sistem" value="3">
                        <span></span> Ada dukungan melalui perangkat web aplikasi dan aplikasi mobile (android atau ios) 
                      </label>
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-lg-6">
                <div class="form-group">
                  <label ><strong> Pilih frekuensi replikasi inovasi daerah oleh daerah lain dalam dua tahun terakhir</label>
                  <div class="radio-list">
                    <span class="form-text text-warning">Nilai (1) x Bobot (2) = 2</span>
                    <label class="radio radio-xl">
                      <input type="radio" name="replikasi"  value="1">
                       <span></span> Pernah 1 Kali direplikasi di daerah lain </label>
                       <span class="form-text text-warning">Nilai (2) x Bobot (2) = 4</span>
                      <label class="radio radio-xl">
                      <input type="radio" name="replikasi"  value="2">
                        <span></span> Pernah 2 Kali  direplikasi di  daerah lain</label>
                        <span class="form-text text-warning">Nilai (3) x Bobot (2) = 6</span>
                      <label class="radio radio-xl">
                      <input type="radio" name="replikasi"  value="3">
                        <span></span> Pernah 3 Kali  direplikasi di  daerah lain</label>
                  </div>
                </div>
              </div>
            </div>

            <div class="row mb-2">
              <div class="col-md-6 col-lg-6">
                <div class="form-group">
                  <label><strong>Pilih rentang satuan waktu yang digunakan untuk menciptakan inovasi daerah</strong></label>
                  <div class="radio-list">
                    <span class="form-text text-warning">Nilai (1) x Bobot (3) = 3</span>
                    <label class="radio radio-xl">
                      <input type="radio" name="kecepatan_inovasi" value="1">
                       <span></span> Inovasi dapat diciptakan dalam waktu 9 bulan keatas</label>
                       <span class="form-text text-warning">Nilai (2) x Bobot (3) = 6</span>
                      <label class="radio radio-xl">
                      <input type="radio" name="kecepatan_inovasi"  value="2">
                        <span></span> Inovasi dapat  diciptakan  dalam waktu 5-
                        8 bulan
                      </label>
                      <span class="form-text text-warning">Nilai (3) x Bobot (3) = 9</span>
                      <label class="radio radio-xl">
                      <input type="radio" name="kecepatan_inovasi" value="3">
                        <span></span> Inovasi dapat  diciptakan  dalam waktu  1-4 bulan
                      </label>
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-lg-6">
                <div class="form-group">
                  <label ><strong> Pilih rentang jumlah pengguna/penerima manfaat inovasi daerah dalam dua tahun terakhi</label>
                  <div class="radio-list">
                    <span class="form-text text-warning">Nilai (1) x Bobot (5) = 5</span>
                    <label class="radio radio-xl">
                      <input type="radio" name="kemanfaatan_inovasi"  value="1">
                       <span></span> Jumlah pengguna atau penerima manfaat 1-100 orang </label>
                       <span class="form-text text-warning">Nilai (2) x Bobot (5) = 10</span>
                      <label class="radio radio-xl">
                      <input type="radio" name="kemanfaatan_inovasi"  value="2">
                        <span></span> Jumlah  pengguna atau  penerima  manfaat 101-
                        200 orang</label>
                        <span class="form-text text-warning">Nilai (3) x Bobot (5) = 15</span>
                      <label class="radio radio-xl">
                      <input type="radio" name="kemanfaatan_inovasi"  value="3">
                        <span></span> Jumlah  pengguna  atau  penerima  manfaat 201  orang keatas</label>
                  </div>
                </div>
              </div>
            </div>

            <div class="row mb-2">
              <div class="col-md-6 col-lg-6">
                <div class="form-group">
                  <label><strong>Pilih bentuk evaluasi inovasi daerah yang telah dilakukan</strong></label>
                  <div class="radio-list">
                    <span class="form-text text-warning">Nilai (1) x Bobot (3) = 3</span>
                    <label class="radio radio-xl">
                      <input type="radio" name="monev" value="1">
                       <span></span> Hasil laporan monev internal PD</label>
                       <span class="form-text text-warning">Nilai (2) x Bobot (3) = 6</span>
                      <label class="radio radio-xl">
                      <input type="radio" name="monev"  value="2">
                        <span></span> Hasil  pengukuran  kepuasaan  pengguna dari  evaluasi Survei  Kepuasan  Masyarakat
                      </label>
                      <span class="form-text text-warning">Nilai (3) x Bobot (3) = 9</span>
                      <label class="radio radio-xl">
                      <input type="radio" name="monev" value="3">
                        <span></span> Hasil laporan  monev  eksternal  berdasarkan  hasil  penelitian
                      </label>
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-lg-6">
                <div class="form-group">
                  <label ><strong> Pilih jumlah substansi yang dipenuhi dalam video</label>
                  <div class="radio-list">
                    <span class="form-text text-warning">Nilai (1) x Bobot (5) = 5</span>
                    <label class="radio radio-xl">
                      <input type="radio" name="kualitas_inovasi"  value="1">
                       <span></span> Memenuhi 1 atau 2 unsur substansi </label>
                       <span class="form-text text-warning">Nilai (2) x Bobot (5) = 10</span>
                      <label class="radio radio-xl">
                      <input type="radio" name="kualitas_inovasi"  value="2">
                        <span></span> Memenuhi 3 atau 4 unsur substansi</label>
                        <span class="form-text text-warning">Nilai (3) x Bobot (5) = 15</span>
                      <label class="radio radio-xl">
                      <input type="radio" name="kualitas_inovasi"  value="3">
                        <span></span> Memenuhi 5 unsur substansi</label>
                  </div>
                </div>
              </div>
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