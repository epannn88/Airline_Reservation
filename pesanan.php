<?php
include (".includes/header.php");
$title = "Pesanan";
// menyertakan file untuk menampilakn notifikasi (jika ada) 
include '.includes/toast_notification.php';
?>

<head>
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
                          <th>dari</th>
                          <th>Tujuan</th>
                          <th>Maskapai</th>
                          <th>Jadwal</th>
                          <th>Harga</th>
                          <th>Status</th>
                          <th>More</th>
                        </tr>
                      </thead>
                      <tbody class="table-border-bottom-0">
                      <?php 
                        $index = 1;
                        // untuk menampilkan nomor urut otomatis di kolom pertama tabel

                        $query = $conn->query("SELECT * FROM penerbangan");
                        // Mengambil semua data dari tabel 'penerbangan'
                        while ($penerbangan = $query->fetch_assoc()) {
                        // Looping melalui setiap record menggunakan fetch_assoc()
                        ?>
                        <!-- Menyimpan setiap baris data dalam variabel $penerbangan -->
                        <tr>
                          <td><?= $index++; ?></td>
                          <td><?= $penerbangan['kota_asal']; ?></td>
                          <td><?= $penerbangan['kota_tujuan']; ?></td>
                          <td><?= $penerbangan['maskapai']; ?></td>
                          <td><?= $penerbangan['jam_penerbangan']; ?></td>
                          <td><?= $penerbangan['harga']; ?></td>
                          <!-- ini untuk mengarahkan ke status_pesanan.php -->
                          <td><a href="status_pesanan.php" class="btn rounded-pill btn-outline-success">Tampilkan status pembayaran midtrans</td>

                          <td>
                            <!-- ini untuk mengarahkan ke detail_pesanan.php -->
                            <a href="detail_pesanan.php" class="btn rounded-pill btn-outline-success"> Detail</a>
                          </td>
                          <td>
                          <a onclick="return confirm('Anda yakin ingin menghapus data?')" 
                               href="pesanan_process.php?penerbangan_id=<?= $penerbangan['penerbangan_id'] ?>"
                               class="btn rounded-pill btn-outline-success">hapus</a>
                               <!-- onclick ini misal di klik akan muncul teks dengan isi('Anda yakin ingin menghapus data?') -->
                               <!-- jakarta_edit.php?penerbangan_id= ini mengarah ke file jakarta_proses.php atau prosesnya dari hapus -->
                          </td>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
                
            </div>
        </div>
 </div>
</body>
 

<?php 
include (".includes/footer.php");
?>