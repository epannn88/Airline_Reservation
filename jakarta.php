<?php
include (".includes/header.php"); //
$title = "Jakarta"; // set judul halaman
include '.includes/toast_notification.php';

// Ambil parameter pencarian 'search' dari URL (GET request)
$search = isset($_GET['search']) ? trim($_GET['search']) : '';
// jika parameter ada, (trim) bersihkan dari spasi di awal/akhir, jika tidak ada, set string kosong
?>


<head>
    <!-- ... (bagian head dan style tetap sama) ... -->
<style>
.add-button {
  position: relative;
  width: 40px;
  height: 40px;
  border: none;
  border-radius: 50%;
  background-color: #4CAF50;
  color: white;
  cursor: pointer;
  transition: all 0.3s ease;
  display: flex;
  align-items: center;
  justify-content: center;
  overflow: hidden;
  box-shadow: 0 2px 5px rgba(0,0,0,0.2);
}

.add-button:hover {
  width: 150px;
  border-radius: 25px;
  justify-content: flex-start;
  padding-left: 10px;
}

.add-button::before {
  content: '+';
  font-size: 24px;
  position: absolute;
  left: 50%;
  transform: translateX(-50%);
  transition: all 0.3s ease;
}

.add-button:hover::before {
  left: 20px;
  transform: translateX(0);
  color: white;
}

.add-button span {
  opacity: 0;
  transition: opacity 0.2s ease;
  white-space: nowrap;
  margin-left: 30px;

}

.add-button:hover span {
  opacity: 1;
  transition-delay: 0.1s;
  color: white;
}
</style>
</head>

<body>
<div class="card mx-4 mt-4">
    <div class="card-header">
        <div class="table-responsive text-nowrap">
            <table id="datatable" class="table table-hover">
                <!-- Form Pencarian -->
                <form method="GET" action="">
                    <input type="search" class="form-control form-control-sm mb-3" 
                           placeholder="Cari berdasarkan kota tujuan..." 
                           name="search" 
                           value="<?= htmlspecialchars($search) ?>">
                           <!-- menggunakan htmlspecialchars untuk mencegah XSS (cross-site scripting) dan SQL injection -->
                </form>
                
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Dari</th>
                        <th>Tujuan</th>
                        <th>Maskapai</th>
                        <th>Jadwal</th>
                        <th>Harga</th>
                        <th>Actions</th>
                        <th>More</th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    <?php 
                    $index = 1;
                    // Query dengan pencarian dan filter status_tampil
                    $sql = "SELECT * FROM penerbangan WHERE status_tampil = TRUE";
                    if (!empty($search)) {
                        $sql .= " AND kota_tujuan LIKE '%" . $conn->real_escape_string($search) . "%'";
                    }
                    // mengambil semua data penerbangan yang di memiliki status_tampil = true
                    // menambahkan kondisi pencarian jika parameter $search tidak kosong
                    // mengurutkan hasil berdasarkan kota_tujuan
                    // menggunakan $conn->real_escape_string() untuk mencegah XSS dan SQL injection
                    $sql .= " ORDER BY kota_tujuan";
                    
                    $query = $conn->query($sql);
                    
                    if ($query->num_rows > 0) {
                        while ($penerbangan = $query->fetch_assoc()) {
                    // mengecek apakah query mengembalikan hasil (num_rows > 0)
                    // looping melalui setiap hasil query dan menampilkan nya dalam baris tabel
                    ?>
                    <tr>
                        <td><?= $index++; ?></td>
                        <td><?= htmlspecialchars($penerbangan['kota_asal']); ?></td>
                        <td><?= htmlspecialchars($penerbangan['kota_tujuan']); ?></td>
                        <td><?= htmlspecialchars($penerbangan['maskapai']); ?></td>
                        <td><?= htmlspecialchars($penerbangan['jam_penerbangan']); ?></td>
                        <td><?= htmlspecialchars($penerbangan['harga']); ?></td>
                        <!-- Menampilkan data dalam format tabel yang lengkap -->
                        <!-- Menggunakan htmlspecialchars() untuk mencegah XSS -->
                        <!-- Menampilkan nomor urut dengan variabel $index -->
                        <td>
                            <a href="jakarta_hilang.php?penerbangan_id=<?= $penerbangan['penerbangan_id'] ?>" 
                               class="btn rounded-pill btn-outline-success">Pesan!</a>
                        <!-- jakarta_hilang.php?penerbangan_id= ini mengarah ke file jakarta_hilang.php atau prosesnya dari button pesan! ini -->
                        </td>
                        <td>
                            <a href="jakarta_edit.php?penerbangan_id=<?= $penerbangan['penerbangan_id'] ?>" 
                               class="btn rounded-pill btn-outline-success">edit</a>
                               <!-- jakarta_edit.php?penerbangan_id= ini mengarah ke file jakarta_edit.php atau tampilannya dari edit -->
                            <a onclick="return confirm('Anda yakin ingin menghapus data?')" 
                               href="jakarta_process.php?penerbangan_id=<?= $penerbangan['penerbangan_id'] ?>"
                               class="btn rounded-pill btn-outline-success">hapus</a>
                               <!-- onclick ini misal di klik akan muncul teks dengan isi('Anda yakin ingin menghapus data?') -->
                               <!-- jakarta_edit.php?penerbangan_id= ini mengarah ke file jakarta_proses.php atau prosesnya dari hapus -->
                        </td>
                    </tr>
                    <?php
                        }
                    } else {
                        echo '<tr><td colspan="8" class="text-center">Tidak ada data ditemukan</td></tr>';
                        // menampilkan pesan jika tidak ada data
                    }
                    ?>
                </tbody>
            </table>
            <div class="d-flex justify-content-end mx-5">
                <a href="tambahPenerbangan.php" class="add-button">
                    <span>Tambahkan</span>
                </a>
            </div>
        </div>
    </div>
</div>
</body>