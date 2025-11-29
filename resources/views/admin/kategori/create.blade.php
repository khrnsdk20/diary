{{-- Menggunakan layout utama AdminLTE --}}
@extends('adminlte::page')

{{-- Judul halaman pada tab browser --}}
@section('title', 'Tambah kategori')

{{-- Header halaman --}}
@section('content_header')
    <h1>Tambah kategori</h1>
@stop

{{-- Menampilkan pesan error validasi jika ada --}}
@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Terjadi kesalahan!</strong>
        <ul>
            {{-- Menampilkan seluruh pesan error --}}
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

{{-- Konten utama halaman --}}
@section('content')

{{-- Form untuk menyimpan data kategori --}}
<form action="{{ route('kategori.store') }}" method="POST">

    {{-- Token keamanan Laravel --}}
    @csrf

    {{-- Input Kode Kategori --}}
    <div class="mb-3">
        <label>Kode</label>
        <input type="text"
               name="kode"
               class="form-control"
               required
               maxlength="10">
    </div>

    {{-- Input Nama Kategori --}}
    <div class="mb-3">
        <label>Nama</label>
        <input type="text"
               name="nama"
               class="form-control"
               required>
    </div>

    {{-- Tombol Simpan --}}
    <button type="submit" class="btn btn-success">
        Simpan
    </button>

    {{-- Tombol Kembali --}}
    <a href="{{ route('kategori.index') }}" class="btn btn-secondary">
        Kembali
    </a>
</form>
@stop
