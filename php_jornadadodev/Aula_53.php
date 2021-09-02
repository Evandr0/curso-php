<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title> Curso PHP</title>

    </head>
    <body>
    <?php
        /*Aula 53 - Função range
        range($low, $high, $step=NULL);
        cria sequencia numérica
        $low = inicio da sequencia.
        $high = final da sequencia.
        $step = intervalo da sequencia.

        range(0, 5, 2);
        >> [0, 2, 4];

        */

        $x = range(1,11);
        print_r($x);

        $y = range("a", "z", 2);
        print_r($y);

       


    ?>
      

    </body>
</html>