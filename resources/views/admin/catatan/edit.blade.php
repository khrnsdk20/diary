{{-- Menggunakan template utama AdminLTE --}}
@extends('adminlte::page')

{{-- Judul halaman di tab browser --}}
@section('title', 'Edit Catatan')

{{-- Header halaman --}}
@section('content_header')
    <h1>Edit Catatan</h1>
@stop

{{-- Menampilkan notifikasi sukses setelah update --}}
@if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
@endif

{{-- Konten utama halaman --}}
@section('content')

{{-- Form update data catatan --}}
<form action="{{ route('catatan.update', $catatan->id) }}" method="POST">

    {{-- Token keamanan --}}
    @csrf

    {{-- Method spoofing untuk update (PUT) --}}
    @method('PUT')

    {{-- Menampilkan error validasi --}}
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

    {{-- Input Kode Catatan --}}
    <div class="mb-3">
        <label>Kode</label>
        <input type="text"
               name="kode"
               value="{{ $catatan->kode }}"
               class="form-control"
               required
               maxlength="10">
    </div>

    {{-- Input Judul Catatan --}}
    <div class="mb-3">
        <label>Judul</label>
        <input type="text"
               name="judul"
               value="{{ $catatan->judul }}"
               class="form-control"
               required>
    </div>

    {{-- Dropdown Kategori --}}
    <div class="mb-3">
        <label>Kategori</label>
        <select name="kategori" class="form-control" required>
            <option value="">-- Pilih Kategori --</option>

            {{-- Loop kategori dari database --}}
            @foreach ($kategori as $item)
                <option value="{{ $item->id }}"
                    {{ $catatan->kategori == $item->id ? 'selected' : '' }}>
                    {{ $item->nama }}
                </option>
            @endforeach
        </select>
    </div>

    {{-- Input Isi Catatan --}}
    <div class="mb-3">
        <label>Isi</label>
        <textarea name="isi"
                  class="form-control"
                  rows="4"
                  required>{{ $catatan->isi }}</textarea>
    </div>

    {{-- Input Tanggal --}}
    <div class="mb-3">
        <label>Tanggal</label>
        <input type="date"
               name="tanggal"
               value="{{ $catatan->tanggal }}"
               class="form-control"
               required>
    </div>

    {{-- Tombol Update --}}
    <button type="submit" class="btn btn-primary">Update</button>

    {{-- Tombol Kembali --}}
    <a href="{{ route('catatan.index') }}" class="btn btn-secondary">Kembali</a>
</form>
@stop
