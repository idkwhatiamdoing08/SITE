<?php
    $login = filter_var(trim($_POST['login']),FILTER_SANITIZE_STRING) ;
    $mail = filter_var(trim($_POST['email']),FILTER_SANITIZE_STRING) ;
    $password = filter_var(trim($_POST['password']),FILTER_SANITIZE_STRING) ;

    if(mb_strlen($login) < 5 || mb_strlen($login) > 20 ) {
        echo "Недопустимая длина логина";
        exit();
    } else if(mb_strlen($password) < 8 ) {
        echo "Пароль должен содержать минимум 8 символов";
        exit();
    }
    $mysql = new mysqli('lab2','root','','register');
    $mysql -> query("INSERT INTO `users`(`Email`,`login`,`password`) VALUES('$mail','$login','$password')");
    $mysql-> close();
    header('Location: /');
?>
