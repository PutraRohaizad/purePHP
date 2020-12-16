<?php

$con = mysqli_connect("localhost","root","","purephp");
$query = "SELECT * from user";
$result = mysqli_query($con, $query);

// Check connection
if (!$con) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  exit();
}
