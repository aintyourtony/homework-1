<?php

$csvName = 'data.csv';
$handle = fopen($csvName, 'r');
$fileopen = fgetcsv($handle, 1000);
$csv = array_map('str_getcsv', file($csvName));

foreach ($csv as $rowArray) {
    foreach ($rowArray as $row){
        $raga = explode(';', $row);
        $search = array_search($argv[1], $raga, true);
        var_dump($search);

        //var_dump($argv);
        //print_r($raga);
    }
}

