@extends('template')
@section('content')
<div class="container mt-5 mb-3">
  <div class="row mt-5 mb-2">
    <div class="row row-cols-1 row-cols-md-3 g-4">
      @foreach($barang as $b)
      <div class="col">
        <div class="card">
          <img src="..." class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">{{ $b->nama_barang }}</h5>
            <p class="card-text">{{ $b->desc }}</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
          </div>
          <div class="card-footer">
            <small class="text-muted">{{ $b->harga }}</small>
          </div>
        </div>
      </div>
      @endforeach
      <div>
  <div>
</div>
@endsection()