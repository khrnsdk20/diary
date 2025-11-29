@extends('adminlte::page')

@section('title', 'Detail Catatan')

@section('content_header')
    <h1>Detail Catatan</h1>
@stop

@section('content')
<div class="card">
    <div class="card-body">
        <div class="mb-3">
            <label><strong>Kode:</strong></label>
            <p>{{ $catatan->kode }}</p>
        </div>
        <div class="mb-3">
            <label><strong>Judul:</strong></label>
            <p>{{ $catatan->judul }}</p>
        </div>
        <div class="mb-3">
            <label><strong>Kategori:</strong></label>
            <p>{{ $catatan->kategori }}</p>
        </div>
        <div class="mb-3">
            <label><strong>Isi:</strong></label>
            <p>{{ $catatan->isi }}</p>
        </div>
        <div class="mb-3">
            <label><strong>Tanggal:</strong></label>
            <p>{{ $catatan->tanggal }}</p>
        </div>
    </div>
    <div class="card-footer">
        <a href="{{ route('catatan.index') }}" class="btn btn-secondary">Kembali</a>
    </div>
</div>
@stop
