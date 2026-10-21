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
                <div class="fs-2 fw-bold text-primary">{{ $jumlahAlalat ?? $jumlahAlat }}</div>
            </div>
        </div>
    </div>

    <!-- Kartu 2: Kategori -->
    <div class="col-md-3">
        <div class="card border-success shadow-sm">
            <div class="card-body">
                <div class="text-muted">Kategori</div>
                <div class="fs-2 fw-bold text-success">{{ $jumlahKategori }}</div>
            </div>
        </div>
    </div>

    <!-- Kartu 3: Sedang Dipinjam -->
    <div class="col-md-3">
        <div class="card border-warning shadow-sm">
            <div class="card-body">
                <div class="text-muted">Sedang Dipinjam</div>
                <div class="fs-2 fw-bold text-warning">{{ $sedangDipinjam }}</div>
            </div>
        </div>
    </div>

    <!-- Kartu 4: Peminjaman Terlambat (Tambahan Latihan Sesi 1.4) -->
    <div class="col-md-3">
        <div class="card border-danger shadow-sm">
            <div class="card-body">
                <div class="text-muted">Peminjaman Terlambat</div>
                <div class="fs-2 fw-bold text-danger">{{ $terlambat ?? 1 }}</div>
            </div>
        </div>
    </div>
    <!-- Kartu Tambahan: Stok Menipis -->
<div class="col-md-3">
    <div class="card border-danger shadow-sm">
        <div class="card-body">
            <div class="text-muted">Stok Menipis</div>
            <div class="fs-2 fw-bold text-danger">{{ $stokMenipis }}</div>
        </div>
    </div>
</div>
</div>
@endsection