<?php
// Koneksi ke database
include 'koneksi.php';

if (isset($_GET['kode']) && isset($_GET['role'])) {  // Gunakan 'kode' sebagai parameter
    $kode = $_GET['kode'];  // Mengambil 'kode' dari URL
    $role = $_GET['role'];  // Mengambil 'role' dari URL
    $nama = '';

    if ($role == 'guru') {
        // Jika role adalah guru, ambil nama dari tb_guru berdasarkan kode_guru
        $sql = "SELECT nama_guru FROM tb_guru WHERE kode_guru = '$kode'";  // Ganti $id_kode dengan $kode
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $nama = $row['nama_guru']; // Ambil nama guru
        }
    } elseif ($role == 'siswa') {
        // Jika role adalah siswa, ambil nama dari tb_siswa berdasarkan Id_siswaa
        $sql = "SELECT Nama_siswa FROM tb_siswa WHERE Id_siswaa = '$kode'";  // Ganti $id_kode dengan $kode
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $nama = $row['Nama_siswa']; // Ambil nama siswa
        }
    }

    echo $nama; // Kirim nama kembali ke JavaScript
}

$conn->close();
?>
