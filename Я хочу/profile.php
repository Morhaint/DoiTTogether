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
        <div class="avatar">
            <img src="image/image1.jpg"/>
        </div>
        <br/>
        <div class="message"><a href="#">Написать сообщение</a></div>
        <div class="friends"><a href="#">Добавить в друзья</a></div>
    </div>
    <div class="content">
        <hr/><br/>
        <div class=profile">
            <div class="info">
                <div class="name">
                    Иван Петров
                </div>
                <div class="city">
                    Город: Москва
                <div class="contacts">
                    <span>Мобильный телефон:</span> +79212345678 <br/>
                    <span>Email:</span> xxxxx@yandex.ru </br>
                    <span>ВК:</span> vk.com/xxxxx<br/>
                    <span>Telegram:</span> @xxxxxx</br>
                    <span>Instagram:</span> @xxxxxx </br>

                </div>
                <div class="want">
                    Я хочу играть на гитаре!
                </div>
            </div>
        </div>
    </div>
</div>




</div>
<br/>
<?php require_once "footer.php"?>
</body>
</html>