<?php 
include 'komas.php';
$kode_guru = $_SESSION['kode_guru'];

include 'laporanmonir/koneksi.php' ;

$query = "SELECT
          s.Nama_siswa,
          s.Kelas_siswa,
          lp.file
          FROM 
          siswa_pkl sp
          JOIN 
          tb_siswa s ON sp.Id_siswaa = s.Id_siswaa
          JOIN
          tb_laporan lp ON sp.Id_siswaa = lp.Id_siswaa
          WHERE  
          sp.kode_guru= ?";

         $stmt = $conn->prepare($query);
         $stmt->bind_param("s", $kode_guru);
         $stmt->execute();
         $result = $stmt->get_result();

         $stmt->close();

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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">


    <!-- Custom fonts for this template -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
<style>
        .nav-item a.active {
            background-color: #A1CCCF; /* Biru muda */
            color: #fff; /* Warna teks saat hover */
            /* opacity: 0.5; */
            height: 54px;
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
            /* width: 50px; */
        }
</style>
    <!-- Custom styles for this template -->
    <link href="css/laporan.css?v3" rel="stylesheet">
    <link rel="stylesheet" href="css/card.css?v7">

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
            <li class="nav-item ">
                <a class="nav-link" href="dataanakmagang.php">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Data Anak Magang</span></a>
            </li>
            
            <li class="nav-item ">
                <a class="nav-link" href="verifikasidata.php">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Verifikasi Data Jurnal</span></a>
            </li>
            
            <li class="nav-item active">
                <a class="nav-link" href="laporananakmagang.php">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Laporan Anak Magang</span></a>
            </li>
            <li class="nav-item ">
                <a class="nav-link collapsed" href="jadwalmonitoring.php" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Monitoring</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Kegiatan Monitoring:</h6>
                        <a class="collapse-item " href="jadwalmonitoing.php">Jadwal</a>
                        <a class="collapse-item" href="laporanmonitoring.php">Laporan</a>
                    </div>
                </div>
            </li>

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
                        <h3>Laporan Anak Magang</h3>
                    <!-- </form> -->

                    <!-- Topbar Search -->

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

<div class="topbar-divider d-none d-sm-block"></div> 

<li class="dropdown no-arrow">
    <a class="nav-link1 dropdown-toggle" href="#" id="userDropdown" role="button"
        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        
        <span class="mr-2 d-none d-lg-inline text-gray-600 small d-flex align-items-center">
       <?= "Hai, " . $_SESSION['username']; ?>
        </span>

        <img class="img_profile"
            src="img/profil.svg">
    </a>
    <!-- Dropdown - User Information -->
    <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
        aria-labelledby="userDropdown">
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

                    <div id="layoutSidenav">
                        <div id="layoutSidenav_content">
                            <main>
                                <div class="container-fluid px-4">
                                <?php if ($result->num_rows === 0): ?>
                                   <div class="alert alert-info text-center mt-4">
                                     <p><strong>Tidak ada laporan yang tersedia untuk guru ini.</strong></p>
                                    </div>
                                    <?php else: ?>
                                    <div class="row g-4">    
                                    <?php while ($row = $result->fetch_assoc()): ?>       
                                        <div class="col-xl-2 col-lg-3 col-md-6 col-sm-12 mb-4">
                                            <div class="card bg-white text-white mb-4">
                                                <div class="card-body">
                                                    <h4>PDF</h4>
                                                    <img src="img/pdf.png" alt="">
                                                </div>
                                            </div>
                                            <div class="isi">
                                            <p>Nama  : <?= htmlspecialchars($row['Nama_siswa']); ?></p>
                                            <p>Kelas : <?= htmlspecialchars($row['Kelas_siswa']); ?></p>
                                            <a href="../halaman_siswa/uploads/laporan/<?= urlencode($row['file']); ?>" download>
                                            <button class="btn btn-danger">
                                            <i class="bi bi-download icon-right"></i>
                                            </button>
                                            </a>
                                            </div>
                                        </div>
                                        <?php endwhile; ?>
                                    </div>
                                    <?php endif; ?>
                                </div>
                            </main>
                        </div>
                    </div>


                </div>
                <!-- /.container
                </div>
                <!/.container-fluid -->
            </div>
            <!-- End of Main Content -->
            <script>
                const currentLocation = location.href; // Mendapatkan URL halaman saat ini
                const menuItem = document.querySelectorAll('li.nav-item a'); // Mendapatkan semua elemen 'a' di dalam 'li.nav-item'
                
                menuItem.forEach(item => {
                  if(item.href.includes("laporananakmagang.php")){ 
                    item.classList.add('active'); // Tambahkan class 'active' jika URL mengandung "industri.html"
                  }
                });
              </script>
            
<?php require 'footer.php' ?>