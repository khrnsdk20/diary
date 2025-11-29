@extends('adminlte::page')

@section('title', 'Edit Catatan')

@section('content_header')
<h1>Edit Catatan</h1>
@stop

@if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
@endif

@section('content')
<form action="{{ route('catatan.update', $catatan->id) }}" method="POST">
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
        <input type="text" name="kode" value="{{ $catatan->kode }}" class="form-control" required maxlength="10">
    </div>

    <div class="mb-3">
        <label>Judul</label>
        <input type="text" name="judul" value="{{ $catatan->judul }}" class="form-control" required>
    </div>

    <div class="mb-3">
        <label>Kategori</label>
        <select name="kategori" class="form-control" required>
            <option value="">-- Pilih Kategori --</option>
            @foreach ($kategori as $item)
                <option value="{{ $item->id }}" {{ $catatan->kategori == $item->id ? 'selected' : '' }}>
                    {{ $item->nama }}
                </option>
            @endforeach
        </select>
    </div>

    <div class="mb-3">
        <label>Isi</label>
        <textarea name="isi" class="form-control" rows="4" required>{{ $catatan->isi }}</textarea>
    </div>

    <div class="mb-3">
        <label>Tanggal</label>
        <input type="date" name="tanggal" value="{{ $catatan->tanggal }}" class="form-control" required>
    </div>

    <button type="submit" class="btn btn-primary">Update</button>
    <a href="{{ route('catatan.index') }}" class="btn btn-secondary">Kembali</a>
</form>
@stop
