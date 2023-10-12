<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Popup Konfirmasi Hapus Data</title>
    <!-- Tautan ke Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <button class="btn btn-danger" data-toggle="modal" data-target="#hapusModal">Hapus Data</button>

    <div class="modal fade" id="popupInput" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Popup Input</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-group">
          <label for="input1">Input 1:</label>
          <input type="text" class="form-control" id="input1">
        </div>
        <div class="form-group">
          <label for="input2">Input 2:</label>
          <input type="text" class="form-control" id="input2">
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
        <button type="button" class="btn btn-primary" id="saveInput">Simpan</button>
      </div>
    </div>
  </div>
</div>

<script>
  $(document).ready(function () {
    $("#saveInput").click(function () {
      var value1 = $("#input1").val();
      var value2 = $("#input2").val();
      // Lakukan sesuatu dengan nilai input1 dan input2
      console.log("Input 1: " + value1);
      console.log("Input 2: " + value2);
      // Tutup popup pertama
      $("#popupInput").modal('hide');
    });
  });
</script>

<div class="modal fade" id="popupDelete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Konfirmasi Penghapusan</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Apakah Anda yakin ingin menghapus data ini?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tidak</button>
        <button type="button" class="btn btn-danger" id="confirmDelete">Ya, Hapus</button>
      </div>
    </div>
  </div>
</div>

<script>
  $(document).ready(function () {
    $("#confirmDelete").click(function () {
      // Lakukan aksi penghapusan data di sini
      console.log("Data dihapus.");
      // Tutup popup konfirmasi penghapusan
      $("#popupDelete").modal('hide');
    });
  });
</script>


    <!-- Tautan ke Bootstrap JS dan jQuery (Diperlukan untuk modul modal) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
