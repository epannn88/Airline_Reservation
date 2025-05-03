<?php
// digunakan untuk menyimpan data sementara user saat menggunakan web.
session_start(); 
// config diperlukan agar dapat melakukan proses pencocokan data yang ada di database airline reservation
require_once("../config.php");
// menjalankan program if statement, $_server meminta data yang telah di imput sebelumnya dengan menggunakan method post
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email_nama = $_POST["email_nama"];
    $password = $_POST["password"];
    // data yang telah di input di form login akan dimasukkan ke dalam variabel $email_nama dan $password.
    $sql = mysqli_query($conn, 
    "SELECT * FROM users WHERE nama = '$email_nama' OR email = '$email_nama'");
    // mengambil data yang sesuai dengan nama dan email, 
    // Contohnya: Semua orang dengan email "budi@gmail.com" (dari kolom email).
    if (mysqli_num_rows($sql)> 0) {
        // jika ada data yang sama maka, mysqli_num_rows akan mengambilnya dari $sql.
        $row = mysqli_fetch_array($sql);
        // Mengambil data user dari hasil query dan menyimpannya dalam array.
        // lalu array tersebut akan di simpan di $row.
        /* contoh data yang yang telah dijadikan array
        [
            'user_id' => 42,
            'nama' => 'John Doe',
            'email' => 'john@example.com',
            'password' => '$2y$10$...',
            'role' => 'user'
        ]
        */
        if (password_verify($password, $row['password'])) {
            // Membandingkan password input user dengan hash yang tersimpan di database.
            /* Contoh proses
            Input Password: 'rahasia123'
            Stored Hash: '$2y$10$s8S5pE5eRz4kFhNwLx3zQuYvKWd7q1ZgK9lT0mUvOJb3VrAa1BnDy'

            password_verify() akan:
            1. Ekstrak salt: 's8S5pE5eRz4kFhNwLx3zQu'
            2. Hash 'rahasia123' dengan salt tersebut
            3. Bandingkan hasilnya dengan hash di database
            */
        $_SESSION['user_id'] = $row['user_id'];
        $_SESSION['nama'] = $row['nama'];
        $_SESSION['email'] = $row['email'];
        $_SESSION['role'] = $row['role'];
        
        // jika proses pencocokan BERHASIL maka pesan ini akan ditampilkan dan user akan langsung dibawa menuju halaman dashboard.
            $_SESSION['notification'] = [
                'type' => 'primary',
                'message' => 'login berhasil!'
            ];
        header('Location: ../dashboard.php');
        exit(); // Menghentikan eksekusi script
        } else {
            // jika proses pencocokan GAGAL maka pesan ini akan ditampilkan dan user akan langsung dibawa menuju halaman login.php.
            $_SESSION['notification'] = [
                'type' => 'danger',
                'message' => 'Password salah'
            ];
        header('Location: login.php');
        exit(); //Menghentikan eksekusi script
        }
        // jika jika data yang di input user tidak ditemukan maka pesan ini akan muncul.
        // setelah itu user akan dibawa menuju halaman login
        } else {
            $_SESSION['notification'] = [
                'type' => 'danger',
                'message' => 'Nama atau email salah'
            ];
        }
        header('Location: login.php');
        exit(); // Menghentikan eksekusi script
}   
$conn->close();
// koneksi diberhentikan
?>