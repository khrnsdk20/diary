@extends('adminlte::page')

@section('title', 'Tambah kategori')

@section('content_header')
    <h1>Tambah kategori</h1>
@stop

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

@section('content')
<form action="{{ route('kategori.store') }}" method="POST">
    @csrf
    <div class="mb-3">
        <label>Kode</label>
        <input type="text" name="kode" class="form-control" required maxlength="10">
    </div>

    <div class="mb-3">
        <label>Nama</label>
        <input type="text" name="nama" class="form-control" required>
    </div>
    
    <button type="submit" class="btn btn-success">Simpan</button>
    <a href="{{ route('kategori.index') }}" class="btn btn-secondary">Kembali</a>
</form>
@stop
