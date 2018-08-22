<?php
$continents = [
    'South america' => ['Choloepus hoffmanni', 'Cingulata', 'Panthera onca'],
    'North america' => ['Bison', 'Canis latrans', 'Grizzly bear'],
    'Africa' => ['Elapidae', 'Pythonidae', 'Bubalus bubalis'],
    'Eurasian' => ['Alces alces', 'Gulo gulo', 'Tamias'],
    'Australia' => ['Ornithorhynchus anatinus', 'Tachyglossidae', 'Macropus rufus']
];
echo '<pre>';
$i = 0;
$z = 0;
$x = 0;
$firstWords=[];
$secondWords=[];
$oneWordMassive=[];
$twoWordsMassive = [];
foreach ($continents as $key => $continent) {
    foreach ($continent as $animals) {
        $oneWordMassive[$key][] = explode(' ', $animals);
    }
}
foreach ($oneWordMassive as $continent => $firstwords) {
    foreach ($firstwords as $words) {
        if (count($words) == 2) {
            $firstWords[$continent][]=$words[0];
            $secondWords[]=$words[1];
            shuffle($secondWords);
        }
    }
}
foreach ($firstWords as $continent => $value) {
    foreach ($value as $values) {
        $twoWordsMassive[$continent][] = $values . ' ' .  $secondWords[$i++];
    }
}
foreach ($twoWordsMassive as $continents => $firstWordAnimal) {
    echo '<h2>' . $continents . '</h2>';
    echo implode(',', $firstWordAnimal);
}