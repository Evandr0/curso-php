<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title> Curso PHP</title>

</head>

<body>
    <?php
    /*Aula 69 - Parâmetros por Referência
      */

      $a = [1,2,3];
      $b = $a; //cópia dos elementos na memoria.

      $a[1] = 5;

      print_r($a);
      print_r($b);


      $b = &$a; //atribuindo o endereço de memória. reflete tudo o que é alterado em uma variavel.
      print_r($a);
      print_r($b);






 
    ?>


</body>

</html>