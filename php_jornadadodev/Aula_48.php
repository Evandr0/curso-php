<!DOCTYPE htlm>

<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title> Curso PHP</title>

    </head>
    <body>
    <?php
        /*Aula 48 - Constantes
        valor atribuido que não pode ter seu valor alterado.
        $variavel que não varia. kkkkk*/

        define("TESTE", 10);
        echo TESTE;
		echo "<br>";

        for($x=0; $x<5; $x++){
            define("CONSTANTE".$x, $x);
        }

        echo CONSTANTE0 . "<br>";
        echo CONSTANTE3 . "<br>";

        //ou

        const VALOR = 1000;
        echo "valor de" . VALOR;



    ?>
      

    </body>
</html>
