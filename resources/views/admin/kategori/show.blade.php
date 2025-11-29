@extends('adminlte::page')

@section('title', 'Detail kategori')

@section('content_header')
    <h1>Detail kategori</h1>
@stop

@section('content')
<div class="card">
    <div class="card-body">
        <div class="mb-3">
            <label><strong>Kode:</strong></label>
            <p>{{ $kategori->kode }}</p>
        </div>
        <div class="mb-3">
            <label><strong>Nama:</strong></label>
            <p>{{ $kategori->nama }}</p>
        </div>
    </div>
    <div class="card-footer">
        <a href="{{ route('kategori.index') }}" class="btn btn-secondary">Kembali</a>
    </div>
</div>
@stop
