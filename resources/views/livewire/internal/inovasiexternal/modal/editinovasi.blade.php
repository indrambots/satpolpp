<div class="modal fade" wire:ignore.self id="modal-edit-inovasi" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg" role="document" x-data>
      <form enctype="multipart/form-data" method="POST"  wire:submit.prevent="save">
        <div class="modal-content">
            @if ($status == 'update')
            <div class="modal-header bg-diagonal bg-diagonal-primary bg-diagonal-r-light">
                <h5 class="modal-title text-white" style="z-index:1;" id="exampleModalLabel"><i class="far fa-lightbulb text-white"></i>
                    <span>
                        Ubah Dokumen Pendukung
                    </span>
                </h5>
                <h6 class="text-dark" style="z-index: 10;">
                    @if ($idInovasi !=0  && $detailInovasi->user()->exists() && $detailInovasi->user->biodata()->exists())
                        {{
                            $detailInovasi->user->biodata->nama
                        }}
                    @endif
                </h6>
            </div>
                <div class="modal-body">
                    <div class="row ">
                        <div class="col-md-12">
                        <div class="form-group">
                            <label>
                                <strong>NIK</strong>
                            </label>
                            <div class="input-group">
                                @if ($idInovasi !=0 && $status=='update' &&$detailInovasi->user()->exists() && $detailInovasi->user->biodata()->exists() )
                                    <input type="number" class="form-control" value="{{ $detailInovasi->user->biodata->nik }}" disabled name="nik"  >
                                @endif
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="nama-inovasi">
                                <strong>
                                    Nama Inovasi
                                </strong>
                            </label>
                            <div class="input-group">
                                @if ($idInovasi !=0)
                                    <input  type="text"
                                            class="form-control"
                                            id="nama-inovasi"
                                            wire:model='inovasi.nama'>
                                @endif
                            </div>
                        </div>
                        <div class="form-group">
                            <label >
                                <strong>
                                    Tahapan Inovasi
                                </strong>
                            </label>
                            <div class="radio-inline">
                                @if ($idInovasi !=0)
                                    @foreach ($tahapanInovasis as $item)
                                        <label class="radio radio-lg" for="jenis-{{$item['value']}}" key="{{$item['value']}}">
                                            <input type="radio" name="tahapan" wire:model.lazy="inovasi.tahapan" id="jenis-{{$item['value']}}" value="{{$item['value']}}">
                                            <span ></span>
                                            <mark >
                                                {{
                                                    $item['nama']
                                                }}
                                            </mark>
                                        </label>
                                    @endforeach
                                @endif
                            </div>
                        </div>
                        <div class="d-flex">
                            <div class="w-50">
                                <div class="form-group">
                                    <label >
                                        <strong>
                                            Jenis Inovasi
                                        </strong>
                                    </label>
                                    <div class="radio-inline">
                                        @if ($idInovasi !=0)
                                            @foreach ($jenisInovasis as $item)
                                                <label class="radio radio-lg" for="jenis-{{$item['value']}}" key="{{$item['value']}}">
                                                    <input type="radio" name="jenis" wire:model.lazy="inovasi.jenis" id="jenis-{{$item['value']}}" value="{{$item['value']}}">
                                                    <span ></span>
                                                    <mark >
                                                        {{
                                                            $item['nama']
                                                        }}
                                                    </mark>
                                                </label>
                                            @endforeach
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="w-50">
                                <div class="form-group">
                                    <label >
                                        <strong>
                                            Berhubungan covid.?
                                        </strong>
                                    </label>
                                    <div class="radio-inline">
                                        @if ($idInovasi !=0)
                                            @foreach ($isCovids as $item)
                                                <label class="radio radio-lg" for="jenis-{{$item['value']}}" key="{{$item['value']}}">
                                                    <input type="radio" name="covid" wire:model.lazy="inovasi.covid" id="jenis-{{$item['value']}}" value="{{$item['value']}}">
                                                    <span ></span>
                                                    <mark >
                                                        {{
                                                            $item['nama']
                                                        }}
                                                    </mark>
                                                </label>
                                            @endforeach
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="url" class="form-label"><strong>Url</strong></label>
                            <input type="url" class="form-control" name="url" wire:model.lazy="inovasi.youtube_video" placeholder="https://www.youtube.com/watch...">
                        </div>

                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>Nama File</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if ($idInovasi!=0 && $status=='update')
                                        @foreach ($detailInovasi->filebobot as $item)
                                        <tr>
                                            <td>
                                                {{
                                                    $item->nama
                                                }}
                                            </td>
                                            <td>
                                                <a href="{{asset('storage/'.($item->file_loc))}}" download
                                                    class="btn btn-sm btn-bg-secondary btn-icon-success btn-hover-dark"
                                                    x-data="{ tooltip: 'unduh '+'{{$item->nama}}' }" x-tooltip="tooltip">
                                                    <i class="flaticon-file-1"></i>
                                                </a>

                                            </td>
                                        </tr>
                                        @endforeach
                                    @endif
                                </tbody>
                            </table>
                        </div>
                        </div>
                    </div>
                </div>
            @endif
          <div class="modal-footer">
            <button type="button" class="btn btn-light-info font-weight-bold" data-dismiss="modal">Tutup</button>
            <button   type="submit"
                      class="btn btn-info font-weight-bold">
                      <i class="fa fa-floppy-o"></i>
                      Simpan
            </button>
          </div>
        </div>
      </form>
    </div>
  </div>

  @prepend('scriptTambahan')
  {{-- bagian input invoasi --}}
  <script src="{{asset('js/livewireGlobalVariable.js')}} "></script>
  @endprepend
