<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title> Curso PHP</title>

    </head>
    <body>
    <?php
        /*Aula 60 - Manipulação de Arrays
       
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
      */

      #Verifica se a estrutura é uma array
      echo "Valor = [] " . is_array([]);
      echo "<br>";
      echo "Valor = array() " . is_array( array());
      echo "<br>";
      echo "Valor = [1,2,3] " . is_array([1,2,3]);
      echo "<br>";
      echo "Valor = 1 " . is_array( 1 );
      echo "<br>";
      echo "<br>";

      #Retorna a quantidade de elementos
      echo "FUNÇÃO: count()";
      echo "<br>";
      echo "Valor = [1,2,3,4] - A contagem é: " . count([1,2,3,4]);
      echo "<br>";
      echo "Valor = range(0,1000) - A contagem é: " . count(range(0,1000));
      echo "<br>";
      echo "<br>";

      #Verifica se um elemento está contido.
      echo "FUNÇÃO: in_array(valor, array);";
      echo "<br>";
      echo "Valor = in_array(2, [1,2,3,4,5]); - contem?:=> " . in_array(2, [1,2,3,4,5]);
      echo "<br>";
      echo "Valor = in_array(6, [1,2,3,4,5]); - contem?:=> " . in_array(6, [1,2,3,4,5]);
      echo "<br>";
      echo "<br>";

      #ORDENAÇÃO
      echo "FUNÇÃO: sort();";
      echo "<br>";
      $arr = ["c", "a", "b", "f"];
      sort($arr);
      print_r($arr);
      echo "<br>";
      echo "<br>";

      #INVERSÃO
      echo "FUNÇÃO: array_reverse();";
      echo "<br>";
      $arr = [1,2,3,4];
      array_reverse($arr);
      print_r(array_reverse($arr));
      echo "<br>";
      echo "<br>";

      #Somo todos os elementos do array
      echo "FUNÇÃO: array_sum();";
      echo "<br>";
      $arr = [1,2,3,4];
      echo "A soma é: " . array_sum($arr);
      echo "<br>";
      echo "<br>";

      #Junção de arrays
      echo "FUNÇÃO: array_merge();";
      $arr1 = [1,2];
      $arr2 = ["a","b"];
      $x = array_merge($arr1, $arr2);
      print_r($x);
      echo "<br>";
      echo "<br>";



        


       


    ?>
      

    </body>
</html>