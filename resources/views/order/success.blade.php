@extends('template')
@section('content')
<div class="container mt-3">
  <div class="card">
    <div class="card-body">
      <h4 class="card-title text-center">Pembayaran Diterima!!</h4>
      <div class="text-center">
        <p>Silahkan cek kwitansi pembayaran</p>
        <a class="btn btn-success" type="button" href="/order/kwitansi/{{ $order->id }}">Kwitansi</a>
      </div>
    </div>
  </div>
</div>
@endsection