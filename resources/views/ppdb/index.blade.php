@extends('layouts.master2')
@section('content')
<div class="container pt-lg-7">
    <div class="row justify-content-center">
      <div class="col-lg-5">
        <div class="card bg-secondary shadow border-0">

          <div class="card-body px-lg-5 py-lg-5">
            <div class="text-center text-muted mb-4">
              <small>Registrasi PPDB Online</small>
            </div>
            @if(Session::has('berhasil'))
                <div class="alert alert-success alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <h4><i class="icon fa fa-check"></i> Sukses!</h4>
                    {{ Session::get('berhasil') }}
                </div>
                @endif

                @if(Session::has('gagal'))
                <div class="alert alert-danger alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <h4><i class="icon fa fa-ban"></i> Gagal!</h4>
                    {{ Session::get('gagal') }}
                </div>
                @endif
            <form role="form" method="post" enctype="multipart/form-data" action="{{url('ppdb')}}">
              @csrf
                <div class="form-group">
                <div class="input-group input-group-alternative mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="ni ni-hat-3"></i></span>
                  </div>
                  <input class="form-control" placeholder="Nama Peserta" name="nama" type="text">
                </div>
              </div>
              <div class="form-group">
                <div class="input-group input-group-alternative mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="ni ni-hat-3"></i></span>
                  </div>
                  <input class="form-control" placeholder="NISN" name="nisn" type="text">
                </div>
              </div>
              <div class="form-group">
                <div class="input-group input-group-alternative mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                  </div>
                  <input class="form-control" placeholder="Email" name="email" type="email">
                </div>
              </div>

              <div class="form-group">
                <div class="input-group input-group-alternative mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="ni ni-photo"></i>Foto</span>
                  </div>
                  <input class="form-control"  name="photo" type="file">
                </div>
              </div>

              <div class="text-center">
                <input type="submit" class="btn btn-primary mt-4">
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
