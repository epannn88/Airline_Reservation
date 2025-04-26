<?php
include (".includes/header.php");
$title = "Pembayaran";
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
                    <table id="pembayaran" class="table table-hover">
                      <thead>
                        <tr>
                          <th>No</th>
                          <th>Nama</th>
                          <th>Email</th>
                          <th>Kode_pembayaran</th>
                          <th>Biaya dikeluarkan</th>
                          <th>Status</th>
                        </tr>
                      </thead>
                      <tbody class="table-border-bottom-0">
                      <?php 
                        $index = 1;

                        $query = $conn->query("SELECT * FROM pembayaran");
                        while ($bayar = $query->fetch_assoc()) {
                        ?>
                        <tr>
                          <td><?= $index++; ?></td>
                          <td><?= $bayar['nama']; ?></td>
                          <td><?= $bayar['email']; ?></td>
                          <td><?= $bayar['order_id']; ?></td>
                          <td><?= $bayar['biaya']; ?></td>
                          <td><?= $bayar['status_pembayaran']; ?></td>
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