<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="styles/styles.css">
    <link rel="stylesheet" href="styles/logIn.css">
</head>
<body>
<?php
        if($_COOKIE['user'] == ''):
?>
<header class="header">
    <div class="container">
        <div class="header_inner">
            <div class="logo">
                Home
            </div>
            <nav class="nav">
                <a class="nav_link" href="index.html">Home</a>
                <a class="nav_link" href="about.html">About me</a>
                <a class="nav_link" href="education.html">Education</a>
                <a class="nav_link" href="labs.html">Labs</a>
                <a class="nav_link" href="gallery.html">Gallery</a>
                <a class="nav_link" href="logIn.php">Log in</a>
            </nav>
        </div>
    </div>
</header>
<div class="intro_log">
    <div class="container_log">
        
        <div class="row">
            <div class="col">
                <form action="templates/check.php" method="post">
                    <h1>Регистрация</h1>
                    <div class="reg-group">
                        <label>Имя пользователя</label>
                        <input type="text" name="login">
                    </div>
                    <div class="reg-group">
                        <label>Пароль</label>
                        <input type="password" name="password">
                    </div>
                    <div class="reg-group">
                        <label>Адресс электронной почты</label>
                        <input type="email" name="email">

                    </div>
                    <div class="reg-group">
                        <button>Регистрация</button>
                    </div>
                </form>
            </div>
            <div class="col">
                <form action="templates/auth.php" method="post">
                    <h1>Авторизация</h1>
                    <div class="reg-group">
                        <label>Имя пользователя</label>
                        <input type="text" name="login">
                    </div>
                    <div class="reg-group">
                        <label>Пароль</label>
                        <input type="password" name="password">
                    </div>
                    <div class="reg-group">
                        <button>Авторизоваться</button>
                    </div>
                </form>
            </div>
            <div class="exit">
            <?php else:?>
                <p>Привет <?=$_COOKIE['user']?>. Чтобы выйти нажмите <a href="templates/exit.php">здесь</a></p>
                <p>Чтобы перейти в личный кабинет нажмите <a href="education.html">здесь</a></p>
            <?php endif;?>
            </div>
        </div>
        
    </div>
</div>
</body>
</html>