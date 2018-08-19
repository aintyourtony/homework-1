<?php
if (count($argv)<=2 || count($argv)>3) {
    echo "Ошибка! Аргументы заданы не верно. Укажите флаг --today или запустите скрипт с аргументами {цена} и {описание покупки}";
     }
     else {
         $filename = fopen('pricelist.csv', "w");
         foreach ($argv as $item) {
             $priceAndName = array_slice($argv,0);
                 fputcsv($filename,$priceAndName);
         }
         fclose($filename);
         $check = fgetcsv('pricelist.csv', '1000', ';');
         var_dump($check);
    }