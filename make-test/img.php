<?php
header('content-type: image/png');
$img = imagecreatetruecolor ( 300, 200 );
$text_color = imagecolorallocate($img, 233, 14, 91);
imagestring($img, 1, 5, 5, $_GET['test'], $text_color);
imagepng($img);
