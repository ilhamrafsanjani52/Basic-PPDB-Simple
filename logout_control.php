<?php
session_start();

session_destroy();

session_start();
$_SESSION['login_error'] = "Anda berhasil Logout. Jangan lupa kembali!";

header('location:login.php');
?>