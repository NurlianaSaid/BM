<?php
if (isset($_GET['role']) && isset($_GET['kode'])) {
    $role = $_GET['role'];
    $kode = $_GET['kode'];

    // Koneksi ke database
    $conn = new mysqli('localhost', 'root', '', 'anakmagang');

    if ($conn->connect_error) {
        echo json_encode(['success' => false, 'message' => 'Koneksi gagal']);
        exit;
    }

    // Tentukan tabel dan kolom yang digunakan berdasarkan role
    if ($role == 'siswa') {
        $table = 'tb_siswa';
        $field = 'Id_siswaa';
    } elseif ($role == 'guru') {
        $table = 'tb_guru';
        $field = 'kode_guru';
    } else {
        echo json_encode(['success' => false, 'message' => 'Role tidak valid']);
        exit;
    }

    // Query untuk mencari nama berdasarkan kode
    $stmt = $conn->prepare("SELECT nama FROM $table WHERE $field = ?");
    $stmt->bind_param('s', $kode);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        echo json_encode(['success' => true, 'nama' => $row['nama']]);
    } else {
        echo json_encode(['success' => false, 'message' => 'Data tidak ditemukan']);
    }

    $stmt->close();
    $conn->close();
} else {
    echo json_encode(['success' => false, 'message' => 'Parameter tidak lengkap']);
}
?>
