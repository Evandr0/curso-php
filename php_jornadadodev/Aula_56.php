<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title> Curso PHP</title>

    </head>
    <body>
    <?php
        /*Aula 56 - Estrutura foreach II
        estrutura especializada para percorrermos todos os elementos de um array
        foreach (<array> as <valor>) {
            bloco de instrução.
        } //para cada item do array, o bloco de instrução será executado e o elemento do array será colocado na variavel $<valor> 
        
        foreach (<array> as <chave> => <valor>)
        */
        $lista = ["Domingo", "Segunda", "Terça", "Quarta", "Quinta", "Sexta", "Sábado"];

        foreach($lista as $chave => $valor){
            echo "$chave: $valor <br>";
        }


        


       


    ?>
      

    </body>
</html>