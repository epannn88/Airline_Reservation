<?php
session_start();

// mengambil data dari session/login
$penumpang_id = $_SESSION["penumpang_id"];
$nama = $_SESSION["nama"];
$user = $_SESSION["user"];
// ambil notifikasi jika ada, kemudian hapus dari session/sesi
$notification = $_SESSION['notification'] ?? null;
if ('notification') {
    unset($_SESSION['notification']);
}
/* periksa apakah session/sesi nama dan user sudah ada,
jika tidak ada maka arahkan ke halaman login */
if (empty($_SESSION["nama"]) || empty($_SESSION["user"])) {
    $_SESSION['notification'] = [
        'type' => 'danger',
        'message' => 'Silakan login terlebih dahulu'
    ];
    header('Location: ./auth/login.php');
    exit(); // untuk memastikan script berhenti setelah melakukan pengalihan
}
?>


