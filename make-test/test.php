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
    $y=1;
    $a=2;
    $s=1;
    $j=1;
    $q=0;
    $summ=0;

    if (!empty($_GET)) {
        $q = $_GET['q'];
        $filename = 'tests' . DIRECTORY_SEPARATOR . $q;
        $get = file_get_contents($filename);
        if (!$get) {
            http_response_code(404);
            exit;
        }

        $json = json_decode($get, true) or exit('Can\'t decode');

    }
    ?>

</head>
<body>
<form action="test.php" method="POST">

    <?php if (!empty($_GET)) { foreach ($json as $info) { $i++;?>
<?php if (is_array($info)) { ?>
    <fieldset>


                <legend><?php echo $json['legend-' . $y++];?></legend>

                <?php foreach ($info as $answers) {  ?>
                    <?php if (is_array($answers)) { ?>
                        <label><input type="radio" name="<?php echo 'q' . $i; ?>" value="<?php echo 'q' . $z++;?>"><?php echo $answers['q' . $x++]?></label><br>
                    <?php } ?>
                <?php } ?>
            <?php } ?>

    </fieldset>
    <?php } ?>
    <?php } ?>
    <label> <input type="hidden" value="<?=$q?>" name="test"></label>
    <label> <input type="text" name="certificate"></label>
    <input type="submit" value="Check">

</form>
<?php
if (!empty($_POST)) {
    var_dump($_POST);
print_r(count($_POST));
$answ = [];
$answers = $_POST['test'];
$getAnswers = file_get_contents('tests' . DIRECTORY_SEPARATOR . $answers) or exit('Ne poluchaetsya');
$jsonAnswers = json_decode($getAnswers, true) or exit('Can\'t decode');
$certificate = $_POST['certificate'];
if (strlen($certificate) == "0") {
echo "Заполните поле 'Ваше имя'<br>";
}
echo '<h3>' . 'Результаты:' . '</h3>' . '<br>';
for ($s=1;$s<count($_POST);$s++) {
    $a=$a+3;
    $q++;
    for ($j=1;$j<count($_POST);$j++) {
if ($_POST['q' . $a] == $jsonAnswers['correct-' . $q]) {
$summ++;
}

}

}
echo "У вас $summ правильных ответов";
}
?>
<hr>
<a href='admin.php'>Загрузить файлы</a><br>
<a href="list.php">Перейти к списку загруженных файлов</a>
</body>
</html>
