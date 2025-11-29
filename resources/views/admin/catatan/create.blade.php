{{-- Menggunakan layout utama dari AdminLTE --}}
@extends('adminlte::page')

{{-- Judul halaman pada tab browser --}}
@section('title', 'Tambah Catatan')

{{-- Header halaman --}}
@section('content_header')
    <h1>Tambah Catatan</h1>
@stop

{{-- Menampilkan pesan error validasi jika ada --}}
@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Terjadi kesalahan!</strong>
        <ul>
            {{-- Menampilkan semua pesan error --}}
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

{{-- Konten utama halaman --}}
@section('content')

{{-- Form untuk menyimpan data catatan --}}
<form action="{{ route('catatan.store') }}" method="POST">
    {{-- Token keamanan Laravel --}}
    @csrf

    {{-- Input Kode Catatan --}}
    <div class="mb-3">
        <label>Kode</label>
        <input type="text" name="kode" class="form-control" required maxlength="10">
    </div>

    {{-- Input Judul Catatan --}}
    <div class="mb-3">
        <label>Judul</label>
        <input type="text" name="judul" class="form-control" required>
    </div>

    {{-- Dropdown Kategori (diambil dari database) --}}
    <div class="form-group">
        <label>Kategori</label>
        <select name="kategori" class="form-control" required>
            <option value="">-- Pilih Kategori --</option>

            {{-- Loop data kategori dari controller --}}
            @foreach ($kategori as $item)
                <option value="{{ $item->id }}">
                    {{ $item->nama }}
                </option>
            @endforeach
        </select>
    </div>

    {{-- Input Isi Catatan --}}
    <div class="mb-3">
        <label>Isi</label>
        <textarea name="isi" class="form-control" rows="4" required></textarea>
    </div>

    {{-- Input Tanggal Catatan --}}
    <div class="mb-3">
        <label>Tanggal</label>
        <input type="date" name="tanggal" class="form-control" required>
    </div>

    {{-- Tombol Simpan --}}
    <button type="submit" class="btn btn-success">Simpan</button>

    {{-- Tombol Kembali --}}
    <a href="{{ route('catatan.index') }}" class="btn btn-secondary">Kembali</a>
</form>
@stop
