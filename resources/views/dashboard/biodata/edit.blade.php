@extends('dashboard.layouts.master')
@section('content')
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
<div class="alert alert-success">{{$lulus}}</div>
@else
<div class="alert alert-danger">{{$lulus}}</div>
@endif
<form action="{{url('biodata/'.\Auth::User()->id)}}" method="post" >
    @csrf
   @method('PATCH')
      <div class="row">
        <div class="col-md-6">

          <div class="form-group">
            <label for="exampleInputPassword1">No Handphone</label>
            <input type="number" name="no_hp" class="form-control" id="exampleInputPassword1" placeholder="No Handphone" autocomplete="off" value="{{$dt->no_hp}}">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Tempat Lahir</label>
            <input type="text" name="tempat_lahir" class="form-control" id="exampleInputPassword1"  placeholder="Tempat Lahir" autocomplete="off" value="{{$dt->tempat_lahir}}">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Tanggal Lahir</label>
            <input type="date" name="tanggal_lahir" class="form-control datepicker" id="exampleInputPassword1"  placeholder="Tanggal Lahir" autocomplete="off"value="{{$dt->tanggal_lahir}}">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Alamat</label>
            <textarea class="form-control" name="alamat" id="exampleFormControlTextarea1" rows="3" placeholder="Alamat Lengkap ....">value="{{$dt->alamat}}"</textarea>
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
        </div></div></div>
        <div class="col-md-6">
        <div class="form-group">
            <label for="exampleInputPassword1">Ijazah</label>
            <input type="file" name="foto_ijazah" class="form-control" >
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Raport</label>
            <input type="file" name="foto_raport" class="form-control" >
          </div>
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Nama Ayah</label>
        <input type="text" name="nama_ayah" class="form-control" id="exampleInputPassword1" placeholder="Nama Ayah"  autocomplete="off" value="{{$dt->nama_ayah}}">
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
        <textarea class="form-control" name="alamat_ortu" id="exampleFormControlTextarea1" rows="3" placeholder="Alamat Lengkap ...." >value="{{$dt->alamat_ortu}}"</textarea>
      </div>

      <button type="submit" class="btn btn-primary">Update</button>
    </div>
</form>
@endsection
