<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Data Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            display: flex;
        }
        .sidebar {
            width: 220px;
            background-color: #343a40;
            min-height: 100vh;
            color: white;
        }
        .sidebar h2 {
            padding: 20px;
        }
        .sidebar a {
            color: white;
            display: block;
            padding: 10px 20px;
            text-decoration: none;
        }
        .sidebar a:hover {
            background-color: #495057;
        }
        .content {
            flex-grow: 1;
            padding: 20px;
        }
    </style>
</head>
<body>

    <!-- Sidebar -->
    <div class="sidebar">
        <h4 class="mt-3">📊 Dashboard</h4>
        <a href="/">🏠 Home</a>
        <a href="/mahasiswa">🎓 Mahasiswa</a>
        <a href="/pembimbing">🧑‍🏫 Pembimbing</a>
    </div>

    <!-- Content -->
    <div class="content">
        <h3>Daftar Mahasiswa</h3>

        <a href="{{ route('mahasiswa.create') }}" class="btn btn-success mb-3">+ Tambah Mahasiswa</a>

        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>NPM</th>
                    <th>Nama</th>
                    <th>Prodi</th>
                    <th>Alamat</th>
                    <th>No Telp</th>
                    <th>Email</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($mahasiswa as $m)
                    <tr>
                        <td>{{ $m->npm_mhs }}</td>
                        <td>{{ $m->nama_mhs }}</td>
                        <td>{{ $m->prodi }}</td>
                        <td>{{ $m->alamat }}</td>
                        <td>{{ $m->no_telp }}</td>
                        <td>{{ $m->email }}</td>
                        <td>
                            <a href="{{ route('mahasiswa.edit', $m->npm_mhs) }}" class="btn btn-warning btn-sm">Edit</a>
                            <form action="{{ route('mahasiswa.destroy', $m->npm_mhs) }}" method="POST" style="display:inline;">
                                @csrf @method('DELETE')
                                <button class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus?')">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                @if ($mahasiswa->isEmpty())
                    <tr>
                        <td colspan="7" class="text-center">Belum ada data.</td>
                    </tr>
                @endif
            </tbody>
        </table>
    </div>

</body>
</html>
