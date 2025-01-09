<?php
// Memulai session
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

// Validasi login dan role
if (!isset($_SESSION['username']) || $_SESSION['role'] != "guru") {
    // Jika belum login atau role bukan guru, arahkan ke halaman login
    header("location:../index1.php");
    exit();
}

// Validasi kode_guru
if (isset($_SESSION['kode_guru'])) {
    $kode_guru = $_SESSION['kode_guru'];
} else {
    // Hentikan eksekusi jika kode_guru tidak tersedia
    die("Kode guru tidak tersedia. Pastikan login terlebih dahulu.");
}
?>
