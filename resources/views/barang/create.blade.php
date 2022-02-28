@extends('template')
@section('content')
    <div class="row mt-5 mb-5">
        <div class="col-lg-12 margin-tb">
            <div class="float-left">
                <h2>Tambah barang baru</h2>
            </div>
            <div class="float-right">
                <a href="{{ route('barang.index') }}" class="btn btn-secondary">Kembali</a>
            </div>
        </div>
    </div>
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

    <form action="{{ route('barang.store') }}" method="post">
    @csrf
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nama Barang :</strong>
                <input type="text" name="nama_barang" class="form-control" placeholder="Nama Barang">
            </div>
        </div>  
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Harga Barang</strong>
                <input type="number" name="harga" class="form-control" placeholder="Harga Barang">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Deskripsi</strong>
                <textarea name="desc" style="height: 150px" class="form-control" placeholder="Content"></textarea>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <button class="btn btn-primary">Submit</button>
        </div>
    </div>
    </form>
@endsection