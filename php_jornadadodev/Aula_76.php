<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title> Curso PHP</title>

</head>

<body>
    <?php
    /* Aula 76 - Introdução às Funções Anônimas */

    $func = function($nome){
        echo "O nome enviado como parametro é: $nome";

    };

    function teste($f){
        $f("Claudio");
    }


    $func("Excript");
  


    ?>


</body>

</html>