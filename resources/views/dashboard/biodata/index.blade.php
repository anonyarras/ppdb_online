@extends('dashboard.layouts.master')
@section('content')

    <div class="section pb-0 section-components">
        <div class="container mb-5">
          <!-- Inputs -->
          <h3 class="h4 text-success font-weight-bold mb-4">Biodata</h3>
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

@if($cek_lulus->is_lulus ==1)
<div class="badge badge-success">{{$lulus}}</div>
@else
<div class="badge badge-danger">{{$lulus}}</div>
@endif
    <form action="{{url('biodata/'.\Auth::user()->id)}}" enctype="multipart/form-data" method="post" >
        @csrf
          <div class="row">
            <div class="col-md-6">
                @if ($cek < 1)
              <div class="form-group">
                <label for="exampleInputPassword1">No Handphone</label>
                <input type="number" name="no_hp" class="form-control" id="exampleInputPassword1" placeholder="No Handphone" autocomplete="off" value="">
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Tempat Lahir</label>
                <input type="text" name="tempat_lahir" class="form-control" id="exampleInputPassword1"  placeholder="Tempat Lahir" autocomplete="off">
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Tanggal Lahir</label>
                <input type="date" name="tanggal_lahir" class="form-control" id="exampleInputPassword1"  placeholder="Tanggal Lahir" autocomplete="off">
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Alamat</label>
                <textarea class="form-control" name="alamat" id="exampleFormControlTextarea1" rows="3" placeholder="Alamat Lengkap ...."></textarea>
              </div>
              <div class="form-group">
                  <label for="">Jenis Kelamin</label>
              <div class="custom-control custom-radio mb-3">
                <input name="jenis_kelamin" class="custom-control-input" id="customRadio1" value="Laki - Laki"  type="radio">
                <label class="custom-control-label" for="customRadio1">Laki - Laki</label>
              </div>
              <div class="custom-control custom-radio mb-3">
                <input name="jenis_kelamin" class="custom-control-input" id="customRadio2" value="Perempuan" type="radio">
                <label class="custom-control-label" for="customRadio2">Perempuan</label>
            </div>
            </div>
          </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="exampleInputPassword1">Ijazah</label>
                    <input type="file" name="foto_ijazah" class="form-control" >
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Raport</label>
                    <input type="file" name="foto_raport" class="form-control" >
                  </div>

              <div class="form-group">
                <label for="exampleInputPassword1">Nama Ayah</label>
                <input type="text" name="nama_ayah" class="form-control" id="exampleInputPassword1" placeholder="Nama Ayah"  autocomplete="off">
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Nama Ibu</label>
                <input type="text" name="nama_ibu" class="form-control" id="exampleInputPassword1" placeholder="Nama Ibu" autocomplete="off" >
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">No Telepon Orang Tua</label>
                <input type="number" name="no_tlp_ortu" class="form-control" id="exampleInputPassword1" placeholder="No Telepon Orang Tua" autocomplete="off" >
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Alamat Orang Tua</label>
                <textarea class="form-control" name="alamat_ortu" id="exampleFormControlTextarea1" rows="3" placeholder="Alamat Lengkap ...." ></textarea>
              </div>

          <button type="submit" class="btn btn-primary">Submit</button>
            </div>
          </div>
    </form>

    @else
    <form enctype="multipart/form-data" action="{{url('biodata/'.\Auth::user()->id)}}" method="post">
        @method('PATCH')
@csrf
          <div class="row">
            <div class="col-md-12">
    <div class="form-group">
        <label for="exampleInputPassword1">No Handphone</label>
        <input type="number" name="no_hp" class="form-control" value="{{$dt->no_hp}}" id="exampleInputPassword1" placeholder="No Handphone" autocomplete="off" value="">
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Tempat Lahir</label>
        <input type="text" name="tempat_lahir" class="form-control" id="exampleInputPassword1" value="{{$dt->tempat_lahir}}" placeholder="Tempat Lahir" autocomplete="off">
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Tanggal Lahir</label>
        <input type="date" name="tanggal_lahir" class="form-control datepicker" id="exampleInputPassword1" value="{{$dt->tanggal_lahir}}" placeholder="Tanggal Lahir" autocomplete="off">
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Alamat</label>
        <textarea class="form-control" name="alamat" id="exampleFormControlTextarea1" rows="3" placeholder="Alamat Lengkap ....">{{$dt->alamat}}</textarea>
      </div>
      <div class="form-group">
          <label for="">Jenis Kelamin</label>
      <div class="custom-control custom-radio mb-3">
        <input name="jenis_kelamin" class="custom-control-input" id="customRadio1" value="Laki - Laki"  type="radio"
        {{$dt->jenis_kelamin == 'Laki - Laki'? 'checked' : ''}} >
        <label class="custom-control-label" for="customRadio1">Laki - Laki</label>
      </div>
      <div class="custom-control custom-radio mb-3">
        <input name="jenis_kelamin" class="custom-control-input" id="customRadio2" value="Perempuan" type="radio"
        {{$dt->jenis_kelamin == 'Perempuan'? 'checked' : ''}}>
        <label class="custom-control-label" for="customRadio2">Perempuan</label>
    </div>
      </div>
            </div>
    <div class="col-md-12">
        <div class="form-group">
            <label for="exampleInputPassword1">Ijazah</label>
            <input type="file" name="foto_ijazah" class="form-control" >
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Raport</label>
            <input type="file" name="foto_raport" class="form-control" id="exampleInputPassword1">
          </div>

      <div class="form-group">
        <label for="exampleInputPassword1">Nama Ayah</label>
        <input type="text" name="nama_ayah" class="form-control" id="exampleInputPassword1" placeholder="Nama Ayah" value="{{$dt->nama_ayah}}" autocomplete="off">
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Nama Ibu</label>
        <input type="text" name="nama_ibu" class="form-control" id="exampleInputPassword1" placeholder="Nama Ibu" autocomplete="off" value="{{$dt->nama_ibu}}">
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">No Telepon Orang Tua</label>
        <input type="number" name="no_tlp_ortu" class="form-control" id="exampleInputPassword1" placeholder="No Telepon Orang Tua" autocomplete="off" value="{{$dt->no_tlp_ortu}}">
      </div>

      <div class="form-group">
        <label for="exampleInputPassword1">Alamat Orang Tua</label>
        <textarea class="form-control" name="alamat_ortu" id="exampleFormControlTextarea1" rows="3" placeholder="Alamat Lengkap ...." >{{$dt->alamat_ortu}}</textarea>
      </div>
    </div>
  <button type="submit" class="btn btn-primary">Update</button>
</div>
          </div></form>
    @endif
      </div>

@endsection
