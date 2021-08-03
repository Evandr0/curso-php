<!DOCTYPE htlm>

<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Tela de login e senha - Curso PHP</title>

    </head>
    <body>
    <?php
        /*Aula 27 - Tela de Login e Senha
        

        */
        $login = "Evandro";
        $senha = "123";

        if(isset($_POST["login"])){

            if($_POST["login"] == $login and $_POST["senha"] == $senha) {
                echo "Login efetuado com sucesso";
            } else {
                echo "Login ou senha inválidos";
            }
        }


        //if(isset($_POST["login"])){
         //   echo $_POST["login"] . "<br>";
        //    echo $_POST["senha"];
        //}


    ?>
        <form method="post">
            <input type="text" name="login" /><br>
            <input type="password" name="senha" /><br>
            <input type="submit"/>
        
        </form>

    </body>
</html>
<?php



?>