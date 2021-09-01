<!DOCTYPE htlm>

<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title> Curso PHP</title>

    </head>
    <body>
    <?php
        /*Aula 51 - Arrays Indexados
        cada elemento possui um indice automaticamente.


        */
        //primeira maneira de definir um array
        $cores = array("azul","amarelo","Verde","Branco");
        print_r($cores);

        $cores[0] = "Roxo";


        //segunda maneira
        $cores2[0] = "Azul";
        $cores2[1] = "Amarelo";
        $cores2[2] = "Verde";
        $cores2[3] = "Branco";

        echo $cores2[0];

        //terceira maneira
        $cores3[] = "Azul";
        $cores3[] = "Anil";
        $cores3[] = "cinza";

        print_r($cores3);

        //quarta maneira

        $cores4 = ["Branco", "Verde", "Prata", "Dourada"];
        print_r($cores4);





    
        


    ?>
      

    </body>
</html>
