@extends('layouts.app')

@section('title', 'Daftar Alat')

@section('content')
<h3 class="mb-3">Daftar Alat Laboratorium</h3>
<p class="text-muted">Jumlah jenis alat: {{ count($alat) }}</p>

<div class="card shadow-sm">
    <div class="card-body">
        <table class="table table-striped table-hover align-middle mb-0">
            <thead class="table-dark">
                <tr>
                    <th>No</th>
                    <th>Kode</th>
                    <th>Nama Alat</th>
                    <th>Kategori</th>
                    <th class="text-center">Stok</th>
                    <th class="text-center">Status</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($alat as $item)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item['kode'] }}</td>
                    <td>{{ $item['nama'] }}</td>
                    <td>{{ $item['kategori'] }}</td>
                    
                    @if ($item['stok'] > 0)
                        <td class="text-center"><span class="badge bg-success">{{ $item['stok'] }}</span></td>
                        <td class="text-center">Tersedia</td>
                    @else
                        <td class="text-center"><span class="badge bg-danger">Habis</span></td>
                        <td class="text-center"><span class="text-danger fw-bold">Habis</span></td>
                    @endif
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection