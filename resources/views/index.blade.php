<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <title>Belajar Laravel</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container">
            <a class="navbar-brand" href="/">Aplikasi Pegawai</a>
        </div>
    </nav>

    <div class="container mt-4">
        <h3>Data Pegawai</h3>
        <a href="/pegawai/tambah" class="btn btn-success mb-3">+ Tambah Pegawai Baru</a>

        <table class="table table-bordered">
            <thead class="thead-dark">
                <tr>
                    <th>Nama</th>
                    <th>Jabatan</th>
                    <th>Umur</th>
                    <th>Alamat</th>
                    <th>Opsi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($pegawai as $p)
                <tr>
                    <td>{{ $p->pegawai_nama }}</td>
                    <td>{{ $p->pegawai_jabatan }}</td>
                    <td>{{ $p->pegawai_umur }}</td>
                    <td>{{ $p->pegawai_alamat }}</td>
                    <td>
                        <a href="/pegawai/edit/{{ $p->pegawai_id }}" class="btn btn-sm btn-primary">Edit</a>
                        <a href="/pegawai/hapus/{{ $p->pegawai_id }}" class="btn btn-sm btn-danger">Hapus</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
</body>
</html>
