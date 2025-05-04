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
                      // Ambil data dari URL
$penerbangan_id = isset($_GET['penerbangan_id']) ? $_GET['penerbangan_id'] : '';
$asal = isset($_GET['asal']) ? urldecode($_GET['asal']) : '';
$tujuan = isset($_GET['tujuan']) ? urldecode($_GET['tujuan']) : '';
$maskapai = isset($_GET['maskapai']) ? urldecode($_GET['maskapai']) : '';
$jadwal = isset($_GET['jadwal']) ? urldecode($_GET['jadwal']) : '';
$harga = isset($_GET['harga']) ? urldecode($_GET['harga']) : '';
?>
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