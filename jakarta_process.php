<?php

    require_once("config.php");
    session_start();

    if (isset($_POST['sumbit_update'])) {
        $id_penerbangan = $_POST['id_penerbangan'];
        $kota_asal = $_POST['kota_asal'];
        $kota_tujuan = $_POST['kota_tujuan'];
        $maskapai = $_POST['maskapai'];
        $jadwal = $_POST['jadwal'];
        $harga = $_POST['harga'];


        $sql = "UPDATE penerbangan SET
        kota_asal='$kota_asal',
        kota_tujuan='$kota_tujuan',
        maskapai='$maskapai',
        jam_penerbangan='$jadwal',
        harga='$harga'
        WHERE id_penerbangan=$id_penerbangan";

        $query = mysqli_query($conn, $sql);

        if ($query) {
            $_SESSION['notifikasi'] = "Data siswa berhasil ditambahkan!";
        } else {
            $_SESSION['notifikasi'] = "Data siswa gagal ditambahkan!";
        }

        header('Location: jakarta.php');
        exit();

}

    session_start();
    include("config.php");

    if (isset($_GET['id_penerbangan'])) {

        $id_penerbangan = $_GET['id_penerbangan'];

        $sql = "DELETE FROM penerbangan WHERE id_penerbangan =$id_penerbangan";
        $query = mysqli_query($conn, $sql);

        if ($query) {
            $_SESSION['notifikasi'] = "Data events berhasil dihapus!";
        } else {
            $_SESSION['notifikasi'] = "Data events gagal dihapus!";
        }

        header('Location: jakarta.php');
} else {
    // jika akses langsung tanpa form, tampilkan pesan error
    die("akses ditolak...");
}

?>