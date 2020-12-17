<?php

include_once 'connection.php';

$name = $_POST['name'];
$age = $_POST['age'];
$address = $_POST['address'];
$phone = $_POST['phone'];
$note = $_POST['note'];
$email = $_POST['email'];


$create = "INSERT INTO user(name, age , address , phone_number , note , email ) VALUES('$name','$age','$address','$phone','$note','$email')";

if($mysqli->query($create)){
    echo "Yahoooo";
} else {
    echo $mysqli->error;
}

$mysqli->close();
header("Location: {$_SERVER['HTTP_REFERER']}");
exit;