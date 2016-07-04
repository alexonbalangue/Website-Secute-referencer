<?php

header('Content-Type: image/png');
// Charge le cachet et la photo afin d'y appliquer le tatouage num�rique
$im = imagecreatefrompng('assets/stop.png');

// Tout d'abord, nous cr�ons un cachet manuellement gr�ce � GD
$stamp = imagecreatetruecolor(133, 39);
$string = $_GET['advice'];
imagefilledrectangle($stamp, 0, 0, 0, 0, 0xFFFFFF);
imagefilledrectangle($stamp, 0, 0, 0, 0, 0xFFFFFF);
$im = imagecreatefrompng('assets/stop.png');
$px     = (imagesx($im) - 5.5 * strlen($string)) / 2;

imagestring($im, 2, $px, 6, $string, 0xFFFFFF);
imagestring($stamp, 2, 10, 0, $title, 0xFFFFFF);
imagestring($stamp, 2, 10, 10, $desc, 0xFFFFFF);
imagestring($stamp, 2, 10, 20, $my_domainname, 0xFFFFFF);

// D�finit les marges du cachet et r�cup�re la largeur et la hauteur du cachet
$marge_right = 57;
$marge_bottom = 39;
$sx = imagesx($stamp);
$sy = imagesy($stamp);

// Fusionne le cachet dans notre photo avec une opacit� de 70%
imagecopymerge($im, $stamp, imagesx($im) - $sx - $marge_right, imagesy($im) - $sy - $marge_bottom, 0, 0, imagesx($stamp), imagesy($stamp), 100);

// Sauvegarde l'image dans un fichier et lib�re la m�moire
imagepng($im);
imagedestroy($im);

?>