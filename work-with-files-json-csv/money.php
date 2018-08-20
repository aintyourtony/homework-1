<?php
$sum = [];
$priceAndName = [];

if (count($argv)<=2 && !($argv[0] = '--today')) {
    echo "Ошибка! Аргументы заданы не верно. Укажите флаг --today или запустите скрипт с аргументами {цена} и {описание покупки}";
     } elseif ($argv[1] == '--today') {
    $csvName = 'pricelist.csv';
    $handle = fopen($csvName, "r");
    while (($fileOpen = fgetcsv($handle, '1000', ';')) !== FALSE) {

        if ($fileOpen[0] === date('Y-m-d')) {

            $sum[] = $fileOpen[1];

        }

    }

    echo date('Y-m-d') . ' Spendings ' . array_sum($sum);
}
     else {
         $filename = fopen('pricelist.csv', "a");

         $price = implode(' ', array_slice($argv,1,1));

         $name = implode(' ', array_slice($argv, 2));

         array_push($priceAndName, $price, $name) ;

         var_dump($priceAndName);

         array_unshift($priceAndName, date('Y-m-d'));

         fputcsv($filename,$priceAndName, ";");

         $rowSign = implode(',',$priceAndName);

         echo "Row added - $rowSign";

         fclose($filename);
    }