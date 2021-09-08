<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title> Curso PHP</title>

</head>

<body>
    <?php
    /*Aula 65 - Lista de Parâmetros II
      */


    somaTudo(1, 2, 3, 4, 5, 6, 7, 8);


    function somaTudo()
    {
        $lista = func_get_args();
        $qntd = func_num_args();
        $total = 0;

        /*for ($x = 0; $x < $qntd; $x++) {
            $total += $lista[$x];
        }*/
        foreach($lista as $item){
            $total += $item;
        }

        echo "A soma de todos os parametros é: " . $total;
    }


    function soma()
    {
        //função pega os parametros da lista.
        $total = func_get_arg(0) + func_get_arg(1);
        echo $total;
    }

    ?>


</body>

</html>