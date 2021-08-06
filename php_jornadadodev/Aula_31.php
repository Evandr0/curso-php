<!DOCTYPE htlm>

<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Tela de login e senha - Curso PHP</title>

    </head>
    <body>
    <?php
        /*Aula 31 - Introdução While
        

        

        $num = 1;
        while($num <= 100){
            echo $num . "<br>";
            $num = $num + 1;
            

        }*/

        $num = 0;
        while($num < 100) {
            echo ($num *255) . "<br>";
            $num = ($num + 5);
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