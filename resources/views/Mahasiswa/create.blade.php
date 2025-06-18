<!DOCTYPE html>
<html>
<head>
    <title>Tambah Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="p-4">
    <h2>Tambah Mahasiswa</h2>
    <form action="{{ route('Mahasiswa.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="npm_mhs" class="form-label">NPM</label>
            <input type="text" class="form-control" name="npm_mhs" required>
        </div>
        <div class="mb-3">
            <label for="nama_mhs" class="form-label">Nama</label>
            <input type="text" class="form-control" name="nama_mhs" required>
        </div>
        <div class="mb-3">
            <label for="prodi" class="form-label">Prodi</label>
            <input type="text" class="form-control" name="prodi" required>
        </div>
        <div class="mb-3">
            <label for="alamat" class="form-label">Alamat</label>
            <input type="text" class="form-control" name="alamat">
        </div>
        <div class="mb-3">
            <label for="no_telp" class="form-label">No Telp</label>
            <input type="text" class="form-control" name="no_telp">
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" name="email">
        </div>
        <button type="submit" class="btn btn-success">Simpan</button>
        <a href="{{ route('Mahasiswa.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</body>
</html>
