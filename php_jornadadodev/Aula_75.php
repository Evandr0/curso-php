<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title> Curso PHP</title>

</head>

<body>
    <?php
    
    /*Aula 75 - Funções para importação - include() e require()*/

    /* include(<file_name>) (Continua a executar o programa normalmente.)
        require(<file_Name>) (nao executa o programa caso haja erro) 
        
        include_once(<file_name>)  - verifica se ja foi importado o arquivo e não inclui novamente.
        require_once(<file_name>)  - verifica se ja foi importado o arquivo e não inclui novamente */

        include ('code.php');

        echo $teste;


    ?>


</body>

</html>