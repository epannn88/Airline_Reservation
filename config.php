<?php 
// Pertama-tama kita membuat tag pembuka php dan penutup php
$host = "localhost"; // Setelah itu kami membuat variabel $host. Dalam variabel server ini saya memasukkan "localhost" berarti server lokal.
$username = "root"; // $user adalah nama pengguna untuk masuk ke server database (dalam contoh ini "root").
$password = ""; // karna disini kami tidak menggunakan password, maka passwordnya kami kosong kan
$database = "airline-reservation"; // nama database yang kami gunakan
// membuat koneksi ke databse menggunakan mysql
$conn = mysqli_connect($host, $username, $password, $database);
// Menyambungkan $host, $username, $password, $database dengan menggunakan mysqli_connect, lalu conneksi tersebut akan disimpan ke dalam variabel $conn

// cek apkah berhasil terkoneksi
if ($conn->connect_error) {
    // Menampilkan pesan ini jika gagal terkoneksi
    die("Database gagal terkoneksi: " . $conn->connect_error);
    // pesan error akan di tampilkan secara spesifik dengan menggunakan connect_error.
}
?>