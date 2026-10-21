<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Akun - SiPinjam</title>
    <!-- Bootstrap 5 CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 2rem 0;
        }
        .card-daftar {
            width: 100%;
            max-width: 420px;
            padding: 2rem;
            border-radius: 12px;
            border: none;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
        }
    </style>
</head>
<body>

    <div class="card card-daftar bg-white">
        <div class="text-center mb-4">
            <h3 class="fw-bold">Daftar Akun</h3>
            <p class="text-muted small">Buat akun baru untuk mulai menggunakan aplikasi</p>
        </div>

        <form action="{{ route('login') }}" method="GET">
            <!-- Field Nama -->
            <div class="mb-3">
                <label for="nama" class="form-label text-muted small fw-semibold">Nama</label>
                <div class="input-group">
                    <span class="input-group-text bg-light border-end-0 text-muted">
                        <i class="bi bi-person"></i>
                    </span>
                    <input type="text" class="form-control bg-light border-start-0" id="nama" placeholder="Nama lengkap" required>
                </div>
            </div>

            <!-- Field NIM -->
            <div class="mb-3">
                <label for="nim" class="form-label text-muted small fw-semibold">NIM</label>
                <div class="input-group">
                    <span class="input-group-text bg-light border-end-0 text-muted">
                        <i class="bi bi-card-text"></i>
                    </span>
                    <input type="text" class="form-control bg-light border-start-0" id="nim" placeholder="Nomor Induk Mahasiswa" required>
                </div>
            </div>

            <!-- Field Email -->
            <div class="mb-3">
                <label for="email" class="form-label text-muted small fw-semibold">Email</label>
                <div class="input-group">
                    <span class="input-group-text bg-light border-end-0 text-muted">
                        <i class="bi bi-envelope"></i>
                    </span>
                    <input type="email" class="form-control bg-light border-start-0" id="email" placeholder="nama@email.com" required>
                </div>
            </div>

            <!-- Field Password -->
            <div class="mb-4">
                <label for="password" class="form-label text-muted small fw-semibold">Password</label>
                <div class="input-group">
                    <span class="input-group-text bg-light border-end-0 text-muted">
                        <i class="bi bi-lock"></i>
                    </span>
                    <input type="password" class="form-control bg-light border-start-0" id="password" placeholder="Minimal 8 karakter" minlength="8" required>
                </div>
            </div>

            <!-- Tombol Daftar -->
            <button type="submit" class="btn btn-primary w-100 py-2 fw-semibold">Daftar</button>
        </form>

        <!-- Tautan ke Halaman Login -->
        <div class="text-center mt-4">
            <span class="text-muted small">Sudah punya akun? <a href="{{ route('login') }}" class="text-decoration-none fw-semibold">Masuk di sini</a></span>
        </div>
    </div>

    <!-- Bootstrap 5 JS Bundle CDN -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>