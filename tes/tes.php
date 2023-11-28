<!-- Tombol yang mengaktifkan popup konfirmasi -->
<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#confirmDeleteModal">
  Hapus Data
</button>

<!-- Modal Konfirmasi Penghapusan Data -->
<div class="modal fade" id="confirmDeleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
        <button type="button" class="btn btn-danger" id="confirmDeleteButton">Hapus</button>
      </div>
    </div>
  </div>
</div>

<!-- JavaScript untuk menangani aksi penghapusan -->
<script>
  $(document).ready(function () {
    $("#confirmDeleteButton").click(function () {
      // Di sini, Anda dapat menambahkan logika untuk menghapus data
      console.log("Data dihapus.");
      // Tutup modal konfirmasi penghapusan
      $("#confirmDeleteModal").modal('hide');
    });
  });
</script>
