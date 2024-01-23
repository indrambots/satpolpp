<div class="modal fade" wire:ignore.self id="modal-edit-inovasi-keterangan" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg" role="document" x-data>
      <form enctype="multipart/form-data" method="POST"  wire:submit.prevent="save">
        <div class="modal-content">
            @if ($status == 'keterangan')
            <div class="modal-header bg-diagonal bg-diagonal-primary bg-diagonal-r-light">
                <h5 class="modal-title text-white" style="z-index:1;" id="exampleModalLabel"><i class="far fa-lightbulb text-white"></i>
                    <span>
                        Berikan keterangan Inovasi
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
                            <div class="form-group"  wire:ignore>
                                <label class="form-label"><strong>Keterangan</strong></label>
                                <textarea
                                x-data="{
                                    value: @entangle('inovasi.keterangan'),
                                    tick : @entangle('tick'),
                                    init(){
                                        const alpinejs = this;
                                        let summer = $($refs.summernote).summernote({
                                            toolbar: [
                                                [ 'style', [ 'style' ] ],
                                                [ 'font', [ 'bold', 'italic', 'underline', 'subscript'] ],
                                                [ 'fontname', [ 'fontname' ] ],
                                                [ 'fontsize', [ 'fontsize' ] ],
                                                [ 'color', [ 'color' ] ],
                                                [ 'para', [ 'ol', 'ul', 'paragraph', 'height' ] ],
                                                [ 'table', [ 'table' ] ],
                                                [ 'insert', [ 'link'] ],
                                                [ 'view', [ 'undo', 'redo','codeview', ] ]
                                            ],
                                            height: 150,
                                            callbacks: {
                                            onChange: (contents, $editable)=> {
                                                    alpinejs.value = contents
                                                }
                                            }
                                        })
                                        $watch('tick', () => {
                                            summer.summernote('code',alpinejs.value)
                                        })
                                    }
                                }" x-model="value" name="keterangan" x-ref="summernote" class="summernote" id="keterangan"></textarea>
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
