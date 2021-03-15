<?php
header("Content-Type:text/html; charset=utf8");
require_once "classes/Aluno.php";
$alunos = new Aluno();
$listaAlunos = $alunos->listarTodos();
if(isset($_GET["matricula"])){
    $alunos->excluir($_GET["matricula"]);
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Sistema Escolar 2A2</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-10">
                <h1>Lista de Alunos</h1>
            </div>
            <div class="col-lg-2">
                <a href="cadAlunos.php" class="btn btn-outline-success">Novo</a>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <table class="table table-striped table-dark">
                    <thead>
                        <tr>
                            <th>Matrícula</th>
                            <th>Nome</th>
                            <th>Sexo</th>
                            <th>E-mail</th>
                            <th>Endereço</th>
                            <th>Telefone</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php if($listaAlunos) :

                        foreach ($listaAlunos as $aluno) : ?>
                        <tr>
                            <td><?php echo $aluno->MATRICULA;  ?></td>
                            <td><?php echo $aluno->NOME; ?></td>
                            <td><?php echo $aluno->SEXO; ?></td>
                            <td><?php echo $aluno->EMAIL; ?></td>
                            <td><?php echo $aluno->ENDERECO; ?></td>
                            <td><?php echo $aluno->TELEFONE; ?></td>
                            <td>
                                <a href="editar_alunos.php?matricula=<?php echo $aluno->MATRICULA; ?>" class="btn btn-outline-primary"><i class="fa fa-edit"></i></a>
                                <a href="index_alunos.php?matricula=<?php echo $aluno->MATRICULA; ?>" class="btn btn-outline-danger"><i class="fa fa-trash"></i></a>
                            </td>
                        </tr>
                    <?php endforeach;?>
                    <?php else : ?>
                            <tr>
                                <td colspan="7"> Nenhum Aluno Cadastrado</td>
                            </tr>
                    <?php endif; ?>
                    </tbody>
                </table>

            </div>

        </div>

    </div>

</body>

</html>
