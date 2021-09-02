<!DOCTYPE htlm>

<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title> Curso PHP</title>

    </head>
    <body>
    <?php
        /*Aula 52 - Definindo, Incluindo, Alterando e Excluindo elementos
        */
        $arr = ["zero", "um", "dois", "três", "quatro"];

        //adicionar novo elemento
        $arr[] = "cinco";

        $arr[6] = "seis";

        //alterar array

        $arr[1] = "ummm";
        $arr[4] = "four";

        //excluir elementos

        unset($arr[3]);
        


    ?>
      

    </body>
</html>
