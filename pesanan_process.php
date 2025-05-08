<?php
session_start(); // mulai sesi
    include("config.php"); // ini buat koneksi ke database airline reservation

    if (isset($_GET['penerbangan_id'])) {
        
        $penerbangan_id = $_GET['penerbangan_id'];
        // Menerima parameter ID penerbangan melalui GET request

        $sql = "DELETE FROM penerbangan WHERE penerbangan_id =$penerbangan_id";
        // Membangun query DELETE untuk menghapus data penerbangan
        $query = mysqli_query($conn, $sql);
        // Mengeksekusi query penghapusan

        // Menyimpan pesan notifikasi di session tentang status penghapusan
        if ($query) {
            $_SESSION['notifikasi'] = "Data berhasil dihapus!";

        } else {
            $_SESSION['notifikasi'] = "Data gagal dihapus!";
        }

        header('Location: pesanan.php');
        // Redirect ke halaman pesanan.php
} else {
    // jika akses langsung tanpa form, tampilkan pesan error
    die("akses ditolak...");
}
?>