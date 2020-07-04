@extends('adminlte.master')

@section('content')
<div class="row ml-1 mr-1 mt-3">
  <div class="col-12">
    <div class="card card-dark">
      <div class="card-header">
        <h3 class="card-title">BANK OF QUESTION</h3>

        <div class="card-tools">
          <div class="input-group input-group-sm" style="width: 150px;">
            <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

            <div class="input-group-append">
              <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
            </div>
          </div>
        </div>
      </div>
      <!-- /.card-header -->
      <div class="card-body table-responsive p-0 text-center">
        <table class="table table-hover text-nowrap table-bordered text-bold">
          <thead>
            <tr>
              <th>No</th>
              <th>Judul Pertanyaan</th>
              <th>Isi Pertanyaan</th>
              <th>Tanggal Dibuat</th>
              <th>Tanggal Di-Update</th>
              <th>Pilihan</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($pertanyaan as $key => $item)
            <tr>
              <td>{{$key+1}}</td>
            <td>{{$item->judul}}</td>
            <td>{{$item->isi}}</td>
            <td>{{$item->created_at}}</td>
            <td>{{$item->updated_at}}</td>
            <td><a href="#" class="mr-2 btn btn-success"><ion-icon name="enter-sharp"></ion-icon></a>
              <a href="/pertanyaan/{{$item->id}}" class="mr-2 btn btn-warning"><ion-icon name="create-sharp"></ion-icon></a>
            <form action="/pertanyaan/{{$item->id}}" method="POST" style="display: inline">
              @csrf 
              @method('DELETE')
              <button type="submit" class="btn btn-danger"><ion-icon name="trash"></ion-icon></button>
            </form>
            </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->
  </div>
</div>
<div class="ml-4  mr-3">
<a href="/pertanyaan/create" class="btn - btn-dark">Create New Question</a>
</div>
@endsection