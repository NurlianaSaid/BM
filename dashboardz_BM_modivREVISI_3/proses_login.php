<?php
    //untuk menghubungkan koneksi database di file koneksi.php
    include 'koneksi_login.php';

    //cara menangkap data yang dikirim dari form
    if(isset($_POST['input'])){
        $username = $_POST['username'];
        $password = $_POST['kode_admin'];

        //mengambil data yang sesuai username dan password
        $data = mysqli_query($koneksi,"SELECT * FROM tb_admin WHERE username='$username' AND kode_admin='$password'");
         if(mysqli_num_rows($data)){
            echo "login Berhasil";
         }else{
            echo "login gagal";
         }
    }
?>