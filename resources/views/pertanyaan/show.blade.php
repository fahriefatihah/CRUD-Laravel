@extends('adminlte.master')
@section('content')
    <div class="mt-3 ml-3 mr-3">
        <div class="text-center"><h3>Forum</h3></div>
        <div class="card bg-warning mr-3  ml-3">
            <div class="card-body text-center">
                <p class="card-text">Judul Pertanyaan : {{$pertanyaan -> judul}}</p>
                <p class="card-text">Isi Pertanyaan : {{$pertanyaan -> isi}}</p>
            </div>
          </div>
    </div>
@endsection