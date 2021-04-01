@extends('dashboard.layouts.master')
@section('content')

    <div class="section pb-0 section-components">
        <div class="container mb-5">
          <!-- Inputs -->
          <h3 class="h4 text-success font-weight-bold mb-4">Berita</h3>
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
    <form action="{{url('berita/'.$dt->id)}}" enctype="multipart/form-data" method="post" >
        @csrf
        @method('PATCH')
          <div class="row">
            <div class="col-sm-12">
                <div class="form-group">
                <label for="exampleInputPassword1">Judul</label>
                <input type="text" name="judul" class="form-control" id="exampleInputPassword1" placeholder="Judul" autocomplete="off" value="{{$dt->judul}}">
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Isi Berita</label>
                <textarea  name="isi" class="form-control summernote" id="exampleInputPassword1" placeholder="Isi Berita" rows="5" value="">{{$dt->isi}} </textarea>
              </div>
              <div class="form-group">
                <img src="{{url($dt->foto)}} " alt="not found" width="100px" height="100px">
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Foto</label>
                <input type="file" name="foto" class="form-control" >
              </div>


          <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
        </div>
      </div>

@endsection
