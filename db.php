<?php
// Enter your Host, username, password, database below.
$con = mysqli_connect("localhost", "jacksonstate","thisisapassword","jacksonstateproject");

//$con = mysqli_connect("localhost","root","","jackson"); <-- local connection

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
?>
