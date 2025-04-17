<?php
include (".includes/header.php");
$title = "Dashboard";
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
                          <td><a class="btn rounded-pill btn-outline-success">tampilkan status pembayaran midtrans</td>

                          <td>
                            <a class="btn rounded-pill btn-outline-success"> detail</a>
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