<?php
include (".includes/header.php");
$title = "Jakarta";
// menyertakan file untuk menampilakan notifikasi (jika ada) 
include '.includes/toast_notification.php';
?>
<head>
<style>
.add-button {
  position: relative;
  width: 40px;
  height: 40px;
  border: none;
  border-radius: 50%;
  background-color: #4CAF50;
  color: white;
  cursor: pointer;
  transition: all 0.3s ease;
  display: flex;
  align-items: center;
  justify-content: center;
  overflow: hidden;
  box-shadow: 0 2px 5px rgba(0,0,0,0.2);
}

.add-button:hover {
  width: 150px;
  border-radius: 25px;
  justify-content: flex-start;
  padding-left: 10px;
}

.add-button::before {
  content: '+';
  font-size: 24px;
  position: absolute;
  left: 50%;
  transform: translateX(-50%);
  transition: all 0.3s ease;
}

.add-button:hover::before {
  left: 20px;
  transform: translateX(0);
  color: white;
}

.add-button span {
  opacity: 0;
  transition: opacity 0.2s ease;
  white-space: nowrap;
  margin-left: 30px;

}

.add-button:hover span {
  opacity: 1;
  transition-delay: 0.1s;
  color: white;
}
</style>
</head>
<body>
 <!-- Hoverable Table rows -->
 <div class="card mx-4 mt-4">
                <div class="card-header">
                  <div class="table-responsive text-nowrap">
                    <table id="testdatatable" class="table table-hover">
                      <thead>
                        <tr>
                          <th>No</th>
                          <th>Dari</th>
                          <th>Tujuan</th>
                          <th>Maskapai</th>
                          <th>Jadwal</th>
                          <th>Harga</th>
                          <th>Actions</th>
                          <th>More</th>
                        </tr>
                      </thead>
                      <tbody class="table-border-bottom-0">
                        <?php 
                        $index = 1;

                        $query = $conn->query("SELECT * FROM penerbangan");
                        while ($penerbangan = $query->fetch_assoc()) {
                        ?>
                        <tr>
                          <td><?= $index++; ?></td>
                          <td><?= $penerbangan['kota_asal']; ?></td>
                          <td><?= $penerbangan['kota_tujuan']; ?></td>
                          <td><?= $penerbangan['maskapai']; ?></td>
                          <td><?= $penerbangan['jam_penerbangan']; ?></td>
                          <td><?= $penerbangan['harga']; ?></td>
                          <td><a href="pemesanan.php" class="btn rounded-pill btn-outline-success">lanjutkan</td>

                          <td>
                            <a href="jakarta_edit.php?id_penerbangan=<?php echo $penerbangan['id_penerbangan'] ?>" class="btn rounded-pill btn-outline-success">edit </a>
                            <a onclick="return confirm('Anda yakin ingin menghapus data?')"
                            href="jakarta_process.php?id_penerbangan=<?php echo $penerbangan['id_penerbangan'] ?>" class="btn rounded-pill btn-outline-success">hapus</a>

                          </td>
                        <?php
                        }
                        ?>
                    </tbody>

                    <div class="modal fade" id="deletePost_<?= $penerbang['id_penerbangan']; ?>" tabindex="-1" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title">Hapus Post?</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <form action="jakarta_edit_process.php" method="POST">
                                                        <p>Tindakan ini tidak bisa dibatalkan.</p>
                                                        <input type="hidden" name="postID" value="<?= $post['id_penerbangan']; ?>">
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Batal</button>
                                                            <button type="submit" name="delete" class="btn btn-primary">Hapus</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                </table>
                <div  class="d-flex justify-content-end mx-5">
                    <a href="tambahPenerbangan.php" class="add-button">
                        <span>Tambahkan</span>
                    </a>
                </div>
            </div>
        </div>
 </div>
</body>
 