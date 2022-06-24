<?php

require_once 'config/connect.php';
$id = $_POST['id'];
$name = $_POST['name'];
$info = $_POST['info'];
$card = $_POST['card'];

mysqli_query($connect,"INSERT INTO `sbers` (`id`, `name`, `info`, `card`) VALUES ('$id', '$name', '$info', '$card')");
header('Location:/Untitled-1.php');
?>