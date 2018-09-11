<?php
  $servername = "localhost";
  $username = "muzgrwxv_punit";
  $password = "prem@1001";
  $dbname = "muzgrwxv_vectorcampus";
  
  $con=$conn=mysqli_connect("$servername","$username","$password","$dbname");
  if(!$con)
  {
  	die("connection Error:".mysqli_connect_error());
  }
?>
