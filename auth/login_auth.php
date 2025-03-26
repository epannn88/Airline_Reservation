<?php
session_start(); // memulai sesi
require_once("../config.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email_nama = $_POST["email_nama"];
    $password = $_POST["password"];
    
    $sql = mysqli_query($conn, 
    "SELECT * FROM users WHERE nama = '$email_nama' OR email = '$email_nama'");

    if (mysqli_num_rows($sql)> 0) {
        $row = mysqli_fetch_array($sql);

        if (password_verify($password, $row['password'])) {
        $_SESSION['user_id'] = $row['user_id'];
        $_SESSION['nama'] = $row['nama'];
        $_SESSION['email'] = $row['email'];
        $_SESSION['role'] = $row['role'];
        
            $_SESSION['notification'] = [
                'type' => 'primary',
                'message' => 'Registrasi berhasil!'
            ];
        header('Location: ../dashboard.php');
        exit();
        } else {
            $_SESSION['notification'] = [
                'type' => 'danger',
                'message' => 'Password salah'
            ];
        header('Location: login.php');
        exit();
        }
        } else {
            $_SESSION['notification'] = [
                'type' => 'danger',
                'message' => 'Nama atau email salah'
            ];
        }
        header('Location: login.php');
        exit();
}   
$conn->close();
?>