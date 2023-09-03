<?php
//ubah
require 'conn.php';

$id = $_GET["id"];

$ubah = query("SELECT * FROM todo WHERE id=$id")[0];


if(isset($_POST["submit"])){
  
  if(Ubah($_POST) > 0 ){
    echo "
      <script>
        alert('Data Berhasil Di Ubah!');
        document.location.href='index.php';
      </script>";
  }else{
    echo "
    <script>
        alert('Data Gagal Di Ubah!');
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
    <title>Ubah Data</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
</head>
<body>
<div class="my-5 ">
<div class="container">

<form action="" method="post">
<div class="mb-3">
    <input type="hidden" name="id" value="<?php echo $ubah["id"]; ?>">
  <label for="deskription" class="form-label">Mengubah</label>
  <input type="text" class="form-control" id="deskription" name="deskription" placeholder="Mengubah" value="<?php echo $ubah["deskription"] ?>" required>
</div>
<select class="form-select" aria-label="Default select example" name="priority" value="<?php echo $ubah["periority"] ?>" required>
  <option selected>priority</option>
  <option value="high">high</option>
  <option value="medium">medium</option>
  <option value="low">low</option>
</select>
<button class="btn btn-outline-primary my-3" type="submit" name="submit">Ubah!</button>
</form>
<script src="bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>