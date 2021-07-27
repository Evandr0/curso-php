<?php
#Aula 19 - Tipos de dados do PHP
/*
* Lógico     = boolen
* Texto      = string
* inteiro    = interger
* Pflutuante = float
* Array      = array
* Objetos    = objects
* Recursos   = resource (Tudo que não se encaixe nos itens anteriores).(Imagem, mp3, arquivo binário)
*/
$str = "eXcript";
echo gettype($str);

echo "<br>";

$num = 10;
echo gettype($num);

echo "<br>";

$dinheiro = 1500.23;
echo gettype($dinheiro);

echo "<br>";

$bool = True;
echo gettype($bool);

?>