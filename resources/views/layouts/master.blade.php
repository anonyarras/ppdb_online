@include('layouts.home_login')
<body class="index-page">
  <!-- Navbar -->
  @include('layouts.menu_bar')
  <!-- End Navbar -->
  <main>
@yield('content')
</main>
@include('layouts.footer')
@include('layouts.script')

