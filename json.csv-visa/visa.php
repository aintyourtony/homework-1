<?php
$csvName = 'data.csv';
$handle = fopen($csvName, 'r');
$file = fgetcsv($handle, 1000);
$csv = array_map('str_getcsv', file($csvName));

$words = $csv;
$shortest = -1;

if (isset($argv[1])) {
    $input = $argv[1];
foreach ($words as $word) {
    $countryies[] = $word[1];
}
        foreach ($countryies as $value) {
            $lev = levenshtein($input, $value);


            if ($lev == 0) {
            $closest = $value;
            $shortest = 0;
            break;
        }

        if ($lev <= $shortest || $shortest < 0) {
            $closest = $value;
            $shortest = $lev;
        }
    }

if ($shortest == 0) {
    foreach ($csv as $rowArray) {
        if ($rowArray[1] == $argv[1]) {
            echo $closest . ': ' . $rowArray[4];
        }
    }
} else {
    echo "Did you mean?: $closest\n";
}



} else {
    echo 'Please type right country name';
}
