<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title> Curso PHP</title>

    </head>
    <body>
    <?php
        /*Aula 64 - Lista de Parâmetros
      */

      function soma(){
          //função pega os parametros da lista.
          $total = func_get_arg(0) + func_get_arg(1);
          echo $total;
      }

      soma(10, 2);

       


    ?>
      

    </body>
</html>