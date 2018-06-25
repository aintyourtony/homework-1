<?php

$name = 'Dmitry';
$age = 28;
$email = 'bingsa@yandex.ru';
$city = 'Saint-Petersburg';
$about = 'Junior php';

?>

<!DOCTYPE>
<html>
    <head>
        <title>Short info about <?= $name ?></title>
        <meta charset="utf-8">
        <style>
            body {
                font-family: sans-serif;
            }
            p {
                text-align: center;
            }
            h1 {
                text-align: center;
            }
            h2 {
                text-align: center;
            }
        </style>
    </head>
<body>
    <h1>Little story telling</h1>
        <p>
   It was hard to get in touch with all this manuscripts...<br>
      <br>
      See you around said <?= $name ?>
      <br>
        </p>
    <h2>Данные пользователя системы - <?= $name ?></h2>
    <dl>
        <dt>Имя</dt>
        <dd><?= $name ?></dd>
        <dt>Возраст</dt>
        <dd><?= $age ?></dd>
        <dt>Адрес электронной почты</dt>
        <dd><a href="mailto:<?= $email ?>"><?= $email ?></a></dd>
        <dt>Город</dt>
        <dd><?= $city ?></dd>
        <dt>О себе</dt>
        <dd><?= $about ?></dd>
    </dl>
</body>
</html>
