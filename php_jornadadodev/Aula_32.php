<!DOCTYPE htlm>

<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Tela de login e senha - Curso PHP</title>

    </head>
    <body>
    <?php
        /*Aula 32 - Introdução do-while
        faça{
            ... 
            ... 

        } while(true);

        */

        $conta = 0;
        do{
            $conta = $conta + 1;
            echo $conta;
        } while($conta <10);




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