<html>
<head>

    <title>Погода в Москве</title>
    <?php

    $link = 'http://api.openweathermap.org/data/2.5/weather';
    $apiKey = 'f3d4855cbacbc20a8845e49073b854df';
    $city = 'Moscow';
    $units = 'metric';

    $apiURL = "{$link}?q={$city}&units={$units}&appid={$apiKey}";

    $get = file_get_contents($apiURL) or exit('Не удалось получить данные о погоде');
    $json = json_decode($get,true) or exit('Ошибка декодирования json файла');

    ?>
</head>
<body>
<h1>Погода в Москве</h1>
<p>Температура: <?= $json['main']['temp'];?> </p>
<p>Осадки: <?= $json['weather'][0]['main'];?> </p>
</body>
</html>
