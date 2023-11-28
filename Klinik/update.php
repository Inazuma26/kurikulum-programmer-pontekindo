<?php
require_once ('database.php');
require_once ('sql.php');

$obj = new crud;
if(!$obj->detailData($_GET['id'])) die ("Error: id Not Found");

if($_SERVER['REQUEST_METHOD']=='POST'){
    $pasien = $_POST['pasien'];
    $bpjs = $_POST['bpjs'];
    $poliklinik = $_POST['poliklinik'];
    $dokter = $_POST['dokter'];
    if($obj->updateData($pasien,$bpjs, $poliklinik,$dokter,$obj->id)){
        echo "
        <script>
            alert('Pasien Berhasil Di Ubah!');
            document.location.href='index.php';
        </script>";
    }else{
        echo "
        <script>
            alert('Pasien gagal Di Ubah!');
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
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Form CRUD</title>
    <style>
        .shadow-border {
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 5px;
            padding: 20px;
            margin-top: 20px;
        }
    </style>
</head>

<body>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <form class="shadow-border" action="<?= $_SERVER['REQUEST_URI']; ?>" method="post">
                    <div class="form-group">
                        <label for="select1">Ubah Poliklinik</label>
                        <select class="form-control" id="select1" name="poliklinik" value="<?= $obj->poliklinik ?>">
                            <option value="<?= $obj->poliklinik ?>"><?= $obj->poliklinik ?></option>
                            <option value="Poli Gigi">Poli Gigi</option>
                            <option value="Poli Umum">Poli Umum</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="select2">Ubah Dokter</label>
                        <select class="form-control" id="select2" name="dokter" value="<?= $obj->dokter ?>">
                            <option value="<?= $obj->dokter ?>"><?= $obj->dokter ?></option>
                            <option value="Dr.Pitoyo">Dr.Pitoyo</option>
                            <option value="Dr.Vania Utami">Dr.Vania Utami</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="input1">Ubah Nama Pasien</label>
                        <input type="text" class="form-control" id="input1" placeholder="Masukkan nilai" name="pasien" value="<?= $obj->pasien ?>">
                    </div>
                    <div class="form-group">
                        <label for="input2">Ubah No bpjs</label>
                        <input type="text" class="form-control" id="input2" placeholder="Masukkan nilai" name="bpjs" value="<?= $obj->bpjs ?>">
                    </div>
                    <button type="submit" class="btn btn btn-outline-info btn-group" name="submit">Ubah</button>
                    <a href="index.php" class="btn btn btn-outline-secondary  btn-group">Kembali</a>
                </form>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
