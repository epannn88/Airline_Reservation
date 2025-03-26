<?php
require_once("config.php");
session_start(); 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $kota_asal = $_POST["kota_asal"];
    $kota_tujuan = $_POST["kota_tujuan"];
    $maskapai = $_POST["maskapai"];
    $jadwal = $_POST["jadwal"];
    $harga = $_POST["harga"];

    $sql = "INSERT INTO penerbangan (kota_asal, kota_tujuan, maskapai, jam_penerbangan, harga)
    VALUES ('$kota_asal','$kota_tujuan','$maskapai','$jadwal','$harga')";
    if ($conn->query($sql) === TRUE){
    $_SESSION['notification'] = [
        'type' => 'primary',
        'message' => 'Berhasil ditambahkan!'
    ];
    } else {
    $_SESSION['notification'] = [
        'type' => 'danger',
        'message' => 'Error ditambahkan: ' . mysqli_error($conn)
    ];
    }
    header('Location: jakarta.php');
    exit();
}
$conn->close();
?>