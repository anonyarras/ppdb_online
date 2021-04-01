@extends('layout.master')
@section('content')
<div class="wrapper">
    <div class="section section-hero section-shaped">
      <div class="shape shape-style-1 shape-primary">
        <span class="span-150"></span>
        <span class="span-50"></span>
        <span class="span-50"></span>
        <span class="span-75"></span>
        <span class="span-100"></span>
        <span class="span-75"></span>
        <span class="span-50"></span>
        <span class="span-100"></span>
        <span class="span-50"></span>
        <span class="span-100"></span>
      </div>
      <div class="page-header">
        <div class="container shape-container d-flex align-items-center py-lg">
          <div class="col px-0">
            <div class="row align-items-center justify-content-center">
              <div class="col-lg-6 text-center">
                <img src="{{ asset('template/assets/img/logo.png')}}" style="width: 200px;" class="img-fluid">
                <p class="lead text-white">Pendaftaran Online Siswa MTS Insan Takwa Bogor</p>
                <a href="{{url('ppdb')}}" class="btn btn-primary">Pendaftaran</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="separator separator-bottom separator-skew zindex-100">
        <svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none" version="1.1" xmlns="http://www.w3.org/2000/svg">
          <polygon class="fill-white" points="2560 0 2560 100 0 100"></polygon>
        </svg>
      </div>
    </div>



  </div>
  </div><!-- Typography -->

  <div class="section" style="background-image: url('./assets/img/ill/1.svg');">
    <div class="container py-md">
      <div class="row justify-content-between align-items-center">
        <div class="col-lg-6 mb-lg-auto">
          <div class="rounded overflow-hidden transform-perspective-left">
            <div id="carousel_example" class="carousel slide" data-ride="carousel">
              <ol class="carousel-indicators">
                <li data-target="#carousel_example" data-slide-to="0" class="active"></li>
                <li data-target="#carousel_example" data-slide-to="1"></li>
                <li data-target="#carousel_example" data-slide-to="2"></li>
              </ol>
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img class="img-fluid" src="{{ asset('template/assets/img/gprofile1.jpg')}}" alt="First slide">
                </div>
                <div class="carousel-item">
                  <img class="img-fluid" src="{{ asset('template/assets/img/gprofile2.jpg')}}" alt="Second slide">
                </div>
                <div class="carousel-item">
                  <img class="img-fluid" src="{{ asset('template/assets/img/gprofile3.jpg')}}" alt="Third slide">
                </div>
              </div>
              <a class="carousel-control-prev" href="#carousel_example" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#carousel_example" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>
          </div>
        </div>
        <div class="col-lg-5 mb-5 mb-lg-0">
          <h1 class="font-weight-light">Profile Sekolah</h1>
          <p class="lead mt-4">Yayasan Pendidikan Islam Insan Takwa didirikan pada
            tahun 1991 dengan keyakinan sebagaimana firman Allah SWT di surat Muhammad SAW,
             Ayat 7 Wahai orang yang beriman, jika engkau menolong agama Allah,
              maka Allah akan menolongmu Untuk mewujudkan hal itu, maka pada tahun
              1993 didirikanlah Raudhatul Athfal (RA) Insan Takwa, dalam rangka mencetak
               generasi penerus Islam yang memiliki pendidikan dasar yang cukup, baik dalam
               pendidikan keagamaan maupun dalam pendidikan umum. </p>
        </div>
      </div>
    </div>
  </div>
@endsection
