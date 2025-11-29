{{-- Menggunakan template utama AdminLTE --}}
@extends('adminlte::page')

{{-- Judul halaman pada tab browser --}}
@section('title', 'Detail Catatan')

{{-- Header halaman --}}
@section('content_header')
    <h1>Detail Catatan</h1>
@stop

{{-- Konten utama halaman --}}
@section('content')

{{-- Card untuk membungkus detail catatan --}}
<div class="card">
    <div class="card-body">

        {{-- Menampilkan Kode Catatan --}}
        <div class="mb-3">
            <label><strong>Kode:</strong></label>
            <p>{{ $catatan->kode }}</p>
        </div>

        {{-- Menampilkan Judul Catatan --}}
        <div class="mb-3">
            <label><strong>Judul:</strong></label>
            <p>{{ $catatan->judul }}</p>
        </div>

        {{-- Menampilkan Kategori Catatan --}}
        <div class="mb-3">
            <label><strong>Kategori:</strong></label>
            <p>{{ $catatan->kategori }}</p>
        </div>

        {{-- Menampilkan Isi Catatan --}}
        <div class="mb-3">
            <label><strong>Isi:</strong></label>
            <p>{{ $catatan->isi }}</p>
        </div>

        {{-- Menampilkan Tanggal Catatan --}}
        <div class="mb-3">
            <label><strong>Tanggal:</strong></label>
            <p>{{ $catatan->tanggal }}</p>
        </div>

    </div>

    {{-- Footer card --}}
    <div class="card-footer">
        {{-- Tombol kembali ke halaman data catatan --}}
        <a href="{{ route('catatan.index') }}" class="btn btn-secondary">
            Kembali
        </a>
    </div>
</div>
@stop
