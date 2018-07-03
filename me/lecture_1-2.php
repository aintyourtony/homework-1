<<<<<<< HEAD
=======
<?php

$x = rand(0,100);

$a = 1;
$b = 1;

echo $x . '<br>';
while (true) {

    if ($a > $x) {
        echo 'Задуманное число НЕ входит в числовой ряд';
        break;

    } elseif ($a == $x) {
        echo 'Задуманное число входит в числовой ряд';
        break;
    } 
        $c = $a;
        $a = $a + $b;
        $b = $c;
    
}
?>
>>>>>>> adbf35f445c89d2ed62681dbc93e24c214a1ba6a
