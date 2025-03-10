<?php
session_start(); // memulai sesi
session_unset();
session_destroy();
header('Location: login.php');
exit();
?>