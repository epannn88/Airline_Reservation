<?php 
include (".includes/header.php");
$title = "add penumpang";
// menyertakan file untuk menampilakn notifikasi (jika ada) 
include '.includes/toast_notification.php';
?>
<head>
<script src="jquery.min.js"></script>
<script>
  // mengclone form indk (#form-asli) dan kirim ke dalam form yang baru #form-dinamis dengan menggunakan appendTo
  function copyForm() {
    $("#form-asli")
    .clone()
    .appendTo($("#form-dinamis"))
  }
 // Fungsi untuk menghapus form clone
 function removeForm(btn) {
    // Cari form container (misalnya, elemen dengan kelas "card")
    var formCard = $(btn).closest(".card");
    // Hanya hapus jika form berada di dalam kontainer dinamis
    if ($(btn).closest("#form-dinamis").length > 0) {
      formCard.remove();
    } else {
      alert("Form asli tidak dapat dihapus!");
    }
  }
</script>
</head>
<body>
  <!--- card -->
<div class="row justify-content-center">
  <div class="col-md-6 col-xl-3 mt-3 ">
    <div class="card bg-success text-white mb-3">
      <div class="card-body">
        <h5 class="card-title text-white">Masukkan jumlah penumpang</h5>
        <p class="card-text">Pilih jumlah penempang dan cabin class.</p>
      </div>
    </div>
    </div>
      <div class="col-md-6 col-xl-3 mt-3">
        <div class="card bg-success text-white mb-3">
          <div class="card-body">
            <h5 class="card-title text-white">setelah selesai, klik simpan</h5>
            <p class="card-text">Simpan disini digunakan untuk menyimpan data penumpang yang telah di input</p>
          </div>
        </div>
        </div>
          <div class="col-md-6 col-xl-3 mt-3 ">
            <div class="card bg-success text-white mb-3">
              <div class="card-body">
                <h5 class="card-title text-white">bayar</h5>
                <p class="card-text">Some quick example text to build on the card title and make up.</p>
              </div>
            </div>
          </div>
        </div>
<!-- form pengisian -->
<div class="container">
  <div class="col-md-8 mx-auto mt-3 mb-5">
    <div class="card mb-4">
    <div class="mt-2 mb-3 ml-2 mx-2">
          <label for="largeSelect" class="form-label fs-4 mx-2">Cabin Class</label>
            <select id="largeSelect" class="form-select form-select-lg">
              <option>Plese Select</option>
              <option>Economy</option>
              <option>Premium Economy</option>
              <option>business Class</option>
              <option>First Class</option>
            </select>
          </div>
        <!-- form pengisian -->
  <div id="form-asli">
    <form action="proses_penumpang.php" method="POST">
      <div class="card mb-4 form-container">
        <div class="card-header text-white">
          <h2>Form Pengisian</h2>
          <h5 class="mb-0">Penumpang </h5>
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

            <!-- Umur -->
            <div class="col-md-3">
              <label class="form-label">Umur</label>
              <input type="number" 
                     class="form-control" 
                     name="umur_penumpang[]" 
                     min="1" 
                     max="100" 
                     required
                     placeholder="Contoh: 25">
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

            <!-- Nomor Kursi -->
            <div class="col-md-3">
              <label class="form-label">Nomor Kursi</label>
              <input type="text" 
                     class="form-control" 
                     name="kursi_penumpang[]" 
                     required
                     pattern="[A-Za-z0-9]+"
                     placeholder="Contoh: A12">
            </div>
            <div class="row justify-content-center my-4 g-3"> 
              <div class="col-md-3 col-sm-6">
              <button type="button" class="btn btn-outline-success mb-3" onclick="copyForm()">Tambah</button>
              </div>
              <div class="col-md-3 col-sm-6">
              <button type="button" class="btn btn-outline-danger remove-form" onclick="removeForm(this)">Hapus</button>

              </div>
            </div>
          </div>
        </div>
      </div>
    </form>
  </div>
  <div id="form-dinamis">

  </div>
        <div class="row justify-content-center my-4 g-3"> 
          <div class="col-md-3 col-sm-6">
            <a href="javascript:history.back()" class="btn btn-outline-secondary btn-lg w-100">Back</a>
          </div>
        <div class="col-md-3 col-sm-6">
          <a href="https://app.sandbox.midtrans.com/payment-links/1744521015838" id="nextBtn"class="btn btn-outline-primary btn-lg w-100">Bayar</a>
        </div>
      </div>
    </div>
  </div>
</div>
</body>

<?php 
include (".includes/footer.php");

?>
