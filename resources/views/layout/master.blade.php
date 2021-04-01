@include('layout.header')
<body class="index-page">
  <!-- Navbar -->
  @include('layout.menu_bar')
  <!-- End Navbar -->
@yield('content')

@include('layout.footer')
@include('layout.script')
