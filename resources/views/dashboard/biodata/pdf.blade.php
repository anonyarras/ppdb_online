<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bukti Pendaftaran</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
   <!--     Fonts and icons     -->
   {{-- <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet"> --}}
   {{-- <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet"> --}}
   <!-- Nucleo Icons -->
   {{-- <link href="{{ asset('template/assets/css/nucleo-icons.css')}}" rel="stylesheet" /> --}}
   {{-- <link href="{{ asset('template/assets/css/nucleo-svg.css')}}" rel="stylesheet" /> --}}
   <!-- Font Awesome Icons -->
   {{-- <link href="{{ asset('template/assets/css/font-awesome.css')}}" rel="stylesheet" /> --}}
   {{-- <link href="{{ asset('template/assets/css/nucleo-svg.css')}}" rel="stylesheet" /> --}}
   <!-- CSS Files -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

</head>
<body>

        <img src="{{$sk->photo}}" alt="" width="100px" height="100px">

            <table class="table">
                <tbody>
                    <tr>
                        <td>Nama Sekolah</td>
                        <td>:</td>
                        <td>{{$sk->nama}}</td>
                        <td>Alamat</td>
                        <td>:</td>
                        <td>{{$sk->alamat}}</td>
                    </tr>
                    <tr>
                        <td>No Telepon Sekolah</td>
                        <td>:</td>
                        <td>{{$sk->no_tlp}}</td>
                        <td>No Rekening</td>
                        <td>:</td>
                        <td>12334155513</td>
                    </tr>
                </tbody>
            </table>
            <br><br>
            <table class="table">
                <tr>
                    <th scope="col">Nama Lengkap</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">No Handphone</th>
                    <th scope="col">Tempat Lahir</th>
                    <th scope="col">Tanggal Lahir</th>
                    <th scope="col">Jenis Kelamin</th>
                    <th scope="col">Email</th>
                    <th scope="col">ID Pendaftaran</th>

                </tr>
                <tbody>
                    <tr>
                        <td>{{$dt->name}}</td>
                        <td>{{$dt->biodata_r->alamat}}</td>
                        <td>{{$dt->biodata_r->no_hp}} </td>
                        <td>{{$dt->biodata_r->tempat_lahir}} </td>
                        <td>{{$dt->biodata_r->tanggal_lahir}} </td>
                        <td>{{$dt->biodata_r->jenis_kelamin}}</td>
                        <td>{{$dt->email}}</td>
                        <td>{{$dt->id_registrasi}}</td>
                    </tr>
                </tbody>
            </table>

</body>
</html>
