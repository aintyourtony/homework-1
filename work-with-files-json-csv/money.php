<?php
$sum = [];
$priceAndName = [];
$csvName = 'pricelist.csv';

if (isset($argv[1]) && isset($argv[2])) {
    $handle = fopen($csvName, "a");
    $price = implode(' ', array_slice($argv,1,1));
    $name = implode(' ', array_slice($argv, 2));
    array_push($priceAndName, $price, $name) ;
    array_unshift($priceAndName, date('Y-m-d'));
    fputcsv($handle,$priceAndName, ";");
    $rowSign = implode(',',$priceAndName);
    echo "Row added - $rowSign";
    fclose($handle);
} elseif (is_readable($csvName) && isset($argv[1]) && $argv[1] == '--today') {
    $handle = fopen($csvName, "r");
    while (($resource = fgetcsv($handle, '1000', ';')) !== FALSE) {
        if ($resource[0] === date('Y-m-d')) {
            $sum[] = $resource[1];
        }
    }
    echo date('Y-m-d') . ' Spendings ' . array_sum($sum);
} else  {
    echo "Fail! Variables are not correct. Put '--today' or start script with such elements {price} and {item name}";
}