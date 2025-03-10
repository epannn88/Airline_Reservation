<?php
require_once("../config.php");
// memulai session
session_start();

// proses register
if($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST["nama"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    $sql = "INSERT INTO penumpang (nama, email, password)
    VALUES ('$nama','$email','$password')";
    if ($conn->query($sql) === TRUE){
        // simpan notifikasi kedalam session
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