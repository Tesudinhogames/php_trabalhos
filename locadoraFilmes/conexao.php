<?php 

$usuario = "root";
$servidor = "localhost";
$senha = "Minecraft1234@";

$conexao = mysqli_connect($servidor, $usuario, $senha) or die ("Falha ao conectar");

$conexao->query("CREATE DATABASE IF NOT EXISTS locadoradavi");

$conexao->select_db("locadoradavi");

  $query = "CREATE TABLE IF NOT EXISTS usuarios
    (
    id_usuario INT AUTO_INCREMENT PRIMARY KEY,
    nome_usuario varchar(100),
    nascimento VARCHAR(20),
    endereco VARCHAR(100),
    telefone VARCHAR(20)
    )";

    $conexao->query($query);

    $query = "CREATE TABLE IF NOT EXISTS filmes
    (
    id_filme INT AUTO_INCREMENT PRIMARY KEY,
    nome_filme VARCHAR(100),
    genero_filme VARCHAR(50),
    ano_lancamento INT
    )";

    $conexao->query($query);

    $query = "CREATE TABLE IF NOT EXISTS filmes_locados (
    id_usuario INT NOT NULL,
    id_filme INT NOT NULL,
    data_locacao DATETIME DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (id_usuario) REFERENCES usuarios(id_usuario),
    FOREIGN KEY (id_filme) REFERENCES filmes(id_filme)
    )";
    $conexao->query($query);


?>