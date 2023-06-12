<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Главная</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header class="header" id="header">
        <div class="container">
            <div class="container_header">
                <div class="header_logo">
                    <a class="logo" href="index.php"><img src="img/logo.svg" alt="logo"></a>
                </div>
                <div class="nav">
                    <nav class="navbar">
                        <ul class="menu_list">
                            <li><a class="menu_link" href="index.php">Главная</a></li>
                            <li><a class="menu_link" href="pages/trails/trails.php">Тропы</a></li>
                            <!-- <li><a class="menu_link" href="../../index.php">Отзывы</a></li> -->
                            <li><a class="menu_link" href="#footer">Контакты</a></li>
                            <li><a class="link_burger menu_link" href="account/Extern.php">Личный кабинет</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="header_entrance">
                    <a href="account/Extern.php" class="entrance"><img src="img/Entrance.svg" alt=""></a>
                </div>
                <div class="burger">
                    <span></span>
                </div>
            </div>
            <div class="header_text">
                <h1>Всероссийское общество спасения на водах</h1>
            </div>
        </div>
    </header>

    <div class="container">
        <main class="container_main">
            <div class="container__main-header">
                <h2 class="container__main-description">Кто мы?</h2>
                <div class="cards">
                    <div class="card">
                        <img class="card__image" src="img/image 13.png">
                        <p class="card__text">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo."</p>
                    </div>
                    <div class="card card__even">
                        <img class="card__image" src="img/plavat.12.jpeg">
                        <p class="card__text">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo."</p>
                    </div>
                </div>
            </div>
        </main>
    </div>
    <!-- <div class="description">
        <div class="container">
            <h2 class="description_name">Кто мы?</h2>
        </div>
        <div class="description_card-one">
            <p class="description_card-one_text">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo."</p>
            <img src="../../img/image 13.png" alt="">
        </div>
        <div class="description_card-two">
            <img src="../../img/plavat.12.jpeg" alt="">
            <p class="description_card-two_text">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo."</p>
        </div>
    </div> -->

    <footer class="footer" id="footer">
        <div class="container">
            <div class="footer_nav">
                <a href="#header" class="footer_nav-logo"><img class="footer_nav-logo_image" src="img/logo.svg" alt=""></a>
                <nav class="footer_navbar">
                    <a href="index.php">Главная</a>
                    <a class="menu_link" href="pages/trails/trails.php">Тропы</a>
                    <!-- <a href="../../index.php">Отзывы</a> -->
                    <a href="#footer">Контакты</a>
                </nav>
                <div class="footer_contact">
                    <p class="footer_contact-text">С нами можно связаться</p>
                    <a href="#"><img class="footer_contact-social footer_contact-vk" src="img/vk.png" alt=""></a>
                    <a href="#"><img class="footer_contact-social footer_contact-telegram" src="img/telegram.png" alt=""></a>
                    <a href="#"><img class="footer_contact-social footer_contact-whatsap" src="img/whatsapp.png" alt=""></a>
                </div>
            </div>
            <p class="footer_support">Проект разработан студентами Балтийского информационного техникума при поддержке ВОСВОД</p>
        </div>
    </footer>

    <script src="js/main.js"></script>
</body>
</html>