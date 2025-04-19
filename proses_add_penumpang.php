<?php

require_once('config.php');
session_start();

if($_SERVER["REQUEST_METHOD"] == "POST") {
    $cabin_class = $_POST["cabin_class"];
    $nama_penumpang = $_POST["nama_penumpang"];
    $umur_penumpang = $_POST["umur_penumpang"];
    $email_penumpang = $_POST["email_penumpang"];
    $nomor_kursi = $_POST["nomor_kursi"];

    $sql = "INSERT INTO penumpang (cabin_class, nama_penumpang, umur_penumpang, email_penumpang, nomor_kursi)
    VALUES ('$cabin_class','$nama_penumpang','$umur_penumpang','$email_penumpang','$nomor_kursi')";
    if ($conn->query($sql) === TRUE){
    $_SESSION['notification'] = [
        'type' => 'primary',
        'message' => 'Berhasil ditambahkan!'
    ];
    } else {
    $_SESSION['notification'] = [
        'type' => 'danger',
        'message' => 'Error ditambahkan: ' . mysqli_error($conn)
    ];
    }
    header('Location: add_penumpang.php');
    exit();
}
$conn->close();

?>