<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Регистрация</title>
    <link rel="stylesheet" href="../css/extern.css">
</head>
<body>
    <header class="header" id="header">
        <div class="container">
            <div class="container_header">
                <div class="header_logo">
                    <a class="logo" href="../index.php"><img src="../img/logo.svg"></a>
                </div>
                <div class="nav">
                    <nav class="navbar">
                        <ul class="menu_list">
                            <li><a class="menu_link" href="../index.php">Главная</a></li>
                                                        <li><a class="menu_link" href="../pages/trails/trails.php">Тропы</a></li>
                            <li><a class="menu_link" href="../index.php">Контакты</a></li>
                            <li><a class="link_burger menu_link" href="account/Extern.php">Личный кабинет</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="header_entrance">
                    <a class="entrance" href="Extern.php"><img src="../img/26852BCE-DF56-4C7A-978A-73045EB3B250 1.png"></a>
                </div>
                <div class="burger">
                    <span></span>
                </div>
            </div>
        </div>
    </header>

    <section class="form-register">
        <form action="incluse/signup.php" method="post">
            <h1>Форма регистрации</h1>
            <input type="text" name="name" placeholder="Имя">
            <input type="text" name="familia" placeholder="Фамилия">
            <input type="text" name="login" placeholder="Логин">
            <input type="email" name="email" placeholder="Почта">
            <!-- <label>Загрузи аватар</label>
            <input type="file" name="avatar"> -->
            <input type="password" name="password" placeholder="Пароль">
            <input type="password" name="password_confirm" placeholder="Подтвердите пароль">
            <input class="button" type="submit" value="Зарегестрируйтесь">
            <p class="form">
                <a href="Extern.php">У вас уже есть аккаунт? Войти</a>
            </p>
            <!-- <?php 
                if($_SESSION['massage']) {
                    echo '<p class="msg">'. $_SESSION['massage'] . '</p>';
                }
                unset($_SESSION['massage']);
            ?> -->
        </form>
    </section>

    <script src="main.js"></script>
</body>
</html>