<!DOCTYPE htlm>

<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title> Curso PHP</title>

    </head>
    <body>
    <?php
        /*Aula Aula 45 - Instrução Switch
        switch(valor){
            case 1:
                funcaoA();
                break;
            case 2:
                funcaoB();
                break;
            case 3:
                funcaoC();
                break
            default:
                func_padrao();
        }
        */

        $num = 1;

        switch($num){
            case 1:
                echo "O valor é igual a 1";
                break;
            case 2:
                echo "O valor é igual a 2";
                break;
            default:
                echo "Estrutura default executada";
            }


        
       


    ?>
       <form method="POST">
            <input type="text" name="edTABUADA" />
            <input type="submit"/>
        
        </form>

    </body>
</html>
