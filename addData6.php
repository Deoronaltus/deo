<?php
session_start();
// Jika tidak bisa login maka balik ke login.php
// jika masuk ke halaman ini melalui url, maka langsung menuju halaman login


// Memanggil atau membutuhkan file function.php
require 'functio6.php';

// Jika fungsi tambah lebih dari 0/data tersimpan, maka munculkan alert dibawah
if (isset($_POST['simpan'])) {
    if (tambah($_POST) > 0) {
        echo "<script>
                alert('Data Barang berhasil ditambahkan!');
                document.location.href = 'tabel6.php';
            </script>";
    } else {
        // Jika fungsi tambah dari 0/data tidak tersimpan, maka munculkan alert dibawah
        echo "<script>
                alert('Data Barang gagal ditambahkan!');
            </script>";
    }
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css">
    <!-- Font Google -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Righteous&display=swap" rel="stylesheet">
    <!-- Own CSS -->
    <link rel="stylesheet" href="css/style.css">

    <title>Tambah Data | PHP Native | CRUD</title>
</head>

<body>
    

    <!-- Container -->
    <div class="container">
        <div class="row my-2">
            <div class="col-md">
                <h3 class="fw-bold text-uppercase"><i class="bi bi-person-plus-fill"></i>&nbsp;Tambah Data barang</h3>
            </div>
            <hr>
        </div>
        <div class="row my-2">
            <div class="col-md">
                <form action="" method="post" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for="nis" class="form-label">No_aktiva</label>
                        <input type="number" class="form-control w-50" id="nis" placeholder="Masukkan No_aktiva" min="1" name="nis" autocomplete="off" required>
                    </div>
                    <div class="mb-3">
                        <label for="id_barang" class="form-label">id_barang</label>
                        <input type="text" class="form-control form-control-md w-50" id="id_barang" placeholder="Masukkan id_barang" name="id_barang" autocomplete="off" required>
                    </div>
                    <div class="mb-3">
                        <label for="nama_barang" class="form-label">nama_barang</label>
                        <input type="text" class="form-control w-50" id="nama_barang" placeholder="Masukkan nama_barang" name="nama_barang" autocomplete="off" required>
                    </div>
                    <div class="mb-3">
                        <label for="jumlah_barang" class="form-label">jumlah_barang</label>
                        <input type="text" class="form-control w-50" id="jumlah_barang" placeholder="Masukkan jumlah_barang" name="jumlah_barang" autocomplete="off" required>
                    </div>
                    <div class="mb-3">
                        <label for="resi" class="form-label">resi</label>
                        <input type="text" class="form-control w-50" id="resi" placeholder="Masukkan resi" name="resi" autocomplete="off" required>
                    </div>
                    <div class="mb-3">
                        <label for="gambar" class="form-label">Gambar</label>
                        <input class="form-control form-control-sm w-50" id="gambar" name="gambar" type="file">
                    </div>
                    <div class="mb-3">
                        <label for="keterangan" class="form-label">keterangan</label>
                        <input type="text" class="form-control w-50" id="keterangan" placeholder="Masukkan keterangan" name="keterangan" autocomplete="off" required>
                    </div>
                    <hr>
                    <a href="tabel6.php" class="btn btn-secondary">Kembali</a>
                    <button type="submit" class="btn btn-primary" name="simpan">Simpan</button>
                </form>
            </div>
        </div>
    </div>
    <!-- Close Container -->



    <!-- Footer -->
    

    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</body>

</html>