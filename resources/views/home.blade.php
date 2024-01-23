@extends('layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-6 col-lg-6 col-xl-6 mb-5">
            <div class="card card-custom wave wave-animate-fast wave-primary">
                <div class="card-body text-center">
                    <a href="{{ url('admin/dokumen') }}">
                        <span class="svg-icon svg-icon-primary svg-icon-6x">
                            <i class="icon-6x text-info mb-10 mt-10 fas fa-book" aria-hidden="true"></i>
                        </span>
                    </a>
                    <br>
                    <a href="{{ url('admin/dokumen') }}"
                        class="text-dark text-hover-primary font-weight-bold font-size-h4 mb-3">Dokumen</a>
                </div>
            </div>
        </div>
        <div class="col-6 col-lg-6 col-xl-6 mb-5">
            <div class="card card-custom wave wave-animate-fast wave-primary">
                <div class="card-body text-center">
                    <a href="{{ url('admin/berita') }}">
                        <span class="svg-icon svg-icon-primary svg-icon-6x">
                            <i class="icon-6x text-info mb-10 mt-10 fas fa-newspaper" aria-hidden="true"></i>
                        </span>
                    </a>
                    <br>
                    <a href="{{ url('admin/berita') }}"
                        class="text-dark text-hover-primary font-weight-bold font-size-h4 mb-3">Berita</a>
                </div>
            </div>
        </div>
        <div class="col-6 col-lg-6 col-xl-6 mb-5">
            <div class="card card-custom wave wave-animate-fast wave-primary">
                <div class="card-body text-center">
                    <a href="{{ url('admin/gallery') }}">
                        <span class="svg-icon svg-icon-primary svg-icon-6x">
                            <i class="icon-6x text-info mb-10 mt-10 fas fa-photo-video" aria-hidden="true"></i>
                        </span>
                    </a>
                    <br>
                    <a href="{{ url('admin/gallery') }}"
                        class="text-dark text-hover-primary font-weight-bold font-size-h4 mb-3">Gallery</a>
                </div>
            </div>
        </div>
        <div class="col-6 col-lg-6 col-xl-6 mb-5">
            <div class="card card-custom wave wave-animate-fast wave-primary">
                <div class="card-body text-center">
                    <a href="{{ url('admin/struktural') }}">
                        <span class="svg-icon svg-icon-primary svg-icon-6x">
                            <i class="icon-6x text-info mb-10 mt-10 fas fa-user-tie" aria-hidden="true"></i>
                        </span>
                    </a>
                    <br>
                    <a href="{{ url('admin/struktural') }}"
                        class="text-dark text-hover-primary font-weight-bold font-size-h4 mb-3">Struktural</a>
                </div>
            </div>
        </div>
        <div class="col-6 col-lg-6 col-xl-6 mb-5">
            <div class="card card-custom wave wave-animate-fast wave-primary">
                <div class="card-body text-center">
                    <a href="{{ url('admin/acara') }}">
                        <span class="svg-icon svg-icon-primary svg-icon-6x">
                            <i class="icon-6x text-info mb-10 mt-10 fas fa-user-tie" aria-hidden="true"></i>
                        </span>
                    </a>
                    <br>
                    <a href="{{ url('admin/acara') }}"
                        class="text-dark text-hover-primary font-weight-bold font-size-h4 mb-3">Kegiatan/Acara</a>
                </div>
            </div>
        </div>
    </div>
@endsection
