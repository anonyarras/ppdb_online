@extends('layout.master')
@section('content')
<div class="section features-6">
    <div class="container">
      <div class="col-md-12">
          <table>

            <tbody>
                @foreach ($data as $dt)
                <tr>
                    <td><h1 class="display-4">{{$dt->judul}}</h1></td>
                </tr>
                <tr>
                    <td>{!!$dt->isi!!}</td>
                    <td><img src="{{$dt->foto}}" alt="" class="img-thumbnail" width="450" height="450"></td>
                </tr>
                <tr>

                </tr>
                @endforeach
            </tbody>
          </table>

      </div>
      <nav aria-label="Page navigation example">
        <ul class="pagination">
          {{ $data->links() }}

        </ul>
      </nav>

      </div>
</div>

@endsection
