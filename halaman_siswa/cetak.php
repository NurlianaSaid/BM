<?php
// Mulai sesi untuk menangkap data sesi pengguna
session_start();
require_once 'vendor/dompdf/autoload.inc.php';
use Dompdf\Dompdf;

// Koneksi ke database
include 'koneksi.php'; // Pastikan koneksi sudah ada

// Menangkap bulan dari query string atau menggunakan bulan saat ini sebagai default
$bulan = isset($_GET['bulan']) ? $_GET['bulan'] : date('m'); // Default ke bulan saat ini jika tidak ada bulan yang dipilih
$id_siswaa = $_SESSION['Id_siswaa']; // Menangkap ID siswa yang sedang login

// Query untuk mengambil data jurnal berdasarkan bulan yang dipilih
$sql = "SELECT * FROM tb_jurnal WHERE Id_siswaa = '$id_siswaa' AND MONTH(tanggal) = '$bulan'";
$query = mysqli_query($conn, $sql);

// Tangkap hasil query dan tampilkan di format.php
ob_start();  // Mulai output buffering
include 'format.php'; // Eksekusi file format.php yang berisi HTML untuk laporan
$html = ob_get_clean();  // Ambil konten HTML yang dihasilkan oleh format.php

// Instansiasi Dompdf
$dompdf = new Dompdf();
$dompdf->loadHtml($html); // Load HTML yang diambil dari format.php

// Set ukuran kertas dan orientasi PDF
$dompdf->setPaper('A4', 'landscape');

// Render HTML menjadi PDF
$dompdf->render();

// Output PDF ke browser
$dompdf->stream("jurnal_pdf", ["Attachment" => 0]); // Menampilkan PDF di browser tanpa mengunduh
?>
