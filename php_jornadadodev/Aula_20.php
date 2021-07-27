<?php
#Aula 20 - Modulo da divisão
/*
Resto da divisão (usamos %)
Em PHP
 7 % 3 = 1

Saber se numero é par ou impar
*/
$num1 = 9;
$num2 = 2;
$res = $num1/$num2;
$resto = $num1 % $num2;

echo "a divisão de num1 por num2 vale " . $res;
echo "<br>";
echo "<br>";
echo "resto da divisão é " . $resto;
echo "<br>";
echo "<br>";
echo 7 % 3;

echo fmod(7 , 3.3); //divisão de numeros não inteiros.(FLOAT)
?>