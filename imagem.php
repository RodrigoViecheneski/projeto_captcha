<?php
session_start();
//transformar um arquivo php em imagem
header("Content-type: image/jpeg");

$n = $_SESSION['captcha'];

$imagem = imagecreate(100, 50);
imagecolorallocate($imagem, 200, 200, 200);
$fontcolor = imagecolorallocate($imagem, 20, 20, 20);
// Para inserir a fonte é necessário colocar o caminho absoluto 
imagettftext($imagem, 40, 0, 20, 35, $fontcolor, 'C:\xampp\htdocs\projeto_captcha\ginga.otf', $n);
imagejpeg($imagem, null, 100);
?>