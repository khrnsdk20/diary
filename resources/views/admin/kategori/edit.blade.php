@extends('adminlte::page')

@section('title', 'Edit kategori')

@section('content_header')
    <h1>Edit kategori</h1>
@stop

@if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
@endif

@section('content')
<form action="{{ route('kategori.update', $kategori->id) }}" method="POST">
    @csrf
    @method('PUT')

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

    <div class="mb-3">
        <label>Kode</label>
        <input type="text" name="kode" value="{{ $kategori->kode }}" class="form-control" required maxlength="10">
    </div>

    <div class="mb-3">
        <label>Nama</label>
        <input type="text" name="nama" value="{{ $kategori->nama }}" class="form-control" required>
    </div>

    <button type="submit" class="btn btn-primary">Update</button>
    <a href="{{ route('kategori.index') }}" class="btn btn-secondary">Kembali</a>
</form>
@stop
