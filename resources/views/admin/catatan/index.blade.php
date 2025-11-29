{{-- Menggunakan template utama AdminLTE --}}
@extends('adminlte::page')

{{-- Judul halaman pada tab browser --}}
@section('title', 'Data Catatan')

{{-- Header halaman --}}
@section('content_header')
    <h1>Data Catatan</h1>
@stop

{{-- Konten utama halaman --}}
@section('content')

{{-- Tombol untuk menuju halaman tambah catatan --}}
<a href="{{ route('catatan.create') }}" class="btn btn-primary mb-3">
    Tambah Catatan
</a>

{{-- Menampilkan pesan sukses jika ada --}}
@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

{{-- Menampilkan pesan error jika ada --}}
@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Terjadi kesalahan!</strong>
        <ul>
            {{-- Loop semua pesan error --}}
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

{{-- Tabel untuk menampilkan data catatan --}}
<table class="table table-bordered">

    {{-- Header tabel --}}
    <thead>
        <tr>
            {{-- <th>ID</th> --}} {{-- Tidak digunakan --}}
            <th>Kode</th>
            <th>Judul</th>
            <th>Kategori</th>
            <th>Isi</th>
            <th>Tanggal</th>
            <th>Aksi</th>
        </tr>
    </thead>

    {{-- Isi tabel --}}
    <tbody>

        {{-- Loop data catatan dari controller --}}
        @foreach($catatans as $m)
        <tr>
            {{-- <td>{{ $m->id }}</td> --}} {{-- Opsional ditampilkan --}}

            <td>{{ $m->kode }}</td>
            <td>{{ $m->judul }}</td>
            <td>{{ $m->kategori }}</td>
            <td>{{ $m->isi }}</td>
            <td>{{ $m->tanggal }}</td>

            {{-- Kolom aksi --}}
            <td>
                {{-- Tombol lihat detail --}}
                <a href="{{ route('catatan.show', $m->id) }}"
                   class="btn btn-info btn-sm">
                   Lihat
                </a>

                {{-- Tombol edit --}}
                <a href="{{ route('catatan.edit', $m->id) }}"
                   class="btn btn-warning btn-sm">
                   Edit
                </a>

                {{-- Form hapus data --}}
                <form action="{{ route('catatan.destroy', $m->id) }}"
                      method="POST"
                      style="display:inline;">

                    {{-- Token keamanan --}}
                    @csrf

                    {{-- Method spoofing untuk delete --}}
                    @method('DELETE')

                    {{-- Tombol hapus --}}
                    <button type="submit"
                            class="btn btn-danger btn-sm"
                            onclick="return confirm('Yakin ingin menghapus data ini?')">
                        Hapus
                    </button>
                </form>
            </td>
        </tr>
        @endforeach

    </tbody>
</table>
@stop
