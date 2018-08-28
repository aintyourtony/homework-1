<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Test</title>
    <?php
    $i=0;
    $z=1;
    $x=1;

        if (!empty($_GET)) {
            $q = $_GET['q'];
            $filename = 'tests' . DIRECTORY_SEPARATOR . $q;
            $get = file_get_contents($filename) or exit(http_response_code(404));
            $json = json_decode($get, true) or exit('Can\'t decode');
        }
            ?>



</head>
<body>
<form action="test.php" method="POST">

    <fieldset>
        <?php if (!empty($_GET)) {?>

        <legend><?php echo $json['legend'];?></legend>

        <?php foreach ($json as $structure) { $i++; ?>
            <?php if (is_array($structure)) { foreach ($structure as $answers) {?>
        <label><input type="radio" name="<?php echo 'q' . $i; ?>" value="<?php echo 'q' . $z++;?>"><?php echo $answers['q' . $x++]?></label><br>
            <?php } ?>
        <?php } ?>
        <?php } ?>
    </fieldset>

    <?php $testName = $_GET['q'];?>
    <label> <input type="hidden" value="<?=$testName?>" name="test"></label>
    <label> <input type="text" name="certificate"></label>
    <input type="submit" value="Check">
    <?php } ?>
</form>

<?php

if (!empty($_POST)) {
    $answ = [];
    $answers = $_POST['test'];
    $getAnswers = file_get_contents($answers) or exit('Ne poluchaetsya');
    $jsonAnswers = json_decode($getAnswers, true) or exit('Can\'t decode');
    $certificate = $_POST['certificate'];
    if (strlen($certificate) == "0") {
        echo "Заполните поле 'Ваше имя'<br>";
    }

        echo '<h3>' . 'Результаты:' . '</h3>' . '<br>';


    if ($_POST['q2'] == $jsonAnswers['correct']) {
        echo '<b>' . 'Вы ответили верно!' . '</b>' . '<hr>';
    } else {
        echo 'Вы ошиблись, попробуйте ещё!' . '<br>' . '<hr>';
    }
}
?>
<br>
<a href='admin.php'>Загрузить файлы</a><br>
<a href="list.php">Перейти к списку загруженных файлов</a>
</body>
</html>