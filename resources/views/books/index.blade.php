@extends('layout.master')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Data Buku</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('books.create') }}"> Tambah</a>
            <a class="btn btn-warning" href="{{ route('pdf')}}"> Cetak</a>
        </div>
    </div>
</div>
<br>
@if ($message = Session::get('success'))
<div class="alert alert-success">
    <p>{{ $message }}</p>
</div>
@endif
<table class="table table-bordered">
    <tr>
        <th>No</th>
        <th>Judul Buku</th>
        <th>Penulis</th>
        <th>Penerbit</th>
        <th>Foto</th>
        <th width="280px">Action</th>
    </tr>
    @foreach ($books as $book)
    <tr>
        <td>{{ ++$i }}</td>
        <td>{{ $book->judul }}</td>
        <td>{{ $book->penulis }}</td>
        <td>{{ $book->penerbit }}</td>
        <td>{{ $book->foto_buku }}</td>
        <td>
            <form action="{{ route('books.destroy',$book->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <a class="btn btn-primary" href="{{ route('books.edit',$book->id) }}">Edit</a>
                <button type="submit" class="btn btn-danger">Hapus</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>

{!! $books->links() !!}

@endsection