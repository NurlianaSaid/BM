<?php include 'laporanmonir/koneksi.php' ;

if (isset($_POST['id_jadwal']) && isset($_POST['status'])) {
    // Ambil data dari AJAX untuk memperbarui status
    $id_jadwal = $_POST['id_jadwal'];
    $status = $_POST['status'];

    // Update status di database
    $sql_update = "UPDATE tb_jadwal SET status = '$status' WHERE id_jadwal = $id_jadwal";
    if ($conn->query($sql_update) === TRUE) {
        echo "Status berhasil diperbarui di server<br>";
    } else {
        echo "Error updating status: " . $conn->error . "<br>";
    }
}

// Query SQL
$sql = "SELECT 
            tb_jadwal.id_jadwal,
            tb_guru.kode_guru,
            tb_perusahaan.nama_perusahaan,
            tb_jadwal.tanggal_monitoring,
            tb_jadwal.kegiatan,
            tb_jadwal.status
        FROM 
            tb_jadwal
        JOIN 
            tb_perusahaan ON tb_jadwal.id_perusahaan = tb_perusahaan.id_perusahaan
        JOIN 
            tb_guru ON tb_jadwal.kode_guru = tb_guru.kode_guru
        ORDER BY 
            tb_jadwal.tanggal_monitoring DESC";

// Eksekusi query
$result = $conn->query($sql);

// Tampilkan hasil
// if ($result->num_rows > 0) {
//     while($row = $result->fetch_assoc()) {
//         echo "ID Jadwal: " . $row["id_jadwal"] . " - Guru: " . $row["kode_guru"] . " - Perusahaan: " . $row["nama_perusahaan"] . " - Tanggal: " . $row["tanggal_monitoring"] . " - Kegiatan: " . $row["kegiatan"] . "<br>";
//     }
// } else {
//     echo "No results found.";
// }

// // Tutup koneksi
// $conn->close();



?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Data Anak Magang </title>

    <!-- Custom fonts for this template -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

        <style>
        .topbar{
            height: 4.375rem; 
            }
            .nav-item .active {
            background-color: #A1CCCF; 
            color: #fff; 
            border-left: 4px solid blue;
        } 
        
        /* Menjamin bahwa warna teks aktif tetap putih saat kursor tidak ada di atasnya */
        .nav-item a.active:not(:hover) span{
            color: #fff; /* Pastikan warna tetap putih */
        }
        .nav-item .nav-link.active:not(:hover) svg path {
            fill: white; /* Icon color */
        }
        .img_profile{
            margin-right: 0px;
            width: 50px;
        }

     </style>

<link href="css/sb-admin-2.css?v3" rel="stylesheet">
    <link rel="stylesheet" href="css/jadwal.css?v2">

    <!-- Custom styles for this page -->
    <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                    <div class="sidebar-brand-icon rotate-n-0">
                        <div class="sidebar-brand-icon rotate-n-" style="color:#000;">
                        <i href="index.html"><img src="logo.svg"class="img_logo" alt=""></i>
                        </div>
                    </div>
                <div class="sidebar-brand-text mx-3">Halaman Guru</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">
            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="index.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="dataanakmagang.php">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Data Anak Magang</span></a>
            </li>
            
            <li class="nav-item">
                <a class="nav-link" href="verifikasidata.php">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Verifikasi Data Jurnal</span></a>
            </li>
            
            <li class="nav-item">
                <a class="nav-link" href="laporananakmagang.php">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Laporan Anak Magang</span></a>
            </li>

            <li class="nav-item active" id="monir">
                <a class="nav-link active" href="#" data-toggle="collapse" data-target="#collapseTwo"
                   aria-expanded="false" aria-controls="collapseTwo" id="monitoring-link">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Monitoring</span>
                </a>
               
                <div id="collapseTwo" class="collapse show" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Kegiatan Monitoring:</h6>
                        <a class="collapse-item " href="jadwalmonitoing.php">Jadwal</a>
                        <a class="collapse-item" href="laporanmonitoring.php">Laporan</a>
                    </div>
                </div>
            </li>
            <!-- <li class="nav-item active">
                <a class="nav-link" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true"
                    aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Components</span>
                </a>
                <div id="collapseTwo" class="collapse show" aria-labelledby="headingTwo"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Custom Components:</h6>
                        <a class="collapse-item active" href="jadwalmonitoing.html">Buttons</a>
                        <a class="collapse-item " href="laporanmonitoring.html">Laporan</a>
                    </div>
                </div>
            </li> -->

            <!-- Divider -->
            <hr class="sidebar-divider">
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>
        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <!-- <form class="form-inline"> -->
                        <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                            <i class="fa fa-bars"></i>
                        </button>
                        <h3>Jadwal Monitoring</h3>
                    <!-- </form> -->

                    <!-- Topbar Search -->

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">


                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-ite1 dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Douglas McGee</span>
                                <img class="img_profile rounded-circle" src="img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Settings
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Activity Log
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                   

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                            <div class="row mb-0 container-select-perusahaan">
                                    <div class="col-md-3 drop-perusahaan">
                                        <select id="companyFilter" class="form-control">
                                            <option value="">Semua Perusahaan</option>
                                            <option value="Afila Media Karya">Afila Media Karya</option>
                                            <option value="Indigo Hub">Indigo Hub</option>
                                            <option value="Percetakan">Percetakan</option>
                                            <option value="Bengkel">Bengkel</option>
                                            <option value="Telkom">Telkom</option>
                                            <option value="Yamaha">Yamaha</option>
                                            <option value="Suzuki">Suzuki</option>
                                        </select>
                                    </div>
                                    
                                </div>
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Industri</th>
                                            <th>Hari, Tanggal</th>
                                            <th>Kegiatan</th>
                                            <th>Aksi</th> 
                                        </tr>
                                    </thead>
                                    <!-- <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Afila Media Karya</td>
                                            <td>Senin,06/10/2024</td>
                                            <td>Monitoring</td>
                                            <td class="aksi">
                                                <span class="sel">Konfirmasi</span> 
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>1</td>
                                            <td>Indigo Hub</td>
                                            <td>Senin,06/10/2024</td>
                                            <td>Monitoring</td>
                                            <td class="aksi">
                                                <span class="kett">Selesai</span> 
                                            </td>
                                        </tr>
                                    </tbody> -->
                                    <?php
if ($result->num_rows > 0) {
    $no = 1;
    while ($row = $result->fetch_assoc()) {
        // Translasi hari dalam bahasa Indonesia
        $days = [
            'Sunday' => 'Minggu',
            'Monday' => 'Senin',
            'Tuesday' => 'Selasa',
            'Wednesday' => 'Rabu',
            'Thursday' => 'Kamis',
            'Friday' => 'Jumat',
            'Saturday' => 'Sabtu'
        ];
        $dayInEnglish = date("l", strtotime($row["tanggal_monitoring"]));
        $dayInIndonesian = $days[$dayInEnglish]; // Mengonversi ke bahasa Indonesia

        // Format tanggal lengkap
        $tanggal = $dayInIndonesian . ", " . date("d/m/Y", strtotime($row["tanggal_monitoring"]));

           // Menampilkan status di halaman
           $statusButton = $row["status"] == "selesai" ? 
           "<span class='kett'>Selesai</span>" : 
           "<span class='sel' onclick='confirmAndComplete(this, " . $row['id_jadwal'] . ")'>Konfirmasi</span>";
           
                echo "<tr>
                        <td>" . $no . "</td>
                        <td>" . $row["nama_perusahaan"] . "</td>
                        <td>" . $tanggal . "</td>
                        <td>" . $row["kegiatan"] . "</td>
                         <td class='aksi'>" . $statusButton . "</td>
                      </tr>";
                $no++;
            }
        } else {
            echo "<tr><td colspan='5'>No results found.</td></tr>";
        }
        ?>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->
             
            <script>
                const currentLocation = location.href; // Mendapatkan URL halaman saat ini
                const menuItem = document.querySelectorAll('li.nav-item a'); // Mendapatkan semua elemen 'a' di dalam 'li.nav-item'
                
                menuItem.forEach(item => {
                  if(item.href.includes("jadwalmonitoing.php")){ 
                    item.classList.add('active'); // Tambahkan class 'active' jika URL mengandung "industri.html"
                  }
                });


     function confirmAndComplete(element, idJadwal) {

                      // Jika status sudah selesai, tidak ada aksi yang dilakukan
    if (element.className === 'kett') {
        return; // Jangan lakukan apa-apa jika status sudah "selesai"
    }
    // Menampilkan pesan konfirmasi
    if (confirm("Apakah yakin sudah menyelesaikannya?")) {
        // Ubah teks menjadi "Selesai" dan ubah kelas menjadi "kett"
        element.innerHTML = "Selesai";
        element.className = "kett";

        // Tampilkan alert "Selamat bertugas"
        alert("Selamat bertugas");

          // Kirim data status ke server menggunakan AJAX
          const xhr = new XMLHttpRequest();
        xhr.open("POST", "", true);  // Menggunakan file yang sama (jadwalmonitoring.php)
        xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        xhr.onreadystatechange = function () {
            if (xhr.readyState === 4 && xhr.status === 200) {
                console.log("Status berhasil diperbarui di server");
                // Perbarui status setelah pembaruan di server
                element.innerHTML = "Selesai";  // Ubah teks elemen status
                element.className = "kett";  // Menambahkan kelas untuk status selesai
            }
        };
        xhr.send("id_jadwal=" + idJadwal + "&status=selesai");
    }
}
              </script>
            <!-- Footer -->
            <?php
// Tutup koneksi
$conn->close();
?>
            <?php require 'footer.php' ?>