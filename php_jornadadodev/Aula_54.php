<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title> Curso PHP</title>

    </head>
    <body>
    <?php
        /*Aula 54 - Iterando Arrays*/

        $lista = ["Domingo", "Segunda", "Terça", "Quarta", "Quinta", "Sexta", "Sábado"];
        $qnt = count($lista);

        echo $qnt;
        
        for($x=0; $x<$qnt; $x++){
            echo $x . ": " . $lista[$x] . "<br>";
        }

       


    ?>
      

    </body>
</html>