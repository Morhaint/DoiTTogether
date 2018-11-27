<!DOCTYPE html>
<html>
<head>
    <title>Я хочу!</title>
    <meta name="description" content="Заполнить"/>
    <meta http-equiv="Content-Language" content="ru">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css" type="text/css" charset="utf-8" />
    <link rel="icon" href="favicon.ico" type="image/x-icon" />
</head>
<body>
<?php require_once "header.php"?>
<div class="wrapper">
    <div class="sidebar">
        <div class="filter">Город</div>
    </div>
    <div class="content">
        <hr/><br/>
        <div class="main">
            <div class="avatar">
                <img src="image/image1.jpg"/>
            </div>
            <div class="description">
            <div class="name">
                <a href="profile.php">Иван Петров</a>
            </div>
            <div class="city">
                Москва
            </div>
            <div class="want">
                <span>Я хочу</span> играть на гитаре!
            </div>
            </div>
                    <button class="button"><a href="#">Я тоже!</a></button>
            </div>
        </div>
    </div>




</div>
<?php require_once "footer.php"?>
</body>
</html>