@include('dashboard.layouts.home_login')
<body class="index-page">
  <!-- Navbar -->
  @include('dashboard.layouts.menu_bar')
  <!-- End Navbar -->
  <main>
@yield('content')
</main>
@include('dashboard.layouts.footer')
@include('dashboard.layouts.script')

