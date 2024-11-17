<?php 
include 'komas.php';
$kode_guru = $_SESSION['kode_guru'];


include 'laporanmonir/koneksi.php' ;


if (isset($_POST['id_jurnal']) && isset($_POST['status'])) {
    // Ambil data dari AJAX untuk memperbarui status
    $id_jurnal = $_POST['id_jurnal'];
    $status = $_POST['status'];

    // Update status di database
    $sql_update = "UPDATE tb_jurnal SET status = '$status' WHERE id_jurnal = $id_jurnal";
    if ($conn->query($sql_update) === TRUE) {
        echo "Status berhasil diperbarui di server<br>";
    } else {
        echo "Error updating status: " . $conn->error . "<br>";
    }
}


// Query SQL
$query = "SELECT 
            j.id_jurnal,
            j.tanggal,
            j.kegiatan,
            j.status,
            j.uraian,
            s.Nama_siswa,
            s.Kelas_siswa,
            p.nama_perusahaan
        FROM 
            tb_jurnal j
        JOIN 
            tb_perusahaan p ON j.id_perusahaan = p.id_perusahaan
        JOIN 
            tb_siswa s ON j.Id_siswaa = s.Id_siswaa
        WHERE 
        j.kode_guru = ?";

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

    <!-- Custom fonts for this template -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

        <style>
            .nav-item a.active {
            background-color: #A1CCCF; /* Biru muda */
            color: #fff; /* Warna teks saat hover */
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
            width: 50px;
        }
       
 </style>

    <!-- Custom styles for this template -->
    <link href="css/sb-admin-2.css?v1" rel="stylesheet">
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
            <!-- Nav Item - Dashboard -->
            <li class="nav-item ">
                <a class="nav-link " href="index.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>


            <li class="nav-item">
                <a class="nav-link" href="dataanakmagang.php">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Data Anak Magang</span></a>
            </li>
            
            <li class="nav-item active ">
                <a class="nav-link active" href="verifikasidata.php">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Verifikasi Data Jurnal</span></a>
            </li>
            
            <li class="nav-item ">
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
                        <h3>Verifikasi Data Jurnal</h3>
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
                    <div class="card shadow mb-4">
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
                                            <th>Tanggal</th>
                                            <th>Keterangan</th>
                                            <th>Aksi</th> 
                                        </tr>
                                 </thead>                                
                                    <?php
if ($result->num_rows > 0) {
    $no = 1;
    while ($row = $result->fetch_assoc()) {

           // Menampilkan status di halaman
           $statusButton = $row["status"] == "terbaca" ? 
           "<span class='kett'>Terbaca</span>" : 
           "<span class='sel' >Belum Terbaca</span>";
       


                echo "<tr>
                        <td>" . $no . "</td>
                        <td>" . $row["nama_perusahaan"] . "</td>
                        <td>" . $row["Nama_siswa"] . "</td>
                        <td>" . $row["Kelas_siswa"] . "</td>
                        <td>" . $row["tanggal"] . "</td>
                         <td class='aksi'>" . $statusButton . "</td>
                         <td>
  <button class='btn' data-toggle='modal' data-target='#detailModal" . $row['id_jurnal'] . "' >                        
    <svg xmlns='http://www.w3.org/2000/svg' width='24' height='24' viewBox='0 0 44 44' fill='none'>
        <rect width='44.2588' height='44' rx='10' fill='#295BDB' />
        <g transform='translate(5, 5)'>
            <path d='M27.9438 16.0125C25.1125 12.75 21.2 9 16 9C13.9 9 11.975 9.59375 9.94375 10.8625C8.23125 11.9375 6.475 13.45 4.0625 15.9375L4 16L4.41875 16.4312C7.8625 19.9562 10.8375 23 16 23C18.2812 23 20.4938 22.2563 22.7625 20.725C24.6938 19.4188 26.3375 17.7625 27.6562 16.425L28 16.0812L27.9438 16.0125ZM16 10C18.0688 10 20.0563 10.5938 22.075 11.9125C23.5688 12.8875 25.0375 14.2063 26.6812 16.0438C24.2875 18.4625 20.6938 22 16 22C13.8625 22 11.9875 21.475 10.1125 20.2375C8.39375 19.1062 6.84375 17.5312 5.35 16C9.04375 12.2687 12.125 10 16 10Z' fill='white' />
            <path d='M16 21C18.7562 21 21 18.7562 21 16C21 13.2438 18.7562 11 16 11C13.2438 11 11 13.2438 11 16C11 18.7562 13.2438 21 16 21ZM16 12.0188C18.2 12.0188 20 13.8063 20 16C20 18.1937 18.2 19.9813 16 19.9813C13.8 19.9813 12.0063 18.1937 12.0063 16C12.0063 13.8063 13.8 12.0188 16 12.0188Z' fill='white' />
            <path d='M18.0016 16C18.0016 17.0938 17.1016 18 16.0141 18C14.9266 18 14.0016 17.05 14.0016 15.9563C14.0016 14.8625 14.9891 14 16.0016 14V13C14.3453 13 13.0078 14.35 13.0078 16.0125C13.0078 17.675 14.3516 19.0187 16.0016 19.0187C17.6516 19.0187 19.0016 17.6688 19.0016 16.0125V16H18.0016Z' fill='white' />
        </g>
    </svg>
</button>

                    </td>
                </td>
                      </tr>";

                      echo "
                      <div class='modal fade' id='detailModal" . $row['id_jurnal'] . "' tabindex='-1' aria-labelledby='detailModalLabel" . $row['id_jurnal'] . "' aria-hidden='true'>
                  <div class='modal-dialog modal-lg modal-dialog-centered'>
                      <div class='modal-content'>
                          <div class='modal-header'>
                              <h5 class='modal-title'>Detail Jurnal - " . htmlspecialchars($row['Nama_siswa']) . "</h5>
                              <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
                                  <span aria-hidden='true'>&times;</span>
                              </button>
                          </div>
                          <div class='modal-body'>
                              <div class='form-group'>
                                  <label>Nama DU/DI:</label>
                                  <input type='text' class='form-control' value='" . htmlspecialchars($row['nama_perusahaan']) . "' readonly>
                              </div>
                              <div class='form-group'>
                                  <label>Nama Siswa:</label>
                                  <input type='text' class='form-control' value='" . htmlspecialchars($row['Nama_siswa']) . "' readonly>
                              </div>
                              <div class='form-group'>
                                  <label>Kelas:</label>
                                  <input type='text' class='form-control' value='" . htmlspecialchars($row['Kelas_siswa']) . "' readonly>
                              </div>
                              <div class='form-group'>
                                  <label>Tanggal:</label>
                                  <input type='text' class='form-control' value='" . htmlspecialchars($row['tanggal']) . "' readonly>
                              </div>
                              <div class='form-group'>
                                  <label>Alamat:</label>
                                  <input type='text' class='form-control' value='" . htmlspecialchars($row['kegiatan']) . "' readonly>
                              </div>
                              <div class='form-group'>
                                  <label>Jumlah Siswa:</label>
                                  <input type='text' class='form-control' value='" . htmlspecialchars($row['uraian']) . "' readonly>
                              </div>
                          <div class='modal-footer'>
                              <button type='button' class='btn btn-primary' data-dismiss='modal' onclick='updateStatus(" . $row['id_jurnal'] . ")'>Selesai</button>
                          </div>
                      </div>
                  </div>
              </div>
              ";


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

          
            <!-- Footer -->
            <script>
                const currentLocation = location.href; // Mendapatkan URL halaman saat ini
                const menuItem = document.querySelectorAll('li.nav-item a'); // Mendapatkan semua elemen 'a' di dalam 'li.nav-item'
                
                menuItem.forEach(item => {
                  if(item.href.includes("verifikasidata.php")){ 
                    item.classList.add('active'); // Tambahkan class 'active' jika URL mengandung "industri.html"
                  }
                });

                 // Cek apakah status sudah diperbarui
    <?php if (isset($_SESSION['status_updated']) && $_SESSION['status_updated'] === true) { ?>
        alert("Terimakasih!");
        <?php 
            unset($_SESSION['status_updated']); // Reset session setelah alert ditampilkan
        ?>
    <?php } ?>
    
    function updateStatus(idJurnal) {
        $.ajax({
            url: '', // URL ke file PHP saat ini
            method: 'POST',
            data: {
                id_jurnal: idJurnal,
                status: 'terbaca'
            },
            success: function(response) {
                // Status berhasil diperbarui, jadi jangan tampilkan alert saat reload
                location.reload();
            },
            error: function(xhr, status, error) {
                console.error("Gagal memperbarui status: " + error);
            }
        });
    }
              </script>
                          <?php
// Tutup koneksi
$conn->close();
?>
            
            <?php require 'footer.php' ?>