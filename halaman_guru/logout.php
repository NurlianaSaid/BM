<?php
session_start(); // Memulai sesi
session_unset(); // Menghapus semua variabel sesi
session_destroy(); // Menghancurkan sesi

// Arahkan kembali ke halaman login atau halaman lain
header("Location: ../index1.php"); // Sesuaikan dengan lokasi halaman login Anda
exit();
?>
