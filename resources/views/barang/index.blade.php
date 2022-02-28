@extends('template')
@section('content')
    <div class="row mt-5 mb-2">
        <div class="col-lg-12 margin-tb">
            <div class="float-left">
                <h2>Daftar Barang</h2>
            </div>
            <div class="float-right">
                <a href="{{ route('barang.create') }}" class="btn btn-success">Tambah Barang</a>
                <form action="/logout" method="post">
                    @csrf
                    <button type="submit" class="btn btn-danger mt-2">Logout</button>
                </form>
            </div>
        </div>
    </div>
    @if($message = Session::get('succes'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    <table class="table table-bordered">
        <tr>
            <th width="20px" class="text-center">No</th>
            <th>Nama Barang</th>
            <th width="280px" class="text-center">Harga Barang</th>
            <th width="280px" class="text-center">Deskripsi</th>
            <th>Action</th>
        </tr>
        @foreach ($barang as $b )
            <tr>
                <td class="text-center">{{ ++$i }}</td>
                <td>{{ $b->nama_barang }}</td>
                <td>{{ $b->harga }}</td>
                <td>{{ $b->desc }}</td>
                <td class="text-center">
                    <form action="{{ route('barang.destroy', $b->id) }}" method="POST">
                    <a href="{{ route('barang.show',$b->id) }}" class="btn btn-info btn-sm">Show</a>
                    <a href="{{ route('barang.edit',$b->id) }}" class="btn btn-primary btn-sm">Edit</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
    {{-- {{ $barang->links() }} --}}
@endsection