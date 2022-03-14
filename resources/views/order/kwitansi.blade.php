@extends('template2')
@section('content')
<div class="mt-5">
  <div class="row justify-content-center">
    <div style="max-width: 600px; margin: 3em auto;">
      <h3 class="text-center">Kwitansi</h3>
      <table class="table">
        <!-- <caption>Invoice</caption> -->
        <tr>
          <th>Informasi</th>
          <th>Informasi.</th>
          <th>Harga</th>
        </tr>
        <tr>
          <td>Nama Pembeli</td>
          <td>{{ $order->nama_pembeli }}</td>
          <td></td>
        
        </tr>
        <tr>
          <td>Alamat</td>
          <td>{{ $order->alamat }}</td>
          <td></td>
     
        </tr>
        <tr>
          <td id="mapbertulang">Nomer Telepon</td>
          <td>{{ $order->nomer_telepon }}</td>
          <td></td>
    
        </tr>
        <tr>
          <td>Nama Barang</td>
          <td>{{ $order->barang->nama_barang }}</td>
          <td>Rp. {{ number_format($order->barang->harga) }}</td>
        </tr>
        <tr>
          <th colspan="2">Ongkir</th>
          <td>Rp. {{ number_format($ongkir) }}</td>
        </tr>
        <tr>
          <th colspan="2">Total Harga</th>
          <td>Rp. {{ number_format($order->total_harga) }}</td>
        </tr>
      </table>
    </div>
  </div>
</div>
@endsection()