<?php

namespace App\Http\Controllers;

use App\Models\rooms;
use Illuminate\Http\Request;

class RoomController extends Controller
{
    public function index()
    {
        $semuaRuangan = rooms::orderBy('nama_ruangan')->get();

        return view('ruangan.index', compact('semuaRuangan'));
    }

    public function create()
    {
        return view('ruangan.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama_ruangan' => 'required|max:50',
            'kapasitas'    => 'required|numeric',
        ], [
            'nama_ruangan.required' => 'Nama ruangan wajib diisi.',
            'nama_ruangan.max'      => 'Nama ruangan maksimal 50 karakter.',
            'kapasitas.required'    => 'Kapasitas wajib diisi.',
            'kapasitas.numeric'     => 'Kapasitas harus berupa angka.',
        ]);

        rooms::create($validated);

        return redirect()->route('ruangan.index')
            ->with('success', 'Ruangan berhasil ditambahkan.');
    }
}