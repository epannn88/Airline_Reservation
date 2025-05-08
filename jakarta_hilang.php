<?php
include 'config.php'; // Sesuaikan dengan file koneksi Anda

if (isset($_GET['penerbangan_id'])) {
    $penerbangan_id = $_GET['penerbangan_id'];
    // menerima parameter penerbangan_id melalui GET request
    
    // mengupdate kolom status_tampil menjadi FALSE unuk penerbangan tertentu
    $sql = "UPDATE penerbangan SET status_tampil = FALSE WHERE penerbangan_id = ?";
    $stmt = $conn->prepare($sql);
    // menggunakan prepared statement untuk mencegah SQL injection
    $stmt->bind_param("i", $penerbangan_id);
    
    if ($stmt->execute()) {
        // jika update berhasil, redirect ke halaman add_penumpang.php
        header("Location: add_penumpang.php");
    } else {
        // jika gagal, redirect ke jakarta.php dengen parameter error
        header("Location: jakarta.php?pesan=error");
    }
    exit();
} else {
    header("Location: jakarta.php");
    exit();
    // menghentikan eksekusi sript setelah redirect
}
?>