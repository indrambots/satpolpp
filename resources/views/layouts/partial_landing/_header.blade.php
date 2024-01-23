
    <header class="wrapper bg-light">
        <nav class="navbar navbar-expand-lg classic transparent navbar-light">
          <div class="container flex-lg-row flex-nowrap align-items-center">
            <div class="navbar-brand w-100">
              <a href="{{url('/')}}">
                <img src="{{ asset('assets/landing/img/logo_bappeko_2022.png') }}" width="55px;" height="auto" srcset="./assets/img/logo-dark@2x.png 2x" alt="" />
              </a>
            </div>
            <div class="navbar-collapse offcanvas-nav">
              <div class="offcanvas-header d-lg-none d-xl-none">
                <a href="{{url('/')}}"><img src="{{ asset('assets/landing/img/logo_bappeko_2022.png') }}"width="50px;" srcset="./assets/img/logo-light@2x.png 2x" alt="" /></a>
                <button type="button" class="btn-close btn-close-white offcanvas-close offcanvas-nav-close" aria-label="Close"></button>
              </div>

              <ul class="navbar-nav">
                <li class="nav-item">
                    @if (Auth::check())
                        <a href="{{url('/home')}}" class="btn btn-sm btn-primary rounded-pill" >Akun</a>
                    @else
                        <a href="javascript:;" class="btn btn-sm btn-primary rounded-pill" onclick="openmodal()">Login</a>
                    @endif
                </li>
              </ul>
              </ul>
              <!-- /.navbar-nav -->
            </div>
            <!-- /.navbar-collapse -->
            <div class="navbar-other ms-lg-4">
              <ul class="navbar-nav flex-row align-items-center ms-auto" data-sm-skip="true">
                {{-- <li class="nav-item d-none d-md-block">
                    @if (Auth::check())
                        <a href="{{url('/home')}}" class="btn btn-sm btn-primary rounded-pill" >Akun</a>
                    @else
                        <a href="javascript:;" class="btn btn-sm btn-primary rounded-pill" onclick="openmodal()">Login</a>
                    @endif
                </li> --}}

                <li class="nav-item dropdown language-select text-uppercase">
                    <a class="nav-link dropdown-item dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dokumen Petunjuk</a>
                    <ul class="dropdown-menu">
                      <li class="nav-item"><a class="dropdown-item" href="{{asset('files/Petunjuk-Penggunaan-Website-Inovasi.pdf')}}" download>Panduan Pengisian</a></li>
                      <li class="nav-item"><a class="dropdown-item" href="{{asset('files/juknis-lomba.pdf')}}" download>Prasyaratan dan Pedoman Penilaian</a></li>
                      <li class="nav-item"><a class="dropdown-item" href="{{asset('files/Surat-Keaslian-Karya.pdf')}}" download>Surat Keaslian Karya</a></li>
                      <li class="nav-item"><a class="dropdown-item" href="{{asset('files/template-inovboyo-2022.pdf')}}" download>Template Power Point</a></li>
                    </ul>
                </li>
                @if (Auth::check())
                    <li class="nav-item d-none d-md-block">
                        <a class="dropdown-item btn_keluar" onclick="keluar()" href="javascript:;"><i class="fa-solid fa-right-from-bracket"></i>Keluar</a>
                    </li>
                @endif
                <li class="nav-item d-lg-none">
                  <div class="navbar-hamburger"><button class="hamburger animate plain" data-toggle="offcanvas-nav"><span></span></button></div>
                </li>
              </ul>
              <!-- /.navbar-nav -->
            </div>
            <!-- /.navbar-other -->
          </div>
          <!-- /.container -->
        </nav>
        <!-- /.navbar -->

        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
      </header>
