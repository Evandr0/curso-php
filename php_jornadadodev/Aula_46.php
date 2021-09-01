<!DOCTYPE htlm>

<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title> Curso PHP</title>

    </head>
    <body>
    <?php
        /*Aula 46 - Instrução Switch II
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

        if(isset($_POST["cbxMES"])){
            $mes = $_POST["cbxMES"];
            switch($mes){
                case 1:
                    echo "JANEIRO";
                    break;
                case 2:
                    echo "FEVEREIRO";
                    break;
                case 3:
                    echo "MARÇO";
                    break;
                case 4:
                    echo "ABRIL";
                    break;
                case 5:
                    echo "MAIO";
                    break;
                case 6:
                    echo "JUNHO";
                    break;
                case 7:
                    echo "JULHO";
                    break;
                case 8:
                    echo "AGOSTO";
                    break;
                case 9:
                    echo "SETEMBRO";
                    break;
                case 10:
                    echo "OUTUBRO";
                    break;
                case 11:
                    echo "NOVEMBRO";
                    break;
                case 12:
                    echo "DEZEMBRO";
                    break;


                
            }
        }

        

        
       


    ?>
       <form method="POST">
            <select name="cbxMES" >
                <option value="1">Janeiro</option>
                <option value="2">Fevereiro</option>
                <option value="3">Março</option>
                <option value="4">Abril</option>
                <option value="5">Maio</option>
                <option value="6">Junho</option>
                <option value="7">Julho</option>
                <option value="8">Agosto</option>
                <option value="9">Setembro</option>
                <option value="10">Outubro</option>
                <option value="11">Novembro</option>
                <option value="12">Dezembro</option>
            </select>
            <input type="submit"/>
        
        </form>

    </body>
</html>
