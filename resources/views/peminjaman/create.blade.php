@extends('layouts.app') 
 
@section('title', 'Pinjam Alat') 
 
@section('content') 
    <h3 class="mb-3">Pinjam Alat</h3> 
 
    <div class="card shadow-sm"> 
        <div class="card-body"> 
            <form action="{{ route('peminjaman.store') }}" method="POST"> 
                @csrf 
 
                <div class="mb-3"> 
                    <label class="form-label fw-bold">Daftar Alat Tersedia</label> 
                    <p class="text-muted small">Masukkan jumlah alat yang ingin dipinjam (isi 0 jika tidak dipinjam).</p>

                    {{-- Pesan error jika tidak ada alat yang dipilih --}}
                    @error('items') 
                        <div class="text-danger small mb-2">{{ $message }}</div> 
                    @enderror 

                    @foreach ($alatTersedia as $alat) 
                        <div class="row align-items-center mb-2"> 
                            <div class="col-md-8"> 
                                <span class="form-text text-dark">
                                    <strong>{{ $alat->code }}</strong> - {{ $alat->name }} (Stok: {{ $alat->stock }})
                                </span> 
                            </div> 
                            <div class="col-md-4"> 
                                <input type="number" 
                                       name="items[{{ $alat->id }}]" 
                                       min="0" 
                                       max="{{ $alat->stock }}" 
                                       value="{{ old('items.' . $alat->id, 0) }}" 
                                       class="form-control" 
                                       placeholder="Jumlah"> 
                            </div> 
                        </div> 
                    @endforeach 
                </div> 
 
                <div class="row"> 
                    <div class="col-md-12 mb-3"> 
                        <label for="due_date" class="form-label">Tanggal Kembali</label> 
                        <input type="date" id="due_date" name="due_date"
                               value="{{ old('due_date', now()->addDays(3)->toDateString()) }}"
                               class="form-control @error('due_date') is-invalid @enderror"> 
                        @error('due_date') 
                            <div class="invalid-feedback">{{ $message }}</div> 
                        @enderror 
                    </div> 
                </div> 
 
                <div class="mb-3"> 
                    <label for="notes" class="form-label">Keperluan</label> 
                    <input type="text" id="notes" name="notes" value="{{ old('notes') }}" class="form-control" 
                           placeholder="Contoh: Praktikum Elektronika Dasar"> 
                </div> 
 
                <button type="submit" class="btn btn-primary">Ajukan Peminjaman</button> 
                <a href="{{ route('peminjaman.index') }}" class="btn btn-secondary">Batal</a> 
            </form> 
        </div> 
    </div> 
@endsection