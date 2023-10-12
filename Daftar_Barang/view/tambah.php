<?php
include_once "../controller/conn.php";
use Data\{Database, Barang};

$barang = new Barang();
if($_SERVER['REQUEST_METHOD']=='POST'){
    $nama = $_POST['nama'];
    $jumlah = $_POST['jumlah'];
}

if($barang->TambahData($nama,$jumlah)){
    echo '<div class="alert alert-success">Data Berhasil Di Simpan</div>';
}else{
    echo '<div class="alert alert-danger">Data Gagal Di Simpan</div>';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
</head>
<body>
<form class="container my-5 alert alert-dark" method="post" action="<?= $_SERVER['PHP_SELF']; ?>">
<div class="mb-3">
    <label for="nama" class="form-label">Masukan Daftar Barang</label>
    <input type="text" name="nama" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
</div>
<form>
    <div class="mb-3">
        <label for="jumlah" class="form-label">Masukan Jumlah Barang</label>
        <input type="number" name="jumlah" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
<button type="submit" class="btn btn-warning">Tambah!</button>
</form>

<script src="bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>