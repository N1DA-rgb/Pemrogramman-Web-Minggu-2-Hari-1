@extends('layouts.app')

@section('title', 'Daftar Kategori')

@section('content')
<h3 class="mb-4">Daftar Kategori</h3>

<div class="table-responsive">
    <table class="table table-striped table-hover align-middle">
        <thead class="table-dark">
            <tr>
                <th>No</th>
                <th>Nama Kategori</th>
                <th>Deskripsi</th>
                <th class="text-center">Jumlah Alat</th>
            </tr>
        </thead>
        <tbody>
            @forelse($categories as $index => $kategori)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td class="fw-bold">{{ $kategori->name }}</td>
                    <td>{{ $kategori->description }}</td>
                    <td class="text-center">
                        <span class="badge bg-primary fs-6">{{ $kategori->items_count }}</span>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="4" class="text-center">Belum ada kategori.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection