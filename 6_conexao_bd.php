<?php
$servidor = '127.0.0.1';
$usuario = 'root';
$senha = '';
$bancoDados = 'curso_php';

$conexao = mysqli_connect($servidor, $usuario, $senha, $bancoDados);

if (mysqli_connect_errno($conexao)) {
    echo "<p> Problemas para conectar no banco de dados.";
} else {
    echo "<p> Conexão realizada com sucesso!";
}
?>