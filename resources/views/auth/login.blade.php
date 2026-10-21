<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Masuk - SiPinjam</title>
    <!-- Bootstrap 5 CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0;
        }
        .card-login {
            width: 100%;
            max-width: 400px;
            padding: 2rem;
            border-radius: 12px;
            border: none;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
            background-color: #ffffff;
        }
    </style>
</head>
<body>

    <div class="card-login">
        <div class="text-center mb-4">
            <h3 class="fw-bold">Masuk</h3>
            <p class="text-muted small">Silakan masuk ke akun Anda</p>
        </div>

        <form action="{{ url('/dashboard') }}" method="GET">
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
            <div class="mb-3">
                <label for="password" class="form-label text-muted small fw-semibold">Password</label>
                <div class="input-group">
                    <span class="input-group-text bg-light border-end-0 text-muted">
                        <i class="bi bi-lock"></i>
                    </span>
                    <input type="password" class="form-control bg-light border-start-0" id="password" placeholder="Masukkan password" required>
                </div>
            </div>

            <!-- Checkbox Ingat Saya -->
            <div class="mb-4 form-check">
                <input type="checkbox" class="form-check-input" id="remember">
                <label class="form-check-label text-muted small" for="remember">Ingat saya</label>
            </div>

            <!-- Tombol Masuk -->
            <button type="submit" class="btn btn-primary w-100 py-2 fw-semibold">Masuk</button>
        </form>

        <!-- Tautan Ke Halaman Daftar (Hanya satu di sini) -->
        <div class="text-center mt-4">
            <span class="text-muted small">Belum punya akun? <a href="{{ url('/daftar') }}" class="text-decoration-none fw-semibold">Daftar di sini</a></span>
        </div>
    </div>

    <!-- Bootstrap 5 JS Bundle CDN -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>