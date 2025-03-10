<?php
session_start(); // memulai sesi
require_once("../config.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email_nama = $_POST["email_nama"];
    $password = $_POST["password"];
    
    $sql = mysqli_query($conn, 
    "SELECT * FROM penumpang WHERE (nama = '$email_nama' OR email = '$email_nama') 
    AND password = '$password'");

    if (mysqli_num_rows($sql)> 0) {
        $row = mysqli_fetch_array($sql);
        $_SESSION['penumpang_id'] = $row['penumpang_id'];
        $_SESSION['nama'] = $row['nama'];
        $_SESSION['user'] = $row['user'];
        
            $_SESSION['notification'] = [
                'type' => 'primary',
                'message' => 'Registrasi berhasil!'
            ];
        header('Location: ../dashboard.php');
        } else {
            $_SESSION['notification'] = [
                'type' => 'danger',
                'message' => 'Gagal registrasi: ' . mysqli_error($conn)
            ];
        header('Location: login.php');
        exit();
    }
}   
$conn->close();
?>