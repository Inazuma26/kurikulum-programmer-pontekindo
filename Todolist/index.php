<?php
//Tambah
require 'conn.php';
$todolist = query("SELECT * FROM todo");

if(isset($_POST["submit"])){
  
  if(tambah($_POST) > 0 ){
    echo "
      <script>
        alert('Data Berhasil Di Tambahkan!');
        document.location.href='index.php';
      </script>";
  }else{
    echo "
    <script>
        alert('Data Gagal Di Tambahkan!');
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
    <title>To Do List</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container">
    <a class="navbar-brand" href="#">Todo List</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Todo</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" aria-disabled="true">Disabled</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>

<div class="my-5 ">
<div class="container">

<form action="" method="post">
<div class="mb-3">
  <label for="deskription" class="form-label">New To Do</label>
  <input type="text" class="form-control" id="deskription" name="deskription" placeholder="New To Do" required>
</div>
<select class="form-select" aria-label="Default select example" name="periority">
  <option selected>Priority</option>
  <option value="high">high</option>
  <option value="medium">medium</option>
  <option value="low">low</option>
</select>
<button class="btn btn-outline-primary my-3" type="submit" name="submit">Add!</button>
</form>

<div class="container text-center my-5" >
    <table class="table">
  <thead>
</div>
        <tr>
            <th scope="col">No</th>
            <th scope="col">Priority</th>
            <th scope="col">Tugas</th>
            <th scope="col">Aksi</th>
        </tr>
  </thead>
  <tbody>
    <?php $no=1; ?>
  <?php foreach($todolist as $todo) : ?>
        <tr>
            <th><?php echo $no; ?></th>
            <th scope="row"><?php echo $todo["priority"] ?></th>
            <td><?php echo $todo["deskription"]?></td>
            <td>
              <a class="btn btn-outline-danger" role="button" href="hapus.php?id=<?php echo $todo["id"] ?>" onclick="return confirm ('yakin ingin mengahapus data ini ? ')">Hapus</a>
              <a class="btn btn-outline-info" role="button" href="ubah.php?id=<?php echo $todo["id"] ?>">Ubah</a>
            </td>
        </tr>
        <?php $no++; ?>
  <?php endforeach; ?>
    </tbody>
</table>
</div>
</div>
</div>
<script src="bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>