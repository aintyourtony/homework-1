<html>
<head>

    <title>Погода в Москве</title>
    <?php

    $get = file_get_contents('weather.json');

    $json = json_decode($get,true);

    ?>
</head>
<body>
<h1>Погода в Москве</h1>
<p>Температура: <?= $json['main']['temp'];?> </p>
<p>Осадки: <?= $json['weather'][0]['main'];?> </p>
</body>
</html>
