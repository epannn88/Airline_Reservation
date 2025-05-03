<?php
include 'config.php';
// koneksi ke databse
session_start();
// memulai sesi

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['edit'])) {
    // memastikan apakah user telah menekan tombol edit
    $id = $_POST['id'];
    $imageDir = "assets/img/avatars";
    // tempat dimana foto disimpan

    if (!empty($_FILES["image"]["name"])) {
        $imageName = $_FILES["image"]["name"];
        $image = $imageDir . $imageName;

        // pindahkan file baru ke rektori tujuan
        move_uploaded_file($_FILES["image"]["tmp_name"], $image);

        $queryOldImage = "SELECT image FROM tb_user WHERE id = $id";
        $resultOldImage = $conn->query($queryOldImage);
        if ($resultOldImage->num_rows > 0) {
            $oldImage = $resultOldImage->fetch_assoc()['image'];
            if(file_exists($oldImage)) {
                unlink($oldImage); // menghapus file lama
            }
        }

    } else {
        // jika tidak ada file baru, gunakan gambar lama
        $imageQuery = "SELECT image FROM tb_user WHERE id = $id";
        $result = $conn->query($imageQuery);
        $image = ($result->num_rows > 0) ? $result->fetch_assoc()['image'] : null;
    }

        $queryEdit = "UPDATE tb_user SET id = $id,
        image = '$image' WHERE id = $id";

    if ($conn->query($queryEdit) === TRUE) {
        // notifikasi berhasil
        $_SESSION['notification'] = [
            'type' => 'primary',
            'message' => 'Postingan berhasil di perbarui.'
        ];
    } else {
        // notifikasi gagal
        $_SESSION['notification'] = [
            'type' => 'danger',
            'message' => 'Gagal memperbarui postingan.'
        ];
    }

    // arahkan kehalaman dashboard
    header('Location: akun.php');
    exit();
}
?>