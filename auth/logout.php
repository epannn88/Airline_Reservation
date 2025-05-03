<?php
session_start(); // 1. Memulai/mengakses session
session_unset(); // 2. Menghapus semua variabel session
session_destroy(); // 3. Menghancurkan session sepenuhnya
header('Location: login.php'); // 4. Redirect ke halaman login
exit();  // 5. Menghentikan eksekusi script
?>