<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_sekolah";

// Membuat koneksi ke database
$conn = new mysqli($servername, $username, $password, $dbname);

// Periksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Proses jika form disubmit
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $perusahaan = $_POST['perusahaan'];
    $tanggal = $_POST['tanggal'];
    $kelas = $_POST['kelas'];
    $alamat = $_POST['alamat'];
    $jumlah = $_POST['jumlah'];

    // Menangani upload gambar
    $target_dir = "uploads/"; // Folder untuk menyimpan gambar
    $target_file = $target_dir . basename($_FILES["gambar"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    // Cek apakah file gambar sudah ada
    if (file_exists($target_file)) {
        echo "Maaf, file sudah ada.";
        $uploadOk = 0;
    }

    // Cek ukuran file
    if ($_FILES["gambar"]["size"] > 500000) { // Batas ukuran 500KB
        echo "Maaf, ukuran file terlalu besar.";
        $uploadOk = 0;
    }

    // Cek jenis file gambar
    if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
        echo "Maaf, hanya file JPG, JPEG, PNG & GIF yang diizinkan.";
        $uploadOk = 0;
    }

    // Cek apakah $uploadOk diset ke 0 oleh kesalahan
    if ($uploadOk == 0) {
        echo "Maaf, file tidak diupload.";
    } else {
        // Jika semuanya baik, upload file
        if (move_uploaded_file($_FILES["gambar"]["tmp_name"], $target_file)) {
            // Siapkan dan bind
            $stmt = $conn->prepare("INSERT INTO tb_laporanmonir (perusahaan, tanggal, kelas, alamat, jumlah, gambar) VALUES (?, ?, ?, ?, ?, ?)");
            $stmt->bind_param("ssssss", $perusahaan, $tanggal, $kelas, $alamat, $jumlah, $target_file);

            // Eksekusi statement
            if ($stmt->execute()) {
                echo "Data berhasil ditambahkan.";
            } else {
                echo "Error: " . $stmt->error;
            }

            // Tutup statement
            $stmt->close();
        } else {
            echo "Maaf, terjadi kesalahan saat mengupload file.";
        }
    }
}

// Tutup koneksi
$conn->close();
?>
