<?php

echo "<p>Soma dos números</p>";

$soma = 0;
for($x = 0; $x <= 20; $x++){
    $soma = $soma + $x;
}

echo "<p> $soma </p>";
echo "<p> ------------------------------------";

//"<p> Tabuada de um número";
$numTabuada = 6;
$resultado = 0;
echo "<p> Tabuada do número $numTabuada";
for($i = 0; $i <= 10; $i++){
    $resultado = $i * $numTabuada;
    echo "<p> $i * $numTabuada"." = $resultado";
}

//tabuada de todos os números
$numTabuada = 1;
$resultado = 0;
echo "<p> Tabuada de 1 a 10";
while($numTabuada <= 10){
    echo "<p> --------------------------------------------";
    echo "<p> Tabuada do número $numTabuada";
    for($i = 0; $i <= 10; $i++){
        $resultado = $i * $numTabuada;
        echo "<p> $i * $numTabuada"." = $resultado";
    }
    $numTabuada++;

}

?>