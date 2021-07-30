<!DOCTYPE htlm>

<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Ambiente para Estudo PHP - eXcript</title>

    </head>
    <body>
    <?php
        /*Aula 24 - Números Pares e Ímpares*/
        if(isset($_POST["num"])){
            echo $_POST["num"];
            $num = $_POST["num"];
            echo "<br>";

            if($num % 2 == 0) {
                echo "O número informado é par";

            } else {
                echo "O número é impar";
            }
        }



    ?>
        <form method="POST">
            <input type="text" name="num" />
            <input type="submit"/>
        
        </form>

    </body>
</html>
<?php



?>