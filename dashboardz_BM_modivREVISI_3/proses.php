<?php
if(isset($_POST['aksi'])){
    if($_POST['aksi'] == "Tambahkan"){
        echo "Tambahkan data <a href='3pengajuan siswa.php'>KEMBALI</a>";
    } else if($_POST['aksi'] == "Simpan Perubahan"){
        echo "Edit Data <a href='3pengajuan siswa.php'>KEMBALI</a>";
    }
}
    if(isset($_GET['hapus'])){
    echo "Hapus Data <a href='3pengajuan siswa.php'>KEMBALI</a>";
    }

    if(isset($_GET['detail'])){
        echo "Detail Data <a href='3pengajuan siswa.php'>KEMBALI</a>";
    }
?>