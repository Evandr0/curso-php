<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title> Curso PHP</title>

</head>

<body>
    <?php

    #declare(strict_types=1); //modo estrito, retorna exceção se o valor definido como retorno não retornar o tipo solicitado
    /*Aula 73 - Null Coalescing Operator - Null Coalesce
    echo $x ?? ""; //?? função para verificar se a variavel existe.

      */

      $ddd = $_GET['ddd'] ?? "00";
      $telefone = $_GET['telefone'] ?? $_GET['celular'] ?? "0000-0000";

      echo "Tel: ($ddd) $telefone";

      //https://localhost/site1/exec.php?ddd=47&telefone=21060006
      //https://localhost/site1/exec.php?ddd=47

      

      


    ?>


</body>

</html>