<?php
session_start();

// Periksa apakah pengguna sudah login dan memiliki role "guru"
if (!isset($_SESSION['username']) || $_SESSION['role'] != "siswa") {
    // Jika belum login atau bukan guru, arahkan ke halaman login
    header("location:../index1.php");
    exit();
}
// echo "Selamat datang User, " . $_SESSION['username'];
?>
