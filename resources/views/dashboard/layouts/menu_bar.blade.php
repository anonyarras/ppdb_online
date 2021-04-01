<nav id="navbar-main" class="navbar navbar-main navbar-expand-lg bg-white navbar-light position-sticky top-0 shadow py-2">
    <div class="container">
      <a class="navbar-brand mr-lg-5">
        <img src="{{ asset('template/assets/img/logo.png')}}">
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar_global" aria-controls="navbar_global" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="navbar-collapse collapse" id="navbar_global">
        <div class="navbar-collapse-header">
          <div class="row">
            <div class="col-6 collapse-brand">
              <a href="./index.html">
                <img src="{{ asset('template/assets/img/logo.png')}}">
              </a>
            </div>
            <div class="col-6 collapse-close">
              <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbar_global" aria-controls="navbar_global" aria-expanded="false" aria-label="Toggle navigation">
                <span></span>
                <span></span>
              </button>
            </div>
          </div>
        </div>
        @if(\Auth::user()->role == NULL)
        <ul class="navbar-nav navbar-nav-hover align-items-lg-center">
          <li class="nav-item">
            <a href="{{url('dashboard')}}" class="nav-link">
              <i class="fas fa-home"></i>
              <span class="nav-link-inner--text">Dashboard</span>
            </a>
          </li>
        </ul>
        <ul class="navbar-nav navbar-nav-hover align-items-lg-center">
            <li class="nav-item">
              <a href="{{url('biodata')}}" class="nav-link">
                <i class="ni ni-circle-08"></i>
                <span class="nav-link-inner--text">Biodata</span>
              </a>
            </li>
          </ul>
          <ul class="navbar-nav navbar-nav-hover align-items-lg-center">
            <li class="nav-item">
              <a href="{{url('bayar')}}" class="nav-link">
                <i class="ni ni-credit-card"></i>
                <span class="nav-link-inner--text">Pembayaran</span>
              </a>
            </li>
          </ul>
          @endif

          <ul class="navbar-nav navbar-nav-hover align-items-lg-center">
            <li class="nav-item">
              <a href="{{url('pesan')}}" class="nav-link">
                <i class="fa fa-send"></i>
                <span class="nav-link-inner--text">Pesan</span>
              </a>
            </li>
          </ul>
          @if(\Auth::user()->role == 1)
          <ul class="navbar-nav navbar-nav-hover align-items-lg-center">
            <li class="nav-item">
              <a href="{{url('verifikasi')}}" class="nav-link">
                <i class="ni ni-lock-circle-open"></i>
                <span class="nav-link-inner--text">Verifikasi</span>
              </a>
            </li>
          </ul>
          <ul class="navbar-nav navbar-nav-hover align-items-lg-center">
            <li class="nav-item">
              <a href="{{url('peserta')}}" class="nav-link">
                <i class="ni ni-hat-3"></i>
                <span class="nav-link-inner--text">Data Peserta</span>
              </a>
            </li>
          </ul>
          <ul class="navbar-nav navbar-nav-hover align-items-lg-center">
            <li class="nav-item">
              <a href="{{url('profile-sekolah')}}" class="nav-link">
                <i class="ni ni-building"></i>
                <span class="nav-link-inner--text">Update Profile Sekolah</span>
              </a>
            </li>
          </ul>
          <ul class="navbar-nav navbar-nav-hover align-items-lg-center">
            <li class="nav-item">
              <a href="{{url('berita')}}" class="nav-link">
                <i class="ni ni-single-copy-04"></i>
                <span class="nav-link-inner--text">Data Berita</span>
              </a>
            </li>
          </ul>
          @endif
          <ul class="navbar-nav align-items-lg-center ml-lg-auto align-right">
            @if(\Auth::user()->role == null)
            <li class="nav-item d-none d-lg-block">
                @if(\Auth::user()->is_verifikasi == 1)
            <span class="badge badge-success">Terverifikasi</span></div>

                @else
            <span class="badge badge-danger">Belum diverifkasi</span></div>

                @endif
            </li>
            @endif
            <li class="nav-item d-none d-lg-block">
          <div class="dropdown">
            <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                {{ Auth::user()->name }}
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a  href="{{ route('logout') }}"
                onclick="event.preventDefault();
                              document.getElementById('logout-form').submit();"class="dropdown-item">
                  <i class="ni ni-user-run"></i> {{ __('Logout') }}

                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                  @csrf
              </form>
            </li>

            </ul>

            </div>
          </div>
      </div>
    </div>
  </nav>
  <script src="{{ url('template/assets/js/core/jquery.min.js')}}" type="text/javascript"></script>
  <script src="{{ url('template/assets/js/core/popper.min.js')}}" type="text/javascript"></script>
  <script src="{{ url('template/assets/js/core/bootstrap.min.js')}}" type="text/javascript"></script>
  <script src="{{ url('template/assets/js/plugins/perfect-scrollbar.jquery.min.js')}}"></script>
  <!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
  <script src="{{ url('template/assets/js/plugins/bootstrap-switch.js')}}"></script>
  <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
  <script src="{{ url('template/assets/js/plugins/nouislider.min.js')}}" type="text/javascript"></script>
  <script src="{{ url('template/assets/js/plugins/moment.min.js')}}"></script>
  <script src="{{ url('template/assets/js/plugins/datetimepicker.js')}}" type="text/javascript"></script>
  <script src="{{ url('template/assets/js/plugins/bootstrap-datepicker.min.js')}}"></script>
  <!-- Control Center for Argon UI Kit: parallax effects, scripts for the example pages etc -->
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <script src="{{ url('template/assets/js/argon-design-system.min.js?v=1.2.2')}}" type="text/javascript"></script>
  <script>
    function scrollToDownload() {

      if ($('.section-download').length != 0) {
        $("html, body").animate({
          scrollTop: $('.section-download').offset().top
        }, 1000);
      }
    }
  </script>
  <script src="https://cdn.trackjs.com/agent/v3/latest/t.js"></script>
  <script>
    window.TrackJS &&
      TrackJS.install({
        token: "ee6fab19c5a04ac1a32a645abde4613a",
        application: "argon-design-system-pro"
      });
  </script>
