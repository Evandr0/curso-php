<!DOCTYPE htlm>

<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title> Curso PHP</title>

    </head>
    <body>
    <?php
        /*Aula Aula 40 - Tabuada

       
        }
        
        */
        $tab = 2;
        if(isset($_POST["edTABUADA"])){
            $tab = $_POST["edTABUADA"];
            if(!is_numeric($tab)){
                echo "<br>O valor informado não é um número <br>";
            } else {
            for($num=0; $num<=10; $num++){
                echo $num . " x " . $tab . " = " . ($num * $tab) . "<br>";
            }
        }
    }
       


    ?>
       <form method="POST">
            <input type="text" name="edTABUADA" />
            <input type="submit"/>
        
        </form>

    </body>
</html>
