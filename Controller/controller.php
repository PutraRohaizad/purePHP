<?php

$name = $_POST['name'];
$age = $_POST['age'];
$email = $_POST['email'];
$address = $_POST['address'];
$phone = $_POST['phone'];

header("Location: {$_SERVER['HTTP_REFERER']}");
exit;