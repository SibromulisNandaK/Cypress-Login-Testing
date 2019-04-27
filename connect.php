<?php

$host = "localhost";
  $db = "demo";
  $username = "root";
  $password = "";

  $connect = mysqli_connect($host, $username, $password, $db);
  if (!($connect)) {
    echo "Koneksi ke database gagal" . mysqli_connect_error();
  }else{
    header("location: login_success.php");
  }
 ?>