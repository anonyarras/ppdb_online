@extends('dashboard.layouts.master')
@section('content')

    <div class="section pb-0 section-components">
        <div class="container mb-5">
          <!-- Inputs -->
          <h3 class="h4 text-success font-weight-bold mb-4">Berita</h3>
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
    <form action="{{url('berita/add')}}" enctype="multipart/form-data" method="post" >
        @csrf
          <div class="row">
            <div class="col-sm-12">
                <div class="form-group">
                <label for="exampleInputPassword1">Judul</label>
                <input type="text" name="judul" class="form-control" id="exampleInputPassword1" placeholder="Judul" autocomplete="off" value="">
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Isi Berita</label>
                <textarea id="isi" name="isi" class="form-control" placeholder="Isi Berita" ></textarea>
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Foto</label>
                <input type="file" name="foto" class="form-control" id="exampleInputPassword1" autocomplete="off" value="">
              </div>


          <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
        </div>
      </div>
      <script src="https://cdn.tiny.cloud/1/0zysd7doyeaaq827zoj52hwy7ljicw7gb20j0uv5iy8vwvtz/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
      <script>
        tinymce.init({
          selector: 'textarea',
          plugins: 'a11ychecker advcode casechange formatpainter linkchecker autolink lists checklist media mediaembed pageembed permanentpen powerpaste table advtable tinycomments tinymcespellchecker',
          toolbar: 'a11ycheck addcomment showcomments casechange checklist code formatpainter pageembed permanentpen table',
          toolbar_mode: 'floating',
          tinycomments_mode: 'embedded',
          tinycomments_author: 'Author name',
       });
      </script>
@endsection

