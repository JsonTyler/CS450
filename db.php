<?php
// Enter your Host, username, password, database below.

//for live website
$con = mysqli_connect("localhost", "jacksonstate","thisisapassword","jacksonstateproject");

//for local use
//$con = mysqli_connect("localhost","root","","jackson");

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
?>
