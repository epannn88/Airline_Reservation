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
    <form action="pembayaran_process.php" method="POST">
    
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
                     name="nama" 
                     required
                     placeholder="Contoh: John Doe">
                     
            </div>

            <!-- Email -->
            <div class="col-md-6">
              <label class="form-label">Email</label>
              <input type="email" 
                     class="form-control" 
                     name="email" 
                     required
                     placeholder="Contoh: johndoe@example.com">
            </div>

            <div class="mt-2 mb-3 ml-2">
          <label for="biaya" class="form-label">Biaya</label>
            <select id="biaya" class="form-select form-select-lg" name="biaya">
              <option>Large select</option>
              <option value="900000">Citilink</option>
              <option value="1200000">Air Asia</option>
              <option value="1350000">Batik Air</option>
              <option value="1150000">Garuda Indonesia</option>
              <option value="1250000">Lion Air</option>
              <option value="950000">Nam Air</option>
              <option value="1300000">Super Air Jet</option>
              <option value="1299000">Transnusa</option>
              <option value="999000">Pelita Air</option>
              <option value="1000000">Sriwijaya Air</option>
              <option value="1100000">Wings Air</option>
            </select>
          </div>

          </div>
        </div>
      </div>

      <!-- Navigation Buttons -->
      <div class="row justify-content-center my-4 g-3">
        <div class="col-md-3 col-sm-6">
          <button type="button" onclick="history.back()" class="btn btn-outline-secondary btn-lg w-100">Back</button>
        </div>
        <div class="col-md-3 col-sm-6" type="submit">
        <button class="btn btn-outline-primary btn-lg w-100">Bayar</button>
        </div>
      </div>
    </form>
  </div>
</div>
</body>

<?php 
include (".includes/footer.php");

?>