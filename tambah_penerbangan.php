<?php
include (".includes/header.php");
$title = "Tambah Penerbangan";
// menyertakan file untuk menampilakn notifikasi (jika ada) 
include '.includes/toast_notification.php';
?>
<!-- Tambah Penerbangan -->
<div class="container">
  <div class="col-md-8 mx-auto mt-4 mb-5">
    <div class="card mb-4">
      <h5 class="card-header">Tambah Penerbangan</h5>
      <div class="card-body demo-vertical-spacing demo-only-element">
        
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
        placeholder="Lokasi keberangkatan"
        aria-label="Kota asal"
        aria-describedby="asalHelp"
        required
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
                placeholder="Lokasi tujuan"
                aria-label="Kota tujuan"
                aria-describedby="tujuanHelp"
                required
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
          <label for="largeSelect" class="form-label">Maskapai</label>
            <select id="largeSelect" class="form-select form-select-lg">
              <option>Large select</option>
              <option value="Citilink">Citilink</option>
              <option value="Air_Asia">Air Asia</option>
              <option value="Batik_Air">Batik Air</option>
              <option value="Garuda_Indonesia">Garuda Indonesia</option>
              <option value="Lion_Air">Lion Air</option>
              <option value="Nam_Air">Nam Air</option>
              <option value="Super_Air_Jet">Super Air Jet</option>
              <option value="Transnusa">Transnusa</option>
              <option value="Pelita_Air">Pelita Air</option>
              <option value="Sriwijaya_Air">Sriwijaya Air</option>
              <option value="Wings_Air">Wings Air</option>
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
            required
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
            placeholder="Masukkan harga"
            aria-label="Harga"
            inputmode="numeric"
            pattern="[0-9.,]*"
        >
    </div>
    <small class="form-text text-muted mt-2">
        <i class="bi bi-info-circle me-1"></i>
        Masukkan angka tanpa simbol mata uang (contoh: 250000)
    </small>
</div>
<!-- Tambahkan di dalam card-body, setelah elemen form terakhir -->
<div class="d-flex justify-content-end gap-3 mt-5">
    <a href="javascript:history.back()" class="btn btn-secondary btn-lg">
        <i class="bi bi-arrow-left me-2"></i>
        Kembali
    </a>
    <button type="submit" class="btn btn-primary btn-lg">
        <i class="bi bi-send-check me-2"></i>
        Simpan Penerbangan
    </button>
</div>
      </div>
    </div>
  </div>
</div>
<?php 
include (".includes/footer.php");
?>
