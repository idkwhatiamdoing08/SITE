<?php
 setcookie('user', $user['login'], time() - 36, "/");
 header("location: /logIn.php");
?>