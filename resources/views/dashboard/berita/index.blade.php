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
                    @if(\Auth::user()->role == 1)
                    <a href="{{url('berita/add')}}" class="btn btn-sm btn-flat btn-primary">Add Berita</a>
                    @endif
                </p>
            </div>
            <div class="box-body">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Judul</th>
                            <th>Isi Berita</th>
                            <th>Foto</th>
                            <th>Created at</th>
                            <th col="2">Action</th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $e=>$dt)
                        <tr>
                            <td>{{$e+1}}</td>
                            <td>{{$dt->judul}}</td>
                            <td>{!!$dt->isi!!}</td>
                            <td>
                                <img src="{{$dt->foto}}" alt="" width="50px" height="50px" >
                            </td>
                            <td>{{date('d F Y H:i:s',strtotime($dt->created_at))}}</td>
                            <td><a href="{{url('berita/'.$dt->id.'/edit')}}" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></a>
                                <form action="{{url('berita/'.$dt->id)}}" class="d-inline" onsubmit="return confirm('Are you sure deleted data?')"  method="POST">
                                    @csrf
                                        @method('delete')
                                        <button class="btn btn-danger btn-sm">
                                            <i class="fa fa-trash"></i>
                                        </button>
                                </form>
                            </td>

                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            {{ $data->links() }}
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
