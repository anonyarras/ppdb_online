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
                    <a href="{{url('peserta')}}" class="btn btn-sm btn-flat btn-info btn-refresh"><i class="fa fa-refresh"></i> Semua Peserta</a>
                    <a href="{{url('peserta/verifikasi')}}" class="btn btn-sm btn-flat btn-success" ><i class="fa fa-refresh"></i> Terverifikasi</a>
                    <a href="{{url('peserta/belum-verifikasi')}}" class="btn btn-sm btn-flat btn-danger" ><i class="fa fa-refresh"></i> Belum Terverifikasi</a>
                </p>
            </div>

            <div class="box-body">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Action</th>
                            <th>Foto</th>
                            <th>Nama Peserta</th>
                            <th>NISN</th>
                            <th>Email</th>
                            <th>ID Registrasi</th>
                            <th>No Handphone</th>
                            <th>Alamat</th>
                            <th>Bukti Pembayaran</th>
                            <th>Pembayaran</th>
                            <th>Verifikasi</th>
                            <th>Ket Lulus</th>
                            <th colspan="2">Download File</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach($data as $e=>$dt)
                            <tr>
                                <td>{{ $e+1}}</td>
                                <td><a href="{{url("peserta/{$dt->id}/edit")}}" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></a>
                                    <form action="{{url('peserta/'.$dt->id)}}" class="d-inline" onsubmit="return confirm('Are you sure deleted data?')"  method="POST">
                                        @csrf
                                            @method('delete')
                                            <button class="btn btn-danger btn-sm">
                                                <i class="fa fa-trash"></i>
                                            </button>
                                    </form>
                                </td>
                                <td><img src="{{$dt->photo}}" alt="404" class="img-thumbnail"></td>
                                <td>{{$dt->name}} </td>
                                <td>{{$dt->nisn}} </td>
                                <td>{{$dt->email}} </td>
                                <td>{{$dt->id_registrasi}} </td>
                                <td>{{$dt->biodata_r->no_hp}} </td>
                                <td>{{$dt->biodata_r->alamat}} </td>
                                <td><img src="{{$dt->bayar_r->bukti}}" alt="" class="img-thumbnail"> </td>
                            @if($dt->bayar_r_count > 0)
                                <td><label class="badge badge-success">Sudah Bayar</label></td>
                                @else
                                <td><label class="badge badge-danger">Belum Bayar</label></td>
                            @endif
                            <td>
                            @if($dt->is_verifikasi == 1)
                            <label class="badge badge-success">Terverifikasi</label>
                            @else
                            <label class="badge badge-danger">Belum Diverifikasi</label></td>
                            @endif
                            <td>
                                @if($dt->is_lulus == null)
                                <a href="{{url('peserta/'.$dt->id.'/lulus') }}" class="badge badge-primary" >Luluskan</a>
                                @else
                                <span class="badge badge-info">Sudah Lulus</span>
                            </td>
                            @endif
                            <td>
                                <a href="{{asset($dt->biodata_r->foto_ijazah) }}" class="badge badge-success" download=""><i class="ni ni-cloud-download-95"></i> Ijazah</a>
                                <a href="{{asset($dt->biodata_r->foto_raport) }}" class="badge badge-warning" download=""><i class="ni ni-cloud-download-95"></i> Raport</a>
                            </td>
                        </tr>
                    </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>

            </div>
        </div>
    </div>
</div>
</div>
@endsection

@section('scripts')

<script>
    function reloadpage()
    {
    location.reload()
    }
    </script>

@endsection
