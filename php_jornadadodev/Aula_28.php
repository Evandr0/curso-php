<!DOCTYPE htlm>

<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Ambiente para Estudo PHP - eXcript</title>

    </head>
    <body>
    <?php
        /*- Aula 28 - Operadores Lógicos
        
        Conjunção - E (&& ou and) = Se ambas forem verdadeiras
        Disjunção - OU (|| ou or) = Se uma das duas forem verdadeiras.
        Negação - NOT (!) - inverte o valor da expressão.
        
        */

        $num = 0;
        if(($num > 10)&&($num <100)){
            echo "É verdadeiro";
        } else {
            echo "É falso";
        }


    ?>
        <form method="POST">
            <input type="text" name="idade" />
            <input type="submit"/>
        
        </form>

    </body>
</html>
<?php



?>