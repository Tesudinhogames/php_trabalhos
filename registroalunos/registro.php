<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de alunos</title>
</head>

<body>    
<form action="registro.php" method="post">
<label for="nome_aluno">Digite o nome de um aluno:</label>
<input type="text" name="nome_aluno">
<button type="submit" name="enviar" value="enviar">procurar</button>
</form>

<table border="1 solid">
    <tr>
        <th>Aluno</th>
        <th>CPF</th>
        <th>Mãe</th>
        <th>Nascimento</th>
    </tr>
        <?php
        

if($_SERVER['REQUEST_METHOD'] === 'POST')
    {
        if(isset($_POST["enviar"]))
            {
            $nome = $_POST['nome_aluno'];
            }
        }
        
        include('conexao.php');

        if(isset($nome))
 $comando = "select * from alunos where nome like '$nome%'";
            else
        $comando = "select * from alunos";
        $alunos = mysqli_query($conexao, $comando);
        foreach($alunos as $aluno)
            {
        
                echo "<tr>";
                echo"<td>".$aluno['nome']."</td>";
                echo"<td>".$aluno['cpf']."</td>";
                echo"<td>".$aluno['mae']."</td>";
                echo"<td>".$aluno['nascimento']."</td>";
                echo "</tr>";
            }
        ?>
</table>

</body>
</html>