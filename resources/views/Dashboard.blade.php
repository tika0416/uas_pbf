<!DOCTYPE html>
<html>
<head>
    <title>Dashboard Magang</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            display: flex;
            height: 100vh;
            margin: 0;
        }
        .sidebar {
            width: 220px;
            background-color: #343a40;
            padding: 20px;
        }
        .sidebar a {
            color: white;
            display: block;
            margin-bottom: 10px;
            text-decoration: none;
        }
        .sidebar a:hover {
            background-color: #495057;
            padding-left: 10px;
        }
        .content {
            flex: 1;
            padding: 30px;
            background: #f8f9fa;
        }
    </style>
</head>
<body>

    <!-- Sidebar -->
    <div class="sidebar">
        <h4 class="text-white">Dashboard</h4>
        <a href="/dashboard">🏠 Home</a>
        <a href="{{ route('Mahasiswa.index') }}">🎓 Mahasiswa</a>
        <a href="/dosen">👨‍🏫 Pembimbing</a>
    </div>

    <!-- Content -->
    <div class="content">
        <h2 class="mb-4">Selamat Datang di Dashboard Magang</h2>

        <div class="row">
            <div class="col-md-6 mb-3">
                <a href="{{ route('Mahasiswa.index') }}" class="btn btn-primary w-100 p-4 fs-4">
                    🎓 Kelola Mahasiswa
                </a>
            </div>
            <div class="col-md-6 mb-3">
                <a href="/dosen" class="btn btn-success w-100 p-4 fs-4">
                    👨‍🏫 Kelola Pembimbing
                </a>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
