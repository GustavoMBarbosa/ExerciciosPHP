<?php
header("content-type:text/html; charset=utf8");

require_once "classes/Alunos.php";
$alunos = new Alunos();

if(isset($_GET["matricula"])){
    $dadosAluno = $alunos->listarID($_GET["matricula"]);
}
if(isset($_POST["Salvar"])){
    $alunos->alterar();
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
    <div class="container lista">
        <form action="alterar_aluno.php?matricula=<?php echo $dadosAluno->MATRICULA; ?>" method="post">
            <div class="row">
                <div class="form-group col-lg-9">
                    <label for="nome">Nome</label>
                    <input type ="text" name="nome" class="form-control" value="<?php echo $dadosAluno->NOME; ?>">
                </div>
                <div class="form-group col-lg-3">
                    <label for="sexo">Sexo</label>
                    <select name="sexo" class="form-control">
                        <option value="M" <?php if($dadosAluno->SEXO == "M"){echo "selected";} ?>>Masculino</option>
                        <option value="F" <?php if($dadosAluno->SEXO == "F"){echo "selected";} ?>>Feminino</option>
                        <option value="o" <?php if($dadosAluno->SEXO == "O"){echo "selected";} ?>>Outros</option>
                        <option value="NA" <?php if($dadosAluno->SEXO == "NA"){echo "selected";} ?>>Não Declarar</option>
                    </select>
                </div>
                <div class="form-group col-lg-4">
                    <label for="email">Email</label>
                    <input type="email" name="email" class="form-control" value="<?php echo $dadosAluno->EMAIL; ?>">
                </div>
                <div class="form-group col-lg-4">
                    <label for="endereco">Endereço</label>
                    <input type="text" name="endereco" class="form-control" value="<?php echo $dadosAluno->ENDERECO; ?>">
                </div>
                <div class="form-group col-lg-2">
                    <label for="telefone">Telefone</label>
                    <input type="text" name="telefone" class="form-control" value="<?php echo $dadosAluno->TELEFONE; ?>">
                </div>
                <div class="form-group col-lg-2">
                    <label for="telefone">Telefone</label>
                    <input type="password" name="senha" class="form-control" value="<?php echo $dadosAluno->SENHA; ?>">
                </div>
            </div>
            <div align="center">
                <button class="btn btn-outline-success" type="submit" name="Salvar">Salvar</button>
                <a class="btn btn-outline-danger" href="index_alunos.php">Cancelar</a>
            </div>
        </form>
    </div>
</body>
</html>
