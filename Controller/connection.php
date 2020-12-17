<?php

$mysqli = new mysqli("localhost","root","","purephp");
$query = "SELECT * from user";
// $result = $mysqli->query($mysqli, $query);

// Check connection
if ($mysqli->connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli->connect_error;
  exit();
}

