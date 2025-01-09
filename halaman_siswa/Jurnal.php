<?php
include 'session.php';
include 'koneksi.php';

// Ambil bulan dari parameter GET, jika tidak ada default ke bulan sekarang
$bulan = isset($_GET['bulan']) ? $_GET['bulan'] : date('m');
// Mendapatkan ID siswa yang login dari session
$id_siswaa = $_SESSION['Id_siswaa']; // Sesuaikan dengan sesi yang menyimpan ID siswa


// Query untuk menampilkan jurnal berdasarkan ID siswa
$sql = "SELECT * FROM tb_jurnal 
WHERE Id_siswaa = '$id_siswaa' 
AND MONTH(tanggal) = '$bulan'";
$result = $conn->query($sql);

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

   
    <title>Project Absensi Magang</title>
 
    <!-- Custom fonts for this template -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/pengajuan.css?v2" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

</head>
<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
       
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="beranda.php">
                <div class="sidebar-brand-icon rotate-n-" style="color: #000;">
                    <i href="beranda.php"> <img src="img/Screenshot (7).png" alt=""></i>
                </div>
                <div class="sidebar-brand-text mx-1 mt-1" href="beranda.php">HALAMAN SISWA</div>  
            </a>
            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="infosiswa.php" aria-label="Dashboard">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M11.7891 9C12.3068 9 12.7266 8.58027 12.7266 8.0625C12.7266 7.54473 12.3068 7.125 11.7891 7.125C11.2713 7.125 10.8516 7.54473 10.8516 8.0625C10.8516 8.58027 11.2713 9 11.7891 9Z" fill="black"/>
                        <path d="M12.75 16.125V10.125H10.5V10.5H11.25V16.125H10.5V16.5H13.5V16.125H12.75Z" fill="black"/>
                        <path d="M12 2.25C6.61406 2.25 2.25 6.61406 2.25 12C2.25 17.3859 6.61406 21.75 12 21.75C17.3859 21.75 21.75 17.3859 21.75 12C21.75 6.61406 17.3859 2.25 12 2.25ZM12 20.9391C7.07344 20.9391 3.06094 16.9312 3.06094 12C3.06094 7.07344 7.06875 3.06094 12 3.06094C16.9266 3.06094 20.9391 7.06875 20.9391 12C20.9391 16.9266 16.9266 20.9391 12 20.9391Z" fill="black"/>
                        </svg>
                    <span>Info Siswa</span>
                </a>
            </li>
            <!-- Divider -->
            <!-- Heading -->
            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="permohonanpkl.php">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0_1882_1043)">
                        <path d="M19.5619 12.0977L21.0929 14.7507C22.0599 16.4247 21.4859 18.5657 19.8129 19.5317C19.2799 19.8387 18.6769 20.0007 18.0629 20.0007H15.9999V22.5007L10.9999 19.0007L15.9999 15.5007V18.0007H18.0619C18.3249 18.0007 18.5839 17.9307 18.8119 17.7997C19.5299 17.3857 19.7749 16.4677 19.3619 15.7507L17.8299 13.0977L19.5619 12.0977ZM7.30395 9.13474L7.83395 15.2147L5.66995 13.9647L4.63895 15.7507C4.50695 15.9787 4.43795 16.2377 4.43795 16.5007C4.43795 17.3287 5.10895 18.0007 5.93795 18.0007H8.99995V20.0007H5.93795C4.00495 20.0007 2.43795 18.4337 2.43795 16.5007C2.43795 15.8867 2.59995 15.2827 2.90695 14.7507L3.93695 12.9637L1.77295 11.7147L7.30295 9.13474H7.30395ZM13.7499 2.96974C14.2819 3.27674 14.7239 3.71874 15.0309 4.25074L16.061 6.03574L18.2269 4.78574L17.6969 10.8667L12.1649 8.28674L14.3299 7.03674L13.2989 5.25074C13.1669 5.02274 12.9779 4.83374 12.7499 4.70174C12.0329 4.28774 11.1149 4.53374 10.7009 5.25074L9.16895 7.90374L7.43695 6.90374L8.96995 4.25074C9.93595 2.57674 12.077 2.00274 13.7509 2.96974H13.7499Z" fill="black"/>
                        </g>
                        <defs>
                        <clipPath id="clip0_1882_1043">
                        <rect width="24" height="24" fill="black"/>
                        </clipPath>
                        </defs>
                        </svg>                      
                    <span>Permohonan Siswa</span>
                </a>  
            </li>
                <!-- Nav Item - Pages Collapse Menu -->
                <li class="nav-item">
                    <a class="nav-link collapsed" href="alamatpkl.php">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M12.0469 21.1017C11.9267 21.1017 11.8086 21.0709 11.7038 21.0122C9.64688 19.865 7.93375 18.1893 6.74146 16.1582C5.54917 14.1272 4.92099 11.8145 4.92188 9.45938C4.92188 9.36313 4.92281 9.26719 4.92469 9.17156C4.97156 7.03969 5.76516 5.24438 7.22156 3.98016C8.50969 2.86453 10.223 2.25 12.0469 2.25C13.8708 2.25 15.5836 2.86453 16.8703 3.98016C18.3281 5.24578 19.1231 7.03969 19.1672 9.17156C19.1672 9.26531 19.1705 9.36328 19.1705 9.45938C19.1717 11.851 18.5237 14.198 17.2955 16.2502C16.1033 18.2379 14.4122 19.8795 12.39 21.0122C12.2852 21.0709 12.167 21.1017 12.0469 21.1017ZM12.0469 3.65625C10.5614 3.65625 9.17531 4.14844 8.14453 5.04281C6.99469 6.03938 6.3675 7.4775 6.33094 9.20156C6.33094 9.28688 6.32813 9.37313 6.32813 9.45938C6.32743 11.4969 6.85365 13.5 7.85569 15.2741C8.85773 17.0482 10.3015 18.533 12.0469 19.5844C13.7057 18.5815 15.0941 17.1882 16.0913 15.5259C17.1881 13.6925 17.7668 11.5958 17.7656 9.45938C17.7656 9.37313 17.7656 9.28688 17.7628 9.20156C17.7258 7.4775 17.0986 6.03938 15.9492 5.04281C14.918 4.14844 13.5323 3.65625 12.0469 3.65625Z" fill="black"/>
                            <path d="M12.0651 13.903C11.1906 13.903 10.3358 13.6437 9.60874 13.1579C8.88166 12.6721 8.31498 11.9816 7.98035 11.1737C7.64571 10.3659 7.55816 9.47689 7.72875 8.61926C7.89935 7.76162 8.32043 6.97383 8.93876 6.3555C9.55708 5.73718 10.3449 5.3161 11.2025 5.1455C12.0601 4.97491 12.9491 5.06246 13.757 5.3971C14.5649 5.73173 15.2554 6.29841 15.7412 7.02548C16.227 7.75255 16.4863 8.60736 16.4863 9.4818C16.4851 10.654 16.0189 11.7778 15.19 12.6067C14.3611 13.4356 13.2373 13.9018 12.0651 13.903ZM12.0651 6.46727C11.4687 6.46727 10.8858 6.64411 10.39 6.97542C9.89413 7.30673 9.50769 7.77764 9.27951 8.32859C9.05132 8.87953 8.99164 9.48577 9.10802 10.0706C9.22439 10.6555 9.51159 11.1927 9.93329 11.6144C10.355 12.036 10.8923 12.3231 11.4771 12.4394C12.062 12.5557 12.6683 12.4959 13.2192 12.2676C13.7701 12.0394 14.2409 11.6528 14.5722 11.157C14.9034 10.6611 15.0801 10.0781 15.0801 9.4818C15.0787 8.68276 14.7605 7.91687 14.1954 7.35204C13.6302 6.78721 12.8641 6.46954 12.0651 6.46867V6.46727Z" fill="black"/>
                            </svg>                     
                        <span>Alamat PKL</span>
                    </a>   
                </li>
            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link active" href="#" id="dropdown_toggle" data-toggle="collapse" data-target="#collapseTwo"
                aria-expanded="true" aria-controls="collapseTwo">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M15.5 9H8.5V4H15.5V9ZM9.5 8H14.5V5H9.5V8Z" fill="black"/>
                        <path d="M20.5 24H2.5V0H20.5V24ZM3.5 23H19.5V1H3.5V23Z" fill="black"/>
                        <path d="M22.5 6.5H20V7.5H22.5V6.5Z" fill="black"/>
                        <path d="M22.5 10.5H20V11.5H22.5V10.5Z" fill="black"/>
                        <path d="M22.5 14.5H20V15.5H22.5V14.5Z" fill="black"/>
                        <path d="M21 19.5H20V18.5H21C21.5515 18.5 22 18.0515 22 17.5V4.5C22 3.9485 21.5515 3.5 21 3.5H20V2.5H21C22.103 2.5 23 3.397 23 4.5V17.5C23 18.603 22.103 19.5 21 19.5Z" fill="black"/>
                        <path d="M4.5 4H1.5V5H4.5V4Z" fill="black"/>
                        <path d="M4.5 7H1.5V8H4.5V7Z" fill="black"/>
                        <path d="M4.5 10H1.5V11H4.5V10Z" fill="black"/>
                        <path d="M4.5 13H1.5V14H4.5V13Z" fill="black"/>
                        <path d="M4.5 16H1.5V17H4.5V16Z" fill="black"/>
                        <path d="M4.5 19H1.5V20H4.5V19Z" fill="black"/>
                    </svg>
                    <span>Program PKL</span>
                    <!-- Ikon dropdown -->
                    <svg id="dropdown-icon" width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6 9L12 15L18 9H6Z" fill="black"/>
                    </svg>
                </a>
                <div id="collapseTwo" class="collapse show" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item active" href="Jurnal.php">Jurnal</a>
                        <a class="collapse-item" href="Laporan.php">Laporan</a>
                    </div>
                </div>
            </li>
            <!-- Divider -->
            <!-- Heading -->
            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">
            <!-- Sidebar Toggler (Sidebar) -->
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
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>
                    <!-- Topbar Search -->
                    <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <a class="nav-link1" href="programpkl.php" aria-label="Dashboard">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M15.5 9H8.5V4H15.5V9ZM9.5 8H14.5V5H9.5V8Z" fill="black"/>
                                    <path d="M20.5 24H2.5V0H20.5V24ZM3.5 23H19.5V1H3.5V23Z" fill="black"/>
                                    <path d="M22.5 6.5H20V7.5H22.5V6.5Z" fill="black"/>
                                    <path d="M22.5 10.5H20V11.5H22.5V10.5Z" fill="black"/>
                                    <path d="M22.5 14.5H20V15.5H22.5V14.5Z" fill="black"/>
                                    <path d="M21 19.5H20V18.5H21C21.5515 18.5 22 18.0515 22 17.5V4.5C22 3.9485 21.5515 3.5 21 3.5H20V2.5H21C22.103 2.5 23 3.397 23 4.5V17.5C23 18.603 22.103 19.5 21 19.5Z" fill="black"/>
                                    <path d="M4.5 4H1.5V5H4.5V4Z" fill="black"/>
                                    <path d="M4.5 7H1.5V8H4.5V7Z" fill="black"/>
                                    <path d="M4.5 10H1.5V11H4.5V10Z" fill="black"/>
                                    <path d="M4.5 13H1.5V14H4.5V13Z" fill="black"/>
                                    <path d="M4.5 16H1.5V17H4.5V16Z" fill="black"/>
                                    <path d="M4.5 19H1.5V20H4.5V19Z" fill="black"/>
                                    </svg>                                                                     
                                <span>Program PKL</span>
                            </a>       
                        </div>
                    </form>
                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                        <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">                          
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>
                        <!-- Nav Item - Alerts -->
                        <li class="nav-item dropdown no-arrow mx-1">
                            <!-- Dropdown - Alerts -->
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="alertsDropdown">
                                <h6 class="dropdown-header">
                                    Alerts Center
                                </h6>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-primary">
                                            <i class="fas fa-file-alt text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 12, 2019</div>
                                        <span class="font-weight-bold">A new monthly report is ready to download!</span>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-success">
                                            <i class="fas fa-donate text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 7, 2019</div>
                                        $290.29 has been deposited into your account!
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-warning">
                                            <i class="fas fa-exclamation-triangle text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 2, 2019</div>
                                        Spending Alert: We've noticed unusually high spending for your account.
                                    </div>
                                </a>
                                <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
                            </div>
                        </li>
                        <!-- Nav Item - Messages -->
                        <li class="nav-item dropdown no-arrow mx-1">
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="messagesDropdown">
                                <h6 class="dropdown-header">
                                    Message Center
                                </h6>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="img/undraw_profile_1.svg"
                                            alt="...">
                                        <div class="status-indicator bg-success"></div>
                                    </div>
                                    <div class="font-weight-bold">
                                        <div class="text-truncate">Hi there! I am wondering if you can help me with a
                                            problem I've been having.</div>
                                        <div class="small text-gray-500">Emily Fowler · 58m</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="img/undraw_profile_2.svg"
                                            alt="...">
                                        <div class="status-indicator"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">I have the photos that you ordered last month, how
                                            would you like them sent to you?</div>
                                        <div class="small text-gray-500">Jae Chun · 1d</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="img/undraw_profile_3.svg"
                                            alt="...">
                                        <div class="status-indicator bg-warning"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">Last month's report looks great, I am very happy with
                                            the progress so far, keep up the good work!</div>
                                        <div class="small text-gray-500">Morgan Alvarez · 2d</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="https://source.unsplash.com/Mv9hjnEUHR4/60x60"
                                            alt="...">
                                        <div class="status-indicator bg-success"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">Am I a good boy? The reason I ask is because someone
                                            told me that people say this to all dogs, even if they aren't good...</div>
                                        <div class="small text-gray-500">Chicken the Dog · 2w</div>
                                    </div>
                                </a>
                                <a class="dropdown-item text-center small text-gray-500" href="#">Read More Messages</a>
                            </div>
                        </li>
                        <div class="topbar-divider d-none d-sm-block"></div> 
    
    <!-- Nav Item - User Information -->
    <li class="nav-item1 dropdown no-arrow">
    <a class="nav-link1 dropdown-toggle" href="#" id="userDropdown" role="button"
        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        
        <span class="mr-2 d-none d-lg-inline text-gray-600 small">
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
                <nav class="breadcrumb">
                    <section class="content">
                    <span class="textd">Siswa</span>
                    <span>/ Jurnal Siswa</span>
                </nav>
                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between align-items-center mb-4">
                        <a href="scena.php" class="btn btn-primary btn-icon-split">
                            <span class="icon text-white-50">
                                <i >
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 32 32" fill="none">
                                        <g clip-path="url(#clip0_1162_269)">
                                        <path d="M16.0006 30C12.2606 30 8.7456 28.544 6.1016 25.899C1.7796 21.578 0.753603 15.025 3.5476 9.595C3.8006 9.104 4.4026 8.911 4.8946 9.163C5.3856 9.415 5.5796 10.018 5.3266 10.51C2.9316 15.165 3.8106 20.781 7.5156 24.485C9.7816 26.752 12.7946 28 16.0006 28C19.2056 28 22.2196 26.752 24.4856 24.485C26.7516 22.218 28.0006 19.205 28.0006 16C28.0006 12.794 26.7526 9.781 24.4856 7.515C22.2186 5.249 19.2066 4 16.0006 4C12.7946 4 9.7816 5.249 7.5156 7.515C7.1246 7.906 6.4926 7.906 6.1016 7.515C5.7106 7.124 5.7106 6.492 6.1016 6.101C8.7456 3.457 12.2606 2 16.0006 2C19.7406 2 23.2566 3.457 25.8996 6.101C28.5446 8.745 30.0006 12.26 30.0006 16C30.0006 19.739 28.5446 23.255 25.8996 25.899C23.2566 28.544 19.7406 30 16.0006 30Z" fill="white"/>
                                        <path d="M16 22C15.448 22 15 21.553 15 21V11C15 10.448 15.448 10 16 10C16.552 10 17 10.448 17 11V21C17 21.553 16.552 22 16 22Z" fill="white"/>
                                        <path d="M21 17H11C10.448 17 10 16.552 10 16C10 15.448 10.448 15 11 15H21C21.553 15 22 15.448 22 16C22 16.552 21.553 17 21 17Z" fill="white"/>
                                        </g>
                                        <defs>
                                        <clipPath id="clip0_1162_269">
                                        <rect width="32" height="32" fill="white"/>
                                        </clipPath>
                                        </defs>
                                        </svg>
                                </i>
                            </span>
                            <span class="text">ABSEN</span>
                        </a> 
                    </div>
                    <div class="parent-container">
                    <form method="GET" action="cetak.php" id="form-cetak">
                        <input type="hidden" name="bulan" id="bulan-cetak" value="<?php echo isset($bulan) ? $bulan : ''; ?>">
                        <button type="submit"  class="btn-cetak">
                        <svg width="24" height="20" viewBox="0 0 24 20" fill="white" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" >
                            <rect width="24" height="20" fill="url(#pattern0_911_573)" fill="white"/>
                            <defs>
                            <pattern id="pattern0_911_573" patternContentUnits="objectBoundingBox" width="1" height="1">
                            <use xlink:href="#image0_911_573" transform="matrix(0.00390625 0 0 0.0046875 0 -0.1)"/>
                            </pattern>
                            <image id="image0_911_573" width="256" height="256" xlink:href="data:image/png;base64,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"/>
                            </defs>
                        </svg> Cetak Program PKL</button>
                   </form>
                    </div>

                    <div class="card shadow mb-4">
                        <div class="card-header py-3"style="background-color: #295BDB; color: white;">
                            <h6 class="m-0 font-weight-bold text-primary"></h6>
                        </div>
                    <div class="card-body">
                        
                    <div class="dropdown-containertabel">
    <!-- Dropdown untuk memilih bulan -->
    <select name="bulan" id="bulan" class="month-dropdown">
        <option value="01" <?php if ($bulan == '01') echo 'selected'; ?>>Januari</option>
        <option value="02" <?php if ($bulan == '02') echo 'selected'; ?>>Februari</option>
        <option value="03" <?php if ($bulan == '03') echo 'selected'; ?>>Maret</option>
        <option value="04" <?php if ($bulan == '04') echo 'selected'; ?>>April</option>
        <option value="05" <?php if ($bulan == '05') echo 'selected'; ?>>Mei</option>
        <option value="06" <?php if ($bulan == '06') echo 'selected'; ?>>Juni</option>
        <option value="07" <?php if ($bulan == '07') echo 'selected'; ?>>Juli</option>
        <option value="08" <?php if ($bulan == '08') echo 'selected'; ?>>Agustus</option>
        <option value="09" <?php if ($bulan == '09') echo 'selected'; ?>>September</option>
        <option value="10" <?php if ($bulan == '10') echo 'selected'; ?>>Oktober</option>
        <option value="11" <?php if ($bulan == '11') echo 'selected'; ?>>November</option>
        <option value="12" <?php if ($bulan == '12') echo 'selected'; ?>>Desember</option>
    </select>
</div>

<script>
    // JavaScript untuk menangani perubahan pada dropdown
    document.getElementById('bulan').addEventListener('change', function () {
        // Redirect ke jurnal.php dengan parameter bulan yang dipilih
        var bulan = this.value;
        window.location.href = 'jurnal.php?bulan=' + bulan;
    });

    // JavaScript untuk menyinkronkan dropdown dengan tombol cetak
    document.getElementById('bulan').addEventListener('change', function () {
        document.getElementById('bulan-cetak').value = this.value;
    });
</script>

                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0" border="1"> 
                                    <thead>
                                        <tr>
                                            <th style="text-align: center;">No</th>
                                            <th style="text-align: center;">Tgl Pelaksanaan</th>
                                            <th style="text-align: center;">Kegiatan</th>
                                            <th style="text-align: center;">Uraian</th>
                                            <th style="text-align: center;">Keterangan</th>
                                            <th style="text-align: center;">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody id="jurnalArea">  
                                    <?php if ($result->num_rows > 0) {
        $no = 1; // Variabel untuk nomor urut
        while ($row = $result->fetch_assoc()) {   
    ?>
        <tr>
            <td style="text-align: center;"><?php echo $no++; ?></td> <!-- Menampilkan nomor urut -->
            <td style="text-align: center;"><?php echo date('d/m/Y', strtotime($row['tanggal'])); ?></td>
            <td style="text-align: center;"><?php echo $row['kegiatan']; ?></td>
            <td style="text-align: center;"><?php echo $row['uraian']; ?></td>
            <td style="text-align: center;">
                <span class="status-label <?php echo ($row['status'] == 'terbaca' ? 'status-success' : 'status-danger'); ?>">
                    <?php echo ucfirst($row['status']); ?>
                </span>
                
            </td>
            <td style="text-align: center;">
                <a class="nav-link1" href="Dashboard.php?id=<?php echo $row['id_jurnal']; ?>" aria-label="Dashboard">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 44 44" fill="none">
                        <rect width="43.7588" height="44" rx="10" fill="#FF0000"/>
                        <path d="M19.6313 10C17.7123 10 16.1422 11.35 16.1422 13H12.6531C10.7341 13 9.16406 14.35 9.16406 16H33.5876C33.5876 14.35 32.0175 13 30.0985 13H26.6094C26.6094 11.35 25.0394 10 23.1204 10H19.6313ZM12.6531 19V33.43C12.6531 33.76 12.9323 34 13.3161 34H29.4705C29.8543 34 30.1334 33.76 30.1334 33.43V19H26.6443V29.5C26.6443 30.34 25.8767 31 24.8998 31C23.9229 31 23.1553 30.34 23.1553 29.5V19H19.6662V29.5C19.6662 30.34 18.8986 31 17.9216 31C16.9447 31 16.1771 30.34 16.1771 29.5V19H12.688H12.6531Z" fill="white"/>
                    </svg>
                </a>
                <a class="nav-link1" href="Dashboard.php?id=<?php echo $row['id_jurnal']; ?>" aria-label="Dashboard">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 44 44" fill="none">
                        <rect x="0.113281" width="43.7588" height="44" rx="10" fill="#008000"/>
                        <path d="M28.098 10L24.7907 13.11L31.4054 19.3299L34.7127 16.2199L28.098 10ZM21.4833 16.2199L8.25391 28.6597V34.8796H14.8686L28.098 22.4398L21.4833 16.2199Z" fill="white"/>
                    </svg>
                </a> 
            </td>
        </tr>
    <?php } } else {
        echo "<tr><td colspan='6' style='text-align: center;'>Tidak ada jurnal yang dapat Anda lihat.</td></tr>";
    } ?>
</tbody>

                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

         

<!-- <script>
document.getElementById('cetakButton').addEventListener('click', function () {

    const selectedMonth = document.getElementById('bulan').value;


    window.location.href = `cetak.php?bulan=${selectedMonth}`;
});



</script> -->
  <script>
    const currentLocation = location.href; // Mendapatkan URL halaman saat ini
    const menuItem = document.querySelectorAll('li.nav-item a'); // Mendapatkan semua elemen 'a' di dalam 'li.nav-item'
    
    menuItem.forEach(item => {
      if(item.href.includes("jurnal.php")){ 
        item.classList.add('active'); // Tambahkan class 'active' jika URL mengandung "industri.html"
      }
    });
  </script>

<?php include 'footer.php' ?>