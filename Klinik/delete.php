<?php
require_once ('database.php');
require_once ('sql.php');

$obj = new crud;
if(!$obj->detailData($_GET['id'])) die ("Error: id Not Found");

if($_SERVER['REQUEST_METHOD']=='POST'){
    // $nama = $_POST['nama'];
    // $jumlah = $_POST['jumlah'];
    if($obj->delete($obj->id)){
        echo "
        <script>
            alert('Pasien Berhasil Di Hapus!');
            document.location.href='index.php';
        </script>";
    }else{
        echo "
        <script>
            alert('Pasien Gagal Di Hapus!');
            document.location.href='index.php';
        </script>";
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
<div class="container my-5 alert alert-info">
    <h2><strong>Menghapus Data Pasien</strong></h2>
<form action="<?= $_SERVER['REQUEST_URI']; ?>" method="post">
<div class="mb-3">
    <button type="submit" class="mt-4 btn btn-md btn btn-danger">Hapus!</button>
    <a href="index.php" class="mt-4 btn btn-md btn btn-info">Kembali!</a>
</div>
</form>

<script src="bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>