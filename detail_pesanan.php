<?php
include (".includes/header.php");
$title = "Detail pesanan";
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
                    <table id="penerbangan" class="table table-hover">
                      <thead>
                        <tr>
                          <th>No</th>
                          <th>Nama Lengkap</th>
                          <th>Email</th>
                          <th>Umur</th>
                          <th>Nomor Kursi</th>
                          <th>Class</th>
                        </tr>
                      </thead>
                      <tbody class="table-border-bottom-0">
                      <?php 
                        $index = 1;
                        // untuk menampilkan nomor urut otomatis di kolom pertama tabel

                        $query = $conn->query("SELECT * FROM penumpang");
                        // Mengambil semua data dari tabel 'penumpang'
                        while ($penumpang = $query->fetch_assoc()) {
                        // Looping melalui setiap record menggunakan fetch_assoc()
                        ?>
                        <!-- Menyimpan setiap baris data dalam variabel $penumpang -->
                        <tr>
                          <td><?= $index++; ?></td>
                          <td><?= $penumpang['cabin_class']; ?></td>
                          <td><?= $penumpang['nama_penumpang']; ?></td>
                          <td><?= $penumpang['umur_penumpang']; ?></td>
                          <td><?= $penumpang['email_penumpang']; ?></td>
                          <td><?= $penumpang['nomor_kursi']; ?></td>
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