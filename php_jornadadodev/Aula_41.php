<!DOCTYPE htlm>

<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title> Curso PHP</title>

    </head>
    <body>
    <?php
        /*Aula Aula 41 - Instrução break        
        */
        $i = 0;
        while(true){
            $i++;
            if($i==50){
                break;
            }
            echo $i . "<br>";
        }
        echo "Break OK";
       


    ?>
       <form method="POST">
            <input type="text" name="edTABUADA" />
            <input type="submit"/>
        
        </form>

    </body>
</html>
