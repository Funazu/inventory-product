@extends('template')
@section('content')
<div class="container mt-5 mb-3">
  <div class="row mt-5 mb-2">
      @foreach($barang as $b)
      <div class="col-3 mt-3 mb-3">
        <div class="card h-100">
          <img src="{{ asset('storage/' . $b->image) }}" class="card-img-top">
          <div class="card-body">
            <h5 class="card-title">{{ $b->nama_barang }}</h5>
            <p class="card-text">Rp {{ number_format($b->harga) }}</p>
            <hr>
            <p class="card-text"><i class="fas fa-cubes"></i> Stok {{ $b->stok }} | <i class="fas fa-layer-group"></i> {{ $b->category->name }}</p>
            <hr>
            <a href="/produk/{{ $b->id }}" class="btn btn-primary">Buy</a>
          </div>
        </div>
      </div>
      @endforeach
  <div>
</div>
@endsection()