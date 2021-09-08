<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title> Curso PHP</title>

    </head>
    <body>
    <?php
        /*Aula 59 - Arrays Multidimensionais
       */
      # | ID | NOME | PONTOS |
      # | 1  | Zé   | 11     |
      # | 2  | José | 4      | 
      # | 3  | Zeca | 22     | 

      $jogo = array(
          array("id"=>1, "NOME"=>"Zé", "PONTOS"=>11),
          array("id"=>2, "NOME"=>"José", "PONTOS"=>4),
          array("id"=>3, "NOME"=>"Zeca", "PONTOS"=>22)
      );

      print_r($jogo);

      echo "<br>";

      echo $jogo[1]["NOME"];




        


       


    ?>
      

    </body>
</html>