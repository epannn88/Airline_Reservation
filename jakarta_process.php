<?php

    require_once("config.php"); // ini buat koneksi ke database airline reservation
    session_start(); // mulai sesi

    // memproses form update data penerbangan 
    if (isset($_POST['sumbit_update'])) {
        // Menerima data form POST untuk mengupdate informasi penerbangan
        // Mengambil parameter: ID penerbangan, kota asal, kota tujuan, maskapai, jadwal, dan harga
        $penerbangan_id = $_POST['penerbangan_id'];
        $kota_asal = $_POST['kota_asal'];
        $kota_tujuan = $_POST['kota_tujuan'];
        $maskapai = $_POST['maskapai'];
        $jadwal = $_POST['jadwal'];
        $harga = $_POST['harga'];

        // Membuat query SQL untuk mengupdate data di tabel penerbangan
        // Mengupdate parameter: kota asal, kota tujuan, maskapai, jadwal, dan harga
        $sql = "UPDATE penerbangan SET
        kota_asal='$kota_asal',
        kota_tujuan='$kota_tujuan',
        maskapai='$maskapai',
        jam_penerbangan='$jadwal',
        harga='$harga'
        WHERE penerbangan_id=$penerbangan_id";

        // buat notifikasi untuk mengetahui apakah berhasil di update
        $query = mysqli_query($conn, $sql);
        // Menyimpan notifikasi di session tentang status update
        if ($query) {
            $_SESSION['notifikasi'] = "Data berhasil berhasil diupdate!";
        } else {
            $_SESSION['notifikasi'] = "Data gagal ditambahkan!";
        }

        header('Location: jakarta.php');
        // Redirect ke halaman jakarta.php
        exit();
        // menghentikan eksekusi sript
}

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

        header('Location: jakarta.php');
        // Redirect ke halaman jakarta.php
} else {
    // jika akses langsung tanpa form, tampilkan pesan error
    die("akses ditolak...");
}

?>

