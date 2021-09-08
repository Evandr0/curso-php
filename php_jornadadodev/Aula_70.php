<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title> Curso PHP</title>

</head>

<body>
    <?php
    /*Aula 70 - Parâmetros por Referência II
      */

      $a = [1,2,3];

      function func(&$arg){
          
          $arg[1] = 5;
          print_r($arg);

      }

      func($a);
      print_r($a);
      echo "<br>";
      echo "<br>";
      echo "<br>";

      //==============

      function &func2(){
          $a = [4,5,6];
          print_r($a);
          return $a;
      }

      $valor = &func2();
      print_r($valor);



 
    ?>


</body>

</html>