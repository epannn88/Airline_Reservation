<?php

include("config.php");

include(".includes/header.php");

$penerbangan_id = $_GET['penerbangan_id'];
// Menerima parameter ID penerbangan melalui URL (GET)
// Mengambil data penerbangan dari database berdasarkan ID

// Menyimpan hasil query ke variabel
    $query = $conn->query("SELECT * FROM penerbangan WHERE penerbangan_id ='$penerbangan_id'");
    // $penerbang untuk ditampilkan di form
    $penerbang = $query->fetch_assoc();

?>
<!-- Tambah Penerbangan -->
<div class="container">
  <div class="col-md-8 mx-auto mt-4 mb-5">
    <div class="card mb-4">
      <h5 class="card-header">Tambah Penerbangan</h5>
      <div class="card-body demo-vertical-spacing demo-only-element">

<!-- Membuat form untuk mengedit data penerbangan -->
<form method="POST" action="jakarta_process.php" class="mb-4">
<input type="hidden" name="penerbangan_id" value="<?php echo $penerbang['penerbangan_id']; ?>">
<!-- Data akan dikirim via POST ke jakarta_process.php untuk diproses -->
<!-- value= echo $penerbang['penerbangan']; menampilkan nilai yang sudah ada -->
<!-- required membuat field wajib diisi -->

<table>
<div class="mb-4">
  <!-- Kota Asal -->
  <div class="mb-3">
    <div class="input-group input-group-merge border border-secondary-subtle rounded-3">
      <span class="input-group-text bg-light fw-semibold border-0 py-2">
        <i class="bi bi-geo-alt-fill me-2 text-primary"></i>
           Kota asal 
     </span>
      <input 
        type="text" 
        class="form-control border-0 py-3"
        id="kota_asal"
        name="kota_asal" 
        placeholder="Lokasi keberangkatan"
        aria-label="Kota asal"
        aria-describedby="asalHelp"
        value="<?php echo $penerbang['kota_asal']; ?>" required>
        <!-- value= echo $penerbang['kota_asal']; menampilkan nilai yang sudah ada -->
        <!-- required membuat field wajib diisi -->
       >
        </div>
        <small id="asalHelp" class="form-text text-muted mt-2">
            <i class="bi bi-info-circle me-1"></i>
            Masukkan kota asal
        </small>
        <div class="invalid-feedback">
            Harap masukkan lokasi keberangkatan yang valid
        </div>
  </div>

    <!-- Kota Tujuan -->
    <div class="mb-3">
        <div class="input-group input-group-merge border border-secondary-subtle rounded-3">
            <span class="input-group-text bg-light fw-semibold border-0 py-2">
                <i class="bi bi-geo-alt me-2 text-danger"></i>
                Tujuan
            </span>
            <input 
                type="text" 
                class="form-control border-0 py-3" 
                id="kota_tujuan"
                name="kota_tujuan"
                placeholder="Lokasi tujuan"
                aria-label="Kota tujuan"
                aria-describedby="tujuanHelp"
                value="<?php echo $penerbang['kota_tujuan']; ?>" required>
            >
            <!-- value= echo $penerbang['kota_tujuan']; menampilkan nilai yang sudah ada -->
            <!-- required membuat field wajib diisi -->
        </div>
        <small id="tujuanHelp" class="form-text text-muted mt-2">
            <i class="bi bi-info-circle me-1"></i>
            Masukkan kota atau bandara tujuan
        </small>
        <div class="invalid-feedback">
            Harap masukkan lokasi tujuan yang valid
        </div>
    </div>
</div>

        <div class="mt-2 mb-3 ml-2">
          <label for="maskapai" class="form-label">Maskapai</label>
            <select id="maskapai" class="form-select form-select-lg" name="maskapai">
              <option>Large select</option>
              <option value="Citilink">Citilink</option>
              <option value="Air Asia">Air Asia</option>
              <option value="Batik Air">Batik Air</option>
              <option value="Garuda Indonesia">Garuda Indonesia</option>
              <option value="Lion Air">Lion Air</option>
              <option value="Nam Air">Nam Air</option>
              <option value="Super Air Jet">Super Air Jet</option>
              <option value="Transnusa">Transnusa</option>
              <option value="Pelita Air">Pelita Air</option>
              <option value="Sriwijaya Air">Sriwijaya Air</option>
              <option value="Wings Air">Wings Air</option>
            </select>
          </div>
          <!-- ini untuk memilih maskapai yang di inginkan user -->

<div class="mb-4">
    <label for="jadwal" class="form-label fw-semibold mb-2">
        <i class="bi bi-calendar2-date me-2"></i>
        Jadwal
    </label>
    <div class="position-relative">
        <input 
            class="form-control form-control-lg border-secondary-subtle w-100"
            type="datetime-local"
            id="jadwal"
            name="jadwal"
            aria-describedby="jadwalHelp"
        >
        <div class="invalid-feedback">
            Harap masukkan jadwal yang valid
        </div>
    </div>
    <small id="jadwalHelp" class="form-text text-muted mt-2">
        <i class="bi bi-info-circle me-1"></i>
        Pilih tanggal dan waktu sesuai jadwal yang diinginkan
    </small>
</div>

<div class="mb-4">
    <label for="harga" class="form-label fw-semibold mb-2">
        <i class="bi bi-calendar2-date me-2"></i>
        Harga
    </label>
    <div class="position-relative">
        <input 
            class="form-control form-control-lg border-secondary-subtle w-100"
            type="text"
            id="harga"
            name="harga"
            required
            aria-describedby="hargaHelp"
            value="<?php echo $penerbang['harga']; ?>" required>
        >
        <!-- value= echo $penerbang['harga']; menampilkan nilai yang sudah ada -->
        <!-- required membuat field wajib diisi -->
        
    </div>
    <small id="harga" class="form-text text-muted mt-2">
        <i class="bi bi-info-circle me-1"></i>
        buat harga yang ingin dibayarkan (contoh: 2000000)
    </small>
</div>
</table>
<!-- Tambahkan di dalam card-body, setelah elemen form terakhir -->
<div class="d-flex justify-content-end gap-3 mt-5">
    <a href="javascript:history.back()" class="btn btn-secondary btn-lg">
        <i class="bi bi-arrow-left me-2"></i>
        Kembali
    </a>
    <!-- tombol kembali -->
    <button type="submit" class="btn btn-primary btn-lg" name="sumbit_update">
        <i class="bi bi-send-check me-2"></i>
        Update Penerbangan
    </button>
    <!-- tombol buat klik untuk mengarahkan ke jekarta_process.php -->
</div>
      </div>
    </div>
  </div>
</div>
</form>
<?php 
include (".includes/footer.php");
?>
