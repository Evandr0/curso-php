<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title> Curso PHP</title>

</head>

<body>
    <?php

    #declare(strict_types=1); //modo estrito, retorna exceção se o valor definido como retorno não retornar o tipo solicitado

    /*Aula 74 - Operador Spaceshift
    retorna a relação entre 2 membros.
    $x <=> $y;
    se X for menor, retorna -1
    se X for igual, retorna 0
    se X for maior, retorna 1
      */

      $x = [1,2,3];
      $y = [2,3,4];

      echo $x <=> $y;

      


    ?>


</body>

</html>