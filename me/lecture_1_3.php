<?php

$continents = [
    'South america' => ['Choloepus hoffmanni', 'Cingulata', 'Panthera onca'],
    'North america' => ['Bison', 'Canis latrans', 'Grizzly bear'],
    'Africa' => ['Elapidae', 'Pythonidae', 'Bubalus bubalis'],
    'Eurasian' => ['Alces alces', 'Gulo gulo', 'Tamias'],
    'Australia' => ['Ornithorhynchus anatinus', 'Tachyglossidae', 'Macropus rufus']
];
$i=0;
$z=0;
$twoWords = [];
$twoWordsMassive=[];
$oneWordMassive=[];
foreach ($continents as $key=>$continent) {
    foreach ($continent as $animals) {
        echo '<pre>';
        $twoWords = strpos($animals, ' ');
            if ($twoWords == true) {
                $twoWordsMassive[] = $animals;
                $oneWordMassive[] = explode(' ', $animals);
                $firstWords[]=$oneWordMassive[$i++][0];
                $secondWords[]=$oneWordMassive[$z++][1];
            }
    }
}

print_r($firstWords);
print_r($secondWords);

shuffle($firstWords);
shuffle($secondWords);

$massShuffled = [$firstWords, $secondWords];
print_r($massShuffled);

for ($i=0; $i < count ($massShuffled[0]); $i++) {
        $randomWords = $massShuffled[0][$i] . ' ' . $massShuffled[1][$i];
       echo $randomWords;
       echo '<br>';
}

$result = array_search($firstWords,$continents);

var_dump($result);