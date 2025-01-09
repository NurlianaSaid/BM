<?php 
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

include 'koneksi.php';  // Pastikan koneksi ke database sudah benar

if (isset($_SESSION['Id_siswaa'])) {
    $Id_siswaa = $_SESSION['Id_siswaa'];
} else {
   header("location: ../index.php");
   exit();
}

// Query untuk mengambil data siswa berdasarkan Id_siswaa
$query = "SELECT 
    ts.Nama_siswa, 
    ts.Kelas_siswa, 
    ts.Nis, 
    ts.Jenis_kelamin, 
    tp.nama_perusahaan, 
    tp.lokasi
FROM 
    siswa_pkl sp
JOIN 
    tb_siswa ts ON sp.Id_siswaa = ts.Id_siswaa
JOIN 
    tb_perusahaan tp ON sp.id_perusahaan = tp.id_perusahaan
WHERE 
    sp.Id_siswaa = ?";

if ($stmt = mysqli_prepare($conn, $query)) {
    mysqli_stmt_bind_param($stmt, "i", $Id_siswaa); // Binding Id_siswaa ke parameter query
    mysqli_stmt_execute($stmt); // Menjalankan query
    $result = mysqli_stmt_get_result($stmt); // Mendapatkan hasil query
    
    if ($row = mysqli_fetch_assoc($result)) {
        $nama = $row['Nama_siswa'];
        $kelas = $row['Kelas_siswa'];
        $nis = $row['Nis'];
        $jenis_kelamin = $row['Jenis_kelamin'];
        $namaperusahaan = $row['nama_perusahaan'];
        $alamat = $row['lokasi'];
    } else {
        $nama = $kelas = $nis = $jenis_kelamin = $namaperusahaan = $alamat = "Data tidak ditemukan";
    }
    mysqli_stmt_close($stmt);
} else {
    echo "Error: " . mysqli_error($conn); 
}

$bulan = isset($_GET['bulan']) ? $_GET['bulan'] : date('m');  // Defaultkan ke bulan sekarang

// Query untuk mengambil data jurnal berdasarkan bulan
$query = "SELECT 
             j.tanggal,
             j.kegiatan,
             j.uraian
          FROM 
             tb_jurnal j
          WHERE 
             j.Id_siswaa = ? 
             AND MONTH(j.tanggal) = ?";


if ($stmt = mysqli_prepare($conn, $query)) {
    mysqli_stmt_bind_param($stmt, "ii", $Id_siswaa, $bulan); // Binding Id_siswaa dan bulan ke parameter query
    mysqli_stmt_execute($stmt); // Menjalankan query
    $result = mysqli_stmt_get_result($stmt); // Mendapatkan hasil query

    $jurnal_data = []; // Menyimpan data jurnal dalam array
    while ($row = mysqli_fetch_assoc($result)) {
        $jurnal_data[] = $row;  // Menyimpan setiap data jurnal dalam array
    }

    mysqli_stmt_close($stmt);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Program Absensi Magang PKL</title>
    <style>
        .container {
            max-width: 800px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
            border-radius: 5px;
        }

        h2 {
            text-align: center;
            margin-bottom: 30px;
        }

        .info-table {
            margin-bottom: 20px;
        }

        .info-table td:first-child {
            font-weight: bold;
            width: 150px;
        }

        .data-table {
            width: 100%;
            border-collapse: collapse;
        }

        .data-table th, .data-table td {
            border: 1px solid #000;
            padding: 10px;
            text-align: center;
        }

        .data-table th {
            background-color: #f4f4f4;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>PROGRAM PRAKTIK KERJA LAPANGAN (PKL)</h2>
    

    <!-- Tampilkan Data Siswa dan Perusahaan -->
    <table class="info-table">
        <tr>
            <td>Nama Peserta PKL</td>
            <td>: <?php echo htmlspecialchars($nama); ?></td>
        </tr>
        <tr>
            <td>Kelas</td>
            <td>: <?php echo htmlspecialchars($kelas); ?></td>
        </tr>
        <tr>
            <td>Semester</td>
            <td>: 5 (V)</td>
        </tr>
        <tr>
            <td>Paket Keahlian</td>
            <td>: Rekayasa Perangkat Lunak</td>
        </tr>
        <tr>
            <td>Nama Industri</td>
            <td>: <?php echo htmlspecialchars($namaperusahaan); ?></td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td>: <?php echo htmlspecialchars($alamat); ?></td>
        </tr>
        <tr>
            <td>Waktu PKL</td>
            <td>: 01-08-2024 - 30-11-2024</td>
        </tr>
    </table>

    <!-- Tabel Kegiatan PKL -->
    <table class="data-table">
    <thead>
        <tr>
            <th>Kompetensi <br> Dasar</th>
            <th>Topik <br>Pembelajaran/Pekerjaan</th>
            <th>Tanggal <br>Pelaksanaan</th>
            <th>Tanda Tangan <br>Pembimbing</th>
        </tr>
    </thead>
    <tbody>
        <?php
        // Menampilkan semua data jurnal
        if (count($jurnal_data) > 0) {
            foreach ($jurnal_data as $data) {
                echo "<tr>
                        <td>" . htmlspecialchars($data['kegiatan']) . "</td>
                        <td>" . htmlspecialchars($data['uraian']) . "</td>
                       <td>" . date('d-m-Y', strtotime($data['tanggal'])) . "</td>
                        <td></td>
                    </tr>";
            }
        } else {
            echo "<tr><td colspan='4'>Tidak ada data untuk bulan ini.</td></tr>";
        }
        ?>
    </tbody>
</table>

</div>

</body>
</html>
