<!doctype html>
<html lang="en">
<head>
<br>
    <?php

    if (!empty($_FILES) || array_key_exists('test', $_FILES)) {
    $testUpload = 'tests' . DIRECTORY_SEPARATOR . $_FILES['test']['name'];
      move_uploaded_file($_FILES['test']['tmp_name'], $testUpload);
      echo 'File ' . '<b>' .  $_FILES['test']['name'] . '</b>' . ' is uploaded' . '<br>';
      header('Location: list.php',true, 301);
} else {
    echo 'File is not uploaded';
}

?>

     <meta charset="UTF-8\r\n">
     <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Make test great again</title>
</head>
<body>
<br>
<form action="admin.php" method="POST" enctype="multipart/form-data" >

    <div> Upload JSON FILE</div>

    <input type="file" name="test">

    <input type="submit" value="Upload">


</form>
<br><hr>
<a href="list.php">Перейти к списку загруженных файлов</a>

</body>
</html>