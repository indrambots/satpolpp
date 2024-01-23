<div class="modal fade" id="modal-profile" tabindex="-1" role="dialog">
  <div class="modal-dialog modal-lg" role="document" x-data>
    <form enctype="multipart/form-data" method="POST"  action="{{ url('biodata\update') }}" @submit.prevent="$store.profile.save($event.target)">
      {{ csrf_field() }}
      <div class="modal-content">
        <div class="modal-header bg-diagonal bg-diagonal-info bg-diagonal-r-light">
          <h5 class="modal-title text-white" style="z-index: 1;">Lengkapi Profile Anda Disini</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <i aria-hidden="true" class="ki ki-close"></i>
          </button>
        </div>
        <div class="modal-body">
            {{-- level 1 --}}
            <div x-show="($store.profile.level==1 || $store.profile.level==2)" x-transition>
                <div class="row ">
                  <div class="col-md-12">
                    <div class="form-group">
                        <label>
                            <strong>NIK</strong>
                        </label>
                        <div class="input-group">
                            <input type="number" class="form-control" x-model.lazy="$store.profile.form.nik"  name="nik"  :disabled="$store.profile.level==2?true: false"  placeholder="Mohon mengisi 16 Digit NIK anda. . ." required>
                            <template x-if="$store.profile.proses =='create'&& $store.profile.level==2">
                                <div class="input-group-append">
                                    <button type="submit" class="input-group-text" style="background-color: #0bb783; cursor:pointer;"  @click="$store.profile.reset()">
                                        <i class="fa fa-refresh text-white"></i>
                                    </button>
                                </div>
                            </template>
                        </div>

                        <template x-if="Object.keys($store.profile.errors).length > 0 && $store.profile.errors.hasOwnProperty('nik')">
                            <span x-text="Object.keys($store.profile.errors).length==0 && !$store.profile.errors.hasOwnProperty('nik') ?'': $store.profile.errors['nik']" class="text-danger"></span>
                        </template>
                    </div>
                  </div>
                </div>
            </div>
            <div x-show="$store.profile.level==2" x-transition>
                <div class="row mb-2">
                  <div class="col-md-6 col-lg-6">
                    <div class="form-group">
                      <label>
                        <strong>Nama Lengkap</strong>
                      </label>
                      <input type="text" class="form-control" x-model.lazy="$store.profile.form.nama" name="nama" :disabled="$store.profile.level==2?true: false" placeholder="Isi Nama Lengkap Anda. . ." >
                    </div>
                  </div>
                  <div class="col-md-6 col-lg-6">
                    <div class="form-group">
                      <label>
                        <strong>Tanggal Lahir</strong>
                      </label>
                      <input type="text" x-model.lazy="$store.profile.form.tgl_lahir" class="datepicker form-control" :disabled="$store.profile.level==2?true: false" name="tgl_lahir" id="tgl_lahir" >
                    </div>
                  </div>
                </div>
                <div class="row mb-2">
                  <div class="col-md-6 col-lg-6">
                    <div class="form-group">
                      <label>
                        <strong>Alamat Domisili</strong>
                      </label>
                      <input type="text" x-model.lazy="$store.profile.form.alamat" class="form-control" name="alamat" id="alamat" :disabled="$store.profile.level==2?true: false" placeholder="Isi Alamat Domisili. . ." >
                    </div>
                  </div>
                  <div class="col-md-6 col-lg-6">
                      <div class="form-group">
                          <lable>
                              <strong></strong>
                            </lable>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1">+62</span>
                                </div>
                                <input type="numeric"
                                        class="form-control"
                                        x-model.lazy="$store.profile.form.nomortelp"
                                        placeholder="Nomor Telp ex"
                                        aria-label="Nomor Telp"
                                        aria-describedby="basic-addon1">
                            </div>
                      </div>
                  </div>
                </div>
                <div class="row mb-2">
                    <div class="col-md-6 col-lg-6">
                        <div class="form-group">
                            <label><strong>Foto Profile</strong></label>
                            @if(Auth::user()->biodata !== null)
                                @if(Auth::user()->biodata->foto_profile !== null)
                                    <div class="alert alert-primary" id="alert_foto_profile" role="alert">
                                    Foto Profile dapat didownload
                                    <a id="link_file_foto" href="{{asset('profile/'.Auth::user()->biodata->foto_profile) }}" download class="alert-link">pada link ini</a>.
                                    <button type="button" id="upload-foto_profile" class="btn btn-light-warning font-weight-bold mr-2">
                                        Klik disini
                                    </button> untuk mengupload ulang bukti foto profile.
                                    </div>
                                @endif
                            @endif
                            <input type="file"
                            accept="image/png, image/gif, image/jpeg"
                            class="form-control" name="foto_profile">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-light-info font-weight-bold" data-dismiss="modal">Tutup</button>
          <button   type="submit"
                    class="btn btn-info font-weight-bold"
                    x-text="$store.profile.level==1?'Cek Nik': 'Simpan Perubahan'"></button>
        </div>
      </div>
    </form>
  </div>
</div>

@prepend('scriptTambahan')
{{-- bagian input invoasi --}}
<script>
    document.addEventListener('alpine:init', () => {
        const dataProfile = {
            id: {{Auth::id()}},
            status : {{ Auth::user()->biodata()->exists()?'true':'false' }},
            level : {{ Auth::user()->biodata()->exists()?2:1 }} ,
            loading : false,
            proses : "{{ Auth::user()->biodata()->exists()?'update':'create' }}",
            profile : "",
            form: {
                nik : null,
                nama : null,
                alamat : null,
                tgl_lahir : null,
                nomortelp : null,
            },
            errors: {}
        };
        const methodsProfile ={
            save(form){
                let alpinejs = this;
                if (this.level ==1 ) {
                    if (this.form.nik != null || this.form.nik.length != 16) {
                        axios.post('external/dashboard/cek-nik',
                                    Object.assign(
                                                    (({nik})=>({nik}))(this.form),
                                                    {'status': this.proses,'level': this.level}
                                                )
                                    ).then(({data})=>{
                                        let {details,alamat} = data.result.response;
                                        Object.keys(this.form).forEach(key=>{
                                            if (key=='nama') {
                                                this.form[key] =  details[0]['nama_lengkap'];
                                            }else if(key=='alamat'){
                                                this.form[key] = alamat;
                                            }else{
                                                this.form[key] =  details[0][key];
                                            }
                                        });
                                        this.level = 2;
                                        this.errors ={};
                                    }).catch(({response})=>{
                                        let {message, errors} = response.data;
                                        this.errors  = errors;
                                        toastr.error(message);
                                    });
                    }
                    else{
                        this.errors = {
                            nik : "Format NIK tidak sesuai"
                        }
                    }
                }else{
                    $(form).ajaxSubmit({
                        data: Object.assign(alpinejs.form ,{'level': alpinejs.level, 'status': alpinejs.proses, user_id: alpinejs.id }) ,
                        success:({message})=>{
                            toastr.success(message);
                            form.reset();
                            $('#modal-profile').modal('toggle');
                            location.reload();
                        },
                        error: function({responseJSON}) {
                            toastr.error(responseJSON.message);
                            alpinejs.errors = responseJSON.errors;
                        }
                    })
                }
            },
            reset(){
                Object.keys(this.form).forEach(key=>{
                    this.form[key] = null
                });
                this.level = 1;
            },
            toggleModal(proses, id=0, level=1){
                this.proses = proses;
                this.errors ={}
                if(proses == 'create'){
                    this.reset();
                    this.level =level;
                    $('#modal-profile').modal('toggle');
                }else{
                    this.reset();
                    this.level =level;
                    this.proses = proses;
                    this.id =id
                    axios.get('external/dashboard/getBiodata').then(({data})=>{
                        Object.keys(this.form).forEach((key)=> {
                            this.form[key] = data.biodata[key];
                        });
                        $('#modal-profile').modal('toggle');
                    }).catch(eror=>{
                        toastr.error(eror);
                    });
                }
            },
        };
        const gettersProfile={
        }
        Alpine.store('profile', {
            ...dataProfile,
            ...methodsProfile,
            ...gettersProfile,
        });
    })
</script>
@endprepend
