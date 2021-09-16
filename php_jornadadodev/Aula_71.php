<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title> Curso PHP</title>

</head>

<body>
    <?php
    /*Aula 71 - Parâmetros Tipados
    
      */

      function getArea(int $x, int $y){
          return $x * $y;

      }

      function getSum(int ...$valores){
          return array_sum($valores);
      }

      echo getArea(10, 5);
      echo "<br>";

      echo getSum(1,2,3,4,5,6);


   



 
    ?>


</body>

</html>