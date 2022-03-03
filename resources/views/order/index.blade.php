@extends('template')
@section('content')
<form action="/order/buy/success" method="POST" class="container mt-3">
  @csrf
  <div class="row">
    <div class="col-md-8 mb-2">
      <div class="card mb-3">
        <div class="card-body">
          <div class="row">
            <div class="col-md-2">
              <img src="{{ asset('storage/' . $barang->image) }}" class="img-fluid">
            </div>
            <div class="col-md-10">
              <h5>{{ $barang->nama_barang }}</h5>
              <b>Rp {{ number_format($barang->harga) }}</b>
            </div>
          </div>
        </div>
      </div>
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Pengiriman</h4>
          <div class="row">
            <div class="col-12 md-2">
              <small>Nama Pembeli</small>
              <input class="form-control" type="text" placeholder="Nama Pembeli" name="nama_pembeli">
            </div>
            <div class="col-12 md-2">
              <small>Alamat</small>
              <input class="form-control" type="text" placeholder="Alamat Rumah" name="alamat">
            </div>
            <div class="col-12 md-2">
              <small>Nomer Telepon</small>
              <input class="form-control" type="text" placeholder="Nomer Telepon" name="nomer_telepon">
            </div>
            <div class="col-12 mb-2">
              <small>Ekspedisi</small>
              <input class="form-control" type="text" value="Anter Kuy" name="ekspedisi" >
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-4 mb-2">
      <div class="card">
        <div class="card-body">
          @if($errors->any())
          <div class="alert alert-danger">
            <strong>Whoops</strong>Input Gagal. <br> <br>
            <ul>
              @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
              @endforeach
            </ul>
          </div>
          @endif
          <div class="row">
            <div class="col-12 mb-1"><b>Ringkasan Belanja</b></div>
            <div class="col-6 mb-1">Total Harga Barang</div>
            <div class="col-6 mb-1"><span class="float-end">Rp {{ number_format($barang->harga) }}</span></div>
            <div class="col-6 mb-1">Total Ongkir</div>
            <div class="col-6 mb-1"><span class="float-end">Rp {{ number_format($ongkir) }}</span></div>
            <hr class="mt-3">
            <div class="col-6">Total Harga</div>
            <div class="col-6"><b><span class="float-end">Rp {{number_format($barang->harga + $ongkir) }}</span></b></div>
            <hr class="mt-3">
            <div class="d-grid gap-3">
              <input type="hidden" value="1" name="jumlah_pembelian">
              <input type="hidden" value="{{ $barang->id }}" name="barang_id">
              <input type="hidden" value="{{ $barang->harga + $ongkir }}" name="total_harga">
              <button class="btn btn-primary" type="submit"><i class="fas fa-money-check"></i> Bayar</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</form>
@endsection