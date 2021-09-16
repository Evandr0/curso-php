<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title> Curso PHP</title>

</head>

<body>
    <?php

    #declare(strict_types=1); //modo estrito, retorna exceção se o valor definido como retorno não retornar o tipo solicitado
    /*Aula 72 - Valores de retornos de funções tipados

    function func() : int {

    }
    
      */

      function cubo(float $num) : float { //define que o retorno será um float e também que o parametro passado deverá ser float.
          return $num * $num * $num;
      }

      echo cubo(10.5);

      function teste() : array { //define que o retorno será um array
          return [10, "Evandro", 5.1];
      }

      var_dump(teste());


 
    ?>


</body>

</html>