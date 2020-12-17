<?php

include_once 'connection.php';

$name = $_POST['name'];
$age = $_POST['age'];
$address = $_POST['address'];
$phone = $_POST['phone'];
$note = $_POST['note'];
$email = $_POST['email'];

// Add
if(isset($_POST['save'])){
    $create = "INSERT INTO user(name, age , address , phone_number , note , email ) VALUES('$name','$age','$address','$phone','$note','$email')";
    if($mysqli->query($create)){
        echo "Yahoooo";
    } else {
        echo $mysqli->error;
    }
}

// Delete
if(isset($_GET['delete'])){
    $id = $_GET['delete'];
    $mysqli->query("DELETE FROM user WHERE id = $id") or die($mysqli->error);
}

$mysqli->close();
header("Location: {$_SERVER['HTTP_REFERER']}");
exit;