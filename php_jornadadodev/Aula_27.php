<!DOCTYPE htlm>

<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Ambiente para Estudo PHP - eXcript</title>

    </head>
    <body>
    <?php
        /*Aula 27 - Operadores Relacionais II - Comparativos
        == 
        !=
        >
        <
        >=
        <=
        $retorno = operando1 [OP] operando2


        
        */
        echo "igualdade<br>";
        echo var_dump(10==10);
        echo var_dump(10==11);
        echo var_dump(11=="11");

        echo "diferente";
        var_dump(10 != 10);
        var_dump(10 != 11);
        var_dump(10 <> 10); // outra notação para operador diferente de
        
        echo "<br>identico";
        var_dump(10 === 10);
        var_dump(10 === "10");

        echo "<br>Nao identico";
        var_dump(10 !==10);
        var_dump(10 !== "10");

        echo "<br>Menor e Maior";
        var_dump(10 < 10);
        var_dump(10 > 10);

        echo "<br>Maior ou igual";
        var_dump(10 >= 10);

        echo "<br>menor ou igual";
        var_dump(10 <= 10);


    ?>
        <form method="POST">
            <input type="text" name="idade" />
            <input type="submit"/>
        
        </form>

    </body>
</html>
<?php



?>