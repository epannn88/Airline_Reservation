<?php
// membuka data semntara yang telah disimpan.
session_start();

// mengambil data dari session/login
$user_id = $_SESSION["user_id"]; // id pengguna
$nama = $_SESSION["nama"]; // nama user
$email = $_SESSION["email"]; // email user
$role = $_SESSION["role"]; // peran 'admin' dan 'pengguna biasa'

// ambil notifikasi jika ada, kemudian hapus dari session/sesi
$notification = $_SESSION['notification'] ?? null;
if ($notification != null) { // Cek apakah notifikasi ada
    unset($_SESSION['notification']); // // Hapus pesan setelah dibaca
}

/* periksa apakah session/sesi nama dan user sudah ada,
jika tidak ada maka arahkan ke halaman login */
if (empty($_SESSION["nama"]) || empty($_SESSION["role"])) {
    $_SESSION['notification'] = [
        'type' => 'danger',
        'message' => 'Silakan login terlebih dahulu'
    ];
    header('Location: ./auth/login.php');
    exit(); // untuk memastikan script berhenti setelah melakukan pengalihan
}
?>