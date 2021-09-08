<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title> Curso PHP</title>

</head>

<body>
    <?php
    /*Aula 66 Funções Variádicas
      */

      media(1,2,3,4,5,6,7,8);
      function media(...$valores){
          $total = array_sum($valores) / count($valores);
          echo $total;
      }
    ?>


</body>

</html>