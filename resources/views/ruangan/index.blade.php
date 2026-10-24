@extends('layouts.app')

@section('title', 'Daftar Ruangan')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h3 class="mb-0">Daftar Ruangan</h3>
        <a href="{{ route('ruangan.create') }}" class="btn btn-primary">
            <i class="bi bi-plus-lg"></i> Tambah Ruangan
        </a>
    </div>

    <div class="card shadow-sm">
        <div class="card-body">
            <table class="table table-striped align-middle mb-0">
                <thead class="table-dark">
                    <tr>
                        <th>No</th>
                        <th>Nama Ruangan</th>
                        <th class="text-center">Kapasitas</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($semuaRuangan as $ruangan)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $ruangan->nama_ruangan }}</td>
                            <td class="text-center">{{ $ruangan->kapasitas }}</td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="3" class="text-center text-muted">
                                Belum ada ruangan.
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection