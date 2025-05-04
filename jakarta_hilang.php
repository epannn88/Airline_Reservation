<?php
include 'config.php'; // Sesuaikan dengan file koneksi Anda

if (isset($_GET['penerbangan_id'])) {
    $penerbangan_id = $_GET['penerbangan_id'];
    
    // Update status_tampil menjadi FALSE
    $sql = "UPDATE penerbangan SET status_tampil = FALSE WHERE penerbangan_id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $penerbangan_id);
    
    if ($stmt->execute()) {
        // Redirect kembali ke halaman jakarta dengan notifikasi sukses
        header("Location: add_penumpang.php");
    } else {
        // Redirect dengan notifikasi error
        header("Location: jakarta.php?pesan=error");
    }
    exit();
} else {
    header("Location: jakarta.php");
    exit();
}
?>