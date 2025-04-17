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
                          <th>Nama Lengkap</th>
                          <th>Email</th>
                          <th>Umur</th>
                          <th>Nomor Kursi</th>
                          <th>Class</th>
                        </tr>
                      </thead>
                      <tbody class="table-border-bottom-0">
                      
                    </tbody>
                </table>
                
            </div>
        </div>
 </div>
</body>
 

<?php 
include (".includes/footer.php");
?>