<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar Laravel</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container">
            <a class="navbar-brand" href="/">Aplikasi Pegawai</a>
        </div>
    </nav>

    <div class="container mt-4">
        <h3>Edit Data Pegawai</h3>
        <a href="/pegawai" class="btn btn-secondary">Kembali</a>
        <br/>
        <br/>
        
        @foreach($pegawai as $p)
        <form action="/pegawai/update" method="post" class="mt-4">
            @csrf
            <input type ="hidden" name="id" value="{{ $p->pegawai_id }}"> <br/>
            <div class="mb-3">
                <label for="nama" class="form-label">Nama :</label>
                <input type="text" name="nama" id="nama" class="form-control" value="{{ $p->pegawai_nama }}" required>
            </div>
            <div class="mb-3">
                <label for="jabatan" class="form-label">Jabatan :</label>
                <input type="text" name="jabatan" id="jabatan" class="form-control" value="{{ $p->pegawai_jabatan }}" required>
            </div>
            <div class="mb-3">
                <label for="umur" class="form-label">Umur :</label>
                <input type="number" name="umur" id="umur" class="form-control" value="{{ $p->pegawai_umur }}" required>
            </div>
            <div class="mb-3">
                <label for="alamat" class="form-label">Alamat :</label>
                <textarea name="alamat" id="alamat" class="form-control" required>{{ $p->pegawai_alamat }}</textarea>
            </div>
            <button type="submit" class="btn btn-primary">Update Data</button>
        </form>
        @endforeach
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.min.js"></script>
</body>
</html>
