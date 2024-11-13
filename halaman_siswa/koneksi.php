<?php
$servername = "localhost"; // Nama server, biasanya 'localhost'
$username = "root"; // Username database
$password = ""; // Password database
$dbname = "anakmagang"; // Nama database

// Membuat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);

// Mengecek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
?>

