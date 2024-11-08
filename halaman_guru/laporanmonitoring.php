<?php include 'laporanmonir/koneksi.php' ?>



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
        .nav-item .active:not(:hover) span{
            color: #fff; 
        }
        .nav-item .nav-link.active:not(:hover) svg path {
            fill: white; 
        }
     </style>

    <!-- Custom styles for this template -->
     <!-- ?v2 artinya saya buat css yang kedua dengan nama ini -->
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
                            <i href="0index.html"><img src="logo.svg"alt=""></i>
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
                <form id="inputForm" action="tampildata.php" method="POST" enctype="multipart/form-data">
                 <input type="hidden" name="action" value="add">
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
                            <div class="table-responsive table-hover" style="padding-top:-80px!important">
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
                                   <?php require 'tampildata.php' ?>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->
<!-- Memuat jQuery satu kali saja -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<!-- Memuat DataTables setelah jQuery -->
<script src="path/ke/jquery.dataTables.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>

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
                    alamat = 'Pettarani';
                    break;
                case 'Percetakan':
                    alamat = 'Alamat Percetakan';
                    break;
                case 'Bengkel':
                    alamat = 'Alamat Bengkel';
                    break;
                case 'Telkom':
                    alamat = 'Alamat Telkom';
                    break;
                case 'Yamaha':
                    alamat = 'Alamat Yamaha';
                    break;
                case 'Suzuki':
                    alamat = 'Alamat Suzuki';
                    break;
                default:
                    alamat = '';
            }

            $('#alamat').val(alamat);
        });

        // Inisialisasi DataTables
        $('#dataTable').DataTable();

        // Event untuk menambahkan input jumlah siswa
        document.getElementById('jumlah').addEventListener('input', function() {
            const jumlahSiswa = parseInt(this.value);
            const siswaContainer = document.getElementById('siswaContainer');
            siswaContainer.innerHTML = '';

            for (let i = 1; i <= jumlahSiswa; i++) {
                const siswaGroup = document.createElement('div');
                siswaGroup.className = 'siswa-group';

                const namaLabel = document.createElement('label');
                namaLabel.textContent = `Nama Siswa ${i} :`;
                const namaInput = document.createElement('input');
                namaInput.type = 'text';
                namaInput.className = 'form-control';
                namaInput.id = `namaSiswa${i}`;
                namaInput.name = `namaSiswa${i}`;
                namaInput.required = true;

                const perkembanganLabel = document.createElement('label');
                perkembanganLabel.textContent = `Catatan Perkembangan dan Pencapaian Kompetensi Siswa ${i} :`;
                const perkembanganInput = document.createElement('textarea');
                perkembanganInput.className = 'form-control';
                perkembanganInput.id = `perkembangan${i}`;
                perkembanganInput.name = `perkembangan${i}`;
                perkembanganInput.rows = 3;
                perkembanganInput.required = true;

                const pelanggaranLabel = document.createElement('label');
                pelanggaranLabel.textContent = `Catatan Pelanggaran dan Sanksi Yang Diberikan untuk Siswa ${i} :`;
                const pelanggaranInput = document.createElement('textarea');
                pelanggaranInput.className = 'form-control';
                pelanggaranInput.id = `pelanggaran${i}`;
                pelanggaranInput.name = `pelanggaran${i}`;
                pelanggaranInput.rows = 3;
                pelanggaranInput.required = true;

                siswaGroup.appendChild(namaLabel);
                siswaGroup.appendChild(namaInput);
                siswaGroup.appendChild(perkembanganLabel);
                siswaGroup.appendChild(perkembanganInput);
                siswaGroup.appendChild(pelanggaranLabel);
                siswaGroup.appendChild(pelanggaranInput);

                siswaContainer.appendChild(siswaGroup);
            }
        });
    });
</script>

<script>
$(document).ready(function() {
    // Fungsi untuk mengatur alamat berdasarkan perusahaan
    $('.modal').on('shown.bs.modal', function() {
        const modal = $(this);
        const perusahaanSelect = modal.find('.perusahaan');
        const alamatInput = modal.find('input[name="alamat"]');

        // Memilih dropdown perusahaan di dalam modal
        // perusahaanSelect.change(function() {
        //     const selectedValue = $(this).val();
        //     let alamat = '';
            perusahaanSelect.change(function() {
            const selectedValue = $(this).val();
            let alamat = $(this).find('option:selected').data('alamat'); // Mengambil alamat dari data atribut

            // Set alamat berdasarkan perusahaan yang dipilih
            switch (selectedValue) {
                case 'Afila Media Karya':
                    alamat = 'Gowa'; // Sesuaikan dengan alamat yang seharusnya
                    break;
                case 'Indigo Hub':
                    alamat = 'Pettarani'; // Sesuaikan dengan alamat yang seharusnya
                    break;
                case 'Percetakan':
                    alamat = 'Alamat Percetakan'; // Sesuaikan dengan alamat yang seharusnya
                    break;
                case 'Bengkel':
                    alamat = 'Alamat Bengkel'; // Sesuaikan dengan alamat yang seharusnya
                    break;
                case 'Telkom':
                    alamat = 'Alamat Telkom'; // Sesuaikan dengan alamat yang seharusnya
                    break;
                case 'Yamaha':
                    alamat = 'Alamat Yamaha'; // Sesuaikan dengan alamat yang seharusnya
                    break;
                case 'Suzuki':
                    alamat = 'Alamat Suzuki'; // Sesuaikan dengan alamat yang seharusnya
                    break;
                default:
                    alamat = ''; // Tidak ada alamat jika tidak ada yang dipilih
            }

            // Update alamat pada input yang ada di dalam modal yang aktif
            alamatInput.val(alamat);
        });

        // Memicu perubahan perusahaan saat modal dibuka untuk set awal alamat
        perusahaanSelect.trigger('change'); // Memicu perubahan untuk set alamat awal


        // Fungsi untuk menambah input siswa berdasarkan jumlah siswa
        jumlahInput.on('input', function() {
            const jumlahSiswa = parseInt($(this).val());
            siswaContainer.html(''); // Kosongkan kontainer sebelum menambahkan input baru

            // Tambahkan input untuk setiap siswa
            for (let i = 1; i <= jumlahSiswa; i++) {
                const siswaGroup = `
                    <div class='siswa-group'>
                        <label>Nama Siswa ${i}:</label>
                        <input type='text' class='form-control' name='namaSiswa${i}' required>
                        
                        <label>Catatan Perkembangan dan Pencapaian Kompetensi Siswa ${i}:</label>
                        <textarea class='form-control' name='perkembangan${i}' rows='3' required></textarea>
                        
                        <label>Catatan Pelanggaran dan Sanksi Yang Diberikan untuk Siswa ${i}:</label>
                        <textarea class='form-control' name='pelanggaran${i}' rows='3' required></textarea>
                    </div>
                `;
                siswaContainer.append(siswaGroup);
            }
        });

        // Jalankan fungsi input saat modal dibuka untuk memuat data siswa yang ada
        jumlahInput.trigger('input');
    });
});

//agar menyesuaikan dengan jumlah siswa
function adjustSiswaInputs(id) {
    var container = document.getElementById('siswaContainer_' + id);
    var jumlahSiswa = parseInt(document.getElementById('jumlahSiswa_' + id).value);
    var currentCount = container.children.length / 3; // Setiap siswa memiliki 3 input: nama, perkembangan, pelanggaran

    // Tambah input jika jumlah siswa meningkat
    if (jumlahSiswa > currentCount) {
        for (var i = currentCount; i < jumlahSiswa; i++) {
            var newInput = `
                <div class='form-group'>
                    <label for='namaSiswa_${i + 1}'>Nama Siswa ${i + 1}:</label>
                    <input type='text' class='form-control' name='namaSiswa${i + 1}' id='namaSiswa_${i + 1}' required>
                </div>
                <div class='form-group'>
                    <label for='perkembangan_${i + 1}'>Perkembangan:</label>
                    <input type='text' class='form-control' name='perkembangan${i + 1}' id='perkembangan_${i + 1}' required>
                </div>
                <div class='form-group'>
                    <label for='pelanggaran_${i + 1}'>Pelanggaran:</label>
                    <input type='text' class='form-control' name='pelanggaran${i + 1}' id='pelanggaran_${i + 1}' required>
                </div>
            `;
            container.insertAdjacentHTML('beforeend', newInput);
        }
    }
    // Hapus input jika jumlah siswa menurun
    else if (jumlahSiswa < currentCount) {
        for (var i = currentCount; i > jumlahSiswa; i--) {
            container.removeChild(container.lastElementChild); // Hapus pelanggaran
            container.removeChild(container.lastElementChild); // Hapus perkembangan
            container.removeChild(container.lastElementChild); // Hapus nama siswa
        }
    }
}

</script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>



<script>
    function confirmDelete() {
        return confirm("Apakah Anda yakin ingin menghapus data ini?");
    }
</script>
<script>
                const currentLocation = location.href; // Mendapatkan URL halaman saat ini
                const menuItem = document.querySelectorAll('li.nav-item a'); // Mendapatkan semua elemen 'a' di dalam 'li.nav-item'
                
                menuItem.forEach(item => {
                  if(item.href.includes("laporanmonitoring.php")){ 
                    item.classList.add('active'); // Tambahkan class 'active' jika URL mengandung "industri.html"
                  }
                });
              </script>

<?php require 'footer.php' ?>
