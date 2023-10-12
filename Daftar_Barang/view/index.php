<?php
include_once "../controller/conn.php";
use Data\{Database, Barang};



$barang = new Barang();
if($_SERVER['REQUEST_METHOD']=='POST'){
    $nama = $_POST['nama'];
    $jumlah = $_POST['jumlah'];
}



$index = $barang->index();
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
<h2 class="container ">Daftar Barang Di Gudang</h2>
<div class="container my-5 alert alert-dark">
<a href="tambah.php" class="btn btn-dark btn-sm"><strong>Tambah Daftar Barang</strong></a>
<table class="table table-striped mt-2 text-center">
<thead>
    <tr class="table-dark">
        <th scope="col">NO</th>
        <th scope="col">Nama Barang</th>
        <th scope="col">Jumlah Barang</th>
        <th scope="col">Aksi</th>
    </tr>
</thead>
<tbody>
    <?php $no=1; ?>
    <?php foreach($index as $value) : ?>
    <tr>
        <th scope="row"><?= $no; ?></th>
        <td><?= $value->nama ?></td>
        <td><?= $value->jumlah ?></td>
        <td>
        <a class="btn btn-danger" role="button" href="hapus.php?id=<?= $value->id ?>" onclick="return confirm ('yakin ingin mengahapus data ini ? ')">Hapus</a>
        <a class="btn btn-info" role="button" href="ubah.php?id=<?= $value->id ?>" onclick="return confirm ('yakin ingin mengubah data ini ? ')">Ubah</a>
        </td>
        </tr>
    <tr>
        <?php $no++ ?>
    <?php endforeach; ?>
</tbody>
</table>
</div>
<script src="bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>