<?php
// konfirgurasi koneksi database
$host = "localhost";
$username = "root";
$password = "";
$database = "airline_reservation";

// membuat koneksi ke database menggunakan mysql
$conn = mysqli_connect($host, $username, $password, $database);

// mengesek apakah koneksi berhasil
if ($conn->connect_error){
    // menampilkan pesan error jika koneksi gagal
    die("database gagal terkoneksi: " . $conn->connect_error);
    
}
?>