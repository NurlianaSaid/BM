<?php 
    include 'koneksi.php';
    $query = "SELECT * FROM tb_siswa;";
    $sql = mysqli_query($conn, $query);
    $no = 0;
    
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Tables</title>

    <!-- Custom fonts for this template -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/mastersiswa.css?v1" rel="stylesheet">
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
       
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="0index.php">
                <div class="sidebar-brand-icon rotate-n-" style="color: #000;">
                    <i href="0index.php"> <img src="img/Screenshot (7).png" alt=""></i>
                </div>
                <div class="sidebar-brand-text mx-1 mt-1" href="0index.php">HALAMAN ADMIN</div>  
            </a>

          

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
            
            
                
            <li class="nav-item active">
                <a class="nav-link" href="dashboard.php" aria-label="Dashboard">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"  xmlns="http://www.w3.org/2000/svg">
                        <path d="M12 9.81818C5.271 9.81818 0 7.662 0 4.90909C0 2.15618 5.271 0 12 0C18.729 0 24 2.15618 24 4.90909C24 7.662 18.729 9.81818 12 9.81818ZM12 1.09091C6.8916 1.09091 1.2 2.65909 1.2 4.90909C1.2 7.15909 6.8916 8.72727 12 8.72727C17.1084 8.72727 22.8 7.15909 22.8 4.90909C22.8 2.65909 17.1084 1.09091 12 1.09091Z" fill="black"/>
                        <path d="M12 14.1815C5.271 14.1815 0 12.0253 0 9.27237V4.90874C0 4.6071 0.2682 4.36328 0.6 4.36328C0.9318 4.36328 1.2 4.6071 1.2 4.90874V9.27237C1.2 11.5224 6.8916 13.0906 12 13.0906C17.1084 13.0906 22.8 11.5224 22.8 9.27237V4.90874C22.8 4.6071 23.0682 4.36328 23.4 4.36328C23.7318 4.36328 24 4.6071 24 4.90874V9.27237C24 12.0253 18.729 14.1815 12 14.1815Z" fill="black"/>
                        <path d="M12 19.0922C5.271 19.0922 0 16.936 0 14.1831V9.27397C0 8.97233 0.2682 8.72852 0.6 8.72852C0.9318 8.72852 1.2 8.97233 1.2 9.27397V14.1831C1.2 16.4331 6.8916 18.0012 12 18.0012C17.1084 18.0012 22.8 16.4331 22.8 14.1831V9.27397C22.8 8.97233 23.0682 8.72852 23.4 8.72852C23.7318 8.72852 24 8.97233 24 9.27397V14.1831C24 16.936 18.729 19.0922 12 19.0922Z" fill="black"/>
                        <path d="M12 24.0004C5.271 24.0004 0 21.8442 0 19.0913V14.1822C0 13.8805 0.2682 13.6367 0.6 13.6367C0.9318 13.6367 1.2 13.8805 1.2 14.1822V19.0913C1.2 21.3413 6.8916 22.9094 12 22.9094C17.1084 22.9094 22.8 21.3413 22.8 19.0913V14.1822C22.8 13.8805 23.0682 13.6367 23.4 13.6367C23.7318 13.6367 24 13.8805 24 14.1822V19.0913C24 21.8442 18.729 24.0004 12 24.0004Z" fill="black"/>
                    </svg>
                    
                    <span>Dashboard</span>
                </a>
            </li>
            

            <!-- Divider -->
            

            <!-- Heading -->


            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link" href="pengajuansiswa.php"  href="3Pengajuan siswa.html">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M11.5 24H3.5C2.1215 24 1 22.8785 1 21.5V2.5C1 2.2235 1.224 2 1.5 2C1.776 2 2 2.2235 2 2.5V21.5C2 22.327 2.673 23 3.5 23H11.5C11.776 23 12 23.2235 12 23.5C12 23.7765 11.776 24 11.5 24Z" fill="#000"/>
                        <path d="M20.5 11.4995C20.224 11.4995 20 11.276 20 10.9995V5H3.5C2.1215 5 1 3.8785 1 2.5C1 1.1215 2.1215 0 3.5 0H20.5C20.776 0 21 0.2235 21 0.5C21 0.7765 20.776 1 20.5 1H3.5C2.673 1 2 1.673 2 2.5C2 3.327 2.673 4 3.5 4H21V10.9995C21 11.276 20.776 11.4995 20.5 11.4995Z" fill="#000"/>
                        <path d="M17 24C13.6915 24 11 21.3085 11 18C11 14.6915 13.6915 12 17 12C20.3085 12 23 14.6915 23 18C23 21.3085 20.3085 24 17 24ZM17 13C14.243 13 12 15.243 12 18C12 20.757 14.243 23 17 23C19.757 23 22 20.757 22 18C22 15.243 19.757 13 17 13Z" fill="#000"/>
                        <path d="M17 21C16.724 21 16.5 20.7765 16.5 20.5V15.5C16.5 15.2235 16.724 15 17 15C17.276 15 17.5 15.2235 17.5 15.5V20.5C17.5 20.7765 17.276 21 17 21Z" fill="#000"/>
                        <path d="M17.0001 21.2071L14.6466 18.8536C14.4511 18.6581 14.4511 18.3421 14.6466 18.1466C14.8421 17.9511 15.1581 17.9511 15.3536 18.1466L17.0001 19.7931L18.6466 18.1466C18.8421 17.9511 19.1581 17.9511 19.3536 18.1466C19.5491 18.3421 19.5491 18.6581 19.3536 18.8536L17.0001 21.2071Z" fill="#000"/>
                        <path d="M20 2H3.5V3H20V2Z" fill="#000"/>
                        </svg>                        
                    <span>Pengajuan Siswa</span>
                </a> 
               
            </li>

                <!-- Nav Item - Pages Collapse Menu -->
                <li class="nav-item">
                    <a class="nav-link collapsed" href="dataindustri.php">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M11.5 24H3.5C2.1215 24 1 22.8785 1 21.5V2.5C1 2.2235 1.224 2 1.5 2C1.776 2 2 2.2235 2 2.5V21.5C2 22.327 2.673 23 3.5 23H11.5C11.776 23 12 23.2235 12 23.5C12 23.7765 11.776 24 11.5 24Z" fill="#000"/>
                            <path d="M20.5 11.4995C20.224 11.4995 20 11.276 20 10.9995V5H3.5C2.1215 5 1 3.8785 1 2.5C1 1.1215 2.1215 0 3.5 0H20.5C20.776 0 21 0.2235 21 0.5C21 0.7765 20.776 1 20.5 1H3.5C2.673 1 2 1.673 2 2.5C2 3.327 2.673 4 3.5 4H21V10.9995C21 11.276 20.776 11.4995 20.5 11.4995Z" fill="#000"/>
                            <path d="M17 24C13.6915 24 11 21.3085 11 18C11 14.6915 13.6915 12 17 12C20.3085 12 23 14.6915 23 18C23 21.3085 20.3085 24 17 24ZM17 13C14.243 13 12 15.243 12 18C12 20.757 14.243 23 17 23C19.757 23 22 20.757 22 18C22 15.243 19.757 13 17 13Z" fill="#000"/>
                            <path d="M17 21C16.724 21 16.5 20.7765 16.5 20.5V15.5C16.5 15.2235 16.724 15 17 15C17.276 15 17.5 15.2235 17.5 15.5V20.5C17.5 20.7765 17.276 21 17 21Z" fill="#000"/>
                            <path d="M17.0001 21.2071L14.6466 18.8536C14.4511 18.6581 14.4511 18.3421 14.6466 18.1466C14.8421 17.9511 15.1581 17.9511 15.3536 18.1466L17.0001 19.7931L18.6466 18.1466C18.8421 17.9511 19.1581 17.9511 19.3536 18.1466C19.5491 18.3421 19.5491 18.6581 19.3536 18.8536L17.0001 21.2071Z" fill="#000"/>
                            <path d="M20 2H3.5V3H20V2Z" fill="#000"/>
                            </svg>                        
                        <span>Data Industri</span>
                    </a> 
                   
                </li>
                <li class="nav-item">
                <a class="nav-link" href="user.php">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12 23.9999C11.9198 23.9999 11.8396 23.9832 11.7655 23.9493L0.310909 18.7373C0.121091 18.6507 0 18.4678 0 18.2666V2.10934C0 1.93057 0.096 1.76431 0.254182 1.6684C0.411818 1.57302 0.610909 1.56208 0.78 1.6387L12 6.74388L23.22 1.63818C23.3891 1.56208 23.5871 1.5725 23.7453 1.6684C23.904 1.76431 24 1.93057 24 2.10934V18.2666C24 18.4678 23.8789 18.6507 23.6891 18.7373L12.2345 23.9493C12.1604 23.9832 12.0802 23.9999 12 23.9999ZM1.09091 17.9372L12 22.9012L22.9091 17.9372V2.93493L12.2345 7.79201C12.0867 7.85925 11.9138 7.85925 11.766 7.79201L1.09091 2.93493V17.9372Z" fill="black"/>
                        <path d="M11.9957 5.31821L2.48681 0.99171C2.21463 0.867663 2.09954 0.556505 2.22881 0.296946C2.35863 0.0368663 2.68372 -0.072065 2.9559 0.0498964L11.9957 4.16375L21.0355 0.0498964C21.3083 -0.072065 21.6328 0.0368663 21.7626 0.296946C21.8919 0.556505 21.7768 0.867663 21.5046 0.99171L11.9957 5.31821Z" fill="black"/>
                        <path d="M12.5479 7.32227H11.457V23.4795H12.5479V7.32227Z" fill="black"/>
                        </svg>     
                    <span>Data User</span>
                </a>
                
            </li>

            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link active" href="datamastersiswa.php">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12 23.9999C11.9198 23.9999 11.8396 23.9832 11.7655 23.9493L0.310909 18.7373C0.121091 18.6507 0 18.4678 0 18.2666V2.10934C0 1.93057 0.096 1.76431 0.254182 1.6684C0.411818 1.57302 0.610909 1.56208 0.78 1.6387L12 6.74388L23.22 1.63818C23.3891 1.56208 23.5871 1.5725 23.7453 1.6684C23.904 1.76431 24 1.93057 24 2.10934V18.2666C24 18.4678 23.8789 18.6507 23.6891 18.7373L12.2345 23.9493C12.1604 23.9832 12.0802 23.9999 12 23.9999ZM1.09091 17.9372L12 22.9012L22.9091 17.9372V2.93493L12.2345 7.79201C12.0867 7.85925 11.9138 7.85925 11.766 7.79201L1.09091 2.93493V17.9372Z" fill="black"/>
                        <path d="M11.9957 5.31821L2.48681 0.99171C2.21463 0.867663 2.09954 0.556505 2.22881 0.296946C2.35863 0.0368663 2.68372 -0.072065 2.9559 0.0498964L11.9957 4.16375L21.0355 0.0498964C21.3083 -0.072065 21.6328 0.0368663 21.7626 0.296946C21.8919 0.556505 21.7768 0.867663 21.5046 0.99171L11.9957 5.31821Z" fill="black"/>
                        <path d="M12.5479 7.32227H11.457V23.4795H12.5479V7.32227Z" fill="black"/>
                        </svg>     
                    <span>Data Master Siswa</span>
                </a>
                
            </li>

            <!-- Divider -->
             

            <!-- Heading -->
          

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="datamasterguru.php ">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12 23.9999C11.9198 23.9999 11.8396 23.9832 11.7655 23.9493L0.310909 18.7373C0.121091 18.6507 0 18.4678 0 18.2666V2.10934C0 1.93057 0.096 1.76431 0.254182 1.6684C0.411818 1.57302 0.610909 1.56208 0.78 1.6387L12 6.74388L23.22 1.63818C23.3891 1.56208 23.5871 1.5725 23.7453 1.6684C23.904 1.76431 24 1.93057 24 2.10934V18.2666C24 18.4678 23.8789 18.6507 23.6891 18.7373L12.2345 23.9493C12.1604 23.9832 12.0802 23.9999 12 23.9999ZM1.09091 17.9372L12 22.9012L22.9091 17.9372V2.93493L12.2345 7.79201C12.0867 7.85925 11.9138 7.85925 11.766 7.79201L1.09091 2.93493V17.9372Z" fill="black"/>
                        <path d="M11.9957 5.31821L2.48681 0.99171C2.21463 0.867663 2.09954 0.556505 2.22881 0.296946C2.35863 0.0368663 2.68372 -0.072065 2.9559 0.0498964L11.9957 4.16375L21.0355 0.0498964C21.3083 -0.072065 21.6328 0.0368663 21.7626 0.296946C21.8919 0.556505 21.7768 0.867663 21.5046 0.99171L11.9957 5.31821Z" fill="black"/>
                        <path d="M12.5479 7.32227H11.457V23.4795H12.5479V7.32227Z" fill="black"/>
                        </svg>                        
                    <span>Data Master Guru</span>
            </a>
            </li>

            <!-- Nav Item - Charts -->
            <li class="nav-item">
                <a class="nav-link" href="pesan.php">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M22 24H2C0.897 24 0 22.6545 0 21V3C0 1.3455 0.897 0 2 0H22C23.103 0 24 1.3455 24 3V21C24 22.6545 23.103 24 22 24ZM2 1.5C1.4485 1.5 1 2.17275 1 3V21C1 21.8272 1.4485 22.5 2 22.5H22C22.5515 22.5 23 21.8272 23 21V3C23 2.17275 22.5515 1.5 22 1.5H2Z" fill="black"/>
                        <path d="M12.0002 15.8932L3.22871 7.37998C2.99671 7.15423 2.93021 6.69073 3.08021 6.34273C3.23021 5.99473 3.53971 5.89573 3.77171 6.11998L12.0002 14.1067L20.2287 6.11998C20.4607 5.89573 20.7702 5.99473 20.9202 6.34273C21.0702 6.69073 21.0037 7.15423 20.7717 7.37998L12.0002 15.8932Z" fill="black"/>
                        <path d="M3.00079 19.5004C2.83929 19.5004 2.68029 19.3834 2.58429 19.1667C2.43079 18.8217 2.49279 18.3567 2.72279 18.1264L7.22279 13.6264C7.45279 13.3962 7.76329 13.4892 7.91629 13.8342C8.06979 14.1792 8.00779 14.6442 7.77779 14.8744L3.27779 19.3744C3.19229 19.4592 3.09579 19.5004 3.00079 19.5004Z" fill="black"/>
                        <path d="M20.9998 19.5004C20.9048 19.5004 20.8083 19.4592 20.7228 19.3744L16.2228 14.8744C15.9928 14.6442 15.9308 14.1792 16.0843 13.8342C16.2373 13.4892 16.5473 13.3962 16.7778 13.6264L21.2778 18.1264C21.5078 18.3567 21.5698 18.8217 21.4163 19.1667C21.3203 19.3834 21.1613 19.5004 20.9998 19.5004Z" fill="black"/>
                        </svg>                        
                    <span>Pesan Siswa</span></a>
            </li>

            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="6Pengaturan.php">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0_1505_2652)">
                        <path d="M13 24H11C10.173 24 9.5 23.327 9.5 22.5V20.638C8.86 20.453 8.244 20.1975 7.6595 19.8745L6.3425 21.192C5.7755 21.759 4.788 21.758 4.221 21.192L2.8065 19.778C2.523 19.495 2.367 19.118 2.367 18.7175C2.367 18.317 2.523 17.94 2.8065 17.657L4.124 16.339C3.8015 15.756 3.546 15.14 3.3615 14.4995H1.5C0.673 14.4995 0 13.8265 0 12.9995V10.9995C0 10.5985 0.156 10.222 0.439 9.939C0.7225 9.656 1.099 9.4995 1.5 9.4995H3.362C3.547 8.8605 3.802 8.244 4.125 7.66L2.808 6.3425C2.223 5.7575 2.223 4.8065 2.808 4.2215L4.222 2.807C4.7885 2.241 5.7765 2.24 6.3435 2.807L7.661 4.1245C8.245 3.802 8.861 3.5465 9.5 3.362V1.5C9.5 0.673 10.173 0 11 0H13C13.827 0 14.5 0.673 14.5 1.5V3.362C15.14 3.547 15.756 3.8025 16.339 4.1245L17.6565 2.807C18.2235 2.241 19.211 2.24 19.778 2.807L21.1925 4.221C21.476 4.504 21.632 4.881 21.632 5.2815C21.632 5.682 21.476 6.059 21.1925 6.342L19.8755 7.6595C20.1985 8.2435 20.454 8.8595 20.6385 9.4995H22.5C23.327 9.4995 24 10.1725 24 10.9995V12.9995C24 13.4005 23.844 13.777 23.561 14.06C23.278 14.343 22.901 14.4995 22.5 14.4995H20.638C20.453 15.1395 20.1975 15.756 19.875 16.3395L21.192 17.657C21.777 18.242 21.777 19.193 21.192 19.778L19.778 21.1925C19.211 21.759 18.2235 21.759 17.6565 21.1925L16.34 19.875C15.756 20.198 15.1395 20.453 14.5005 20.638V22.5C14.5 23.327 13.8275 24 13 24ZM7.5785 18.749C7.668 18.749 7.7585 18.773 7.839 18.822C8.547 19.255 9.3135 19.573 10.1175 19.7675C10.342 19.822 10.5 20.0225 10.5 20.2535V22.5C10.5 22.776 10.7245 23 11 23H13C13.2755 23 13.5 22.776 13.5 22.5V20.2535C13.5 20.0225 13.658 19.822 13.8825 19.7675C14.6855 19.573 15.452 19.256 16.1605 18.8225C16.3585 18.702 16.6115 18.7325 16.775 18.8955L18.364 20.485C18.5515 20.672 18.8835 20.673 19.0715 20.485L20.4855 19.0705C20.6805 18.8755 20.6805 18.5585 20.4855 18.3635L18.896 16.774C18.7325 16.611 18.7025 16.3565 18.823 16.1595C19.2555 15.4525 19.573 14.686 19.7675 13.8815C19.8215 13.657 20.0225 13.4985 20.2535 13.4985H22.5C22.6335 13.4985 22.7595 13.4465 22.854 13.352C22.948 13.259 23 13.1335 23 12.9995V10.9995C23 10.7235 22.7755 10.4995 22.5 10.4995H20.2535C20.0225 10.4995 19.8215 10.3415 19.7675 10.1165C19.5735 9.313 19.256 8.5465 18.823 7.8385C18.7025 7.6415 18.7325 7.388 18.896 7.224L20.4855 5.6345C20.5785 5.541 20.632 5.4125 20.632 5.281C20.632 5.1495 20.5785 5.0205 20.4855 4.9275L19.071 3.5135C18.882 3.325 18.5525 3.325 18.3635 3.5135L16.774 5.103C16.611 5.267 16.3575 5.2975 16.1595 5.176C15.453 4.744 14.687 4.426 13.8825 4.2315C13.6585 4.178 13.5 3.9775 13.5 3.7465V1.5C13.5 1.224 13.2755 1 13 1H11C10.7245 1 10.5 1.224 10.5 1.5V3.7465C10.5 3.9775 10.342 4.178 10.1175 4.2325C9.3145 4.4265 8.548 4.744 7.8395 5.177C7.642 5.2975 7.3885 5.2675 7.2255 5.104L5.636 3.5145C5.447 3.326 5.1175 3.326 4.9285 3.5145L3.515 4.9285C3.32 5.1235 3.32 5.4405 3.515 5.6355L5.1045 7.225C5.268 7.388 5.298 7.6425 5.1775 7.8395C4.7445 8.5475 4.427 9.314 4.233 10.117C4.179 10.3415 3.978 10.5 3.747 10.5H1.5C1.3665 10.5 1.2405 10.552 1.146 10.6465C1.052 10.74 1 10.8655 1 10.9995V12.9995C1 13.2755 1.2245 13.4995 1.5 13.4995H3.7465C3.9775 13.4995 4.1785 13.6575 4.2325 13.8825C4.427 14.6865 4.7445 15.453 5.177 16.16C5.2975 16.357 5.2675 16.6105 5.104 16.7745L3.5145 18.3645C3.4215 18.458 3.368 18.5865 3.368 18.718C3.368 18.8495 3.4215 18.9785 3.5145 19.0715L4.929 20.4855C5.1175 20.674 5.4475 20.674 5.6365 20.4855L7.2255 18.896C7.3215 18.799 7.449 18.749 7.5785 18.749Z" fill="black"/>
                        <path d="M12 17C9.243 17 7 14.757 7 12C7 9.243 9.243 7 12 7C14.757 7 17 9.243 17 12C17 14.757 14.7575 17 12 17ZM12 8C9.7945 8 8 9.7945 8 12C8 14.2055 9.7945 16 12 16C14.2055 16 16 14.2055 16 12C16 9.7945 14.206 8 12 8Z" fill="black"/>
                        </g>
                        <defs>
                        <clipPath id="clip0_1505_2652">
                        <rect width="24" height="24" fill="white"/>
                        </clipPath>
                        </defs>
                        </svg>                        
                    <span>Pengaturan akun</span></a>
            </li>
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
                            <a class="nav-link1" href="4Data master siswa.html" aria-label="Dashboard">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M12 23.9999C11.9198 23.9999 11.8396 23.9832 11.7655 23.9493L0.310909 18.7373C0.121091 18.6507 0 18.4678 0 18.2666V2.10934C0 1.93057 0.096 1.76431 0.254182 1.6684C0.411818 1.57302 0.610909 1.56208 0.78 1.6387L12 6.74388L23.22 1.63818C23.3891 1.56208 23.5871 1.5725 23.7453 1.6684C23.904 1.76431 24 1.93057 24 2.10934V18.2666C24 18.4678 23.8789 18.6507 23.6891 18.7373L12.2345 23.9493C12.1604 23.9832 12.0802 23.9999 12 23.9999ZM1.09091 17.9372L12 22.9012L22.9091 17.9372V2.93493L12.2345 7.79201C12.0867 7.85925 11.9138 7.85925 11.766 7.79201L1.09091 2.93493V17.9372Z" fill="black"/>
                                    <path d="M11.9957 5.31821L2.48681 0.99171C2.21463 0.867663 2.09954 0.556505 2.22881 0.296946C2.35863 0.0368663 2.68372 -0.072065 2.9559 0.0498964L11.9957 4.16375L21.0355 0.0498964C21.3083 -0.072065 21.6328 0.0368663 21.7626 0.296946C21.8919 0.556505 21.7768 0.867663 21.5046 0.99171L11.9957 5.31821Z" fill="black"/>
                                    <path d="M12.5479 7.32227H11.457V23.4795H12.5479V7.32227Z" fill="black"/>
                                    </svg>                                                                   
                                <span>Data Master Siswa</span>
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

                        

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link1 dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                
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

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="text">Master <span>Siswa</span></h1>
                        <a href="4inputsiswa.php" class="btn btn-primary btn-icon-split">
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
                            <span class="text">INPUT DATA</span>
                        </a> 
                    </div>
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3"style="background-color: #295BDB; color: white;">
                            <h6 class="m-0 font-weight-bold text-primary"></h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th style="text-align: center;">Id siswa</th>
                                            <th style="text-align: center;">Nis</th>
                                            <th style="text-align: center;">Nama Siswa</th>
                                            <th style="text-align: center;">Kelas Siswa</th>
                                            <th style="text-align: center;">Jenis Kelamin</th>
                                            <th style="text-align: center;">Alamat</th>
                                            <th style="text-align: center;">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        
                                        <?php
                                        while($result = mysqli_fetch_assoc($sql)){
                                        ?>
                                        <tr>
                                            
                                            <td style="text-align: center;">
                                            <?php
                                                echo ++$no;
                                                ?>.
                                            </td>
                                            <td style="display: flex; align-items: center; justify-content: center;">
                                            <img src="img/profil.svg" alt="" style="margin-right: 10px;">
                                            <?php
                                                echo $result['Nis'];
                                            ?>
                                            </td>

                                            <td style="text-align: center;">
                                            <?php
                                                echo $result['Nama_siswa'];
                                                ?>
                                            </td>
                                            <td style="text-align: center;">
                                            <?php
                                                echo $result['Kelas_siswa'];
                                                ?>
                                            </td>
                                            <td style="text-align: center;">
                                            <?php
                                                echo $result['Jenis_kelamin'];
                                                ?>
                                            </td>
                                            <td style="text-align: center;">
                                            <?php
                                                echo $result['Alamat'];
                                                ?>
                                            </td>
                                            
                                            <td style="text-align: center;">
                                            <a class="nav-link1" href="proses.php?delete=<?php echo $result['Id_siswaa']; ?>" onclick="return confirm('Apakah anda yakin ingin menghapus?')">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 44 44" fill="none">
                                                        <rect width="43.7588" height="44" rx="10" fill="#FF0000"/>
                                                        <path d="M19.6313 10C17.7123 10 16.1422 11.35 16.1422 13H12.6531C10.7341 13 9.16406 14.35 9.16406 16H33.5876C33.5876 14.35 32.0175 13 30.0985 13H26.6094C26.6094 11.35 25.0394 10 23.1204 10H19.6313ZM12.6531 19V33.43C12.6531 33.76 12.9323 34 13.3161 34H29.4705C29.8543 34 30.1334 33.76 30.1334 33.43V19H26.6443V29.5C26.6443 30.34 25.8767 31 24.8998 31C23.9229 31 23.1553 30.34 23.1553 29.5V19H19.6662V29.5C19.6662 30.34 18.8986 31 17.9216 31C16.9447 31 16.1771 30.34 16.1771 29.5V19H12.688H12.6531Z" fill="white"/>
                                                        </svg>                                                                
                                                        <!-- <span>hapus</span> -->
                                                </a>
                                                <a class="nav-link1" href="4inputsiswa.php?ubah=<?php echo $result['Id_siswaa']; ?>" aria-label="Dashboard">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 44 44" fill="none">
                                                        <rect x="0.113281" width="43.7588" height="44" rx="10" fill="#008000"/>
                                                        <path d="M28.098 10L24.7907 13.11L31.4054 19.3299L34.7127 16.2199L28.098 10ZM21.4833 16.2199L8.25391 28.6597V34.8796H14.8686L28.098 22.4398L21.4833 16.2199Z" fill="white"/>
                                                    </svg>
                                                </a>
                                                
                                                
                                        </tr>
                                            </td>
                                        </tr>
                                        <?php 
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
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span> @smkn_labuang</span>
                    </div>
                </div>
            </footer -->
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Apakah Anda Yakin Ingin Logout</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                
                <div class="modal-footer">
                    <a class="btn btn-primary" style="width: 125.184px;" href="login2.php">Yes,Logout</a>
                    <button class="btn btn-white" type="button" data-dismiss="modal" style="border: 1px solid #D9D9D9; width: 89px;">Cancel</button>
                   
                </div>
            </div>
        </div>
    </div>


    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>
  <!-- Page level plugins -->
  <script src="vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="js/demo/datatables-demo.js"></script>


  <script>
    const currentLocation = location.href; // Mendapatkan URL halaman saat ini
    const menuItem = document.querySelectorAll('li.nav-item a'); // Mendapatkan semua elemen 'a' di dalam 'li.nav-item'
    
    menuItem.forEach(item => {
      if(item.href.includes("4Data master siswa.html")){ 
        item.classList.add('active'); // Tambahkan class 'active' jika URL mengandung "industri.html"
      }
    });
  </script>

</body>

</html>