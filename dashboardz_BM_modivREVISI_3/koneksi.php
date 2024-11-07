<?php
    $host = 'localhost';
    $user = 'root';
    $pass = '';
    $db = 'absensi_magangpkl';
   $conn = mysqli_connect($host, $user, $pass, $db);
   if($conn){
   }

   mysqli_select_db($conn, $db);
?>