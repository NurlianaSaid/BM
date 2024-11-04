    <?php

    include 'koneksi.php';

    if(isset($_POST['aksi'])){
        if($_POST['aksi'] == "Tambahkan"){

            $nama_industri = $_POST['nama_industri'];
            $bidang_industri = $_POST['bidang_industri'];
            $ceo = $_POST['ceo'];
            $jalan  = $_POST['jalan'];
            $kabupaten = $_POST['kabupaten'];
            $status = $_POST['status'];
            $tahun = $_POST['tahun'];

            $query = "INSERT INTO tabel_industri VALUES(null,'$nama_industri', '$bidang_industri', '$ceo', '$jalan', '$kabupaten', '$status', '$tahun')";
            $sql = mysqli_query($conn, $query);
            if ($sql){
                header("location: 3pengajuan siswa.php");
                //echo "data berhasil ditambahkan <a href='3pengajuan siswa.php'>KEMBALI</a>";
            }else {
                echo $query;
            }

            //echo $nama_industri." | ".$bidang_industri." | ".$ceo." | ".$jalan." | ".$kabupaten." | ".$status." | ".$tahun;

            //echo "<br>Tambahkan data <a href='3pengajuan siswa.php'>KEMBALI</a>";
        } else if($_POST['aksi'] == "Simpan Perubahan"){
            echo "Edit Data <a href='3pengajuan siswa.php'>KEMBALI</a>";
            // var_dump($_POST);
            $id = $_POST['id'];
            $nama_industri = $_POST['nama_industri'];
            $bidang_industri = $_POST['bidang_industri'];
            $ceo = $_POST['ceo'];
            $jalan  = $_POST['jalan'];
            $kabupaten = $_POST['kabupaten'];
            $status = $_POST['status'];
            $tahun = $_POST['tahun'];

            $query = "UPDATE tabel_industri SET nama_industri = '$nama_industri', bidang_industri = '$bidang_industri', ceo = '$ceo', jalan = '$jalan', kabupaten = '$kabupaten', status = '$status', tahun = '$tahun' WHERE id = '$id';";

            $sql = mysqli_query($conn, $query);
            if ($sql){
                header("location: 3pengajuan siswa.php");
                //echo "data berhasil ditambahkan <a href='3pengajuan siswa.php'>KEMBALI</a>";
            }else {
                echo $query;
            }
            
        }
    }
        if(isset($_GET['hapus'])){
            $id = $_GET['hapus'];
            $query = "DELETE FROM tabel_industri WHERE id = '$id';";
            $sql = mysqli_query($conn, $query);

            if ($sql){
                header("location: 3pengajuan siswa.php");
                //echo "data berhasil ditambahkan <a href='3pengajuan siswa.php'>KEMBALI</a>";
            }else {
                echo $query;
            }
        //echo "Hapus Data <a href='3pengajuan siswa.php'>KEMBALI</a>";
        }

        if(isset($_GET['detail'])){
            echo "Detail Data <a href='3pengajuan siswa.php'>KEMBALI</a>";
        }
    ?>