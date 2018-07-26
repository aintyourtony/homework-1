<?php
$continents = [
    'South america' => ['Choloepus hoffmanni', 'Cingulata', 'Panthera onca'],
    'North america' => ['Bison', 'Canis latrans', 'Grizzly bear'],
    'Africa' => ['Elapidae', 'Pythonidae', 'Bubalus bubalis'],
    'Eurasian' => ['Alces alces', 'Gulo gulo', 'Tamias'],
    'Australia' => ['Ornithorhynchus anatinus', 'Tachyglossidae', 'Macropus rufus']
];
echo '<pre>';
$i=0;
$z=0;
$twoWords = [];
$twoWordsMassive=[];
$oneWordMassive=[];

foreach ($continents as $key => $continent) {
    foreach ($continent as $animals) {
        $twoWordsMassive[] = $animals;
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

foreach ($firstWords as $continent => $firstWordAnimal) {

    echo '<h2>' . $continent . '</h2>';

    foreach ($firstWordAnimal as $names) {

        echo $names . ' ' . $secondWords[$z++] . ',';

    }
}
