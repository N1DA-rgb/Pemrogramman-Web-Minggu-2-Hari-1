@extends('layouts.app')

@section('title', 'Tambah Ruangan')

@section('content')
    <h3 class="mb-3">Tambah Ruangan</h3>

    <div class="card shadow-sm">
        <div class="card-body">
            <form action="{{ route('ruangan.store') }}" method="POST">
                @csrf

                <div class="mb-3">
                    <label for="nama_ruangan" class="form-label">Nama Ruangan</label>
                    <input type="text" id="nama_ruangan" name="nama_ruangan"
                           value="{{ old('nama_ruangan') }}"
                           class="form-control @error('nama_ruangan') is-invalid @enderror">
                    @error('nama_ruangan')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="kapasitas" class="form-label">Kapasitas</label>
                    <input type="text" id="kapasitas" name="kapasitas"
                           value="{{ old('kapasitas') }}"
                           class="form-control @error('kapasitas') is-invalid @enderror">
                    @error('kapasitas')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <button type="submit" class="btn btn-primary">Simpan</button>
                <a href="{{ route('ruangan.index') }}"
                   class="btn btn-secondary">Batal</a>
            </form>
        </div>
    </div>
@endsection