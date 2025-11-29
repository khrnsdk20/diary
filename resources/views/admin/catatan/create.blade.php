@extends('adminlte::page')

@section('title', 'Tambah Catatan')

@section('content_header')
<h1>Tambah Catatan</h1>
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
<form action="{{ route('catatan.store') }}" method="POST">
    @csrf
    <div class="mb-3">
        <label>Kode</label>
        <input type="text" name="kode" class="form-control" required maxlength="10">
    </div>

    <div class="mb-3">
        <label>Judul</label>
        <input type="text" name="judul" class="form-control" required>
    </div>

    <div class="form-group">
        <label>Kategori</label>
        <select name="kategori" class="form-control" required>
            <option value="">-- Pilih Kategori --</option>
            @foreach ($kategori as $item)
                <option value="{{ $item->id }}">
                    {{ $item->nama }}
                </option>
            @endforeach
        </select>
    </div>

    <div class="mb-3">
        <label>Isi</label>
        <textarea name="isi" class="form-control" rows="4" required></textarea>
    </div>

    <div class="mb-3">
        <label>Tanggal</label>
        <input type="date" name="tanggal" class="form-control" required>
    </div>

    <button type="submit" class="btn btn-success">Simpan</button>
    <a href="{{ route('catatan.index') }}" class="btn btn-secondary">Kembali</a>
</form>
@stop
