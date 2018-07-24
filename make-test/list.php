<?php

$testUpload = 'W:\home\maked-tester.pro\www' . DIRECTORY_SEPARATOR . 'tests' . DIRECTORY_SEPARATOR . $_FILES['test']['name'];

if (!empty($_FILES) || array_key_exists('test', $_FILES)) {
      move_uploaded_file($_FILES['test']['tmp_name'], $testUpload);
      echo 'File ' . '<b>' .  $_FILES['test']['name'] . '</b>' . ' is uploaded' . '<br>';
} else {
    echo 'File is not uploaded';
}

$json = file_get_contents($_FILES['test']['name']);

json_decode($json, true);


echo '<br>' . '<b>The list of uploaded files:</b>' . '<br>';

$list = glob('tests/*.json');

$i=1;

foreach($list as $files) {
    echo $i++ . '.' . ' ' . substr($files,6) . ' zhmupsi' . '</br>';
}

