<?php
require_once('config.php');
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $cabin_class = $_POST["cabin_class"];
    
    // Ambil data sebagai array
    $nama_penumpang = $_POST["nama_penumpang"];
    $umur_penumpang = $_POST["umur_penumpang"];
    $email_penumpang = $_POST["email_penumpang"];
    $nomor_kursi = $_POST["nomor_kursi"];

    // Loop untuk setiap penumpang
    for ($i = 0; $i < count($nama_penumpang); $i++) {
        $nama = mysqli_real_escape_string($conn, $nama_penumpang[$i]);
        $umur = mysqli_real_escape_string($conn, $umur_penumpang[$i]);
        $email = mysqli_real_escape_string($conn, $email_penumpang[$i]);
        $kursi = mysqli_real_escape_string($conn, $nomor_kursi[$i]);

        $sql = "INSERT INTO penumpang (cabin_class, nama_penumpang, umur_penumpang, email_penumpang, nomor_kursi)
                VALUES ('$cabin_class', '$nama', '$umur', '$email', '$kursi')";
        
        if (!$conn->query($sql)) {
            $_SESSION['notification'] = [
                'type' => 'danger',
                'message' => 'Error: ' . $conn->error
            ];
            header('Location: add_penumpang.php');
            exit();
        }
    }

    $_SESSION['notification'] = [
        'type' => 'primary',
        'message' => count($nama_penumpang) . ' penumpang berhasil ditambahkan!'
    ];
    header('Location: add_penumpang.php');
    exit();
}

$conn->close();
?>