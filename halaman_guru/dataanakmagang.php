<?php 
include 'komas.php';
$kode_guru = $_SESSION['kode_guru'];

include 'laporanmonir/koneksi.php' ;

// Query untuk mengambil data siswa yang hanya terkait dengan guru yang login
$query = "SELECT 
          s.Id_siswaa,
          s.Nama_siswa,
          s.Kelas_siswa,
          s.Jenis_kelamin,
          p.nama_perusahaan,
          p.lokasi 
          FROM 
          siswa_pkl sp
          JOIN 
          tb_siswa s ON sp.Id_siswaa = s.Id_siswaa
          JOIN 
          tb_perusahaan p ON sp.id_perusahaan = p.id_perusahaan
          WHERE 
          sp.kode_guru = ?";

$stmt = $conn->prepare($query);
$stmt->bind_param("s", $kode_guru);
$stmt->execute();
$result = $stmt->get_result();



// Tutup koneksi
$stmt->close();
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


     </style>
    <!-- Custom styles for this template -->
    <link href="css/sb-admin-2.css?v3" rel="stylesheet">

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


            <li class="nav-item active">
                <a class="nav-link active" href="dataanakmagang.php">
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

            <li class="nav-item" id="monir">
                <a class="nav-link collapsed" href="jadwalmonitoing.php" data-toggle="collapse" data-target="#collapseTwo"
                   aria-expanded="false" aria-controls="collapseTwo" id="monitoring-link">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Monitoring</span>
                </a>
               
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Kegiatan Monitoring:</h6>
                        <a class="collapse-item" href="jadwalmonitoing.php">Jadwal</a>
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
                        <h3>Data Anak Magang</h3>
                    <!-- </form> -->
                    <ul class="navbar-nav ml-auto">


                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        
                        <li class="dropdown no-arrow">
                            <a class="nav-link1 dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small d-flex align-items-center">
                               <?= "Hai, " . $_SESSION['username']; ?>
                                </span>

                                <img class="img-profile"
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

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4 ">
                        <div class="card-header">
                         
                            <h6 class="m-0 font-weight-bold text-primary">DataTables </h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive " style="padding-top:-80px!important">     
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
                               
                                    <table class="table table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">   
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Industri</th>
                                            <th>Nama Siswa</th>
                                            <th>Kelas</th>
                                            <th>JK</th>
                                            <th>Alamat PKL</th> 
                                        </tr>
                                    </thead>
                                    <!-- <tfoot>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Industri</th>
                                            <th>Nama Siswa</th>
                                            <th>Kelas</th>
                                            <th>JK</th>
                                            <th>Alamat</th>
                                        </tr>
                                    </tfoot> -->
                                    <tbody>
                                        <?php 
                                        if ($result->num_rows > 0) {
                                            $no = 1;
                                            while ($row = $result->fetch_assoc()) {
                                            echo "<tr>
                                                   <td>" . $no . "</td>
                                                   <td>" . $row["nama_perusahaan"] . "</td>
                                                   <td>" . $row["Nama_siswa"] . "</td>
                                                   <td>" . $row["Kelas_siswa"] . "</td>
                                                   <td>" . $row["Jenis_kelamin"] . "</td>
                                                  <td>" . $row["lokasi"] . "</td>
                                            </tr>";
                                            $no++;
                                        } 
                                    } else {
                                        echo "<tr><td colspan='5'>No results found.</td></tr>";
                                    }
                                        ?>
                                    </tbody>
                                </table>
                            
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>

            <script>
                const currentLocation = location.href; // Mendapatkan URL halaman saat ini
                const menuItem = document.querySelectorAll('li.nav-item a'); // Mendapatkan semua elemen 'a' di dalam 'li.nav-item'
                
                menuItem.forEach(item => {
                  if(item.href.includes("dataanakmagang.php")){ 
                    item.classList.add('active'); // Tambahkan class 'active' jika URL mengandung "industri.html"
                  }
                });
              </script>
            <!-- End of Main Content -->
            <?php
// Tutup koneksi
$conn->close();
?>
<?php require 'footer.php' ?>