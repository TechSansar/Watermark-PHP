<?php

$logo = imagecreatefrompng('logo.png'); 
$image = imagecreatefrompng('image.png');

$margin_right = 500; 
$margin_bottom = 350; 
$img_width = imagesx($logo); 
$img_height = imagesy($logo);

imagecopy($image, $logo, imagesx($image ) - $img_width - $margin_right, imagesy($image) - $img_height - $margin_bottom, 0, 0, imagesx($logo), imagesy($logo));

header('Content-type: image/png'); 
imagepng($image); 
imagedestroy($image);
?>
