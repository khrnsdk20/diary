<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Models\Catatan;
use App\Models\Kategori;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        // return view('layouts.adminlte');
        // Total semua catatan
        $totalNotes = Catatan::count();

        // Data grafik: jumlah catatan per kategori
        $data = DB::table('catatans')
            ->join('kategoris', 'catatans.kategori', '=', 'kategoris.id')
            ->select('kategoris.nama as kategori', DB::raw('COUNT(catatans.id) as total'))
            ->groupBy('kategoris.nama')
            ->get();

        $labels = $data->pluck('kategori');
        $totals = $data->pluck('total');

        return view('layouts.adminlte', compact('totalNotes', 'labels', 'totals'));
    }
}
