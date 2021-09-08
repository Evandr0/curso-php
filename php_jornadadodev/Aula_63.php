<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title> Curso PHP</title>

    </head>
    <body>
    <?php
        /*Aula 63 - Parâmetros default
      */
      login();










      function login($user="root", $key="123"){
          echo "user = $user <br>";
          echo "key = $key <br>";
      }

      function soma($num1, $num2){
          //função que soma 2 elemntos e retorna o total
          $total = $num1 + $num2;

          echo $total;

      }

       


    ?>
      

    </body>
</html>