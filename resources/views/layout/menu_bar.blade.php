<nav id="navbar-main" class="navbar navbar-main navbar-expand-lg bg-white navbar-light position-sticky top-0 shadow py-2">
    <div class="container">
      <a class="navbar-brand mr-lg-5" href="./index.html">
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
        <ul class="navbar-nav navbar-nav-hover align-items-lg-center">
          <li class="nav-item">
            <a href="{{url('/')}}" class="nav-link" >
              <i class="fas fa-home"></i>
              <span class="nav-link-inner--text">Home</span>
            </a>
          </li>


          </li>
          <li class="nav-item dropdown">
            <a href="{{url('homeberita')}}" class="nav-link">
              <i class="ni ni-collection d-lg-none,"></i>
              <span class="nav-link-inner--text">Berita</span>
            </a>
          </li>

        </ul>
        <ul class="navbar-nav align-items-lg-center ml-lg-auto">
          <li class="nav-item d-none d-lg-block">
            <a href="{{url('ppdb')}}" class="btn btn-primary btn-icon">
              <span class="btn-inner--icon">
              </span>
              <span class="nav-link-inner--text">Registrasi</span>
            </a>
          </li>
          <li class="nav-item d-none d-lg-block">
            <a href="{{url('login')}}" class="btn btn-primary btn-icon">
              <span class="btn-inner--icon">
              </span>
              <span class="nav-link-inner--text">Login</span>
            </a>
          </li>
        </ul>
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
