<?php
require_once "database.php";
require_once "sql.php";

$obj = new crud;

if($_SERVER['REQUEST_METHOD']=='POST'){
    $nama = $_POST['nama'];
    $jumlah = $_POST['jumlah'];
    if($obj->insertData($nama,$jumlah)){
        echo '<div class="alert alert-success">Daftar Berhasil DI Simpan</div>';
    }else{
        echo '<div class="alert alert-danger">Daftar Gagal DI Simpan</div>';
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
    <h2><strong>Daftar Barang Di Gudang</strong></h2>
<form action="<?= $_SERVER['PHP_SELF']; ?>" method="post">
<div class="mb-3">
    <label for="nama" class="form-label">Masukan Nama Barang</label>
    <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Barang" required>
</div>

<div class="mb-3">
    <label for="jumlah" class="form-label">Masukan Jumlah Barang</label>
    <input type="number" class="form-control" id="jumlah" name="jumlah" placeholder="Jumlah Barang" required>
</div>
<button class="btn btn-outline-primary" type="submit" name="submit">Add!</button>
</form>

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
    <?php
    $no = 1;
    $data = $obj->TampilData();
    if($data->rowCount()>0){
        while($row=$data->fetch(PDO::FETCH_ASSOC)){
    ?>
    <tr>
        <th><?= $no; ?></th>
        <td><?= $row['nama']; ?></td>
        <td><?= $row['jumlah']; ?></td>
        <td>
        <a href="ubah.php?id=<?= $row['id'] ?>" class="btn btn-outline-info">Ubah!</a>
        <a href="delete.php?id=<?= $row['id'] ?>" class="btn btn-outline-danger">Hapus</a>
        </td>
        </tr>
    <tr>
        <?php $no++;
        }
    }else {
        echo '<tr><td colspan="4"> Daftar Belum Ada</td></tr>';
    }
        ?>
</tbody>
</table>
</div>

<script src="bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>