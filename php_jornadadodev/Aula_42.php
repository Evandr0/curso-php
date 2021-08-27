<!DOCTYPE htlm>

<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title> Curso PHP</title>

    </head>
    <body>
    <?php
        /*Aula Aula 42 - Instrução continue    
        */
        for($i=0; $i<100; $i++){
            if($i % 2 == 1){
                continue;
            }
            echo $i ; "<br>";

        }
       


    ?>
       <form method="POST">
            <input type="text" name="edTABUADA" />
            <input type="submit"/>
        
        </form>

    </body>
</html>
