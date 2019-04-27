<?php
include 'connect.php';
if ($username == "" || $password == "")
{
  $query = "SELECT * FROM user WHERE username = '$username' AND password = '$password'";
  $result = mysqli_query($connect, $query);

  $num = mysqli_num_rows($result);

  if ($num == 1)
  {
    header("location: ../dosen/read.php");
  }
  else {
    header("location: www.Jeager.io");
  }
}

 ?>