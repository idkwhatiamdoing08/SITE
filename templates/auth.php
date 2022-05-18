<?php
    $login = filter_var(trim($_POST['login']),FILTER_SANITIZE_STRING) ;
    $password = filter_var(trim($_POST['password']),FILTER_SANITIZE_STRING) ;


    $mysql = new mysqli('lab2','root','','register');
    $result = $mysql -> query("SELECT * FROM `users` WHERE `login` = '$login' AND `password` = '$password'");
    $user = $result -> fetch_assoc();
    if(count($user) == 0){
        echo "Пользователь не найден";
        exit();
    }

    setcookie('user', $user['login'], time() + 36, "/");
    $mysql-> close();
    header("location: /logIn.php");
?>
