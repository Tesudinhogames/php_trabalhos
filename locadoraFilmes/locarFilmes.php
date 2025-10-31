<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  </head>
  <body>

 <?php include("navegacao.php");
 require "conexao.php";     ?>

<div class="container mt-5">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4><a href="locadora.php" class="btn btn-danger float-end">Voltar</a></h4>
                        </div>
                        <div class="card-body">
                            <form action="cadastrar.php" method="post">
                                <div class="mb3 container-md center">
                                    <label for="">Usuario</label>
                                    <select name="usuario-sel" id="" class="form-control">
                                        
                                    </select>
                                
                                    <label for="">Ano de lançamento</label>
                                    <select name="" id="" class="form-control"></select>
                                </div>
                                <br>
                                 <div class="mb3">
                                    <button type="submit" name="locar-filme" class="btn btn-primary">Locar</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
  </body>
</html>