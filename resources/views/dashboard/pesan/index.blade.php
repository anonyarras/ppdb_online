@extends('dashboard.layouts.master')

@section('content')
<div class="container pt-lg-7">

<div class="row">
    <div class="col-md-12">
        <h4>{{ $title }}</h4>
        <div class="box box-warning">
            <div class="box-header">
                <p>
                    <button class="btn btn-sm btn-flat btn-warning btn-refresh" onClick="document.location.reload(true)"><i class="fa fa-refresh"></i> Refresh</button>
                    @if(\Auth::user()->role == NULL)
                    <a href="{{url('pesan/add')}}" class="btn btn-sm btn-flat btn-primary">Kirim Pesan</a>
                    @endif
                </p>
            </div>
            <div class="box-body">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Judul</th>
                            <th>Users</th>
                            <th>Status</th>
                            <th>Creted at</th>
                            <th>View Detail</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $e=>$dt)
                        <tr>
                            <td>{{$e+1}}</td>
                            <td>{{$dt->judul}}</td>
                            <td>{{$dt->users_r->name}}</td>
                            <td>
                                @if($dt->status ==NULL)
                                <label for="" class="badge badge-warning">Belum Dibaca</label>
                                @else
                                <label for="" class="badge badge-success">Sudah Dibaca</label>
                                @endif
                            </td>
                            <td>{{date('d F Y H:i:s',strtotime($dt->created_at))}}</td>
                            <td><a href="{{url('pesan/'.$dt->id)}}" class="badge badge-primary">Baca Pesan</a></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
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
