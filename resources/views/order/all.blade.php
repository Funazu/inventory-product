@extends('template')
@section('content')
<div class="mt-3  ">
  <table class="table table-bordered  ">
    <tr>
      <th width="20px" class="text-center">No</th>
      <th>Nama Pembeli</th>
      <th>Alamat Pembeli</th>
      <th>Nomer Telepon</th>
      <th>Ekspedisi</th>
      <th>Nama Barang</th>
      <th>Total Harga</th>    
    </tr>
    @foreach ($order as $o )
    <tr>
      <td class="text-center">{{ ++$i }}</td>
      <td>{{ $o->nama_pembeli }}</td>
      <td>{{ $o->alamat }}</td>
      <td>{{ $o->nomer_telepon }}</td>
      <td>{{ $o->ekspedisi }}</td>
      <td>{{ $o->barang->nama_barang }}</td>
      <td>Rp. {{ number_format($o->total_harga) }}</td>
    </tr>
    @endforeach
  </table>
</div>
@endsection()