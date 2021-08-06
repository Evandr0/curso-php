<!DOCTYPE htlm>

<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Tela de login e senha - Curso PHP</title>

    </head>
    <body>
    <?php
        /*Aula 33 - do-while - caso de uso




        */
        
        if(isset($_POST["dependentes"])){
            $dependentes = $_POST["dependentes"];
            
            if(! is_numeric($dependentes)){
                $dependentes =1;
                echo "nao numerico";
            }

            $conta = 0;

            echo "<table border='1'>
            <tr>
                <th>Nome</th>
                <th>Nasc</th>
            </tr>";

            do{
                $conta = $conta + 1;
                echo "
                <tr>
                    <td>Dependentes</td>
                    <td><input type='text' name='nome'></td>
                    <td><input type='text' name='nasc'></td>
                </tr>";

            } while($conta<$dependentes);

        }
        






    ?>
        
           

        </table>
        <form method="post">
            <input type="text" name="dependentes">
            <input type="submit">
        </form>

    </body>
</html>
<?php



?>