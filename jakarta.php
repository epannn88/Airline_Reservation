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
                  <select id="filterAsal" class="form-select me-2" style="width: 150px;">
                    <option value="">Filter Berdasarkan Asal</option>
                    <option value="">jakarta</option>
                    <option value="">batam</option>
                    <option value="">dan lain</option>
                    <!-- option ini digunakan untuk memfilter penerbangan -->
                </select>
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
                          <!-- tabel header -->
                        </tr>
                      </thead>
                      <tbody class="table-border-bottom-0">
                        <?php 
                        $index = 1;
                        // data yang akan ditampilkan akan selalu dimulai dari angka 1
                        $query = $conn->query("SELECT * FROM penerbangan");
                        // mengambil semua dari tabel penerbangan
                        while ($penerbangan = $query->fetch_assoc()) {
                          // fetch_assoc() Mengambil data penerbangan per baris
                          // data yang di ambil akan di ubah menjadi array 
                          // while memastikan Selalu ulangi proses selama masih ada data penerbangan.
                        ?>
                        <tr>
                          <td><?= $index++; ?></td>
                          <!-- data pertama = 1 data kedua = 2 -->
                          <td><?= $penerbangan['kota_asal']; ?></td>
                          <td><?= $penerbangan['kota_tujuan']; ?></td>
                          <td><?= $penerbangan['maskapai']; ?></td>
                          <td><?= $penerbangan['jam_penerbangan']; ?></td>
                          <td><?= $penerbangan['harga']; ?></td>
                          <!--menampilkan kota_asal, kota_tujuan, maskapai, jam_penerbangan, harga -->
                          <td><a href="add_penumpang.php" class="btn rounded-pill btn-outline-success">lanjutkan</td>

                          <td>
                            <a href="jakarta_edit.php?penerbangan_id=<?php echo $penerbangan['penerbangan_id'] ?>" class="btn rounded-pill btn-outline-success">edit </a>
                            <a onclick="return confirm('Anda yakin ingin menghapus data?')" 
                            href="jakarta_process.php?penerbangan_id=<?php echo $penerbangan['penerbangan_id'] ?>" class="btn rounded-pill btn-outline-success">hapus</a>
                            <!-- Ketika tombol hapus di tekan maka akan muncul pesan 'Anda yakin ingin menghapus data?'
                             setelah itu data akan di hapus di jakarta_proses -->
                          </td>
                        <?php
                        }
                        ?>
                    </tbody>
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
 