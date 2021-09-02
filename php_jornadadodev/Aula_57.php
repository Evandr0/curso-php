<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title> Curso PHP</title>

    </head>
    <body>
    <?php
        /*Aula 57 - Alterando valores com o laço foreach
        estrutura especializada para percorrermos todos os elementos de um array
        foreach (<array> as <valor>) {
            bloco de instrução.
        } //para cada item do array, o bloco de instrução será executado e o elemento do array será colocado na variavel $<valor> 
        
        foreach (<array> as <chave> => <valor>)
        */
        
        $nums = range(0, 10);
        //print_r($nums);

        foreach($nums as $chave => $valor){
            $valor *=10;
            echo "$valor <br>";
            
        }

        print_r($nums);

        foreach($nums as $chave => &$valor){ //& altera também o elemento dentro do array.
            $valor *=10;
            echo "$valor <br>";
            
        }

        print_r($nums);


        


       


    ?>
      

    </body>
</html>