<?php
include (".includes/header.php");
$title = "Jakarta";
// menyertakan file untuk menampilakn notifikasi (jika ada) 
include '.includes/toast_notification.php';
?>
<!-- Tambah Penerbangan -->
<div class="container">
  <div class="col-md-8 mx-auto mt-4 mb-5">
    <div class="card mb-4">
      <h5 class="card-header">Tambah Penerbangan</h5>
      <div class="card-body demo-vertical-spacing demo-only-element">

<form method="POST" action="tambahPenerbangan_process.php" class="mb-4">
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
                id="kota_tujuan"
                name="kota_tujuan"
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

        <div class="mt-2 mb-3 ml-2">
          <label for="harga" class="form-label">Harga</label>
            <select id="harga" class="form-select form-select-lg" name="harga">
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
    <small class="form-text text-muted mt-2">
        <i class="bi bi-info-circle me-1"></i>
        Pilih yang sesuai dengan nama maskapai (contoh: Citilink = terdapat harga yg sudah di cantumkan)
    </small>
</div>
<!-- Tambahkan di dalam card-body, setelah elemen form terakhir -->
<div class="d-flex justify-content-end gap-3 mt-5">
    <a href="javascript:history.back()" class="btn btn-secondary btn-lg">
        <i class="bi bi-arrow-left me-2"></i>
        Kembali
    </a>
    <button type="submit" class="btn btn-primary btn-lg" name="sumbit_penerbangan">
        <i class="bi bi-send-check me-2"></i>
        Simpan Penerbangan
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
