{{-- Menggunakan layout utama AdminLTE --}}
@extends('adminlte::page')

{{-- Judul halaman pada tab browser --}}
@section('title', 'Edit kategori')

{{-- Header halaman --}}
@section('content_header')
    <h1>Edit kategori</h1>
@stop

{{-- Menampilkan notifikasi sukses setelah update --}}
@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

{{-- Konten utama halaman --}}
@section('content')

{{-- Form untuk update data kategori --}}
<form action="{{ route('kategori.update', $kategori->id) }}" method="POST">

    {{-- Token keamanan Laravel --}}
    @csrf

    {{-- Method spoofing untuk proses update --}}
    @method('PUT')

    {{-- Menampilkan pesan error validasi --}}
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Terjadi kesalahan!</strong>
            <ul>
                {{-- Menampilkan seluruh error --}}
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    {{-- Input Kode Kategori --}}
    <div class="mb-3">
        <label>Kode</label>
        <input type="text"
               name="kode"
               value="{{ $kategori->kode }}"
               class="form-control"
               required
               maxlength="10">
    </div>

    {{-- Input Nama Kategori --}}
    <div class="mb-3">
        <label>Nama</label>
        <input type="text"
               name="nama"
               value="{{ $kategori->nama }}"
               class="form-control"
               required>
    </div>

    {{-- Tombol Update --}}
    <button type="submit" class="btn btn-primary">
        Update
    </button>

    {{-- Tombol Kembali --}}
    <a href="{{ route('kategori.index') }}" class="btn btn-secondary">
        Kembali
    </a>
</form>
@stop
