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
        ('$usuario', '$nascimento', '$endereco', '$telefone')";

        $conexao->query($comando);

}
    if(isset($_POST['criar-filme']))
    {
        $filme = $_POST['nome-filme'];
        $lancamento = $_POST['ano-lancamento'];
        $genero = $_POST['genero-filme'];

        $comando = "insert into filmes(nome_filme, genero_filme, ano_lancamento) value 
        ('$filme','$genero','$lancamento')";

        $conexao->query($comando);
    }

}

?>