@extends('template')
@section('content')
<div class="container mt-4">
  <div class="row">
    <div class="col-md-4 mt-2">
      <img src="{{ $barang->image }}" alt="">
    </div>
  </div>
</div>
@endsection()