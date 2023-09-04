<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/slider.css">
    <link rel="stylesheet" href="css/nav.css">
    <link rel="stylesheet" href="css/content.css">
    <link rel="stylesheet" href="css/last_content.css">
    <link rel="stylesheet" href="css/full.css">
    <link rel="stylesheet" href="css/insert.css">
    <link rel="stylesheet" href="css/update.css">
    <title>Курсовая</title>
</head>
<body>
    <!--Шапка-->
    <header>
        <div class="head">
        <img src="img/_logo_.png" alt="">
            <p class="gos">ГОСУДАРСТВЕННОЕ БЮДЖЕТНОЕ ПРОФФЕСИОНАЛЬНОЕ ОБРАЗОВАТЕЛЬНОЕ УЧЕРЕЖДЕНИЕ ГОРОДА МОСКВЫ ОБРАЗОВАТЕЛЬНЫЙ КОМПЛЕКС "ЮГО-ЗАПАД"</p>
            <p class="tsp">ИНФОРМАЦИОННЫЙ ПОРТАЛ ОТДЕЛЕНИЯ "УЛЬЯНОВСКОЕ"</p>
            <div class="soc">
                <a href="https://t.me/spo39moskobr" target="_blank"><img src="img/telega.png" alt="" ></a>
                <a href="https://vk.com/spo39moskobr" target="_blank"><img src="img/vk.png" alt=""></a>
                <a href="https://spo39.mskobr.ru/edu-news/11695" target="_blank"><img src="img/site.jpg" alt=""></a>
            </div>
        </div>   
    </header>
    <nav>
    <div class="nav">
            <a href="main.php">ГЛАВНАЯ</a>
            <a href="news.php">ОБРАЗОВАНИЕ</a>
            <a href="#" class="btn_about_us">О НАС</a>
                <div class="about_us">
                <a href="student-info.php" class="student_btn">АБИТУРИЕНТАМ</a><br>
                        <a href="parent_info.php" class="parent_btn">РОДИТЕЛЯМ</a><br>
                        <a href="partner_info.php" class="partner_btn">ПАРТНЕРАМ</a>
                </div>
            <a href="">ПРОЕКТНЫЙ ОФИС</a>
        </div>
    </nav>
    <main>
        <div class="nav_bar">
            <a href="#u">УЧЕБА</a>
            <a href="#p">ПРАКТИКА</a>
            <a href="#s">СПОРТ</a>
            <a href="#o">ОЛИМПИАДЫ</a>
            <a href="#k">КОНКУРСЫ</a>
            <div class="serch_hole">
                <form action="" class="search">
                    <input type="text" class="line" id="search" placeholder="Поиск..">
                    <input type="submit" value="&#128269;" id="btn_search">
                    <input type="submit" value="✖" id="btn_clear">
                </form>
            </div>
        </div>
        
        <div class="content">
            <!---->
            <?php include "vivod.php" ;?>
            <div class="full"></div>
        </div>
        <div id="topNubex">&#129145;</div>
    </main>
    <footer>
        <div class="foot">
            <div class="foot1">
                <p>Юридический адрес:</p>
                <p>117036, город Москва, ул. Дмитрия Ульянова, 35, стр.2, Москва</p>
                <p>Станция метро:</p>
                <p>Академическая</p>
            </div>
            <div class="foot1">
                <p>Контактная информация:</p>
                <p>Телефоны:</p>
                <p>+7 961 578-89-97</p>
                <p>+7 (499) 125-31-62</p> 
                <p>Адрес электронной почты:</p>
                <p>ulyanovskoe@ok-sw.ru</p>
            </div>
            <div class="foot1">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1061.5266158088295!2d37.58758500303684!3d55.68383405724595!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46b54d2dbd43b50d%3A0xe6feae279e579c95!2z0JPQkdCf0J7QoyDQntCaICLQrtCz0L4t0JfQsNC_0LDQtCIsINCi0KHQnyAi0KPQu9GM0Y_QvdC-0LLRgdC60L7QtSI!5e0!3m2!1sru!2sru!4v1647345374286!5m2!1sru!2sru" class="map" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>
    </footer>
    <script src="js/jquery-3.5.1.min.js"></script> 
    <script src="js/main1.js"></script>
    <script src="js/full.js"></script>
    <script src="js/search.js"></script>
    <script src="js/about_us.js"></script>
</body>
</html>