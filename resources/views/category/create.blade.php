@extends('template')
@section('content')
    <div class="row mt-5 mb-5">
        <div class="col-lg-12 margin-tb">
            <div class="float-left">
                <h2>Tambah Category Baru</h2>
            </div>
            <div class="float-right">
                <a href="{{ route('category.index') }}" class="btn btn-secondary">Kembali</a>
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

    <form action="{{ route('category.store') }}" method="post">
    @csrf
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nama Category</strong>
                <input type="text" name="name" class="form-control" placeholder="Nama Category">
            </div>
        </div>  
        <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
            <button class="btn btn-primary">Submit</button>
        </div>
    </div>
    </form>
@endsection