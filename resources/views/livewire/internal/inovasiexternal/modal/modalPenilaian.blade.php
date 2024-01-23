<div class="modal fade" wire:ignore.self id="modal-edit-inovasi-penilaian" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg" role="document" x-data>
      <form enctype="multipart/form-data" method="POST"  wire:submit.prevent="saveRating">
        <div class="modal-content">
            @if ($status == 'penilaian')
            <div class="modal-header bg-diagonal bg-diagonal-primary bg-diagonal-r-light">
                <h5 class="modal-title text-white" style="z-index:1;" id="exampleModalLabel"><i class="far fa-lightbulb text-white"></i>
                    <span>
                        Berikan Penilan Inovasi
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
                            @if ($idInovasi !=0 && $status=='penilaian' )
                                @foreach ($bobotWarga as $item)
                                    <div class="form-group" >
                                        <label class="form-label"><strong>{{$item->aspek_penilaian}}</strong></label>
                                        <div class="input-group">
                                            <input type="number" min="0" max="{{$item->nilai}}" class="form-control" wire:model.lazy="penilaian.{{$item->id}}.nilai" name="nik"  >
                                        </div>
                                        @error(('penilaian.'.$item->id.'.nilai'))
                                            <div class="text-danger error">{{ $message }}</div>

                                        @enderror
                                    </div>
                                @endforeach
                            @endif
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
