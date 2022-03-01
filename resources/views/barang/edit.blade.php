@extends('template')

@section('content')
    <div class="row mt-5 mb-5">
        <div class="col-lg-12 margin-tb">
            <div class="float-left">
                <h2>Edit Barang</h2>
            </div>
            <div class="float-right">
                <a href="{{ route('barang.index') }}" class="btn btn-secondary">Kembali</a>
            </div>
        </div>
    </div>
    @if($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> Terjadi kesalahan <br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ route('barang.update', $barang->id) }}" method="post">
    @csrf
    @method('PUT')
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nama Barang</strong>
                <input type="text" name="nama_barang" id="nama_barang" value="{{ $barang->nama_barang }}" placeholder="NAMA BARANG" class="form-control">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Harga Barang</strong>
                <input type="number" name="harga" id="harga" value="{{ $barang->harga }}" placeholder="HARGA BARANG" class="form-control">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Stok Barang</strong>
                <input type="number" name="stok" id="stok" value="{{ $barang->stok }}" placeholder="STOK BARANG" class="form-control">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Deskripsi Barang</strong>
                <textarea name="desc" id="desc" class="form-control" style="height:150px" placeholder="content">{{ $barang->desc }}</textarea>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
            <button class="btn btn-primary" type="submit">Update</button>
        </div>
    </div>
    </form>
@endsection