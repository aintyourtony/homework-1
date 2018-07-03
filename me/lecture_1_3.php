<?php

$continents = [
    'South america' => ['Choloepus hoffmanni', 'Cingulata', 'Panthera onca'],
    'North america' => ['Bison', 'Canis latrans', 'Grizzly bear'],
    'Africa' => ['Elapidae', 'Pythonidae', 'Bubalus bubalis'],
    'Eurasian' => ['Alces alces', 'Gulo gulo', 'Tamias'],
    'Australia' => ['Ornithorhynchus anatinus', 'Tachyglossidae', 'Macropus rufus']
];

foreach ($continents as $key=>$continent){

           foreach ($continent as $animals) {
                        $space = ' ';
                        $twoWords = strpos($animals, $space);

                      if ($twoWords == true) {

                            $firstWord = stristr($animals, $space, true);
                            $secondWord = strpbrk($animals, $space);

                            $massiveforShuffleFirstword[] = $firstWord;
                            $massiveforShuffleSecondword[] = $secondWord;

                          $cont[]=[$key=>$firstWord];

                          }

                                            }
            }



echo '<pre>';


shuffle($massiveforShuffleFirstword);
//print_r($massiveforShuffleFirstword);
shuffle($massiveforShuffleSecondword);
//print_r($massiveforShuffleSecondword);
$C= array_combine($massiveforShuffleFirstword, $massiveforShuffleSecondword);

//print_r($C);
foreach ($C as $first => $second) {


        foreach ($cont as $h2cont => $names) {

            echo '<pre>';

            $a = array_search($first, $names);

            echo '<h2>' . $a . '</h2>';

    }

    echo key($C) . ' ' . $second . '<br>';
    next($C);


    }





?>