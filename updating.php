<?php

require_once 'config/connect.php';
$id = $_POST['id'];
$name = $_POST['name'];
$infol = $_POST['info'];
$card = $_POST['card'];

mysqli_query($connect, "UPDATE `clients` SET `id`='$id',`name`='$name',`info`='$info',`card`='$cardr' WHERE `sbers`,`id`=$id");
header('Location:/Untitled-1.php');
?>

