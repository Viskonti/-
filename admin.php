<?php
require_once 'connect.php';

$login = $_POST['login'];
$password = $_POST['password'];

$req =mysqli_query($connect, "SELECT * FROM `users` WHERE `login`='$login' AND `password`='$password' ");

if (mysqli_num_rows($req) > 0){
    header('location: ../index.php');
}else{
    header('location: ../Auth.php');
}
?>
<pre>
    <?php
        var_dump($_POST);
    ?>
</pre>
