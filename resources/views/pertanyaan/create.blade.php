@extends('adminlte.master')
@section('content')
<div class="ml-3 mr-3 mt-3"> 
<div class="card card-dark">
  <div class="card-header">
    <h3 class="card-title">Form</h3>
  </div>
  <!-- /.card-header -->
  <!-- form start -->
  <form role="form" action="/pertanyaan" method="POST">@csrf
    <div class="card-body">
      <div class="form-group">
        <label for="judul">Judul</label>
        <input type="text" class="form-control" id="judul"  name="judul"  placeholder="Masukkan Judul">
      </div>
      <div class="form-group">
        <label for="isi">Pertanyaan Anda</label>
        <input type="text" class="form-control" id="isi" name="isi" placeholder="Masukkan Pertanyaan Anda">
      </div>
    <!-- /.card-body -->

    <div class="card-footer">
      <button type="submit" class="btn btn-dark">Submit</button>
    </div>
  </form>
</div>
</div>
</div>
@endsection