<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title> Curso PHP</title>

</head>

<body>
    <?php
    /*Aula 67 - Retorno de Valores
      */

      cubo(3);



      function cubo($num){
          $x = $num * $num * $num;
          echo $x;
          return $x;
      }

 
    ?>


</body>

</html>