<?php 
include "koneksi_login.php";
session_start();

$loginMessage = ""; // Inisialisasi variabel

// Proses login hanya berjalan jika form dikirim dengan metode POST
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Ambil data dari form login
    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';

    // Siapkan query dengan prepared statements
    $stmt = $conn->prepare("SELECT * FROM tb_users WHERE username = ? AND password = ?");
    $stmt->bind_param("ss", $username, $password);
    $stmt->execute();
    $result = $stmt->get_result();
    
    // Periksa hasil query
    if ($result->num_rows > 0) {
        $data = $result->fetch_assoc();

        // Cek peran pengguna
        if ($data['role'] == "admin") {
            $_SESSION['username'] = $username;
            $_SESSION['role'] = "admin";
            $loginMessage = "Admin"; 
        } 
        else if ($data['role'] == "guru") {
            $_SESSION['username'] = $username;
            $_SESSION['role'] = "guru";
            $_SESSION['kode_guru'] = $data['kode_guru']; // Tambahkan sesi kode_guru
            $loginMessage = "Guru"; // Set pesan login berhasil untuk guru
        }
        else if ($data['role'] == "siswa") {
            $_SESSION['username'] = $username;
            $_SESSION['role'] = "siswa";
            $_SESSION['Id_siswaa'] = $data['Id_siswaa']; 
            $loginMessage = "Siswa"; // Set pesan login berhasil untuk user

            $stmt_perusahaan = $conn->prepare("SELECT id_perusahaan FROM siswa_pkl WHERE Id_siswaa = ?");
            $stmt_perusahaan->bind_param("i", $data['Id_siswaa']); // Bind Id_siswaa
            $stmt_perusahaan->execute();
            $result_perusahaan = $stmt_perusahaan->get_result();
        
            if ($result_perusahaan->num_rows > 0) {
                $perusahaan = $result_perusahaan->fetch_assoc();
                $_SESSION['id_perusahaan'] = $perusahaan['id_perusahaan']; // Simpan id_perusahaan ke SESSION
            } else {
                $_SESSION['id_perusahaan'] = null; // Tidak ada perusahaan terkait
            }
            $stmt_perusahaan->close();
        
            $loginMessage = "Siswa"; 
        }
    } else {
        $loginMessage = "Gagal"; // Set pesan login gagal
    }
    $stmt->close();
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Absensi Magang</title>

    <!-- SweetAlert CSS dan JavaScript -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    
    <link rel="stylesheet" href="login3.css">
</head>
<body>
<div class="login-container">
    <div class="login-box">
        <div class="logo">
            <img src="Screenshot (7).png" alt="Logo" class="logo-image">
        </div>
        <h2>Silahkan Log In</h2>
        <form action="" method="POST" name="form_input">
            <div class="input-group">
                <input type="text" id="username" name="username" placeholder="Username" required>
            </div>
            <div class="input-group">
                <input type="password" id="password" name="password" placeholder="Password" required>
            </div>
            <button type="submit" class="login-button" name="input"><h1>Login</h1></button>
        </form>
    </div>
</div>

<!-- SweetAlert Script -->
<?php if ($loginMessage): ?>
<script>
    <?php if ($loginMessage == "Admin"): ?>
        Swal.fire({
            title: 'Login Berhasil!',
            text: 'Selamat datang Admin!',
            icon: 'success',
            confirmButtonText: 'OK'
        }).then(() => {
            window.location = 'halaman_admin/0index.php';
        });
    <?php elseif ($loginMessage == "Guru"): ?>
        Swal.fire({
            title: 'Login Berhasil!',
            text: 'Selamat datang Guru!',
            icon: 'success',
            confirmButtonText: 'OK'
        }).then(() => {
            window.location = 'halaman_guru/index.php';
        });
    <?php elseif ($loginMessage == "Siswa"): ?>
        Swal.fire({
            title: 'Login Berhasil!',
            text: 'Selamat datang Siswa!',
            icon: 'success',
            confirmButtonText: 'OK'
        }).then(() => {
            window.location = 'halaman_siswa/beranda.php';
        });
    <?php elseif ($loginMessage == "Gagal"): ?>
        Swal.fire({
            title: 'Login Gagal!',
            text: 'Username atau Password salah.',
            icon: 'error',
            confirmButtonText: 'Coba Lagi'
        });
    <?php endif; ?>
</script>
<?php endif; ?>

</body>
</html>
