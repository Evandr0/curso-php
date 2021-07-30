<!DOCTYPE htlm>

<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Ambiente para Estudo PHP - eXcript</title>

    </head>
    <body>
    <?php
        /*Aula 25 - elseif*/
        if(isset($_POST["idade"])){
            echo $_POST["idade"];
            $idade = $_POST["idade"];
            echo "<br>";

            if($idade < 18) {
                echo "A pessoa é de menor idade.";
            } else if ($idade >=18 and $idade < 60){
                echo "É uma pessoa adulta";
            } else {
                echo "É uma pessoa da terceira idade.";
            }
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