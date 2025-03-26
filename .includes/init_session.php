<?php
session_start();

// mengambil data dari session/login
$user_id = $_SESSION["user_id"];
$nama = $_SESSION["nama"];
$email = $_SESSION["email"];
$role = $_SESSION["role"];
// ambil notifikasi jika ada, kemudian hapus dari session/sesi
$notification = $_SESSION['notification'] ?? null;
if ('notification') {
    unset($_SESSION['notification']);
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


