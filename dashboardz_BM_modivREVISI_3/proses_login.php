

<?php
// Koneksi ke database
$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'db_sekolah';
$koneksi = mysqli_connect($host, $user, $pass, $db);

if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

// if($koneksi){
//     echo "koneksi berhasil";
// }else{
//     echo "gagal koneksi";
// }

// die();

// Mendapatkan data dari form
$username = mysqli_real_escape_string($koneksi, $_POST['username']);
$password = mysqli_real_escape_string($koneksi, $_POST['password']);

// Query untuk memeriksa data login berdasarkan username dan password
$querySiswa = " SELECT * FROM tb_siswa WHERE Nama_siswa = '$username' AND Nisn = '$password'";
$queryGuru =  " SELECT * FROM tb_guru WHERE Username = '$username' AND password = '$password'";
$queryAdmin = " SELECT * FROM tb_admin WHERE username = '$username' AND password = '$password'";

// Mengecek siswa
$resultSiswa = mysqli_query($koneksi, $querySiswa);
if (mysqli_num_rows($resultSiswa) > 0) {
    // Jika login berhasil sebagai siswa
    header("Location: ../halaman_siswa/index.php");
    exit();
}

// Mengecek guru
$resultGuru = mysqli_query($koneksi, $queryGuru);
if (mysqli_num_rows($resultGuru) > 0) {
    // Jika login berhasil sebagai guru
    header("Location: ../halaman_guru/index.php");
    exit();
}

// Mengecek admin
$resultAdmin = mysqli_query($koneksi, $queryAdmin);
if (mysqli_num_rows($resultAdmin) > 0) {
    // Jika login berhasil sebagai admin
    header("Location: 0index.php");
    exit();
}

// Jika login gagal
echo "Login gagal! Username atau password salah.";
?>


