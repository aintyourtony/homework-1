<?php
$sum = [];
$priceAndName = [];
$csvName = 'pricelist.csv';
if (isset($argv[1]) && isset($argv[2])) {
    $filename = fopen($csvName, "a", LOCK_EX);
    $price = implode(' ', array_slice($argv,1,1));
    $name = implode(' ', array_slice($argv, 2));
    array_push($priceAndName, $price, $name) ;
    array_unshift($priceAndName, date('Y-m-d'));
    fputcsv($filename,$priceAndName, ";");
    $rowSign = implode(',',$priceAndName);
    echo "Row added - $rowSign";
    fclose($filename);
} elseif ($csvName !== FALSE && $argv[1] == '--today') {
    $csvName = 'pricelist.csv';
    $handle = fopen($csvName, "r");
    while (($fileOpen = fgetcsv($handle, '1000', ';')) !== FALSE) {
        if ($fileOpen[0] === date('Y-m-d')) {
            $sum[] = $fileOpen[1];
        }
    }
    echo date('Y-m-d') . ' Spendings ' . array_sum($sum);
} else  {
    echo "Fail! Variables are not correct. Put '--today' or start script with such elements {price} and {item name}";
}