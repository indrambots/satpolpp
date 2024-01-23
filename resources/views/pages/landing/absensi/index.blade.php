@extends('layouts.app_portal')
@section('content')
<div class="row mb-5">
	<div class="col-xl-12">
		
		<div class="card card-custom">
			<div class="card-body rounded p-0 d-flex bg-light">
				<div class="d-flex flex-column flex-lg-row-auto w-auto w-lg-350px w-xl-450px w-xxl-650px py-10 py-md-14 px-10 px-md-20 pr-lg-0">
					<h1 class="font-weight-bolder text-dark mb-0">ABSENSI/ DAFTAR HADIR KEGIATAN</h1>
					<div class="font-size-h2 mb-8">{{$acara->nama}}</div>
					<div class="font-size-h4 mb-8">{{$acara->tema}}</div>
					
				</div>
				<div class="d-none d-md-flex flex-row-fluid bgi-no-repeat bgi-position-y-center bgi-position-x-right" style="background-image: url({{asset('assets/media/svg/illustrations/login-visual-1.svg')}});"></div>
			</div>
		</div>
		
	</div>
</div>
<div class="row mt-2">
    <div class="col-md-12">
        <div class="card card-custom gutter-b example example-compact">
            <div class="card-header">
                <h3 class="card-title">
                    FORM ABSENSI &nbsp;<i class="fas fa-pencil-alt"></i>
                </h3>
            </div>
            
            <form  method="POST" action="{{ url('absensi/save')}}" class="form" enctype="multipart/form-data">
            	{{csrf_field()}}
            	<input type="hidden" name="id" value="{{$acara->id}}">
                <div class="card-body">
                    <div class="form-group">
                        <label>
                            Nama:
                        </label>
                        <input class="form-control form-control-solid" name="nama" placeholder="Tulis nama lengkap anda. . ." type="text" required>
                        
                    </div>
                    <div class="form-group">
                        <label>
                            Jenis Kelamin:
                        </label>
                        <div class="radio-inline">
							<label class="radio radio-lg">
							<input type="radio" name="jenis_kelamin" required>
							<span></span>PRIA</label>
							<label class="radio radio-lg">
							<input type="radio" name="jenis_kelamin" required>
							<span></span>Wanita</label>
						</div>
                    </div>
                    <div class="form-group">
                        <label>
                            Jenis Pegawai:
                        </label>
                        <select class="form-control" name="jenis_pegawai" required>
                        	<option value="">--PILIH JENIS PEGAWAI--</option>
                        	<option value="PNS">PNS</option>
                        	<option value="PTT-PK">PTT-PK</option>
                        	<option value="PTT-PK">PPPK</option>
                        </select>
                        
                    </div>
                    <div class="form-group">
                        <label>
                            NIP:
                        </label>
                        <input class="form-control form-control-solid" name="nip" placeholder="Tulis NIP anda. . ." required size="16" type="number">
                        
                    </div>
                    <div class="form-group">
                        <label>
                            Asal Instansi:
                        </label>
                        <input class="form-control form-control-solid" name="asal_instansi" placeholder="Tulis Asal Instansi Anda. . ." type="text" required>
                        
                    </div>
                    <div class="form-group">
                        <label>
                            No Telp:
                        </label>
                        <input class="form-control form-control-solid" name="telp" placeholder="no telp. . ." type="number" required>
                            <span class="form-text text-muted">
                                Nomor telephone anda
                            </span>
                        
                    </div>
                    <div class="form-group">
                        <label>
                            Email:
                        </label>
                        <input class="form-control form-control-solid" name="email" placeholder="email. . ." type="email" required>
                            <span class="form-text text-muted">
                                Email
                            </span>
                        
                    </div>
                    <div class="form-group">
                        <label>
                            Bukti Mengikuti Kegiatan :
                        </label>
                        <input class="form-control form-control-solid" name="bukti" type="file" required>
                    </div>
                    <div class="card-footer">
                        <button class="btn btn-primary mr-2" type="submit">
                            Submit Absen
                        </button>
                        <button class="btn btn-secondary" type="reset">
                            Cancel
                        </button>
                    </div>
                </div>
            </form>
            
        </div>
    </div>
</div>
@endsection