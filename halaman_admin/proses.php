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
                header("location:dataindustri.php");
                //echo "data berhasil ditambahkan <a href='3pengajuan siswa.php'>KEMBALI</a>";
            }else {
                echo $query;
            }

            //echo $nama_industri." | ".$bidang_industri." | ".$ceo." | ".$jalan." | ".$kabupaten." | ".$status." | ".$tahun;

            //echo "<br>Tambahkan data <a href='3pengajuan siswa.php'>KEMBALI</a>";
        } else if($_POST['aksi'] == "Simpan Perubahan"){
            echo "Edit Data <a href='pengajuansiswa.php'>KEMBALI</a>";
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
                header("location: dataindustri.php");
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
                header("location: dataindustri.php");
                //echo "data berhasil ditambahkan <a href='3pengajuan siswa.php'>KEMBALI</a>";
            }else {
                echo $query;
            }
        //echo "Hapus Data <a href='3pengajuan siswa.php'>KEMBALI</a>";
        }

        if(isset($_GET['detail'])){
            echo "Detail Data <a href='dataindustri'>KEMBALI</a>";
        }

     

        //input data master siswa
        
        if (isset($_POST['aksi1'])) {
            if ($_POST['aksi1'] == "Tambahkan") {
                $Nis = $_POST['Nis'];
                $Nama_siswa = $_POST['Nama_siswa'];
                $Kelas_siswa = $_POST['Kelas_siswa'];
                $Jenis_kelamin = $_POST['Jenis_kelamin'];
                $Alamat = $_POST['Alamat'];
        
                // Menetapkan nilai default untuk Foto_siswa jika tidak ada file yang diunggah
                $fotoSiswa = "img/smk.png";  // Nilai default untuk Foto_siswa
        
                // Periksa apakah ada file yang diunggah
                if (isset($_FILES['Foto_siswa']) && $_FILES['Foto_siswa']['error'] == 0) {
                    $fotoSiswa = $_FILES['Foto_siswa']['name'];
                    $tmpName = $_FILES['Foto_siswa']['tmp_name'];
                    $uploadDir = "img/"; // Tentukan folder penyimpanan foto
                    $uploadFile = $uploadDir . basename($fotoSiswa);
        
                    if (move_uploaded_file($tmpName, $uploadFile)) {
                        echo "berhasil diunggah";
                    } else {
                        echo "Gagal mengunggah file.";
                    }
                }
        
                // Query INSERT dengan nilai default Foto_siswa
                $query = "INSERT INTO tb_siswa (Nis, Nama_siswa, Kelas_siswa, Jenis_kelamin, Alamat, Foto_siswa) 
                          VALUES ('$Nis', '$Nama_siswa', '$Kelas_siswa', '$Jenis_kelamin', '$Alamat', '$fotoSiswa')";
        
                $sql = mysqli_query($conn, $query);
                if ($sql) {
                    header("Location: datamastersiswa.php");
                } else {
                    echo $query;
                }
    
                //echo $nama_industri." | ".$bidang_industri." | ".$ceo." | ".$jalan." | ".$kabupaten." | ".$status." | ".$tahun;
    
                //echo "<br>Tambahkan data <a href='3pengajuan siswa.php'>KEMBALI</a>";
            } else if($_POST['aksi1'] == "Simpan Perubahan"){
                echo "Edit Data <a href='datamastersiswa.php'>KEMBALI</a>";
                // var_dump($_POST);
                $Nis = $_POST['Nis'];
                $Nama_siswa = $_POST['Nama_siswa'];
                $Kelas_siswa = $_POST['Kelas_siswa'];
                $Jenis_kelamin = $_POST['Jenis_kelamin'];
                $Alamat = $_POST['Alamat'];
                $query = "UPDATE tb_siswa 
                            SET 
                                Nis = '$Nis', 
                                Nama_siswa = '$Nama_siswa', 
                                Kelas_siswa = '$Kelas_siswa',
                                Jenis_kelamin = '$Jenis_kelamin',
                                 Alamat = '$Alamat'
                            WHERE Nis = '$Nis';";
    
                $sql = mysqli_query($conn, $query);
                if ($sql){
                    header("location:datamastersiswa.php");
                    //echo "data berhasil ditambahkan <a href='3pengajuan siswa.php'>KEMBALI</a>";
                }else {
                    echo $query;
                }
                
            }
                
            }
        
        
        if(isset($_GET['delete'])){
            $id = $_GET['delete'];
            $query = "DELETE FROM tb_siswa WHERE Id_siswaa = '$id';";
            $sql = mysqli_query($conn, $query);

            if ($sql){
                header("location: datamastersiswa.php");
                //echo "data berhasil ditambahkan <a href='3pengajuan siswa.php'>KEMBALI</a>";
            }else {
                echo $query;
            }
        //echo "Hapus Data <a href='3pengajuan siswa.php'>KEMBALI</a>";
        }

        // input data guru
        if(isset($_POST['aksi2'])){
            if($_POST['aksi2'] == "Tambahkan"){
    
                $nama_guru = $_POST['nama_guru'];
                $kode_guru = $_POST['kode_guru'];
                $wilayah_Monitoring  = $_POST['wilayah_Monitoring'];
                $kontak  = $_POST['kontak'];
                $query =  "INSERT INTO tb_guru (nama_guru, kode_guru, wilayah_mnr, kontak) 
                          VALUES ('$nama_guru', '$kode_guru', '$wilayah_Monitoring', '$kontak')";
                $sql = mysqli_query($conn, $query);
                if ($sql){
                    header("location:datamasterguru.php");
                    //echo "data berhasil ditambahkan <a href='3pengajuan siswa.php'>KEMBALI</a>";
                }else {
                    echo $query;
                }
    
                //echo $nama_industri." | ".$bidang_industri." | ".$ceo." | ".$jalan." | ".$kabupaten." | ".$status." | ".$tahun;
    
                //echo "<br>Tambahkan data <a href='3pengajuan siswa.php'>KEMBALI</a>";
            } else if($_POST['aksi2'] == "Simpan Perubahan") {
                echo "Edit Data <a href='datamasterguru.php'>KEMBALI</a>";
            
                $nama_guru = $_POST['nama_guru'];
                $kode_guru = $_POST['kode_guru'];
                $wilayah_Monitoring = $_POST['wilayah_Monitoring'];
                $kontak  = $_POST['kontak'];
            
                // Query untuk update data
                $query = "UPDATE tb_guru 
                          SET nama_guru = '$nama_guru', 
                              wilayah_mnr = '$wilayah_Monitoring', 
                              kontak = '$kontak'
                          WHERE kode_guru = '$kode_guru';";
            
                $sql = mysqli_query($conn, $query);
            
                if ($sql) { 
                    header("location: datamasterguru.php");
                } else {
                    echo "Error: " . mysqli_error($conn); // Tampilkan error jika query gagal
                }
            }
        }
            if(isset($_GET['padam'])){
                $id = $_GET['padam'];
                $query = "DELETE FROM tb_guru WHERE kode_guru = '$id';";
                $sql = mysqli_query($conn, $query);
    
                if ($sql){
                    header("location: datamasterguru.php");
                    //echo "data berhasil ditambahkan <a href='3pengajuan siswa.php'>KEMBALI</a>";
                }else {
                    echo $query;
                }
            //echo "Hapus Data <a href='3pengajuan siswa.php'>KEMBALI</a>";
            }
    
            if(isset($_GET['move'])){
                $id = $_GET['move'];
                $query = "DELETE FROM tb_users WHERE id_users = '$id';";
                $sql = mysqli_query($conn, $query);
    
                if ($sql){
                    header("location: user.php");
                    //echo "data berhasil ditambahkan <a href='3pengajuan siswa.php'>KEMBALI</a>";
                }else {
                    echo $query;
                }
            //echo "Hapus Data <a href='3pengajuan siswa.php'>KEMBALI</a>";
            }
    
    ?>
