@extends('adminlte::page')

@section('title', 'Data Catatan')

@section('content_header')
    <h1>Data Catatan</h1>
@stop

@section('content')
<a href="{{ route('catatan.create') }}" class="btn btn-primary mb-3">Tambah Catatan</a>

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
            <th>Judul</th>
            <th>Kategori</th>
            <th>Isi</th>
            <th>Tanggal</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach($catatans as $m)
        <tr>
            {{-- <td>{{ $m->id }}</td> --}}
            <td>{{ $m->kode }}</td>
            <td>{{ $m->judul }}</td>
            <td>{{ $m->kategori }}</td>
            <td>{{ $m->isi }}</td>
            <td>{{ $m->tanggal }}</td>
            <td>
                <a href="{{ route('catatan.show', $m->id) }}" class="btn btn-info btn-sm">Lihat</a>
                <a href="{{ route('catatan.edit', $m->id) }}" class="btn btn-warning btn-sm">Edit</a>
                <form action="{{ route('catatan.destroy', $m->id) }}" method="POST" style="display:inline;">
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
