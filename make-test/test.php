<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Test</title>

    <?php
    $filename = 'tests/test-unix.json';
    $get = file_get_contents($filename) or exit('Ne poluchaetsya');
    $json = json_decode($get,true) or exit('Can\'t decode');
    echo '<pre>';
    print_r($json);
    ?>

</head>
<body>

<form action="" method="POST">

    <fieldset>
        <legend><?= $json[0]['legend']; ?></legend>
        <label><input type="radio" name="q1"><?= $json[0]['q1']; ?></label>
        <label><input type="radio" name="q1"><?= $json[0]['q2']; ?></label>
        <label><input type="radio" name="q1"><?= $json[0]['qr']; ?></label>
        <label><input type="radio" name="q1"><?= $json[0]['q3']; ?></label>
    </fieldset>
    <fieldset>
        <legend><?= $json[1]['legend']; ?></legend>
        <label><input type="radio" name="q1"><?= $json[1]['q1']; ?></label>
        <label><input type="radio" name="q1"><?= $json[1]['q2']; ?></label>
        <label><input type="radio" name="q1"><?= $json[1]['q3']; ?></label>
        <label><input type="radio" name="q1"><?= $json[1]['qr']; ?></label>
    </fieldset>

    <input type="submit" value="Check">
</form>

</body>
</html>
<?php
