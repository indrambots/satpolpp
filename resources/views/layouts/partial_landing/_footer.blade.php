
  <footer class="bg-navy text-inverse">
    <div class="container pt-12 pt-lg-6 pb-13 pb-md-15">
      <div class="d-lg-flex flex-row align-items-lg-center">
        <h3 class="display-3 mb-6 mb-lg-0 pe-lg-20 pe-xl-22 pe-xxl-25 text-white">Ikuti Sekarang Jangan Sampai Ketinggalan</h3>
        {{-- <a href="#" class="btn btn-primary rounded-pill mb-0 text-nowrap"></a> --}}
      </div>
      <!--/div -->
      <hr class="mt-11 mb-12" />
      <div class="row gy-6 gy-lg-0">
        <div class="col-md-4 col-lg-3">
          <div class="widget">
            <img x-data="{url :'https://bappeko.surabaya.go.id/', }" role="button" @click="window.open(url, '_blank')" class="mb-4" height="50px" width="200px" src="{{ asset('images/logo/logo-bappeda-wht.png') }}" srcset="{{ asset('images/logo/logo-bappeda-wht.png') }}" alt="" />
            <p x-data="{url :'https://bappeko.surabaya.go.id/', }" role="button" @click="window.open(url, '_blank')" class="mb-4">© 2022 Bappedalitbang <br class="d-none d-lg-block" /></p>
            <nav class="nav social social-white">
              <a href="https://www.instagram.com/bappedalitbangsurabaya"><i class="uil uil-instagram"></i></a>
              <a href="https://www.youtube.com/channel/UCKDU0C300-kv4RAtDSo2m-w"><i class="uil uil-youtube"></i></a>
            </nav>
            <!-- /.social -->
          </div>
          <!-- /.widget -->
        </div>
        <!-- /column -->
        <div class="col-md-4 col-lg-3">
          <!-- /.widget -->
        </div>
        <!-- /column -->
        <div class="col-md-4 col-lg-3">
          <!-- /.widget -->
        </div>
        <!-- /column -->
        <div class="col-md-12 col-lg-3">
          <!-- /.widget -->
        </div>
        <!-- /column -->
      </div>
      <!--/.row -->
    </div>
    <!-- /.container -->
  </footer>
