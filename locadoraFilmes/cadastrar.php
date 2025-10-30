<?php 

require 'conexao.php';

if($_SERVER['REQUEST_METHOD'] === 'POST')
{

    if(isset($_POST['criar-usuario']))
{
        $usuario = $_POST['nome-usuario'];
        $nascimento = $_POST['data-nascimento'];
        $endereco = $_POST['endereco'];
        $telefone = $_POST['telefone'];

        $comando = "insert into usuarios(nome_usuario, nascimento, endereco, telefone) value 
        (?,?,?,?)";

        $insert = $conexao->prepare($comando);

    $insert->bind_param("ssss", $usuario, $nascimento, $endereco, $telefone);

    $insert->execute();
       

}
    if(isset($_POST['criar-filme']))
    {
        $filme = $_POST['nome-filme'];
        $lancamento = $_POST['ano-lancamento'];
        $genero = $_POST['genero-filme'];

        $comando = "insert into filmes(nome_filme, genero_filme, ano_lancamento) value 
        (?,?,?)";

        $insert = $conexao->prepare($comando);

        $insert->bind_param("ssi", $filme, $genero, $lancamento);

        $insert->execute();
    }

}

?>