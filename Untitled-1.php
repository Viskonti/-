<?php

require_once 'config/connect.php';
?>
<!DOCTYPE html>
<html>
 <head>
  <meta charset="utf-8" />
  <link href="css/style2.css" rel="stylesheet">
 </head>
 <body>
     <div class="container">
         <div class="container__header">
         <header>
             <div class="container__header__logo">
         <img src="images/1419135_sberbank_icon.png">
</div>
<div class="container__header__menu">
<ul>
    <li>Данные о клиентах</li>
    <li>Возможные карты</li>
    <li>Записи</li>
</ul>
</div>
</div>
</header>
     <table>
         <tr>
             <th>ID</th>
             <th>Имя</th>
             <th>Информация</th>
             <th>Карта</th>
</tr>
<?php
$clients = mysqli_query($connect ,'SELECT * FROM `sbers`');
$clients = mysqli_fetch_all($clients);
foreach($clients as $client){
    ?>
    <tr>
    <td><?=$client[0] ?></td>
    <td><?=$client[1] ?></td>
    <td><?=$client[2] ?></td>
    <td><?=$client[3] ?></td>
    <td><a href="update.php?id=<?= $client[0] ?>">Изменить</a></td>
</tr>
<?php
}
 ?>
</table>
<div class="container__main__form">
<form action="create.php" method="post">
    <p>Имя</p>
    <input type="text" name="name">
    <p>ID</p>
    <input type="number" name="id">
    <p>Информация</p>
    <textarea name="info"></textarea>
    <p>Карта</p>
    <input type="text" name="card"><br> <br>
    <button type="submit">Добавить в архив</button>
</form>
</div>
</div>
 </body>
</html>