<?php

include("config.php");

include(".includes/header.php");

$id_penerbangan = $_GET['id_penerbangan'];

    $query = $conn->query("SELECT * FROM penerbangan WHERE id_penerbangan ='$id_penerbangan'");
    // 1 disini salah karena nama nya nama id nya harusnya $event_id
    $penerbang = $query->fetch_assoc();

?>
<!-- Tambah Penerbangan -->
<div class="container">
  <div class="col-md-8 mx-auto mt-4 mb-5">
    <div class="card mb-4">
      <h5 class="card-header">Tambah Penerbangan</h5>
      <div class="card-body demo-vertical-spacing demo-only-element">

<form method="POST" action="jakarta_process.php" class="mb-4">
<input type="hidden" name="id_penerbangan" value="<?php echo $penerbang['id_penerbangan']; ?>">
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
    <div class="input-group input-group-merge border border-secondary-subtle rounded-3">
        <span class="input-group-text bg-light fw-semibold border-0 py-3">
            <i class="bi bi-currency-dollar me-2"></i>
            Harga
        </span>
        <input 
            type="text" 
            class="form-control border-0 py-3"
            id="harga" 
            name="harga"
            placeholder="Masukkan harga"
            aria-label="Harga"
            inputmode="numeric"
            pattern="[0-9.,]*"
            value="<?php echo $penerbang['harga']; ?>" required>
        >
    </div>
    <small class="form-text text-muted mt-2">
        <i class="bi bi-info-circle me-1"></i>
        Masukkan angka tanpa simbol mata uang (contoh: 250000)
    </small>
</div>
</table>
<!-- Tambahkan di dalam card-body, setelah elemen form terakhir -->
<div class="d-flex justify-content-end gap-3 mt-5">
    <a href="javascript:history.back()" class="btn btn-secondary btn-lg">
        <i class="bi bi-arrow-left me-2"></i>
        Kembali
    </a>
    <button type="submit" class="btn btn-primary btn-lg" name="sumbit_update">
        <i class="bi bi-send-check me-2"></i>
        Update Penerbangan
    </button>
</div>
      </div>
    </div>
  </div>
</div>
</form>
<?php 
include (".includes/footer.php");
?>
