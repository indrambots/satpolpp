<div class="modal fade" id="modal-proposal" tabindex="-1" role="dialog"  >
  <div class="modal-dialog modal-lg" role="document" x-data>
    <form id="frm_create_inovasi" enctype="multipart/form-data"  method="POST" @submit.prevent="$store.proposal.submitForm($event.target)"  :disable="$store.proposal.loading" action="{{ url('external/dashboard') }}">
        @csrf
        <div class="modal-content">
        <div class="modal-header bg-diagonal bg-diagonal-primary bg-diagonal-r-light">
            <h5 class="modal-title text-white" style="z-index:1;" id="exampleModalLabel"><i class="far fa-lightbulb text-white"></i> <span x-text="$store.proposal.level>1? 'Upload Dokumen':'Proposal Inovasi' "></span> </h5>
            <template x-if="$store.proposal.proses =='create'">
                <h5 class="text-dark" style="z-index: 10;">halaman <span x-text="$store.proposal.level" ></span> </h5>
            </template>
        </div>
        <div class="modal-body">
            {{-- level 1 --}}
            <div x-show="$store.proposal.level==1" x-transition>
                <div class="mb-3 mt-4">
                    <label for="nama" class="form-label"><strong>Nama Inovasi</strong></label>
                    <input type="text" class="form-control" name="nama" x-model.lazy="$store.proposal.form.nama" placeholder="Nama Inovasi. . ." required>
                    <template x-if="Object.keys($store.proposal.errors).length > 0 && $store.proposal.errors.hasOwnProperty('nama')">
                        <span x-text="Object.keys($store.proposal.errors).length==0 && !$store.proposal.errors.hasOwnProperty('nama') ?'': $store.proposal.errors['nama']" class="text-danger"></span>
                    </template>
                </div>
                    <div class="row  mb-3">
                    <div class="col-md-6 col-lg-6">
                        <div class="form-group">
                        <label><strong>Tahapan Inovasi</strong></label>
                            <div class="radio-inline">
                                <template x-for="tahapan in $store.proposal.tahapanInovasis">
                                    <label class="radio radio-lg" :for="'jenis-'+tahapan.value" :key="tahapan.value">
                                        <input type="radio" name="tahapan" x-model.lazy="$store.proposal.form.tahapan" :id="'jenis-'+tahapan.value" :value="tahapan.value">
                                        <span ></span>
                                        <mark x-text="tahapan.nama"></mark>
                                    </label>
                                </template>
                            </div>
                            <template x-if="Object.keys($store.proposal.errors).length > 0 && $store.proposal.errors.hasOwnProperty('tahapan')">
                                <span x-text="Object.keys($store.proposal.errors).length==0 && !$store.proposal.errors.hasOwnProperty('tahapan') ?'': $store.proposal.errors['tahapan']" class="text-danger"></span>
                            </template>
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-6 col-lg-6">
                        <label><strong>Jenis Inovasi</strong></label>
                        <div class="radio-inline">
                            <template x-for="jenis in $store.proposal.jenisInovasis">
                                <label class="radio radio-xl" :for="'jenis'+jenis.value">
                                    <input type="radio" name="jenis" :id="'jenis'+jenis.value" :value="jenis.value" x-model="$store.proposal.form.jenis" >
                                    <span></span> <mark x-text="jenis.nama"></mark>
                                </label>
                            </template>
                        </div>
                        <template x-if="Object.keys($store.proposal.errors).length > 0 && $store.proposal.errors.hasOwnProperty('jenis')">
                            <span x-text="Object.keys($store.proposal.errors).length==0 && !$store.proposal.errors.hasOwnProperty('jenis') ?'': $store.proposal.errors['jenis']" class="text-danger"></span>
                        </template>
                    </div>
                    <div class="col-md-6 col-lg-6">
                    <div class="form-group">
                        <label><strong>COVID 19</strong></label>
                        <div class="radio-inline">
                            <template x-for="covid in $store.proposal.isCovids">
                                <label class="radio radio-xl" :for="'covid'+covid.value">
                                    <input type="radio" name="covid" :id="'covid'+covid.value" :value="covid.value" x-model="$store.proposal.form.covid" >
                                    <span></span> <mark x-text="covid.nama"></mark>
                                </label>
                            </template>
                        </div>

                        <template x-if="Object.keys($store.proposal.errors).length > 0 && $store.proposal.errors.hasOwnProperty('covid')">
                            <span x-text="Object.keys($store.proposal.errors).length==0 && !$store.proposal.errors.hasOwnProperty('covid') ?'': $store.proposal.errors['covid']" class="text-danger"></span>
                        </template>
                    </div>
                    </div>
                </div>
                <template x-if="$store.proposal.proses =='update'" >
                    <div class="mb-3 mt-4">
                        <label for="url" class="form-label"><strong>Url</strong></label>
                        <input type="url" class="form-control" name="url" x-model.lazy="$store.proposal.form.youtube_video" placeholder="https://www.youtube.com/watch...">
                        <template x-if="Object.keys($store.proposal.errors).length > 0 && $store.proposal.errors.hasOwnProperty('youtube_video')">
                            <span x-text="Object.keys($store.proposal.errors).length==0 && !$store.proposal.errors.hasOwnProperty('youtube_video') ?'': $store.proposal.errors['youtube_video']" class="text-danger"></span>
                        </template>
                    </div>
                </template>
            </div>
            <div x-show="$store.proposal.level>1" x-transition>
                {{-- poster --}}
                <template x-if="$store.proposal.proses =='update' && $store.proposal.ubahCbo['poster'] == false">
                    <div class="alert alert-primary w-100" id="alert_file_anggaran" role="alert">
                        Bukti File Poster dapat didownload
                        <a id="link_file_anggaran" @click="$store.proposal.unduhDokumen('poster')" href="javascript:;" class="alert-link">pada link ini</a>.
                        <button type="button" @click="$store.proposal.ubahCbo['poster'] = true" class="btnalert btn btn-light-warning font-weight-bold mr-2">
                            Klik disini
                        </button> untuk mengupload ulang bukti.
                    </div>
                </template>
                <template x-if="$store.proposal.proses =='create' || ($store.proposal.proses =='update' && $store.proposal.ubahCbo['poster'] == true)">
                    <div>
                        <label for="poster" class="form-label">
                            <template x-if="$store.proposal.proses =='update'">
                                <i @click="$store.proposal.ubahCbo['poster'] = false" role="button"  class="fa fa-undo text-warning"></i>
                            </template>
                            <strong>Poster</strong>
                        </label>
                        <template x-if="$store.proposal.proses =='update'">
                            <form   class="form-group"
                                    @submit.prevent="$store.proposal.submitForm($event.target,'poster')"
                                    enctype="multipart/form-data" >
                                <div class="input-group">
                                    <input type="file"
                                            accept="image/png, image/gif, image/jpeg"
                                            class="form-control"
                                            name="poster">
                                    <div class="input-group-append">
                                        <button type="submit" class="input-group-text" style="background-color: #0bb783; cursor:pointer;">
                                            <i class="flaticon-upload text-white"></i>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </template>
                        <template x-if="$store.proposal.proses =='create'">
                            <div class="input-group" >
                              <input    type="file"
                                        accept="image/png, image/gif, image/jpeg"
                                        class="form-control"
                                        name="poster">
                            </div>
                        </template>
                        <template x-if="Object.keys($store.proposal.errors).length > 0 && $store.proposal.errors.hasOwnProperty('poster')">
                            <span x-text="Object.keys($store.proposal.errors).length==0 && !$store.proposal.errors.hasOwnProperty('poster') ?'': $store.proposal.errors['poster']" class="text-danger"></span>
                        </template>
                    </div>
                </template>
                {{-- ppt --}}
                <template x-if="$store.proposal.proses =='update' && $store.proposal.ubahCbo['ppt'] == false">
                    <div class="alert alert-primary w-100" id="alert_file_anggaran" role="alert">
                        Bukti File PPT Inovasi dapat didownload
                        <a id="link_file_anggaran" @click="$store.proposal.unduhDokumen('ppt')" href="javascript:;" class="alert-link">pada link ini</a>.
                        <button type="button" @click="$store.proposal.ubahCbo['ppt'] = true" class="btnalert btn btn-light-warning font-weight-bold mr-2">
                            Klik disini
                        </button> untuk mengupload ulang bukti.
                    </div>
                </template>
                <template x-if="$store.proposal.proses =='create' || ($store.proposal.proses =='update' && $store.proposal.ubahCbo['ppt'] == true)">
                    <div>
                        <label for="ppt" class="form-label">
                            <template x-if="$store.proposal.proses =='update'">
                                <i @click="$store.proposal.ubahCbo['ppt'] = false" role="button"  class="fa fa-undo text-warning"></i>
                            </template>
                            <strong>PPT Inovasi</strong>
                        </label>
                        <template x-if="$store.proposal.proses =='update'">
                            <form   class="form-group"
                                    @submit.prevent="$store.proposal.submitForm($event.target,'ppt')"
                                    enctype="multipart/form-data" >
                                <div class="input-group">
                                    <input type="file"
                                            accept="application/vnd.ms-powerpoint, application/vnd.openxmlformats-officedocument.presentationml.presentation"
                                            class="form-control"
                                            name="ppt">
                                    <div class="input-group-append">
                                        <button type="submit" class="input-group-text" style="background-color: #0bb783; cursor:pointer;">
                                            <i class="flaticon-upload text-white"></i>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </template>
                        <template x-if="$store.proposal.proses =='create'">
                            <div class="input-group" >
                              <input    type="file"
                                        accept="application/vnd.ms-powerpoint, application/vnd.openxmlformats-officedocument.presentationml.presentation"
                                        class="form-control"
                                        name="ppt">
                            </div>
                        </template>
                        <template x-if="Object.keys($store.proposal.errors).length > 0 && $store.proposal.errors.hasOwnProperty('ppt')">
                            <span x-text="Object.keys($store.proposal.errors).length==0 && !$store.proposal.errors.hasOwnProperty('ppt') ?'': $store.proposal.errors['ppt']" class="text-danger"></span>
                        </template>
                    </div>
                </template>
                {{-- surate Pernyataan --}}
                <template x-if="$store.proposal.proses =='update' && $store.proposal.ubahCbo['suratPernyataan'] == false">
                    <div class="alert alert-primary w-100" id="alert_file_anggaran" role="alert">
                        Bukti File Surat Pernyataan dapat didownload
                        <a id="link_file_anggaran" @click="$store.proposal.unduhDokumen('suratPernyataan')" href="javascript:;" class="alert-link">pada link ini</a>.
                        <button type="button" @click="$store.proposal.ubahCbo['suratPernyataan'] = true" class="btnalert btn btn-light-warning font-weight-bold mr-2">
                            Klik disini
                        </button> untuk mengupload ulang bukti.
                    </div>
                </template>
                <template x-if="$store.proposal.proses =='create' || ($store.proposal.proses =='update' && $store.proposal.ubahCbo['suratPernyataan'] == true)">
                    <div>
                        <label for="ppt" class="form-label">
                            <template x-if="$store.proposal.proses =='update'">
                                <i @click="$store.proposal.ubahCbo['suratPernyataan'] = false" role="button"  class="fa fa-undo text-warning"></i>
                            </template>
                            <strong>Surat Pernyataan</strong>
                        </label>
                        <template x-if="$store.proposal.proses =='update'">
                            <form   class="form-group"
                                    @submit.prevent="$store.proposal.submitForm($event.target,'suratPernyataan')"
                                    enctype="multipart/form-data" >
                                <div class="input-group">
                                    <input type="file"
                                            accept="application/pdf"
                                            class="form-control"
                                            name="suratPernyataan">
                                    <div class="input-group-append">
                                        <button type="submit" class="input-group-text" style="background-color: #0bb783; cursor:pointer;">
                                            <i class="flaticon-upload text-white"></i>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </template>
                        <template x-if="$store.proposal.proses =='create'">
                            <div class="input-group" >
                              <input    type="file"
                                        accept="application/pdf"
                                        class="form-control"
                                        name="suratPernyataan">
                            </div>
                        </template>
                        <template x-if="Object.keys($store.proposal.errors).length > 0 && $store.proposal.errors.hasOwnProperty('suratPernyataan')">
                            <span x-text="Object.keys($store.proposal.errors).length==0 && !$store.proposal.errors.hasOwnProperty('suratPernyataan') ?'': $store.proposal.errors['suratPernyataan']" class="text-danger"></span>
                        </template>
                    </div>
                </template>
                <template x-if="$store.proposal.proses =='create'" >
                    <div class="mb-3 mt-4">
                        <label for="url" class="form-label"><strong>Url</strong></label>
                        <input type="url" class="form-control" name="youtube_video" x-model.lazy="$store.proposal.form.youtube_video" placeholder="https://www.youtube.com/watch...">
                        <template x-if="Object.keys($store.proposal.errors).length > 0 && $store.proposal.errors.hasOwnProperty('youtube_video')">
                            <span x-text="Object.keys($store.proposal.errors).length==0 && !$store.proposal.errors.hasOwnProperty('youtube_video') ?'': $store.proposal.errors['youtube_video']" class="text-danger"></span>
                        </template>
                    </div>
                </template>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <template x-if="$store.proposal.proses =='create'">
                    <button x-show="$store.proposal.level > 1" @click="$store.proposal.level =1" type="button" class="btn btn-warning" >Kembali</button>
                </template>
                <template x-if="($store.proposal.proses =='create'|| ($store.proposal.proses =='update' && $store.proposal.level == 1 ) )  ">
                    <button type="submit" class="btn btn-primary" :disable="$store.proposal.loading" x-text="$store.proposal.getSubmitText()" ></button>
                </template>
            </div>
        </div>
    </div>
  </form>
  </div>
</div>

@push('scriptTambahan')
{{-- bagian input invoasi --}}
<script>
    document.addEventListener('alpine:init', () => {
        const dataProposal = {
            id :null,
            level :1,
            loading : false,
            proses : 'create',
            errors: [],
            submit : {{ $jumlahSubmit==0? 'false': 'true' }},
            jumlahInovasi: {{ $jumlahInovasi }},
            tahapanInovasis : [
                {
                    value: 'inisiatif',
                    nama : 'Inisiatif'
                },
                {
                    value: 'uji_coba',
                    nama : "Uji Coba",
                },
                {
                    value: 'penerapan',
                    nama : 'Penerapan'
                }
            ],
            jenisInovasis: [
                {
                    value: 'teknologi',
                    nama : 'Teknologi'
                },
                {
                    value: 'ekonomi',
                    nama : 'Ekonomi'
                },
                {
                    value: 'non_ekonomi',
                    nama : 'Non Ekonomi'
                },
            ],
            isCovids:[
                {
                    value: 'covid',
                    nama : 'Covid 19'
                },
                {
                    value: 'non_covid',
                    nama : 'Non Covid 19'
                },
            ],
            form: {
                nama         : null,
                tahapan      : null,
                jenis        : null,
                covid        : null,
                youtube_video: null,
            },
            ubahCbo:{
                poster: false,
                ppt   : false,
                suratPernyataan : false
            },
            formUpload : {
                namafile: '',
                poster  : null,
                ppt     : null,
                suratPernyataan : null,
            }
        };
        const methodsProposal ={
            resetInit(){
                this.level  = 1;
                this.proses = 'create';
                this.resetForm();
            },
            resetForm(){
                this.form.nama     = null;
                this.form.tahapan  = null;
                this.form.bentuk   = null;
                this.form.jenis    = null;
                this.form.covid    = null;
                this.form.kategori = "";
                this.form.youtube_video      = null;
            },
            submitProposal(){
                let alpinejs = this;
                Swal.fire({
                    title            : "Apakah Anda Yakin ?",
                    text             : "Proposal semua proposal anda akan di submit?",
                    icon             : "question",
                    showCancelButton : true,
                    confirmButtonText: "Ya",
                    cancelButtonText : "Tidak",
                    showLoaderOnConfirm: true,
                    preConfirm: () => {;
                        return axios.post('external/dashboard/submitproposal').then(respon=>{
                            alpinejs.submit = true;
                            datatable.ajax.reload();
                            return respon;
                        }).catch(error => {
                            Swal.showValidationMessage(
                                `Request failed: ${error}`
                            )
                        });
                    },
                    allowOutsideClick: () => !Swal.isLoading()
                }).then(({isConfirmed, data}) => {
                    if (isConfirmed) {
                        toastr.success(data.message);
                    }
                })
            },
            toggleModal(proses, id=0, level=1){
                this.proses = proses;
                this.errors ={}
                if(proses == 'create'){
                    this.resetInit();
                    this.level =level;
                    $('#modal-proposal').modal('toggle');
                }else{
                    this.resetInit();
                    this.level =level;
                    this.proses = proses;
                    this.id =id
                    if (this.level ==1 ) {
                        axios.get('external/dashboard/'+id+'/edit',{params: {
                            level : level
                        }}).then(({data})=>{
                            Object.keys(data.inovasi).forEach((key)=> {
                                this.form[key] = data.inovasi[key];
                            });
                            $('#modal-proposal').modal('toggle');
                        }).catch(eror=>{
                            toastr.error(eror);
                        });
                    } else {
                        Object.keys(this.ubahCbo).forEach((key)=> {
                                this.ubahCbo[key] = false;
                        });
                        $('#modal-proposal').modal('toggle');
                    }
                }
            },
            async submitForm(param, namafile=""){
                this.loading=true;
                if(this.level ==1){
                    if (this.proses =='create') {
                        axios.post('external/dashboard', Object.assign(this.form, {'level': this.level, 'status': this.proses })).then(respon=>{
                            this.loading = false;
                            this.level = 2;
                            this.errors = [];
                        }).catch(({response})=>{
                            this.loading = false;
                            this.errors  = response.data.errors;
                            toastr.error(response.data.message);
                        })
                    }else{
                        let alpinejs = this;
                        this.errors = {};
                        if(this.youtubeid(this.form.youtube_video) != false){
                            //// check vidio atau bukan
                            let urlyoutube =this.youtubeid(this.form.youtube_video);
                            axiosgoogle.get('',{
                                params:{
                                        id  : urlyoutube,
                                        part: 'contentDetails',
                                        key : 'AIzaSyB3IZVYOcncq40fyzifbsffSEKahE7lIfQ',
                                    }
                                }).then(({data}) =>{
                                    if(data.items.length > 0){
                                        if (data.items[0].kind =='youtube#video') {
                                            if (this.iso8610(data.items[0].contentDetails.duration)>=60 && this.iso8610(data.items[0].contentDetails.duration)<=90 ) {
                                                axios.put('external/dashboard/'+this.id, Object.assign(this.form, {'level': this.level, 'status': this.proses })).then(({data})=>{
                                                    this.errors = [];
                                                    toastr.success(data.message);
                                                    this.loading = false;
                                                    $('#modal-proposal').modal('toggle');
                                                }).catch(({response})=>{
                                                    this.loading = false;
                                                    this.errors  = response.data.errors;
                                                    toastr.error(response.data.message);
                                                })
                                            } else {
                                                this.addErrors({
                                                    youtube_video: 'Durasi video melebihi atau kurang dari ketentuan'
                                                })
                                            }
                                        }else{
                                            this.addErrors({
                                                youtube_video: 'Konten yang terdapat pada url tidak berupa video'
                                            })
                                        }
                                    }else{
                                        this.addErrors({
                                            youtube_video: 'URL tidak ditemukan'
                                        })
                                    }
                                });
                        }else{
                            this.addErrors({
                                youtube_video: 'Url yang diberikan tidak sesuai'
                            })
                        }
                    }
                }else{
                    let alpinejs = this;
                    this.errors = {};
                    if (this.proses =='create') {
                        if(this.youtubeid(this.form.youtube_video) != false){
                            //// check vidio atau bukan
                            let urlyoutube =this.youtubeid(this.form.youtube_video);
                            axiosgoogle.get('',{
                                params:{
                                        id  : urlyoutube,
                                        part: 'contentDetails',
                                        key : 'AIzaSyB3IZVYOcncq40fyzifbsffSEKahE7lIfQ',
                                    }
                                }).then(({data}) =>{
                                    if(data.items.length > 0){
                                        if (data.items[0].kind =='youtube#video') {
                                            if (this.iso8610(data.items[0].contentDetails.duration)>=60 && this.iso8610(data.items[0].contentDetails.duration)<=90 ) {
                                                $(param).ajaxSubmit({
                                                    data: {'level': alpinejs.level, 'status': alpinejs.proses },
                                                     success:({message,jumlahinovasi})=>{
                                                        toastr.success(message);
                                                        datatable.ajax.reload();
                                                        alpinejs.jumlahInovasi = jumlahinovasi;
                                                        param.reset();
                                                        $('#modal-proposal').modal('toggle');
                                                    },
                                                    error: function({responseJSON}) {
                                                        toastr.error(responseJSON.message);
                                                        alpinejs.errors = responseJSON.errors;
                                                    }
                                                })
                                            } else {
                                                this.addErrors({
                                                    youtube_video : 'Durasi video melebihi atau kurang dari ketentuan'
                                                })
                                            }
                                        }else{
                                            this.addErrors({
                                                youtube_video : 'Konten yang terdapat pada url tidak berupa video'
                                            })
                                        }
                                    }else{
                                        this.addErrors({
                                            youtube_video : 'URL tidak ditemukan'
                                        })
                                    }
                                });
                        }else{
                            this.addErrors({
                                youtube_video : 'Url yang diberikan tidak sesuai'
                            })
                        }
                    } else {
                        $(param).ajaxSubmit({
                            type: "post",
                            url : "{{ url('external/dashboard/uploadfile')}}/"+alpinejs.id,
                            data: {level: alpinejs.level, status: alpinejs.proses, namafile: namafile},
                            success:({message})=>{
                                toastr.success(message);
                                alpinejs.ubahCbo[namafile] = false;
                                datatable.ajax.reload();
                            },
                            error: function({responseJSON}) {
                                toastr.error(responseJSON.message);
                                alpinejs.errors = responseJSON.errors;
                            }
                        })
                    }
                }
            },
            unduhDokumen(param){
                let link = document.createElement('a');
                link.href = "{{ url('external/dashboard/downloadfile') }}/" +this.id+ '?namafile='+param;
                link.click();
                link.remove();
            }
        };
        const gettersProposal={
            getSubmitText(){
                if (this.level==1) {
                    return this.proses=='update'?'Ubah': "Next";
                }else{
                    return "Simpan";
                }
            },
            iso8610(input){
                let reptms = /^PT(?:(\d+)H)?(?:(\d+)M)?(?:(\d+)S)?$/;
                let hours = 0, minutes = 0, seconds = 0, totalseconds;
                if (reptms.test(input)) {
                    var matches = reptms.exec(input);
                    if (matches[1]) hours = Number(matches[1]);
                    if (matches[2]) minutes = Number(matches[2]);
                    if (matches[3]) seconds = Number(matches[3]);
                }
                totalseconds = hours * 3600  + minutes * 60 + seconds;
                return totalseconds;
            },
            youtubeid(url=null){
                if (url == null || url =='') {
                    return false;
                }else{
                    let regExp = /^.*((youtu.be\/)|(v\/)|(\/u\/\w\/)|(embed\/)|(watch\?))\??v?=?([^#&?]*).*/;
                    let match = url.match(regExp);
                    return (match&&match[7].length==11)? match[7] : false;
                }
            },
            addErrors(param){
                if (this.errors.hasOwnProperty('url')) {
                    this.errors.url = param.url;
                } else {
                    this.errors = {...this.errors, ...param};
                }
            }
        }
        Alpine.store('proposal', {
            ...dataProposal,
            ...methodsProposal,
            ...gettersProposal,
        });
    })
</script>
@endpush
