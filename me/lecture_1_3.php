<?php

$continents = [
    'South america' => ['Choloepus hoffmanni', 'Cingulata', 'Panthera onca'],
    'North america' => ['Bison', 'Canis latrans', 'Grizzly bear'],
    'Africa' => ['Elapidae', 'Pythonidae', 'Bubalus bubalis'],
    'Eurasian' => ['Alces alces', 'Gulo gulo', 'Tamias'],
    'Australia' => ['Ornithorhynchus anatinus', 'Tachyglossidae', 'Macropus rufus']
];

foreach ($continents as $key=>$continent) {
    foreach ($continent as $animals) {
        echo '<pre>';
        $twoWords = strpos($animals, ' ');
            if ($twoWords == true) {
                $twoWordsMassive[] = $animals;

            }
    }
}

foreach ($twoWordsMassive as $values) {
    $oneWordMassive[] = explode(' ', $values);    {
    }

}
//print_r($oneWordMassive);

foreach ($oneWordMassive as $arrayKey => $wordsMass) {
    array_keys($wordsMass);
    $firstWords[] = $wordsMass[0];
    $secondWords[] = $wordsMass[1];
       }
//print_r($firstWords);
//print_r($secondWords);

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




//foreach ($massShuffled as $outputwords) {
 //   echo $outputwords;
//}
//           foreach ($continent as $animals) {
//                        $space = ' ';
//                        $twoWords = strpos($animals, $space);
//
//                      if ($twoWords == true) {
//
//                            $firstWord = stristr($animals, $space, true);
//                            $secondWord = strpbrk($animals, $space);
//
//                            $massiveforShuffleFirstword[] = $firstWord;
//                            $massiveforShuffleSecondword[] = $secondWord;
//
//                          $cont[]=[$key=>$firstWord];
//
//                          }
//
//                                            }
//            }
//
//
//
//echo '<pre>';
//
//
//shuffle($massiveforShuffleFirstword);
////print_r($massiveforShuffleFirstword);
//shuffle($massiveforShuffleSecondword);
////print_r($massiveforShuffleSecondword);
//$C= array_combine($massiveforShuffleFirstword, $massiveforShuffleSecondword);
//
////print_r($C);
//foreach ($C as $first => $second) {
//
//
//        foreach ($cont as $h2cont => $names) {
//
//            echo '<pre>';
//
//            $a = array_search($first, $names);
//
//            echo '<h2>' . $a . '</h2>';
//
//    }
//
//    echo key($C) . ' ' . $second . '<br>';
//    next($C);
//
//
//    }
//
//
//
//
//
?>