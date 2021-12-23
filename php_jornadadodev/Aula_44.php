<!DOCTYPE htlm>

<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title> Curso PHP</title>

    </head>
    <body>
    <?php
        /*Aula Aula 44 - Operação Ternária II
        capturar texto que vai junto com a URL.
        https://localhost/site1/exec.php?text=Texto para capturar.
        
        */

        $txt = isset($_POST["edTABUADA"]) ? $_POST["edTABUADA"] : "A chave não existe"; //Pega a varialvel Texto digitada na URL  https://localhost/site1/exec.php?texto=Texto%20passado%20na%20URL
        $txt2 = isset($_POST["edTABUADA"]) ? $_POST["edTABUADA"] : "A chave não existe"; //Pega a varialvel Texto digitada na URL  https://localhost/site1/exec.php?texto=Texto%20passado%20na%20URL
		
		
		echo $txt . "<br>";
        echo $txt2 . "<br>";
       


    ?>
       <form method="POST">
            <input type="text" name="edTABUADA" />
            <input type="submit"/>
        
        </form>

    </body>
</html>
