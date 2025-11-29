@extends('adminlte::page')

@section('title', 'Dashboard Admin')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
        <!-- <p>Selamat datang di Dashboard AdminLTE</p> -->
        <div class="row">
            <div class="col-md-4">
                <div class="card card-info">
                    <div class="card-header">
                        <h3 class="card-title">Total Catatan</h3>
                    </div>
                    <div class="card-body">
                        <h2>{{ $totalNotes ?? 0 }}</h2>
                    </div>
                </div>
            </div>

            <div class="col-md-8">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Jumlah Catatan per Kategori</h3>
                    </div>
                    <div class="card-body">
                        <canvas id="categoryChart" height="100"></canvas>
                    </div>
                </div>
            </div>
        </div>
@stop

@section('css')
<!-- tambahkan css jika perlu -->
@stop

@section('js')
<!-- tambahkan js jika perlu -->
 <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

 <script>
    const ctx = document.getElementById('categoryChart').getContext('2d');

    const labels = @json($labels ?? []);
    const totals = @json($totals ?? []);

    new Chart(ctx, {
        type: 'line',
        data: {
            labels: labels,
            datasets: [{
                label: 'Catatan',
                data: totals,
                backgroundColor: 'rgba(54, 162, 235, 0.5)',
                borderColor: 'rgba(54, 162, 235, 1)',
                borderWidth: 1
            }]
        },
        options: {
            responsive: true,
            scales: {
                y: { beginAtZero: true }
            }
        }
    });
 </script>
@stop
