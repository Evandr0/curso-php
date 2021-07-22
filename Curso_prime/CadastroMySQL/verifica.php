<?php

$servidor = '127.0.0.1';
$usuario = 'root';
$senhabd = '';
$bancoDados = 'curso_php';

$conexao = mysqli_connect($servidor, $usuario, $senhabd, $bancoDados) or die(mysqli_error());

//mysqli_select_db('cadastro', $conexao);

if (mysqli_connect_errno($conexao)) {
    echo "<p> Problemas para conectar no banco de dados.";
} else {
    echo "<p> Conexão com o banco OK!!";
}

//=====================================================

$login = $_POST["login"];
$senha = $_POST["senha"];

$selecao = "SELECT * FROM cadastro WHERE login = '$login' AND senha = '$senha' ";

//==
$result = mysqli_query($conexao, $selecao);
if (!$result) {
    echo "Could not run query: " . mysqli_error();
    exit;
}
$row = mysqli_fetch_row($result);



if ($row == ""){
    echo "<br><center> login e/ou senha inválidos.</center>";
    echo "<br></br>";
    echo "<br>Volter e tente novamente</br>";
    exit;

} else {
    echo "<br> Bem vindo <b>'$login'</b> </br>";
}

echo "<p> Testeeee";
?>