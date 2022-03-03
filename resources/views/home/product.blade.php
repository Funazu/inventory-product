@extends('template')
@section('content')
<div class="container mt-4">
  <div class="row">
    <div class="col-md-4 mt-2">
      <img src="{{ asset('storage/' . $barang->image) }}" width="300px" height="300px">
    </div>
    <div class="col-md-4 mt-2">
      <h4>{{ $barang->nama_barang }}</h4>
      <p>
        <i class="fas fa-cubes"></i> Stok {{ $barang->stok }} | <i class="fas fa-layer-group"></i> {{ $barang->category->name }}
      </p>
      <p>
        {{ $barang->desc }}
      </p>
    </div>
    <div class="col-md-3 mt-2">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title"><b>Rp {{ number_format($barang->harga) }}</b></h5>
          <hr>
          <p><i class="fas fa-map-marked-alt"></i> Barang siap diantar ke <b>Rumahmu</b></p>
          <p><i class="fas fa-shipping-fast"></i> Ongkir <b>Gratis</b></p>
          <p><i class="fas fa-clock"></i> Estimasi tiba <b>Besok</b></p>
          @if ($barang->stok > 0)
          <div class="d-grid gap-2">
            <a href="" class="btn btn-primary btn-block"><i class="fas fa-shopping-cart"></i> Buy</a>
          </div>
          @else
          <div class="alert alert-danger" role="alert">
            Maaf, Stok Habis
          </div>
          @endif
        </div>
      </div>
    </div>
  </div>
</div>
@endsection()