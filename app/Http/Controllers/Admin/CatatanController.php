<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Kategori;
use App\Models\Catatan;

class CatatanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $catatans = Catatan::all();
        return view('admin.catatan.index', compact('catatans'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $kategori = Kategori::all();
        return view('admin.catatan.create', compact('kategori'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'kode' => 'required',
            'judul' => 'required',
            'isi' => 'required',
            'kategori' => 'required',
            'tanggal' => 'required',
        ]);

        Catatan::create($validated);

        return redirect()->route('catatan.index')->with('success', 'Catatan berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $catatan = Catatan::findOrFail($id);
        return view('admin.catatan.show', compact('catatan'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $catatan  = Catatan::findOrFail($id);
        $kategori = Kategori::all();

        return view('admin.catatan.edit', compact('catatan', 'kategori'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'kode' => 'required',
            'judul' => 'required',
            'isi' => 'required',
            'kategori' => 'required',
            'tanggal' => 'required',
        ]);

        $catatan = Catatan::findOrFail($id);
        $catatan->update($request->all());

        return redirect()->route('catatan.index')->with('success', 'Catatan berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $catatan = Catatan::findOrFail($id);
        $catatan->delete();

        return redirect()->route('catatan.index')->with('success', 'Catatan berhasil dihapus.');
    }
}
