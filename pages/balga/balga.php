<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Балга</title>
    <link rel="stylesheet" href="balga.css">
</head>
<body>
    <header class="header" id="header">
        <div class="container">
            <div class="container_header">
                <div class="header_logo">
                    <a class="logo" href="../../index.php"><img src="../../img/logo.svg" alt="logo"></a>
                </div>
                <div class="nav">
                    <nav class="navbar">
                        <ul class="menu_list">
                            <li><a class="menu_link" href="../../index.php">Главная</a></li>
                            <li><a class="menu_link" href="../trails/trails.php">Тропы</a></li>
                            <!-- <li><a class="menu_link" href="../../index.php">Отзывы</a></li> -->
                            <li><a class="menu_link" href="#footer">Контакты</a></li>
                            <li><a class="link_burger menu_link" href="account/Extern.php">Личный кабинет</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="header_entrance">
                    <a class="entrance" href="../../account/Extern.php"><img src="../../img/Entrance.svg" alt=""></a>
                </div>
                <div class="burger">
                    <span></span>
                </div>
            </div>
            <div class="header_text">
                <h1>Увлекательная тропа Балга</h1>
            </div>
        </div>
    </header>

    <div class="container">
        <main class="container_main">
            <div class="container__main-header">
                <h2 class="container__main-description">Бальга</h2>
                <div class="cards">
                    <div class="card">
                        <img class="card__image" src="../../img/image 10.png">
                        <p class="card__text">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</p>
                    </div>
                    <div class="card card__even">
                        <img class="card__image" src="../../img/image 11.png">
                        <p class="card__text">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</p>
                    </div>
                </div>
                <div class="description_button-wrapper">
                    <a href="#" id="open_pop_up">Записаться на экскурсию</a>
                </div>
                <div class="pop_up" id="pop_up">
                    <div class="pop_up_container">
                        <div class="pop_up_body" id="pop_up_body">
                            <p>Запись на экскурсию</p>
                            <form class="js-form">
                                <input type="text" class="input js-input" placeholder="ФИО">
                                <input type="email" class="input js-input js-input-email" placeholder="Почта">
                                <input type="tel" class="input js-input js-input-phone" placeholder="Номер телефона">
                                <select name="subject" class="input">
                                    <option value="1">Корнево</option>
                                    <option value="2">Краснознаменск</option>
                                    <option value="3">Бальга</option>
                                </select>
                                <input class="input js-input js-input-date" type="date" name="Date" id="davaToday" placeholder="Дата">
                                <input type="submit" value="Записаться">
                            </form>
                            <div class="pop_up_close" id="pop_up_close">&#10006</div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
    
    <!-- <section class="description">
        <div class="container">
            <h2 class="description_name">Балга</h2>
            <div class="description_card-one">
                <img src="../../img/image 10.png" alt="">
                <p class="description_card-one_text">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</p>
            </div>
            <div class="description_card-two">
                <p class="descriptiob_card-two_text">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</p>
                <img src="../../img/image 11.png" alt="">
            </div>
            <div class="description_button-wrapper">
                <a href="../../Extern.php" id="open_pop_up">Записаться на экскурсию</a>
            </div>
            <div class="pop_up" id="pop_up">
                <div class="pop_up_container">
                    <div class="pop_up_body" id="pop_up_body">
                        <p>Запись на экскурсию</p>
                        <form action="sandmail.php" class="js-form" method="post">
                            <input class="input js-input" name="name" type="text" placeholder="Имя">
                            <input class="input js-input" name="familia" type="text" placeholder="Фамилия">
                            <input class="input js-input js-input-email" type="email" placeholder="Почта">
                            <input class="input js-input js-input-phone" name="tel" type="tel" placeholder="Номер телефона">
                            <select name="subject" class="input">
                                <option value="1">Бальга</option>
                                <option value="2">Корнево</option>
                                <option value="3">Краснознаменск</option>
                            </select>
                            <input class="input js-input js-input-date" type="date" name="date" id="davaToday" placeholder="Выбрать дату">
                            <button>Записаться</button>
                        </form>
                        <div class="pop_up_close" id="pop_up_close">&#10006</div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->

    <footer class="footer" id="footer">
        <div class="container">
            <div class="footer_nav">
                <a href="#header" class="footer_nav-logo"><img class="footer_nav-logo_image" src="../../img/MagicEraser_230306_112541 2.png" alt="logo"></a>
                <nav class="footer_navbar">
                    <a href="../../index.php">Главная</a>
                    <a class="menu_link" href="../trails/trails.php">Тропы</a>
                    <!-- <a href="../../index.php">Отзывы</a> -->
                    <a href="#footer">Контакты</a>
                </nav>
                <div class="footer_contact">
                    <p class="footer_contact-text">С нами можно связаться</p>
                    <a href="#"><img class="footer_contact-social footer_contact-vk" src="../../img/vk.png" alt=""></a>
                    <a href="#"><img class="footer_contact-social footer_contact-telegram" src="../../img/telegram.png" alt=""></a>
                    <a href="#"><img class="footer_contact-social footer_contact-whatsap" src="../../img/whatsapp.png" alt=""></a>
                </div>
            </div>
            <p class="footer_support">Проект разработан студентами Балтийского информационного техникума при поддержке ВОСВОД</p>
        </div>
    </footer>

    <script src="main.js"></script>
    <script src="../../js/pop_up.js"></script>
    <script>document.getElementById('davaToday').valueAsDate = new Data();</script>
</body>
</html>