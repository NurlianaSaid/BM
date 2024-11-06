<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_sekolah";

// Membuat koneksi ke database
$conn = new mysqli($servername, $username, $password, $dbname);

// Periksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
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
     </style>

    <!-- Custom styles for this template -->
    <link href="css/sb-admin-2.css" rel="stylesheet">

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
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Halaman Guru</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="index.html">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <!-- <hr class="sidebar-divider"> -->

            <!-- Heading -->
            <!-- <div class="sidebar-heading">
                Interface
            </div> -->

            <li class="nav-item ">
                <a class="nav-link" href="dataanakmagang.html">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Data Anak Magang</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Verifikasi Data Jurnal</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Laporan Anak Magang</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Monitoring</span>
                </a>
                <div id="collapseTwo" class="collapse show" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Kegiatan Monitoring:</h6>
                        <a class="collapse-item" href="jadwalmonitoing.php">Jadwal</a>
                        <a class="collapse-item active" href="laporanmonitoring.php">Laporan</a>
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
                    <h3>Laporan Monitoring</h3>
                    <!-- </form> -->

                    <!-- Topbar Search -->

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">


                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Douglas McGee</span>
                                <img class="img-profile rounded-circle"
                                    src="img/undraw_profile.svg">
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

                    <!-- Filter Input -->


                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <!-- <h6 class="m-0 font-weight-bold text-primary"> -->
                                
                                                <!-- Page Heading -->
                            <div class="d-sm-flex align-items-right  justify-content-end" style="margin:-1px!important" data-toggle="modal" data-target="#inputDataModal">
                                <a href="#" class="btn btn-primary btn-icon-split" style="height: 40px;">
                                    <span class="icon text-white-50">
                                        <i>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 32 32" fill="none">
                                                <g clip-path="url(#clip0_1162_269)">
                                                    <path d="M16.0006 30C12.2606 30 8.7456 28.544 6.1016 25.899C1.7796 21.578 0.753603 15.025 3.5476 9.595C3.8006 9.104 4.4026 8.911 4.8946 9.163C5.3856 9.415 5.5796 10.018 5.3266 10.51C2.9316 15.165 3.8106 20.781 7.5156 24.485C9.7816 26.752 12.7946 28 16.0006 28C19.2056 28 22.2196 26.752 24.4856 24.485C26.7516 22.218 28.0006 19.205 28.0006 16C28.0006 12.794 26.7526 9.781 24.4856 7.515C22.2186 5.249 19.2066 4 16.0006 4C12.7946 4 9.7816 5.249 7.5156 7.515C7.1246 7.906 6.4926 7.906 6.1016 7.515C5.7106 7.124 5.7106 6.492 6.1016 6.101C8.7456 3.457 12.2606 2 16.0006 2C19.7406 2 23.2566 3.457 25.8996 6.101C28.5446 8.745 30.0006 12.26 30.0006 16C30.0006 19.739 28.5446 23.255 25.8996 25.899C23.2566 28.544 19.7406 30 16.0006 30Z" fill="white" />
                                                    <path d="M16 22C15.448 22 15 21.553 15 21V11C15 10.448 15.448 10 16 10C16.552 10 17 10.448 17 11V21C17 21.553 16.552 22 16 22Z" fill="white" />
                                                    <path d="M21 17H11C10.448 17 10 16.552 10 16C10 15.448 10.448 15 11 15H21C21.553 15 22 15.448 22 16C22 16.552 21.553 17 21 17Z" fill="white" />
                                                </g>
                                                <defs>
                                                    <clipPath id="clip0_1162_269">
                                                        <rect width="32" height="32" fill="white" />
                                                    </clipPath>
                                                </defs>
                                            </svg>
                                        </i>
                                    </span>
                                    <p class="text">INPUT DATA</p>
                                </a>
</div>
                            
                        </div>

                         <!-- Modal Bootstrap -->
<!-- <div class="modal fade modal-lg" id="inputDataModal" tabindex="-1" aria-labelledby="inputDataModalLabel" aria-hidden="true">
    <div class="modal-dialog"> -->
<div class="modal fade" id="inputDataModal" tabindex="-1" aria-labelledby="inputDataModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="inputDataModalLabel">Input Data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- Form Input Data -->
                <form id="inputForm" action="laporanmonitoring.php" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="nama">Nama DU/DI :</label>
                        <select class="form-control" id="perusahaan" name="perusahaan" required>
                        <option value="">Pilih Perusahaan</option>
                                            <option value="Afila Media Karya">Afila Media Karya</option>
                                            <option value="Indigo Hub">Indigo Hub</option>
                                            <option value="Percetakan">Percetakan</option>
                                            <option value="Bengkel">Bengkel</option>
                                            <option value="Telkom">Telkom</option>
                                            <option value="Yamaha">Yamaha</option>
                                            <option value="Suzuki">Suzuki</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="tanggal">Tanggal :</label>
                        <input type="date" class="form-control" id="tanggal" name="tanggal" required>
                    </div>
                    <div class="form-group">
                        <label for="kelas">Kelas :</label>
                        <input type="text" class="form-control" id="kelas" name="kelas" required>
                    </div>
                    <div class="form-group">
                        <label for="alamat">Alamat :</label>
                        <input type="text" class="form-control" id="alamat" name="alamat">
                    </div>
                    <div class="form-group">
                        <label for="jumlah">Jumlah Siswa :</label>
                        <input type="text" class="form-control" id="jumlah" name="jumlah" required>
                    </div>
                   <div id="siswaContainer"></div>

                    <div class="form-group">
                        <label for="gambar">Unggah Gambar :</label>
                        <input type="file" class="form-control-file" id="gambar" name="gambar" accept="image/*" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Kirim</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">
                        Batal
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>

                        <div class="card-body">
                            <div class="table-responsive" style="padding-top:-80px!important">
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
                                            <th>Kelas</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <!-- <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Afila Media Karya</td>
                                            <td>Senin, 06/10/2024</td>
                                            <td>Xll RPL</td>
                                            <td>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 44 44" fill="none">
                                                    <rect width="43.7588" height="44" rx="10" fill="#FF0000" />
                                                    <path d="M19.6313 10C17.7123 10 16.1422 11.35 16.1422 13H12.6531C10.7341 13 9.16406 14.35 9.16406 16H33.5876C33.5876 14.35 32.0175 13 30.0985 13H26.6094C26.6094 11.35 25.0394 10 23.1204 10H19.6313ZM12.6531 19V33.43C12.6531 33.76 12.9323 34 13.3161 34H29.4705C29.8543 34 30.1334 33.76 30.1334 33.43V19H26.6443V29.5C26.6443 30.34 25.8767 31 24.8998 31C23.9229 31 23.1553 30.34 23.1553 29.5V19H19.6662V29.5C19.6662 30.34 18.8986 31 17.9216 31C16.9447 31 16.1771 30.34 16.1771 29.5V19H12.688H12.6531Z" fill="white" />
                                                </svg>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 44 44" fill="none">
                                                    <rect x="0.113281" width="43.7588" height="44" rx="10" fill="#008000" />
                                                    <path d="M28.098 10L24.7907 13.11L31.4054 19.3299L34.7127 16.2199L28.098 10ZM21.4833 16.2199L8.25391 28.6597V34.8796H14.8686L28.098 22.4398L21.4833 16.2199Z" fill="white" />
                                                </svg>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 44 44" fill="none">
                                                    <rect width="44.2588" height="44" rx="10" fill="#295BDB" />
                                                    <g transform="translate(5, 5)">
                                                        <path d="M27.9438 16.0125C25.1125 12.75 21.2 9 16 9C13.9 9 11.975 9.59375 9.94375 10.8625C8.23125 11.9375 6.475 13.45 4.0625 15.9375L4 16L4.41875 16.4312C7.8625 19.9562 10.8375 23 16 23C18.2812 23 20.4938 22.2563 22.7625 20.725C24.6938 19.4188 26.3375 17.7625 27.6562 16.425L28 16.0812L27.9438 16.0125ZM16 10C18.0688 10 20.0563 10.5938 22.075 11.9125C23.5688 12.8875 25.0375 14.2063 26.6812 16.0438C24.2875 18.4625 20.6938 22 16 22C13.8625 22 11.9875 21.475 10.1125 20.2375C8.39375 19.1062 6.84375 17.5312 5.35 16C9.04375 12.2687 12.125 10 16 10Z" fill="white" />
                                                        <path d="M16 21C18.7562 21 21 18.7562 21 16C21 13.2438 18.7562 11 16 11C13.2438 11 11 13.2438 11 16C11 18.7562 13.2438 21 16 21ZM16 12.0188C18.2 12.0188 20 13.8063 20 16C20 18.1937 18.2 19.9813 16 19.9813C13.8 19.9813 12.0063 18.1937 12.0063 16C12.0063 13.8063 13.8 12.0188 16 12.0188Z" fill="white" />
                                                        <path d="M18.0016 16C18.0016 17.0938 17.1016 18 16.0141 18C14.9266 18 14.0016 17.05 14.0016 15.9563C14.0016 14.8625 14.9891 14 16.0016 14V13C14.3453 13 13.0078 14.35 13.0078 16.0125C13.0078 17.675 14.3516 19.0187 16.0016 19.0187C17.6516 19.0187 19.0016 17.6688 19.0016 16.0125V16H18.0016Z" fill="white" />
                                                    </g>
                                                </svg>
                                            </td>
                                        </tr>
                                    </tbody> -->
                                    <tbody>
                                        <?php require 'tampildata.php' ?>
                                 </body>
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
    $(document).ready(function() {
        $('#perusahaan').change(function() {
            const selectedValue = $(this).val();
            let alamat = '';

            switch (selectedValue) {
                case 'Afila Media Karya':
                    alamat = 'Gowa';
                    break;
                case 'Indigo Hub':
                    alamat = 'Pettarani'; // Ganti dengan alamat yang sesuai
                    break;
                case 'Percetakan':
                    alamat = 'Alamat Percetakan'; // Ganti dengan alamat yang sesuai
                    break;
                case 'Bengkel':
                    alamat = 'Alamat Bengkel'; // Ganti dengan alamat yang sesuai
                    break;
                case 'Telkom':
                    alamat = 'Alamat Telkom'; // Ganti dengan alamat yang sesuai
                    break;
                case 'Yamaha':
                    alamat = 'Alamat Yamaha'; // Ganti dengan alamat yang sesuai
                    break;
                case 'Suzuki':
                    alamat = 'Alamat Suzuki'; // Ganti dengan alamat yang sesuai
                    break;
                default:
                    alamat = ''; // Kosongkan alamat jika tidak ada pilihan
            }

            $('#alamat').val(alamat); // Set alamat ke input
        });
    });


    // siswa dan catatan
    
// document.getElementById('jumlah').addEventListener('input', function() {
//     const jumlahSiswa = parseInt(this.value);
//     const siswaContainer = document.getElementById('siswaContainer');

    document.addEventListener("DOMContentLoaded", function() {
    document.getElementById('jumlah').addEventListener('input', function() {
        const jumlahSiswa = parseInt(this.value);
        const siswaContainer = document.getElementById('siswaContainer');
    // Bersihkan input sebelumnya
    siswaContainer.innerHTML = '';

    // Tambahkan input Nama Siswa, Perkembangan, dan Pelanggaran untuk setiap siswa
    for (let i = 1; i <= jumlahSiswa; i++) {
        // Grup input untuk satu siswa
        const siswaGroup = document.createElement('div');
        siswaGroup.className = 'siswa-group';

        // Input Nama Siswa
        const namaLabel = document.createElement('label');
        namaLabel.textContent = `Nama Siswa ${i} :`;
        const namaInput = document.createElement('input');
        namaInput.type = 'text';
        namaInput.className = 'form-control';
        namaInput.id = `namaSiswa${i}`;
        namaInput.name = `namaSiswa${i}`;
        namaInput.required = true;

        // Input Perkembangan Siswa
        const perkembanganLabel = document.createElement('label');
        perkembanganLabel.textContent = `Catatan Perkembangan dan Pencapaian Kompetensi Siswa ${i} :`;
        const perkembanganInput = document.createElement('textarea');
        perkembanganInput.className = 'form-control';
        perkembanganInput.id = `perkembangan${i}`;
        perkembanganInput.name = `perkembangan${i}`;
        perkembanganInput.rows = 3;
        perkembanganInput.required = true;

        // Input Pelanggaran Siswa
        const pelanggaranLabel = document.createElement('label');
        pelanggaranLabel.textContent = `Catatan Pelanggaran dan Sanksi Yang Diberikan untuk Siswa ${i} :`;
        const pelanggaranInput = document.createElement('textarea');
        pelanggaranInput.className = 'form-control';
        pelanggaranInput.id = `pelanggaran${i}`;
        pelanggaranInput.name = `pelanggaran${i}`;
        pelanggaranInput.rows = 3;
        pelanggaranInput.required = true;

        // Menambahkan elemen-elemen ke dalam grup siswa
        siswaGroup.appendChild(namaLabel);
        siswaGroup.appendChild(namaInput);
        siswaGroup.appendChild(perkembanganLabel);
        siswaGroup.appendChild(perkembanganInput);
        siswaGroup.appendChild(pelanggaranLabel);
        siswaGroup.appendChild(pelanggaranInput);

        // Menambahkan grup siswa ke dalam container
        siswaContainer.appendChild(siswaGroup);
    }

})
});



// alamat otomatis

</script>



             <!-- <script src="tambah.js"></script> -->
             <!-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
            <?php require 'footer.php' ?>
