<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar Laravel</title>
    <!-- Tambahkan pustaka Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h3>Data Pegawai</h3>
        <a href="/pegawai" class="btn btn-primary">Kembali</a>
        <br/>
        <br/>

        <form action="/pegawai/store" method="post">
            @csrf
            <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" class="form-control" id="nama" name="nama" required="required">
            </div>
            <div class="form-group">
                <label for="posisi">Jabatan</label>
                <input type="text" class="form-control" id="posisi" name="posisi" required="required">
            </div>
            <div class="form-group">
                <label for="umur">Umur</label>
                <input type="number" class="form-control" id="umur" name="umur" required="required">
            </div>
            <div class="form-group">
                <label for="alamat">Alamat</label>
                <textarea class="form-control" id="alamat" name="alamat" required="required"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Simpan Data</button>
        </form>
    </div>

    <!-- Tambahkan pustaka Bootstrap JavaScript dan jQuery (jika diperlukan) -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>
