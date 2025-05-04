<?php
// Load file koneksi.php
include "config.php";
// 

$nama = $_POST['nama'];
$email = $_POST['email'];
$biaya = $_POST['biaya'];
$order_id= rand();
$transaction_status= 1;
$status_pembayaran = "Pembayaran Berhasil";

// menginput data ke database
mysqli_query($conn, "insert into pembayaran values('','$nama','$email','$biaya','$order_id','$transaction_status','$status_pembayaran')");
 
// mengalihkan halaman kembali ke index.php
header("location:./midtrans/examples/snap/checkout-process-simple-version.php?order_id=$order_id");


?>


