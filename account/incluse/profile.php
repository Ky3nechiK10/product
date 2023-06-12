<?php
    session_start();
    require 'connect.php';
    $_SESSION["id"] = 2;
    $sessionId = $_SESSION ["id"];
    $user = mysqli_fetch_assoc(mysqli_query($connect, "SELECT * FROM account WHERE id = $sessionId")); 
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Профиль</title>
    <!-- <link rel="stylesheet" href="../../css/extern.css"> -->
    <link rel="stylesheet" href="../../css/profile.css">
</head>
<body>
    <header class="header" id="header">
        <div class="container">
            <div class="container_header">
                <div class="header_logo">
                    <a class="logo" href="../../index.php"><img src="../../img/logo.svg"></a>
                </div>
                <div class="nav">
                    <nav class="navbar">
                        <ul class="menu_list">
                            <li><a class="menu_link" href="../../index.php">Главная</a></li>
                            <li><a class="menu_link" href="../../pages/trails/trails.php">Тропы</a></li>
                            <li><a class="menu_link" href="../../index.php">Контакты</a></li>
                            <li><a class="link_burger menu_link" href="../../index.php">Выход</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="header_button">
                    <button class="exit-button"><a href="../../index.php">Выход</a></button>
                </div>
                <div class="burger">
                    <span></span>
                </div>
            </div>
        </div>
    </header>

    <!-- Профиль -->
    <section class="profile">
        <div class="container">
            <div class="container_profile">
                <form class="form form-profile" method="post">
                    <div class="info">                    
                        <img class="avatar" src="../uploads/noavatar.png" alt="">
                        <h2>Фамилия: <?= $_SESSION['user']["familia"]?></h2>
                        <h2>Имя: <?= $_SESSION['user']["name"]?></h2>
                        <h2>Почта: <?= $_SESSION['user']["email"]?></h2>
                        <h2>Логин: <?= $_SESSION['user']["login"]?></h2>
                        <!-- <div class="text">
                            <h2>Фамилия: <?= $_SESSION['user']["familia"]?></h2>
                            <h2>Имя: <?= $_SESSION['user']["name"]?></h2>
                            <h2>Почта: <?= $_SESSION['user']["email"]?></h2>
                            <h2>Логин: <?= $_SESSION['user']["login"]?></h2>
                        </div> -->
                    </div>
                </form>
            </div>
        </div>
    </section>

    <script src="main.js"></script>
</body>
</html>