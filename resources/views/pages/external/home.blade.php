@extends('layouts.app')

@section('content')


@if(Auth::user()->biodata()->exists() == false)
    @if (Auth::user()->level <=2)
        <div class="col-6 col-lg-6 col-xl-6 mb-5">
            <div class="card card-custom wave wave-animate-fast wave-primary">
                <div class="card-body text-center">
                    <a href="{{ url('external/dashboard') }}">
                        <span class="svg-icon svg-icon-primary svg-icon-6x">
                            <i class="icon-6x text-info mb-10 mt-10 fa fa-cog" aria-hidden="true"></i>
                        </span>
                    </a>
                    <br>
                    <a href="{{ url('master/user') }}"
                        class="text-dark text-hover-primary font-weight-bold font-size-h4 mb-3">100 Besar</a>
                </div>
            </div>
        </div>
    @else
        <div class="col-12 col-lg-12 col-xl-12 mb-5">
            <div class="card card-custom">
                <div class="card-body rounded p-0 d-flex bg-light">
                <div class="d-flex flex-column flex-lg-row-auto w-auto w-lg-350px w-xl-450px w-xxl-650px py-10 py-md-14 px-10 px-md-20 pr-lg-0">
                    <h1 class="font-weight-bolder text-dark mb-0">Selamat Datang</h1>
                    <div class="font-size-h4 mb-8">Silahkan Isi profil kamu dulu ya lalu ajukan proposal inovasi kamu</div>
                    <!--begin::Form-->
                    <button type="button" x-data @click="$store.profile.toggleModal('create',{{Auth::id()}},1)" class="btn btn-light-primary font-weight-bolder px-8 font-size-sm"> LENGKAPI PROFILE</button>
                    <!--end::Form-->
                </div>
                <div class="d-none d-md-flex flex-row-fluid bgi-no-repeat bgi-position-y-center bgi-position-x-right" style="background-image: url({{ asset('assets/media/svg/illustrations/copy.svg') }});"></div>
                </div>
            </div>
        </div>
    @endif

@include('pages.external.modal.profile')
@else
    @if (Auth::user()->biodata->nomortelp == null)
        <div class="col mb-2">
            <div class="alert alert-custom alert-notice alert-light-dark fade show mb-5" role="alert">
            <div class="alert-icon">
                <i class="flaticon-warning"></i>
            </div>
            <div class="alert-text">
                <strong>Informasi!</strong>
                Akun anda belum diberikan nomor telp
                <button class="btn btn-link text-danger" x-data @click="$store.profile.toggleModal('update',{{ Auth::id() }},2)">
                    <strong>klik disini</strong>
                </button> untuk menambahkan nomor telp yang dapat dihubungi
            </div>
            <div class="alert-close">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">
                    <i class="ki ki-close"></i>
                </span>
                </button>
            </div>
            </div>
        </div>
    @endif

    <div class="alert alert-custom alert-light-dark  fade show mb-5" role="alert">
        <div class="alert-icon ">
            <i class="flaticon-calendar-with-a-clock-time-tools text-info"></i>
        </div>
        <div class="alert-text"
            x-data
            x-init="
                $($refs.cd).countdown('2022/05/18 00:00:00', function(e) {
                    $(this).text(
                        e.strftime('%D Hari %H Jam %M Menit %S Detik')
                    );
                }).on('finish.countdown', function(event) {
                    window.location.reload();
                });
            "
        >
            Waktu Pengisian Inovasi Tersisa <span x-ref="cd" class="text-danger "></span>  <span>  (18 Mei 2022) </span>
        </div>
        <div class="alert-close">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">
                    <i class="ki ki-close"></i>
                </span>
            </button>
        </div>
    </div>
<div class="card card-custom gutter-b">
  <div class="card-body">
    <!--begin::Details-->
    <div class="d-flex mb-9">
      <!--begin: Pic-->
      <div class="flex-shrink-0 mr-7 mt-lg-0 mt-3">
        <div class="symbol symbol-50 symbol-lg-120">
            @if (Auth::user()->biodata !== null && Auth::user()->biodata->foto_profile !== null)
                <img src="{{ asset('profile/'.Auth::user()->biodata->foto_profile) }}" alt="image">

            @else
                <img src="{{ asset('assets/media/svg/avatars/026-boy-10.svg') }}" alt="image">
            @endif
        </div>
        <div class="symbol symbol-50 symbol-lg-120 symbol-primary d-none">
          <span class="font-size-h3 symbol-label font-weight-boldest">JM</span>
        </div>
      </div>
      <!--end::Pic-->
      <!--begin::Info-->
      <div class="flex-grow-1">
        <!--begin::Title-->
        <div class="d-flex justify-content-between flex-wrap mt-1">
          <div class="d-flex mr-3">
            <a href="javascript:void(0)" class="text-dark-75 text-hover-primary font-size-h5 font-weight-bold mr-3">{{ Auth::user()->biodata->nama }}</a>
            <a href="javascript:void(0)">
              <i class="flaticon2-correct text-success font-size-h5"></i>
            </a>
          </div>
          <div class="my-lg-0 my-3">
            <a href="javascript:void(0)" x-data @click="$store.profile.toggleModal('update',{{Auth::id()}},2)" class="btn btn-sm btn-info font-weight-bolder text-uppercase"><i class="flaticon2-user-1"></i>Ubah profile</a>
          </div>
        </div>
        <!--end::Title-->
        <!--begin::Content-->
        <div class="d-flex flex-wrap justify-content-between mt-1">
          <div class="d-flex flex-column flex-grow-1 pr-8">
            <div class="d-flex flex-wrap mb-4">
              <a href="javascript:void(0)" class="text-dark-50 text-hover-primary font-weight-bold mr-lg-8 mr-5 mb-lg-0 mb-2">
              <i class="flaticon2-new-email mr-2 font-size-lg"></i>{{ Auth::user()->username }}</a>
              <a href="javascript:void(0)" class="text-dark-50 text-hover-primary font-weight-bold mr-lg-8 mr-5 mb-lg-0 mb-2">
                <i class="flaticon-map-location mr-2 font-size-lg"></i>{{ Auth::user()->biodata->alamat }}
              </a>
            </div>
          </div>
        </div>
        <!--end::Content-->
      </div>
      <!--end::Info-->
    </div>
    <!--end::Details-->

  </div>
</div>
<div class="card card-custom">
  <div class="card-header">
    <div class="card-title">
      <span class="card-icon">
        <i class="flaticon2-open-box text-info"></i>
      </span>
      <h3 class="card-label">Data Inovasi
      <small>Jangan lupa lengkapi data inovasi ya</small></h3>
    </div>

    @if (Auth::user()->level == 6 && $jumlahSubmit==0 )
    <template x-data x-if="$store.proposal.submit == false">
        <div class="card-toolbar">
            <button   type="button"
                     @click="$store.proposal.toggleModal('create')"
                    class="mr-2 btn btn-sm btn-success font-weight-bold">
                <i class="flaticon2-cube"></i>
                Tambah Proposal Inovasi
            </button>
            <template x-if="$store.proposal.jumlahInovasi>0">
                <button  type="button"
                         @click="$store.proposal.submitProposal()"
                        class="mr-2 btn btn-sm btn-info font-weight-bold">
                    <i class="flaticon2-cube"></i>
                    Kirim aplikasi
                </button>
            </template>
        </div>
    </template>
    @endif
  </div>
  <div class="card-body">
      {{-- level pengguna umum --}}
      @if ((Auth::user()->level == 6) )
      {{-- table  --}}
        <div class="row mt-2">
            <div class="table-responsive">
            <table id="datatable" class="table table-striped table-hover">
                <thead>
                <tr>
                    <th>id</th>
                    <th>Nama</th>
                    <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                </tbody>
            </table>
            </div>
        </div>
      @endif
  </div>
  <div class="card-footer d-flex justify-content-between">
  </div>
</div>
@include('pages.external.modal.file_proposal')
@include('pages.external.modal.proposal')
@include('pages.external.modal.profile')
@endif
@endsection
@section('script')
@if(Session::get('message') == "success")
    <script type="text/javascript">
        toastr.success("Profile Berhasil diubah");
    </script>
@endif
<script>

@if (Auth::user()->biodata !== null && Auth::user()->biodata->foto_profile !== null)
    $('input[name=foto_profile]').slideUp();
@endif
$('#upload-profil_bisnis').on('click',function(){
      $('#alert_profil_bisnis').slideUp();
      $("input[name=file_profil_bisnis]").slideDown();
    });
$('#upload-foto_profile').on('click',function(){
      $('#alert_foto_profile').slideUp();
      $("input[name=foto_profile]").slideDown();
    });
$('#upload-thumbnail').on('click',function(){
      $('#alert_thumbnail').slideUp();
      $("input[name=thumbnail]").slideDown();
    });
function ajukanInovasi(id){
  Swal.fire({
          title               : "Anda Yakin?",
          text                : "Setelah Mengajukan inovasi, Proposal anda dianggap Final dan tidak dapat diubah kembali",
          icon                : "warning",
          showCancelButton    : true,
          confirmButtonColor  : "#e6b034",
          confirmButtonText   : "Ajukan Inovasi"
        }).then((result) => {
        if (result.value) {
          $.ajax({
            method:'POST',
            url:'{{ url('inovasi/ajukan') }}',
            data:{
              id:id,
              _token:'{{ csrf_token() }}'
            },
            success:function(data){
              Swal.fire({
                title               : "Berhasil",
                text                : "Data Inovasi Berhasil Diajukan",
                icon                : "success",
              })
            }
          })
        }
      })
}
@if ((Auth::user()->level== 6)  )
    window.datatable = $('#datatable').DataTable({
            processing: true,
            serverSide: false,
            paging:true,
            ajax:"{{ route('external.dashboard.datatables') }}",
            columns: [
                {data: 'id', name:'id'},
                {data: 'nama', name:'nama'},
                {data: 'aksi', name:'aksi'},
            ],
            "order": [[ 0, "desc" ]],
        });
@endif
</script>
@endsection
