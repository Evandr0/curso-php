<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title> Curso PHP</title>

</head>

<body>
    <?php
    /* Aula 78 - Funções Anônimas na Prática */

    function processa_list($lista, $func){
        foreach($lista as &$item){
            $item = $func($item);

        }
        return $lista;
    }

    //nao terminei de copiar tudo, chata pra kct essa função


    ?>


</body>

</html>