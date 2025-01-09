<?php
// Memulai session
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
if (!isset($_SESSION['username']) || $_SESSION['role'] != "admin") {
    header("location:../index1.php"); // arahkan ke halaman login
    exit();
}

?>