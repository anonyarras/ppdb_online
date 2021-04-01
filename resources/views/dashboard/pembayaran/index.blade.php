@extends('dashboard.layouts.master')
@section('content')

    <div class="section pb-0 section-components">
        <div class="container mb-5">
          <!-- Inputs -->
          <h3 class="h4 text-success font-weight-bold mb-4">Bukti Pembayaran</h3>
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
@if ($cek_bayar == 1)
<div class="badge badge-success">{{$bayar}}</div>
@else
<div class="badge badge-warning">{{$bayar}}</div>
@endif
    <form action="{{url('bayar/'.\Auth::user()->id)}}" enctype="multipart/form-data" method="post" >
        @csrf
          <div class="row">
            <div class="col-lg-4 col-sm-6">
                @if ($cek < 1)
            <div class="form-group">
                <label for="exampleInputPassword1">Upload Bukti Pembayaran</label>
                <input type="file" name="bukti" class="form-control" >
              </div>


          <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
        </div>
    @else
    <div class="row">
        <div class="col-lg-12 col-sm-6">

              <form enctype="multipart/form-data" action="{{url('bayar/'.\Auth::user()->id)}}" method="post">
                @method('PATCH')
    @csrf
    <div class="form-group">
        <img src="{{$dt->bukti}}" class="img-thumbnail" alt="">
    </div>

  </div>
</div>
          </div></form>
    @endif
      </div>

@endsection
