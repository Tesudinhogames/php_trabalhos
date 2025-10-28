<?php 

$usuario = "root";
$servidor = "localhost";
$senha = "";
$banco = "locadoradavi";
$conexao = mysqli_connect($servidor, $usuario, $senha, $banco) or die ("O banco não foi criado");
?>