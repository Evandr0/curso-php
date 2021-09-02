<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title> Curso PHP</title>

    </head>
    <body>
    <?php
        /*Aula 55 - Estrutura foreach
        estrutura especializada para percorrermos todos os elementos de um array
        foreach (<array> as <valor>) */
        $lista = ["Domingo", "Segunda", "Terça", "Quarta", "Quinta", "Sexta", "Sábado"];

        foreach($lista as $item){
            echo "item = $item <br>";
        }


        


       


    ?>
      

    </body>
</html>