
<?php 

// Tentukan folder tujuan penyimpanan file gambar
$targetDir = "uploads/";
$uploadOk = 1;

// Pastikan semua data ada dan tidak kosong
if (isset($_POST['perusahaan'], $_POST['tanggal'], $_POST['kelas'], $_POST['alamat'], $_POST['jumlah'], $_FILES['gambar']) && $_FILES['gambar']['error'] === 0) {

    // Ambil data dari form
    $perusahaan = $_POST['perusahaan'];
    $tanggal = $_POST['tanggal'];
    $kelas = $_POST['kelas'];
    $alamat = $_POST['alamat'];
    $jumlah = (int)$_POST['jumlah'];

    // Proses file gambar
    $gambar = $_FILES['gambar']['name'];
    $targetFile = $targetDir . basename($gambar);

    // Buat folder uploads jika belum ada
    if (!is_dir($targetDir)) {
        mkdir($targetDir, 0777, true);
    }

    // Cek tipe file gambar
    $fileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));
    $allowedTypes = ['jpg', 'jpeg', 'png', 'gif'];
    if (!in_array($fileType, $allowedTypes)) {
        echo json_encode(["error" => "Hanya file gambar yang diizinkan."]);
        exit();
    }

    // Pindahkan file yang diunggah
    if (!move_uploaded_file($_FILES['gambar']['tmp_name'], $targetFile)) {
        echo json_encode(["error" => "Terjadi kesalahan saat mengunggah gambar."]);
        exit();
    }

    // Query untuk menyimpan data laporan ke tb_laporanmonir
    $stmt = $conn->prepare("INSERT INTO tb_laporanmonir (Nama_perusahaan, Tanggal, Kelas, Kabupaten, jumlah_siswa, Gambar) VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssis", $perusahaan, $tanggal, $kelas, $alamat, $jumlah, $gambar);
    
    if ($stmt->execute()) {
        $last_id = $stmt->insert_id;  // Mendapatkan ID laporan yang baru disimpan

        // Menyimpan data siswa
        for ($i = 1; $i <= $jumlah; $i++) {
            if (isset($_POST["namaSiswa$i"], $_POST["perkembangan$i"], $_POST["pelanggaran$i"])) {
                $namaSiswa = $_POST["namaSiswa$i"];
                $perkembangan = $_POST["perkembangan$i"];
                $pelanggaran = $_POST["pelanggaran$i"];

                // Query untuk memasukkan data siswa ke tabel tb_siswa
                $stmtSiswa = $conn->prepare("INSERT INTO tb_siswa (laporan_id, nama, perkembangan, pelanggaran) VALUES (?, ?, ?, ?)");
                $stmtSiswa->bind_param("isss", $last_id, $namaSiswa, $perkembangan, $pelanggaran);
                $stmtSiswa->execute();
                $stmtSiswa->close();
            }
        }

        echo json_encode(["message" => "Data berhasil disimpan!"]);
    } else {
        echo json_encode(["error" => "Data gagal disimpan: " . $stmt->error]);
    }

    $stmt->close();
} else {
    echo json_encode(["error" => "Data tidak lengkap atau gambar tidak valid."]);
}

$conn->close();
?>
