@extends('adminlte::page')

@section('title', 'Data kategori')

@section('content_header')
    <h1>Data kategori</h1>
@stop

@section('content')
<a href="{{ route('kategori.create') }}" class="btn btn-primary mb-3">Tambah kategori</a>

@if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
@endif

@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Terjadi kesalahan!</strong>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<table class="table table-bordered">
    <thead>
        <tr>
            {{-- <th>ID</th> --}}
            <th>Kode</th>
            <th>Nama</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach($kategoris as $k)
        <tr>
            {{-- <td>{{ $k->id }}</td> --}}
            <td>{{ $k->kode }}</td>
            <td>{{ $k->nama }}</td>
            <td>
                <a href="{{ route('kategori.show', $k->id) }}" class="btn btn-info btn-sm">Lihat</a>
                <a href="{{ route('kategori.edit', $k->id) }}" class="btn btn-warning btn-sm">Edit</a>
                <form action="{{ route('kategori.destroy', $k->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger btn-sm"
                        onclick="return confirm('Yakin ingin menghapus data ini?')">Hapus</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@stop
