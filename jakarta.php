<?php
include (".includes/header.php");
$title = "Jakarta";
include '.includes/toast_notification.php';

// Ambil parameter pencarian
$search = isset($_GET['search']) ? trim($_GET['search']) : '';
?>

<head>
<style>
/* ... (style yang sudah ada tetap dipertahankan) ... */
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
                    // Query dengan pencarian
                    $sql = "SELECT * FROM penerbangan";
                    if (!empty($search)) {
                        $sql .= " WHERE kota_tujuan LIKE '%" . $conn->real_escape_string($search) . "%'";
                    }
                    $sql .= " ORDER BY kota_tujuan";
                    
                    $query = $conn->query($sql);
                    
                    if ($query->num_rows > 0) {
                        while ($penerbangan = $query->fetch_assoc()) {
                    ?>
                    <tr>
                        <td><?= $index++; ?></td>
                        <td><?= htmlspecialchars($penerbangan['kota_asal']); ?></td>
                        <td><?= htmlspecialchars($penerbangan['kota_tujuan']); ?></td>
                        <td><?= htmlspecialchars($penerbangan['maskapai']); ?></td>
                        <td><?= htmlspecialchars($penerbangan['jam_penerbangan']); ?></td>
                        <td><?= htmlspecialchars($penerbangan['harga']); ?></td>
                        <td><a href="add_penumpang.php?penerbangan_id=
                        <?= $penerbangan['penerbangan_id'] ?>
                        &asal=<?= urlencode($penerbangan['kota_asal']) ?>
                        &tujuan=<?= urlencode($penerbangan['kota_tujuan']) ?>
                        &maskapai=<?= urlencode($penerbangan['maskapai']) ?>&
                        jadwal=<?= urlencode($penerbangan['jam_penerbangan']) ?>&harga=<?= urlencode($penerbangan['harga']) ?>" 
       class="btn rounded-pill btn-outline-success">Pesan!</a></td>
                        <td>
                            <a href="jakarta_edit.php?penerbangan_id=<?= $penerbangan['penerbangan_id'] ?>" 
                               class="btn rounded-pill btn-outline-success">edit</a>
                            <a onclick="return confirm('Anda yakin ingin menghapus data?')" 
                               href="jakarta_process.php?penerbangan_id=<?= $penerbangan['penerbangan_id'] ?>" 
                               class="btn rounded-pill btn-outline-success">hapus</a>
                        </td>
                    </tr>
                    <?php
                        }
                    } else {
                        echo '<tr><td colspan="8" class="text-center">Tidak ada data ditemukan</td></tr>';
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

<!-- Optional: JavaScript untuk live search (jika ingin tanpa reload halaman) -->
<script>
document.getElementById('searchInput').addEventListener('input', function() {
    // Jika ingin implementasi live search dengan AJAX, bisa ditambahkan di sini
});
</script>
</body>