@extends('template')

@section('content')
    <div class="row mt-5 mb-5">
        <div class="col-lg-12 margin-tb">
            <div class="float-left">
                <h2>Melihat Barang</h2>
            </div>
            <div class="float-right">
                <a href="{{ route('barang.index') }}" class="btn btn-secondary">Kembali</a>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nama :  </strong>
                {{ $barang->nama_barang }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Harga : </strong>
                {{ $barang->harga }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Stok : </strong>
                {{ $barang->stok }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Deskripsi : </strong>
                {{ $barang->desc }}
            </div>
        </div>
    </div>
@endsection