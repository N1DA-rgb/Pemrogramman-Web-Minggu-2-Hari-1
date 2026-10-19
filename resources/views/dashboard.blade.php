@extends('layouts.app')

@section('title', 'Dashboard SiPinjam')

@section('content')
<h3 class="mb-4">Dashboard</h3>

<div class="row g-3">
    <!-- Kartu 1: Jenis Alat -->
    <div class="col-md-3">
        <div class="card border-primary shadow-sm">
            <div class="card-body">
                <div class="text-muted">Jenis Alat</div>
                <div class="fs-2 fw-bold text-primary">5</div>
            </div>
        </div>
    </div>

    <!-- Kartu 2: Kategori -->
    <div class="col-md-3">
        <div class="card border-success shadow-sm">
            <div class="card-body">
                <div class="text-muted">Kategori</div>
                <div class="fs-2 fw-bold text-success">4</div>
            </div>
        </div>
    </div>

    <!-- Kartu 3: Sedang Dipinjam -->
    <div class="col-md-3">
        <div class="card border-warning shadow-sm">
            <div class="card-body">
                <div class="text-muted">Sedang Dipinjam</div>
                <div class="fs-2 fw-bold text-warning">3</div>
            </div>
        </div>
    </div>

    <!-- Kartu 4: Peminjaman Terlambat (Tambahan Latihan Sesi 1.4) -->
    <div class="col-md-3">
        <div class="card border-danger shadow-sm">
            <div class="card-body">
                <div class="text-muted">Peminjaman Terlambat</div>
                <div class="fs-2 fw-bold text-danger">1</div>
            </div>
        </div>
    </div>
</div>

<div class="alert alert-info mt-4">
    Angka di atas masih contoh. Di Hari 3, angka ini diambil langsung dari database.
</div>
@endsection