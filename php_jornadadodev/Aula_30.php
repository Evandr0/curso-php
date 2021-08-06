<!DOCTYPE htlm>

<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Tela de login e senha - Curso PHP</title>

    </head>
    <body>
    <?php
        /*Aula 30 - Introdução às estruturas de repetição
        

        */

        $x = 10;
        while ($x <=20){
            echo $x . "<br>";
            $x = $x +1;
        }




    ?>
        <form method="post">
            <input type="text" name="login" /><br>
            <input type="password" name="senha" /><br>
            <input type="submit"/>
        
        </form>

    </body>
</html>
<?php



?>