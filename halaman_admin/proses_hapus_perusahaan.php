<?php 
include 'koneksi.php';

if (isset($_GET['id_perusahaan'])) {
    $id_perusahaan = $_GET['id_perusahaan'];

    // Query untuk menghapus data perusahaan berdasarkan ID
    $sql = "DELETE FROM tb_perusahaan WHERE id_perusahaan = '$id_perusahaan'";

    if ($conn->query($sql) === TRUE) {
        // Jika berhasil, tampilkan SweetAlert dan redirect
        echo "<script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>";
        echo "
        <script>
            document.addEventListener('DOMContentLoaded', function () {
                Swal.fire({
                    icon: 'success',
                    title: 'Data berhasil dihapus!',
                    showConfirmButton: false,
                    timer: 2000
                }).then(function() {
                    window.location.href = 'dataindustri.php';
                });
            });
        </script>";
    } else {
        // Jika gagal, tampilkan SweetAlert error dan redirect
        echo "<script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>";
        echo "
        <script>
            document.addEventListener('DOMContentLoaded', function () {
                Swal.fire({
                    icon: 'error',
                    title: 'Gagal menghapus data!',
                    text: '" . $conn->error . "',
                    showConfirmButton: false,
                    timer: 2000
                }).then(function() {
                    window.location.href = 'dataindustri.php';
                });
            });
        </script>";
    }
}
?>
