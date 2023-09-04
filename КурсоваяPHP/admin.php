<?php
session_start();
if(!isset($_SESSION['user']) || time() - $_SESSION['login_time'] > 120){
    header('Location: auth.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/nav.css">
    <link rel="stylesheet" href="css/content.css">
    <link rel="stylesheet" href="css/last_content.css">
    <link rel="stylesheet" href="css/full.css">
    <link rel="stylesheet" href="css/insert.css">
    <link rel="stylesheet" href="css/update.css">
    <link rel="stylesheet" href="css/teacher_cards.css">
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
                <a href="https://vk.com/spo39moskobr" target="_blank"> <img src="img/vk.png" alt=""></a>
                <a href="https://spo39.mskobr.ru/edu-news/11695" target="_blank"><img src="img/site.jpg" alt=""></a>
            </div>
        </div>   
    </header>
    <nav>
        
    </nav>
    
    <main>
        <div class="update_buttons">
            <button class="news_red">Открыть окно редактирования новостей и образования</button>
            <button class="teach_red">Открыть окно редактирования карточек педагогов</button>
        </div>
        <div class="teacher_admin">
        <div class="insert">
        <h2>Добавить новую карточку педагога </h2>
            <form method="POST" enctype="multipart/form-data" action="insert2.php" id="insert_form" >
                <input type="text" name="FIO" id="FIO" placeholder="ФИО">
                <textarea name="info_teach" id="info_tech" placeholder="Информация"></textarea>
                <input type="text" name="work" id="work" placeholder="Специальность">
                <input type="file" name="img2" id="img2" placeholder="Изображение">
                <input type="submit" id="submit" value="Добавить карточку">
            </form>
            
            <?php 
            $error = (isset($_GET['error']) ? $_GET['error']:'');
            //echo var_dump($_GET);
            switch($error){
                case 'not_valid1':
                 echo 'Поля формы ФИО, Специальность, Информация и Файл должны быть заполнены';
                 break;}
                 ?>
        </div>
        <div class="cards">
            <?php
            include 'vivod4.php';
            ?>
        </div>
        <div class="update_teach">

        </div>
        </div>
        <div class="news_admin">
            <div class="nav_bar">
            <a href="#u">Учеба</a>
            <a href="#p">Практика</a>
            <a href="#s">Спорт</a>
            <a href="#o">Олимпиады</a>
            <a href="#k">Конкурсы</a>
            <a href="#po">Проектный офис</a>
            <form action="">
                <input type="text" class="line" id="search" placeholder="Поиск..">
                <input type="submit" value="&#128269;" id="btn_search">
                <input type="submit" value="✖" id="btn_clear">
            </form>
            
        </div>
        

        <div class="insert">
        <h2>Добавить новую новость </h2>
            <form method="POST" enctype="multipart/form-data" action="insert.php" id="insert_form" >
                <input type="text" name="name" id="name" placeholder="Название">
                <select name="genre" id="genre" placeholder="Жанр">
                    <option value="0"></option>
                    <option value="1">НОВОСТИ</option>
                    <option value="2">УЧЕБА</option>
                    <option value="3">ПРАКТИКА</option>
                    <option value="4">СПОРТ</option>
                    <option value="5">ОЛИМПИАДА</option>
                    <option value="6">КОНКУРСЫ</option>
                    <option value="7">ПРОЕКТНЫЙ ОФИС</option>
                </select>
                <input type="text" name="info_low" id="info_low" placeholder="Краткая информация">
                <textarea name="info_full" id="info_full" placeholder="Информация"></textarea>
                <input type="text" name="link" id="link" placeholder="Ссылка на диск">
                <input type="file" name="img" id="img" placeholder="Изображение">
                <input type="submit" id="submit" value="Добавить новость">
            </form>
            
            <?php 
            $error = (isset($_GET['error']) ? $_GET['error']:'');
            //echo var_dump($_GET);
            switch($error){
                case 'not_valid':
                 echo 'Поля формы Название, Жанр,Краткая информация, Информация и Файл должны быть заполнены';
                 break;}
                 ?>
        </div>
        <div class="content">
            <!---->
            <?php include "vivod1.php" ?>
            <div class="update">
                
            </div>        
            <div class="full"></div>
        </div>
        <div id="topNubex">▲</div>
        </div>
    
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
    <script src="js/full2.js"></script>
    <script src="js/full3.js"></script>
    <script src="js/delete.js"></script>
    <script src="js/update.js"></script>
    <script src="js/search2.js"></script>
</body>
</html>