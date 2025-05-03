<?php
// config diperlukan agar dapat melakukan proses tambah data ke database airline reservation
require_once("../config.php");
session_start();
// digunakan untuk menyimpan data sementara user saat menggunakan web.

// menjalankan program if statement, $_server meminta data yang telah di imput sebelumnya dengan menggunakan method post
if($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST["nama"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    // nama, email, dan password yang telah di imput akan dipindahkan ke dalam variabel yang sesuai dengan mereka
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
    // password yang telah di input tersebut akan di ubah menjadi password acak dengan menggunakan password_hash dan password_default, lalu password acak tersebut akan di pindahkan ke dalam variabel $hashedPassword. 
    // hal ini dilakukan untuk mencegah terjadinya kebocoran password

    $sql = "INSERT INTO users (nama, email, password)
    VALUES ('$nama','$email','$hashedPassword')";
    // data yang telah user input akan dimasukkan ke dalam tabel users dengan menggunakan program insert into.
    
    // Jika proses penambahan BERHASIL, maka pesan ini akan di tampilkan
    if ($conn->query($sql) === TRUE){
        $_SESSION['notification'] = [
            'type' => 'primary',
            'message' => 'Registrasi berhasil!'
        ];

    //  Jika proses penambahan GAGAL, maka pesan ini akan di tampilkan
    } else {
        $_SESSION['notification'] = [
            'type' => 'danger',
            'message' => 'Gagal registrasi: ' . mysqli_error($conn)
        ];
    }
    // Ketika proses telah selesai user akan langsung di arahkan ke halaman login dengan menggunakan header.
    header('Location: login.php');
    exit(); // Menghentikan eksekusi script
}

$conn->close();
// koneksi diberhentikan
?>