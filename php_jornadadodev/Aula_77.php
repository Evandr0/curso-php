<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title> Curso PHP</title>

</head>

<body>
    <?php
    /* Aula 77 - Escopo de nomes das funções anônimas */

    $num = 100;
    $num2 = 200;

    $func = function(){
        $num = 5; //desta forma nao teremos acesso externo a essa variavel

    };

    $func = function() use ($num, $num2){
        echo "$num"; //desta forma teremos acesso externo a essa variavel mas a variavel externa não muda. para modificar a variavel colocar use (&$num, &$num2){};
        echo "$num2";

    };

   
  


    ?>


</body>

</html>