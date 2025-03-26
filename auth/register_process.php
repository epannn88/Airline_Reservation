<?php
require_once("../config.php");
// memulai session
session_start();

// prosesnya
if($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST["nama"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    $sql = "INSERT INTO users (nama, email, password)
    VALUES ('$nama','$email','$hashedPassword')";
    if ($conn->query($sql) === TRUE){
        $_SESSION['notification'] = [
            'type' => 'primary',
            'message' => 'Registrasi berhasil!'
        ];
    } else {
        $_SESSION['notification'] = [
            'type' => 'danger',
            'message' => 'Gagal registrasi: ' . mysqli_error($conn)
        ];
    }
    header('Location: login.php');
    exit();
}

$conn->close();
?>