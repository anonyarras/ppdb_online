@extends('dashboard.layouts.master')
@section('content')

    <div class="section pb-0 section-components">
        <div class="container mb-5">
          <!-- Inputs -->
          <h3 class="h4 text-success font-weight-bold mb-4">Profile Sekolah</h3>
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
    <form action="{{url('profile-sekolah')}}" enctype="multipart/form-data" method="post" >
        @csrf
        @method('PATCH')
          <div class="row">
            <div class="col-sm-6">

              <div class="form-group">
                <label for="exampleInputPassword1">Nama Sekolah</label>
                <input type="text" name="nama" class="form-control" id="exampleInputPassword1" placeholder="Nama Sekolah" autocomplete="off" value="{{$dt->nama}} ">
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Alamat Sekolah</label>
                <textarea class="form-control" name="alamat" id="exampleFormControlTextarea1" rows="3" placeholder="Alamat Sekolah.....">{{$dt->alamat}} </textarea>
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">No Telepon Sekolah</label>
                <input type="number" name="no_tlp" class="form-control" id="exampleInputPassword1"  placeholder="No Telepon Sekolah" autocomplete="off" value="{{$dt->no_tlp}}">
              </div>
              <div class="form-group">
                <img src="{{$dt->photo}} " alt="not found" width="100px" height="100px">
              </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Logo Sekolah</label>
                <input type="file" name="photo" class="form-control" >
              </div>

          </div></div>
          <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
        </div>
      </div>

@endsection
