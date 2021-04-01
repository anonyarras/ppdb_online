@extends('dashboard.layouts.master')

@section('content')
<div class="container pt-lg-7">
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
<div class="row">
    <div class="col-md-12">
        <h4>{{ $title }}</h4>
        <div class="box box-warning">
            <div class="box-header">
                <p>
                    <button class="btn btn-sm btn-flat btn-warning btn-refresh" onClick="document.location.reload(true)"><i class="fa fa-refresh"></i> Refresh</button>
                </p>
            </div>
            <div class="box-body">
                <form action="{{url('verifikasi')}}" method="post">
                    @csrf
                      <div class="row">
                        <div class="col-lg-4 col-sm-6">
                          <div class="form-group">
                            <label for="exampleInputPassword1">ID Pendaftaran</label>
                            <input type="text" name="id_pendaftaran" class="form-control" id="exampleInputPassword1" placeholder="Masukan ID Pendaftaran" autocomplete="off" value="">
                          </div>
                          <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
@endsection


<script>
    function reloadpage()
    {
    location.reload()
    }
    </script>
