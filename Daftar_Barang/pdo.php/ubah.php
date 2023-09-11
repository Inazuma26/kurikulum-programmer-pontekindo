<?php
require_once ('database.php');
require_once ('sql.php');

$obj = new crud;
if(!$obj->detailData($_GET['id'])) die ("Error: id Not Found");

if($_SERVER['REQUEST_METHOD']=='POST'){
    $nama = $_POST['nama'];
    $jumlah = $_POST['jumlah'];
    if($obj->updateData($nama,$jumlah,$obj->id)){
        echo '<div class="alert alert-success">Daftar Berhasil DI Ubah</div>';
    }else{
        echo '<div class="alert alert-success">Daftar Gagal DI Ubah</div>';
    }
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

<div class="container my-5 alert alert-dark">
<form action="<?= $_SERVER['REQUEST_URI']; ?>" method="post">
<div class="mb-3">
    <label for="nama" class="form-label" >Ubah Nama Barang </label>
    <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Barang" value="<?= $obj->nama ?>" required>
</div>

<div class="mb-3">
    <label for="jumlah" class="form-label">Ubah Jumlah Barang</label>
    <input type="number" class="form-control" id="jumlah" name="jumlah" placeholder="Jumlah Barang" value="<?= $obj->jumlah ?>" required>
</div>
<button class="btn btn-outline-dark" type="submit" name="submit">Ubah!</button>
</form>
<a href="index.php" class="mt-4 btn btn-md btn-outline-primary">Kembali!</a>
