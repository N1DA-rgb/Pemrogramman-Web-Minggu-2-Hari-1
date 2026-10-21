<?php

use Illuminate\Support\Facades\Route;
use App\Models\Category;
use App\Models\Item;
use App\Models\Loan;

Route::get('homepage', function () {
 return view('homepage');
})->name('home');

Route::get('/halamanbaru', function () {
 return view('halamanbaru');
 })->name('halamanbaru');

Route::get('/tentang', function () {
    return view('tentang');
})->name('tentang');

Route::get('/profil', function () {
    return view('profil', [
        'nama'   => 'Anida Putri Jaya',
        'nim'    => '225443029',
        'kelas'  => '2AEC2',
        'prodi'  => 'Teknik Rekayasa Informatika Industri',
        'kampus' => 'Politeknik Manufaktur Bandung',
        'hobi'   => 'Ngoding dan Membaca',      // Tambahan data hobi
        'alamat' => 'Bandung, Jawa Barat',     // Tambahan data alamat
    ]);
});

Route::get('/latihan-blade', function () {
    return view('latihan-blade', [
        'nilai'   => 60, // Ubah jadi 72 terlebih dahulu
        'hobi'    => ['Membaca', 'Bermain futsal', 'Ngoding'],
        'kosong'  => [],
        'catatan' => '<b>Teks ini tebal</b>',
    ]);
});

Route::get('/alat', function () {
    $alat = [
        ['kode' => 'ALT-0001', 'nama' => 'Multimeter Digital', 'kategori' => 'Alat Ukur', 'stok' => 5],
        ['kode' => 'ALT-0002', 'nama' => 'Osiloskop', 'kategori' => 'Alat Ukur', 'stok' => 0],
        ['kode' => 'ALT-0003', 'nama' => 'Solder 40 Watt', 'kategori' => 'Alat Solder', 'stok' => 8],
        ['kode' => 'ALT-0004', 'nama' => 'Arduino Uno', 'kategori' => 'Mikrokontroler', 'stok' => 12],
        ['kode' => 'ALT-0005', 'nama' => 'Tang Potong', 'kategori' => 'Perkakas', 'stok' => 3],
        // Tambahan 2 alat baru:
        ['kode' => 'ALT-0006', 'nama' => 'Power Supply DC', 'kategori' => 'Alat Ukur', 'stok' => 4],
        ['kode' => 'ALT-0007', 'nama' => 'Function Generator', 'kategori' => 'Alat Ukur', 'stok' => 0], // Stok 0 agar merah
    ];
    return view('alat', ['alat' => $alat]);
});

Route::get('/', function () {
 return view('nav');
});

Route::get('/dashboard', function () {
 return view('dashboard');
});

Route::get('/login', function () {
    return view('auth.login');
})->name('login');

Route::get('/daftar', function () {
    return view('auth.daftar');
})->name('daftar');

Route::get('/alat', function () {
 $alat = Item::with('category')->orderBy('name')->get();
 return view('alat', ['alat' => $alat]);
});
Route::get('/dashboard', function () {
 return view('dashboard', [
 'jumlahAlat' => Item::count(),
 'jumlahKategori' => Category::count(),
 'sedangDipinjam' => Loan::where('status', 'dipinjam')->count(),
 ]);
});
