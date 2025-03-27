<?php 
include (".includes/header.php");
$title = "pembayaran";
// menyertakan file untuk menampilakn notifikasi (jika ada) 
include '.includes/toast_notification.php';
?>
<head>
</head>
<body>
  <!--- card -->
<div class="row justify-content-center">
  <div class="col-md-6 col-xl-3 mt-3 ">
    <div class="card bg-secondary text-white mb-3">
      <div class="card-body">
        <h5 class="card-title text-white">Penumpang & Cabin Class</h5>
        <p class="card-text">Pilih jumlah penempang dan cabin class.</p>
      </div>
    </div>
    </div>
      <div class="col-md-6 col-xl-3 mt-3">
        <div class="card bg-success text-white mb-3">
          <div class="card-body">
            <h5 class="card-title text-white">Secondary card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up.</p>
          </div>
        </div>
        </div>
          <div class="col-md-6 col-xl-3 mt-3 ">
            <div class="card bg-secondary text-white mb-3">
              <div class="card-body">
                <h5 class="card-title text-white">Success card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up.</p>
              </div>
            </div>
          </div>
        </div>
<!-- form pengisian -->

<div class="container">
  <div class="col-md-10 mx-auto mt-3 mb-5">
    <form action="proses_penumpang.php" method="POST">
    
      <div class="card mb-4">
        <div class="card-header text-white">
          <h5 class="mb-0">Users Info</h5>
        </div>
        
        <div class="card-body">
          <div class="row g-3">
            <!-- Nama Lengkap -->
            <div class="col-md-6">
              <label class="form-label">Nama Lengkap</label>
              <input type="text" 
                     class="form-control" 
                     name="nama_penumpang[]" 
                     required
                     placeholder="Contoh: John Doe">
            </div>

            <!-- Email -->
            <div class="col-md-6">
              <label class="form-label">Email</label>
              <input type="email" 
                     class="form-control" 
                     name="email_penumpang[]" 
                     required
                     placeholder="Contoh: johndoe@example.com">
            </div>
          </div>
        </div>
      </div>

      <!-- Navigation Buttons -->
      <div class="row justify-content-center my-4 g-3">
        <div class="col-md-3 col-sm-6">
          <button type="button" onclick="history.back()" class="btn btn-outline-secondary btn-lg w-100">Back</button>
        </div>
        <div class="col-md-3 col-sm-6" id="pembayaran">
          <a href="https://app.sandbox.midtrans.com/payment-links/1743052090367" class="btn btn-outline-primary btn-lg w-100">Bayar</a>
        </div>
      </div>
    </form>
  </div>
</div>
</body>

<?php 
include (".includes/footer.php");

?>
