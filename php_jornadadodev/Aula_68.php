<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title> Curso PHP</title>

</head>

<body>
    <?php
    /*Aula 68 - Funções e Escopo de Variáveis
      */

      $a = 10;
      $b = 5;

      function estudoEscopo(){
          global $a;
          echo $a;
      }

      function estudoEscopoGlobal(){
          echo $GLOBALS["a"];
      }

    

    //outro exemplo
    //function estudoEscopo2(){
     //   $x = 1;
   // }

    //echo  $x; //não é possível acessar essa variavel.

    estudoEscopoGlobal();

    print_r($GLOBALS);




 
    ?>


</body>

</html>