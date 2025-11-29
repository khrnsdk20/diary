{{-- Menggunakan layout AdminLTE --}}
@extends('adminlte::page')

{{-- Judul halaman --}}
@section('title', 'Detail kategori')

{{-- Header halaman --}}
@section('content_header')
    <h1>Detail kategori</h1>
@stop

@section('content')

{{-- Card untuk menampilkan detail kategori --}}
<div class="card">
    <div class="card-body">

        {{-- Menampilkan kode kategori --}}
        <div class="mb-3">
            <label><strong>Kode:</strong></label>
            <p>{{ $kategori->kode }}</p>
        </div>

        {{-- Menampilkan nama kategori --}}
        <div class="mb-3">
            <label><strong>Nama:</strong></label>
            <p>{{ $kategori->nama }}</p>
        </div>

    </div>

    {{-- Footer card --}}
    <div class="card-footer">
        {{-- Tombol kembali ke halaman data kategori --}}
        <a href="{{ route('kategori.index') }}" class="btn btn-secondary">
            Kembali
        </a>
    </div>
</div>
@stop
