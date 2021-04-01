@extends('dashboard.layouts.master')

@section('content')


</div>
<div class="container">

<div class="row">

    <div class="col-md-12">
        <h4>{{ $title }}</h4>


        <div class="box box-warning">
            <div class="box-header">
                <p>
                    <button class="btn btn-sm btn-flat btn-warning btn-refresh" onClick="document.location.reload(true)"><i class="fa fa-refresh"></i> Refresh</button>
                    <div class="box" align="right">
                        @if ($cek_bayar == 1)
                        <div class="badge badge-success">{{$bayar}}</div>
                        @else
                        <div class="badge badge-warning">{{$bayar}}</div>
                        @endif
                    </div>
                </p>

            </div>




            <div class="row" align="center">
                @if ($cek == 1)

                <div class="col-md-12"><span class="btn btn-neutral"><h1 class="display-4">{{ $pesan}}</h1>
                    <p>
                        <center>
                            <a href="{{url('cetak_biodata')}}" class="btn btn-success">Cetak Bukti Pendaftaran & Pembayaran</a>
                        </center>
                    </p></span></div>
                    @else
                    <div class="col-md-12"><span class="btn btn-neutral"><h1 class="display-4">{{ $pesan}}</h1>
                        <p>
                            <center>
                                <a href="{{url('biodata')}}" class="btn btn-success">Isi Biodata</a>
                            </center>
                        </p></span></div>
                @endif
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
