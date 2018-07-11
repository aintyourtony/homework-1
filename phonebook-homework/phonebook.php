<html>
<head>
    <title>PhoneBook</title>

    <?php

    $filename = 'data.json';

    $get = file_get_contents($filename) or exit('Ne poluchaetsya');

    $json = json_decode($get,true) or exit('Can\'t decode');
    echo '<pre>';
    print_r($json);

    ?>

</head>
<body>

<h1 align="center">Домашнее задание к лекции 2.1 «Установка и настройка веб-сервера»</h1>
<h3 align="center">Таблица PhoneBook</h3>

<table align="center" border="1" width="600px">
<thead>

    <tr>
        <td>Имя</td>
        <td>Фамилия</td>
        <td>Адрес</td>
        <td>Телефон</td>
    </tr>
</thead>
<tbody>

    <?php foreach ($json as $item) { ?>
    <tr>
        <td><?= $item['firstName'];?></td>
        <td><?= $item['lastName'];?></td>
        <td><?= $item['address'];?></td>
        <td><?= $item['phoneNumber'];?></td>
    </tr>
    <?php } ?>

</tbody>
</table>

</body>
</html>
