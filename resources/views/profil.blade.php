<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Profil Mahasiswa</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <img src="{{ asset('css/images/logopolman.jpg') }}" alt="Logo Kampus" class="logo">
    <h1>Profil Mahasiswa</h1>
    <table>
    <tr>
        <th>Nama</th>
        <th>NIM</th>
        <th>Kelas</th>
        <th>Program Studi</th>
        <th>Kampus</th>
        <th>Hobi</th>       <!-- Tambahan Header -->
        <th>Alamat</th>     <!-- Tambahan Header -->
    </tr>
    <tr>
        <td>{{ $nama }}</td>
        <td>{{ $nim }}</td>
        <td>{{ $kelas }}</td>
        <td>{{ $prodi }}</td>
        <td>{{ $kampus }}</td>
        <td>{{ $hobi }}</td>    <!-- Tambahan Data -->
        <td>{{ $alamat }}</td>  <!-- Tambahan Data -->
    </tr>
</table>
</body>
</html>