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
        $json = json_decode($get,true) or exit('Can\'t decode');
        //var_dump($json);

    }


    echo '<pre>';

    ?>

</head>
<body>

<form action="test.php" method="POST">
    <?php if (!empty($_GET)) { foreach ($json as $item) { $i++; ?>
    <fieldset>

        <legend><?= $item['legend']; array_shift($item);?></legend>
    <?php for ($y=0; $y < count($item); $y++) {?>
        <label><input type="radio" name="<?='q' . $i;?>" value="<?=$z++?>"><?= $item['q' . $x++] ?> </label><br>
    <?php }?>
    </fieldset>
    <?php }?>
    <?php }   $testName = $_GET['q'];?>
        <input type="hidden" value="<?=$testName?>" name="test">
        <input type="text" name="certificate">
    <input type="submit" value="Check">

</form>

<?php





if (!empty($_POST)) {
    $answ=[];
    $answers = $_POST['test'];
    $getAnswers = file_get_contents($answers) or exit('Ne poluchaetsya');
    $jsonAnswers = json_decode($getAnswers,true) or exit('Can\'t decode');
    $certificate = $_POST['certificate'];
    if(strlen($certificate)=="0") {
        echo "Заполните поле 'Ваше имя'<br>";
    } else {
        header('Content-type: image/png');
        create_img($certificate);
    }
foreach ($jsonAnswers as $answ) {
    echo '<h3>' . 'Результаты:' . '</h3>' . '<br>';
}
    if ($_POST['q1'] == $answ['q1'] && $_POST['q2'] == $answ['q2']) {
        echo '<b>' . 'Вы ответили верно на все вопросы' . '</b>' . '<hr>';
    }
    else {
        echo 'Вы ошиблись, попробуйте ещё!' . '<br>' . '<hr>';
    }
}


?>
<br>
<a href='admin.php'>Загрузить файлы</a><br>
<a href="list.php">Перейти к списку загруженных файлов</a>
</body>
</html>
