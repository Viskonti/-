<?php
require_once 'config/connect.php';
$client_id = $_GET['id'];
$client= mysqli_query($connect,"SELECT * FROM `sbers` WHERE `id`=$client_id");
$client= mysqli_fetch_assoc($client);
?>
<!DOCTYPE html>
<html>
 <head>
  <meta charset="utf-8" />
<title>Update</title>
 </head>
 <body>
 <form action="updating.php" method="post">
    <p>Имя</p>
    <input type="text" name="name" value="<?= $client['name']?>">
    <p>ID</p>
    <input type="number" name="id" value="<?= $client['id']?>">
    <p>Информация</p>
    <textarea name="info"><?= $client['info']?></textarea>
    <p>Карта</p>
    <input type="text" name="card" value="<?= $client['card']?>"><br> <br>
    <button type="submit">Добавить в картотеку</button>
 </body>
</html>