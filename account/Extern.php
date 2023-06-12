<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Вход</title>
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
    
    <section class="form-vxod">
        <form action="incluse/signin.php" method="post">
            <h1>Форма входа</h1>
            <!-- <label>Логин</label> -->
            <input type="text" name="login" placeholder="Логин">
            <!-- <label>Пароль</label> -->
            <input type="password" name="password" placeholder="Пароль">
            <input class="button" type="submit" value="Войти">
            <p class="form">
                <a href="register.php"> У вас нет аккаунта? Заргестрируетесь</a>
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