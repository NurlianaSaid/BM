
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Data Anak Magang</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
     <style>
        .topbar{
            height: 4.375rem; 
            }
     </style>
    <link href="css/sb-admin-2.css?v3" rel="stylesheet">
    <link rel="stylesheet" href="css/dashbroad.css">
    <link rel="stylesheet" href="css/cards.css">
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <!-- <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html"> -->
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
                <a class="nav-link active" href="index.php">
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

            <li class="nav-item" id="monir">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
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
            <hr class="sidebar-divider ">

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
                    <H3>Dashboard</H3>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <div class="topbar-divider d-none d-sm-block"></div> 

                        <li class="nav-ite1 dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Douglas McGee</span>
                                <img class="img-profile rounded-circle" src="img/undraw_profile.svg">
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

                    <!-- Page Heading -->
                    <!-- <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
                    </div> -->

                      <div id="layoutSidenav">
                        <div id="layoutSidenav_content">
                            <main>
                                <div class="container-fluid px-4">
                                    <div class="row">
                                        <div class="col-xl-3 col-md-6">
                                            <div class="card text-white mb-4" style="background-color: #45DCE5;">

                                                <div class="card-body">
                                                    <div class="icon-text-container">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="74" height="74" viewBox="0 0 88 88" fill="none">
                                                            <path d="M33 33C33 26.7667 37.7667 22 44 22C50.2333 22 55 26.7667 55 33C55 39.2333 50.2333 44 44 44C37.7667 44 33 39.2333 33 33ZM44 51.3333C27.1333 51.3333 22 63.4333 22 63.4333V69.6667H66V63.4333C66 63.4333 60.8667 51.3333 44 51.3333Z" fill="white"/>
                                                            <path d="M67.8327 40.3333C72.8953 40.3333 76.9993 36.2293 76.9993 31.1667C76.9993 26.1041 72.8953 22 67.8327 22C62.7701 22 58.666 26.1041 58.666 31.1667C58.666 36.2293 62.7701 40.3333 67.8327 40.3333Z" fill="white"/>
                                                            <path d="M67.8331 47.666C63.4331 47.666 60.1331 48.766 57.5664 50.5993C65.9997 54.6327 69.2997 61.5993 69.2997 62.3327V62.6993H84.3331V57.9327C84.3331 57.566 80.2997 47.666 67.8331 47.666Z" fill="white"/>
                                                            <path d="M20.1667 40.3333C25.2293 40.3333 29.3333 36.2293 29.3333 31.1667C29.3333 26.1041 25.2293 22 20.1667 22C15.1041 22 11 26.1041 11 31.1667C11 36.2293 15.1041 40.3333 20.1667 40.3333Z" fill="white"/>
                                                            <path d="M20.166 47.666C24.566 47.666 27.866 48.766 30.4327 50.5993C21.9993 54.6327 18.6993 61.5993 18.6993 62.3327V62.6993H3.66602V57.9327C3.66602 57.566 7.69935 47.666 20.166 47.666Z" fill="white"/>
                                                        </svg>
                                                        <div class="card_ket">
                                                            <h3>20</h3>
                                                            <p>Siswa Magang</p>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="card-footer d-flex align-items-center justify-content-between">
                                                    <a class="small stretched-link" href="dataanakmagang.html" style="color: #45DCE5;">View Details</a>
                                                    <div class="small" style="color:white;">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 25 24" fill="none">
                                                        <circle cx="12" cy="12" r="12" fill="#45DCE5"/>
                                                        <g transform="translate(2, 2)"> 
                                                        <path d="M17.9125 10.6943C17.9335 10.6645 17.9523 10.6332 17.9688 10.6006L18.0312 10.4756L18.0688 10.3506C18.0829 10.3164 18.0934 10.2807 18.1 10.2443C18.132 10.0834 18.132 9.91775 18.1 9.75682C18.0934 9.7204 18.0829 9.68479 18.0688 9.65057L18.0312 9.52557L17.9688 9.40057C17.9523 9.36798 17.9335 9.33665 17.9125 9.30682C17.8678 9.23663 17.8154 9.17164 17.7563 9.11307L11.5063 2.86307C11.2671 2.65829 10.9595 2.55128 10.6449 2.56343C10.3303 2.57558 10.0319 2.706 9.8093 2.92862C9.58668 3.15124 9.45626 3.44966 9.44411 3.76425C9.43196 4.07885 9.53897 4.38644 9.74375 4.62557L13.8562 8.75057H3.125C2.79348 8.75057 2.47554 8.88227 2.24112 9.11669C2.0067 9.35111 1.875 9.66905 1.875 10.0006C1.875 10.3321 2.0067 10.65 2.24112 10.8845C2.47554 11.1189 2.79348 11.2506 3.125 11.2506H13.8562L9.74375 15.3693C9.6129 15.4814 9.50662 15.6193 9.43159 15.7744C9.35656 15.9294 9.3144 16.0984 9.30775 16.2705C9.3011 16.4427 9.33011 16.6143 9.39295 16.7747C9.4558 16.9351 9.55112 17.0808 9.67294 17.2026C9.79476 17.3245 9.94044 17.4198 10.1008 17.4826C10.2613 17.5455 10.4329 17.5745 10.6051 17.5678C10.7772 17.5612 10.9461 17.519 11.1012 17.444C11.2563 17.3689 11.3942 17.2627 11.5063 17.1318L17.7563 10.8818C17.815 10.8252 17.8674 10.7623 17.9125 10.6943Z" fill="white"/>
                                                    </svg>
                                                    
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-md-6">
                                            <div class="card text-white mb-4" style="background: #6CD971;">
                                                <div class="card-body">
                                                    <div class="icon-text-container">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="74" height="74" viewBox="0 0 74 74" fill="none">
                                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M55.5928 24.5738C56.4959 25.4769 56.4959 26.9411 55.5928 27.8442L34.0094 49.4274C33.5759 49.8612 32.9876 50.1048 32.3743 50.1048C31.7611 50.1048 31.1728 49.8612 30.7392 49.4274L18.4058 37.0941C17.5027 36.191 17.5027 34.727 18.4058 33.8239C19.3089 32.9208 20.7731 32.9208 21.6762 33.8239L32.3743 44.5218L52.3226 24.5738C53.2257 23.6707 54.6897 23.6707 55.5928 24.5738Z" fill="white"/>
                                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M36.9994 8.47852C21.2477 8.47852 8.47852 21.2477 8.47852 36.9994C8.47852 52.7509 21.2477 65.5202 36.9994 65.5202C43.4229 65.5202 49.3441 63.3995 54.1106 59.8191C55.1318 59.052 56.5816 59.2579 57.3487 60.2791C58.1156 61.3003 57.9096 62.7501 56.8884 63.5169C51.3486 67.6785 44.4585 70.1452 36.9994 70.1452C18.6934 70.1452 3.85352 55.3054 3.85352 36.9994C3.85352 18.6934 18.6934 3.85352 36.9994 3.85352C55.3054 3.85352 70.1452 18.6934 70.1452 36.9994C70.1452 41.6783 69.1742 46.1365 67.4207 50.1791C66.9126 51.3507 65.5507 51.8885 64.379 51.38C63.2074 50.8719 62.6696 49.51 63.1778 48.3383C64.684 44.8662 65.5202 41.0333 65.5202 36.9994C65.5202 21.2477 52.7509 8.47852 36.9994 8.47852Z" fill="white"/>
                                                          </svg>
                                                          <div class="card_ket">
                                                            <h3>40</h3>
                                                            <p> Data Jurnal </p>
                                                          </div>
                                                    </div>
                                                </div>
                                                <div class="card-footer d-flex align-items-center justify-content-between">
                                                    <a class="small stretched-link" href="verifikasidata.html" style="color: #6CD971;">View Details</a>
                                                    <div class="small" style="color: white;">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 25 24" fill="none">
                                                            <circle cx="12" cy="12" r="12" fill="#6cd971"/>
                                                            <g transform="translate(2, 2)"> 
                                                            <path d="M17.9125 10.6943C17.9335 10.6645 17.9523 10.6332 17.9688 10.6006L18.0312 10.4756L18.0688 10.3506C18.0829 10.3164 18.0934 10.2807 18.1 10.2443C18.132 10.0834 18.132 9.91775 18.1 9.75682C18.0934 9.7204 18.0829 9.68479 18.0688 9.65057L18.0312 9.52557L17.9688 9.40057C17.9523 9.36798 17.9335 9.33665 17.9125 9.30682C17.8678 9.23663 17.8154 9.17164 17.7563 9.11307L11.5063 2.86307C11.2671 2.65829 10.9595 2.55128 10.6449 2.56343C10.3303 2.57558 10.0319 2.706 9.8093 2.92862C9.58668 3.15124 9.45626 3.44966 9.44411 3.76425C9.43196 4.07885 9.53897 4.38644 9.74375 4.62557L13.8562 8.75057H3.125C2.79348 8.75057 2.47554 8.88227 2.24112 9.11669C2.0067 9.35111 1.875 9.66905 1.875 10.0006C1.875 10.3321 2.0067 10.65 2.24112 10.8845C2.47554 11.1189 2.79348 11.2506 3.125 11.2506H13.8562L9.74375 15.3693C9.6129 15.4814 9.50662 15.6193 9.43159 15.7744C9.35656 15.9294 9.3144 16.0984 9.30775 16.2705C9.3011 16.4427 9.33011 16.6143 9.39295 16.7747C9.4558 16.9351 9.55112 17.0808 9.67294 17.2026C9.79476 17.3245 9.94044 17.4198 10.1008 17.4826C10.2613 17.5455 10.4329 17.5745 10.6051 17.5678C10.7772 17.5612 10.9461 17.519 11.1012 17.444C11.2563 17.3689 11.3942 17.2627 11.5063 17.1318L17.7563 10.8818C17.815 10.8252 17.8674 10.7623 17.9125 10.6943Z" fill="white"/>
                                                        </svg>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-md-6">
                                            <div class="card text-white mb-4" style="background: #E85B5B;">
                                                <div class="card-body">
                                                    <div class="icon-text-container">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="74" height="74" viewBox="0 0 70 68" fill="none">
                                                            <g clip-path="url(#clip0_1279_595)">
                                                              <path d="M45.1361 46.1602H23.334V48.957H45.1361V46.1602Z" fill="white"/>
                                                              <path d="M53.8858 57.3477H41.748V60.1445H53.8858V57.3477Z" fill="white"/>
                                                              <path d="M40.8327 15.3964H34.9993C34.1943 15.3964 33.541 14.7713 33.541 13.998C33.541 13.2247 34.1943 12.5996 34.9993 12.5996H40.8327C41.6377 12.5996 42.291 13.2247 42.291 13.998C42.291 14.7713 41.6377 15.3964 40.8327 15.3964Z" fill="white"/>
                                                              <path d="M53.959 20.9902H37.9173C37.1123 20.9902 36.459 20.3651 36.459 19.5918C36.459 18.8184 37.1123 18.1934 37.9173 18.1934H53.959C54.764 18.1934 55.4173 18.8184 55.4173 19.5918C55.4173 20.3651 54.764 20.9902 53.959 20.9902Z" fill="white"/>
                                                              <path d="M52.5007 26.5839H33.5423C32.7373 26.5839 32.084 25.9588 32.084 25.1855C32.084 24.4122 32.7373 23.7871 33.5423 23.7871H52.5007C53.3057 23.7871 53.959 24.4122 53.959 25.1855C53.959 25.9588 53.3057 26.5839 52.5007 26.5839Z" fill="white"/>
                                                              <path d="M53.959 32.1777H33.5423C32.7373 32.1777 32.084 31.5526 32.084 30.7793C32.084 30.0059 32.7373 29.3809 33.5423 29.3809H53.959C54.764 29.3809 55.4173 30.0059 55.4173 30.7793C55.4173 31.5526 54.764 32.1777 53.959 32.1777Z" fill="white"/>
                                                              <path d="M51.0423 37.7714H33.5423C32.7373 37.7714 32.084 37.1463 32.084 36.373C32.084 35.5997 32.7373 34.9746 33.5423 34.9746H51.0423C51.8473 34.9746 52.5007 35.5997 52.5007 36.373C52.5007 37.1463 51.8473 37.7714 51.0423 37.7714Z" fill="white"/>
                                                              <path d="M52.5 43.3632H32.0833C31.2783 43.3632 30.625 42.7381 30.625 41.9648C30.625 41.1915 31.2783 40.5664 32.0833 40.5664H52.5C53.305 40.5664 53.9583 41.1915 53.9583 41.9648C53.9583 42.7381 53.305 43.3632 52.5 43.3632Z" fill="white"/>
                                                              <path d="M65.6257 0.0136719H29.2402V2.81048H65.6257V0.0136719Z" fill="white"/>
                                                              <path d="M36.3854 65.7386H0V62.9417C1.20604 62.9417 2.07667 62.6677 2.66146 62.1013C4.04833 60.763 4.025 57.6502 4.00458 54.9051C3.98125 51.837 3.96083 48.9368 5.65688 47.3006C6.44146 46.5441 7.48125 46.1609 8.75 46.1609H22.1287C25.0673 30.8261 24.7946 5.87997 24.7917 5.62406C24.8252 3.65651 25.7979 0.0136719 29.2396 0.0136719V2.81048C27.844 2.81048 27.7083 5.60169 27.7083 5.63105C27.7215 6.67566 28 32.3447 24.7625 47.8348L24.5277 48.9577H8.75C8.12583 48.9577 7.86771 49.1367 7.72771 49.2724C6.88625 50.0848 6.90521 52.6355 6.92125 54.887C6.94167 57.66 6.965 60.7449 5.63063 62.9417H36.3854C37.5915 62.9417 38.4621 62.6677 39.0469 62.1013C40.4338 60.763 40.4104 57.6502 40.39 54.9051C40.3667 51.837 40.3463 48.9368 42.0423 47.3006C42.8269 46.5441 43.8681 46.1609 45.1354 46.1609C46.6142 46.1609 47.7692 46.5539 48.5713 47.3314C49.9217 48.6403 49.9012 50.5841 49.8794 52.4649C49.8619 54.0493 49.8444 55.6868 50.6873 56.5035C51.2663 57.0643 52.3425 57.3481 53.8854 57.3481C54.0429 57.3481 54.5242 57.3481 55.1819 56.7007C61.0896 50.8847 61.5125 17.8727 61.1771 5.64364C61.2106 3.65651 62.1833 0.0136719 65.625 0.0136719C69.4313 0.0136719 70 7.02386 70 11.2009V12.5993H64.1856C64.2104 25.7806 63.4681 52.5516 57.2717 58.6529C56.2654 59.6429 55.1265 60.1449 53.8854 60.1449C51.5025 60.1449 49.7773 59.5968 48.615 58.4697C46.916 56.8237 46.9423 54.4926 46.9642 52.437C46.9787 51.1294 46.9933 49.78 46.499 49.3003C46.2073 49.0165 45.5977 48.9577 45.1354 48.9577C44.5113 48.9577 44.2531 49.1367 44.1131 49.2724C43.2717 50.0848 43.2906 52.6355 43.3067 54.887C43.33 58.1788 43.3577 61.9083 41.1163 64.0731C39.9729 65.1792 38.3804 65.7386 36.3854 65.7386ZM64.1681 9.80248H67.0513C66.901 6.38199 66.2331 3.21881 65.5113 2.78391C64.2294 2.81048 64.0938 5.60169 64.0938 5.63105C64.1127 6.30508 64.1477 7.77061 64.1681 9.80248Z" fill="white"/>
                                                            </g>
                                                            <defs>
                                                              <clipPath id="clip0_1279_595">
                                                                <rect width="70" height="67.1233" fill="white" transform="translate(0 0.0136719)"/>
                                                              </clipPath>
                                                            </defs>
                                                          </svg>
                                                          <div class="card_ket">
                                                            <h3>40</h3>
                                                            <p> Data Laporan</p>
                                                          </div>
                                                    </div>
                                                </div>
                                                <div class="card-footer d-flex align-items-center justify-content-between">
                                                    <a class="small stretched-link" style="color:#e85b5b;" href="laporananakmagang.html">View Details</a>
                                                    <div class="small" style="color:white">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 25 24" fill="none">
                                                            <circle cx="12" cy="12" r="12" fill="#e85b5b"/>
                                                            <g transform="translate(2, 2)"> 
                                                            <path d="M17.9125 10.6943C17.9335 10.6645 17.9523 10.6332 17.9688 10.6006L18.0312 10.4756L18.0688 10.3506C18.0829 10.3164 18.0934 10.2807 18.1 10.2443C18.132 10.0834 18.132 9.91775 18.1 9.75682C18.0934 9.7204 18.0829 9.68479 18.0688 9.65057L18.0312 9.52557L17.9688 9.40057C17.9523 9.36798 17.9335 9.33665 17.9125 9.30682C17.8678 9.23663 17.8154 9.17164 17.7563 9.11307L11.5063 2.86307C11.2671 2.65829 10.9595 2.55128 10.6449 2.56343C10.3303 2.57558 10.0319 2.706 9.8093 2.92862C9.58668 3.15124 9.45626 3.44966 9.44411 3.76425C9.43196 4.07885 9.53897 4.38644 9.74375 4.62557L13.8562 8.75057H3.125C2.79348 8.75057 2.47554 8.88227 2.24112 9.11669C2.0067 9.35111 1.875 9.66905 1.875 10.0006C1.875 10.3321 2.0067 10.65 2.24112 10.8845C2.47554 11.1189 2.79348 11.2506 3.125 11.2506H13.8562L9.74375 15.3693C9.6129 15.4814 9.50662 15.6193 9.43159 15.7744C9.35656 15.9294 9.3144 16.0984 9.30775 16.2705C9.3011 16.4427 9.33011 16.6143 9.39295 16.7747C9.4558 16.9351 9.55112 17.0808 9.67294 17.2026C9.79476 17.3245 9.94044 17.4198 10.1008 17.4826C10.2613 17.5455 10.4329 17.5745 10.6051 17.5678C10.7772 17.5612 10.9461 17.519 11.1012 17.444C11.2563 17.3689 11.3942 17.2627 11.5063 17.1318L17.7563 10.8818C17.815 10.8252 17.8674 10.7623 17.9125 10.6943Z" fill="white"/>
                                                        </svg>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-md-6">
                                            <div class="card text-white mb-4" style="background: #CF9743;" id="monitoring-card">
                                                <div class="card-body">
                                                    <div class="icon-text-container">
                                                        <svg xml="http://www.w3.org/2000/svg" width="74" height="74" viewBox="0 0 74 72" fill="none">
                                                            <path d="M67.8333 68.568H6.16667C2.76575 68.568 0 65.9167 0 62.6565V24.2318C0 20.9716 2.76575 18.3203 6.16667 18.3203H67.8333C71.2342 18.3203 74 20.9716 74 24.2318V62.6565C74 65.9167 71.2342 68.568 67.8333 68.568ZM6.16667 21.2761C4.46621 21.2761 3.08333 22.6017 3.08333 24.2318V62.6565C3.08333 64.2866 4.46621 65.6123 6.16667 65.6123H67.8333C69.5338 65.6123 70.9167 64.2866 70.9167 62.6565V24.2318C70.9167 22.6017 69.5338 21.2761 67.8333 21.2761H6.16667Z" fill="white"/>
                                                            <path d="M49.3327 13.8874H46.2493V10.9317C46.2493 10.1159 45.5571 9.45379 44.7077 9.45379H29.291C28.4416 9.45379 27.7493 10.1159 27.7493 10.9317V13.8874H24.666V10.9317C24.666 8.48726 26.7411 6.49805 29.291 6.49805H44.7077C47.2576 6.49805 49.3327 8.48726 49.3327 10.9317V13.8874Z" fill="white"/>
                                                            <path d="M61.6667 33.1003H10.7917C9.94067 33.1003 9.25 32.4397 9.25 31.6224C9.25 30.8051 9.94067 30.1445 10.7917 30.1445H61.6667C62.5177 30.1445 63.2083 30.8051 63.2083 31.6224C63.2083 32.4397 62.5177 33.1003 61.6667 33.1003Z" fill="white"/>
                                                           <path d="M61.6667 56.7448H10.7917C9.94067 56.7448 9.25 56.0842 9.25 55.2669C9.25 54.4497 9.94067 53.7891 10.7917 53.7891H61.6667C62.5177 53.7891 63.2083 54.4497 63.2083 55.2669C63.2083 56.0842 62.5177 56.7448 61.6667 56.7448Z" fill="white"/>
                                                             <path d="M61.6667 44.9225H10.7917C9.94067 44.9225 9.25 44.2619 9.25 43.4447C9.25 42.6274 9.94067 41.9668 10.7917 41.9668H61.6667C62.5177 41.9668 63.2083 42.6274 63.2083 43.4447C63.2083 44.2619 62.5177 44.9225 61.6667 44.9225Z" fill="white"/>
                                                            <path d="M27.7493 13.8867H24.666V19.7982H27.7493V13.8867Z" fill="white"/>
                                                            <path d="M49.3333 13.8867H46.25V19.7982H49.3333V13.8867Z" fill="white"/>
                                                            <path d="M47.7923 12.4102H26.209V15.3659H47.7923V12.4102Z" fill="white"/>
                                                          </svg>
                                                         
                                                        <div class="card_ket">
                                                            <h3>40</h3>
                                                            <p>Monitoring</p>
                                                        </div>
                                                    </div>
                                                  
                                                </div>
                                                
                                                <div class="card-footer d-flex align-items-center justify-content-between">
                                                    <a class="small stretched-link" href="#monir" style="color:#cf9743">View Details</a>
                                                    <div class="small" style="color:white">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 25 24" fill="none">
                                                            <circle cx="12" cy="12" r="12" fill="#cf9743"/>
                                                            <g transform="translate(2, 2)"> 
                                                            <path d="M17.9125 10.6943C17.9335 10.6645 17.9523 10.6332 17.9688 10.6006L18.0312 10.4756L18.0688 10.3506C18.0829 10.3164 18.0934 10.2807 18.1 10.2443C18.132 10.0834 18.132 9.91775 18.1 9.75682C18.0934 9.7204 18.0829 9.68479 18.0688 9.65057L18.0312 9.52557L17.9688 9.40057C17.9523 9.36798 17.9335 9.33665 17.9125 9.30682C17.8678 9.23663 17.8154 9.17164 17.7563 9.11307L11.5063 2.86307C11.2671 2.65829 10.9595 2.55128 10.6449 2.56343C10.3303 2.57558 10.0319 2.706 9.8093 2.92862C9.58668 3.15124 9.45626 3.44966 9.44411 3.76425C9.43196 4.07885 9.53897 4.38644 9.74375 4.62557L13.8562 8.75057H3.125C2.79348 8.75057 2.47554 8.88227 2.24112 9.11669C2.0067 9.35111 1.875 9.66905 1.875 10.0006C1.875 10.3321 2.0067 10.65 2.24112 10.8845C2.47554 11.1189 2.79348 11.2506 3.125 11.2506H13.8562L9.74375 15.3693C9.6129 15.4814 9.50662 15.6193 9.43159 15.7744C9.35656 15.9294 9.3144 16.0984 9.30775 16.2705C9.3011 16.4427 9.33011 16.6143 9.39295 16.7747C9.4558 16.9351 9.55112 17.0808 9.67294 17.2026C9.79476 17.3245 9.94044 17.4198 10.1008 17.4826C10.2613 17.5455 10.4329 17.5745 10.6051 17.5678C10.7772 17.5612 10.9461 17.519 11.1012 17.444C11.2563 17.3689 11.3942 17.2627 11.5063 17.1318L17.7563 10.8818C17.815 10.8252 17.8674 10.7623 17.9125 10.6943Z" fill="white"/>
                                                        </svg>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        
                                    </div>
                                    </div>
                                    </main>
                        </div>
                    </div>


                </div>
                <!-- /.container-fluid -->

            </div>
            <script>
                const currentLocation = location.href; // Mendapatkan URL halaman saat ini
                const menuItem = document.querySelectorAll('li.nav-item a'); // Mendapatkan semua elemen 'a' di dalam 'li.nav-item'
                
                menuItem.forEach(item => {
                  if(item.href.includes("Pengajuansiswa.html")){ 
                    item.classList.add('active'); // Tambahkan class 'active' jika URL mengandung "industri.html"
                  }
                });
              </script>
            
            <!-- End of Main Content -->

            <!-- Footer -->
            <?php require 'footer.php' ?>
          