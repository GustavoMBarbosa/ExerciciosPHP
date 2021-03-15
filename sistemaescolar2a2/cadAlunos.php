<?php
header("Content-type:text/html; charset=utf8");

require_once "classes/Alunos.php";
$alunos = new Aluno();

if(isset($_POST["Salvar"])){
    $alunos->inserir();
}

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Sistema Escolar 2A2</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
<div class="main">
    <div class = "container lista">
        <h1 class="text-center">Cadastro de Alunos</h1>
        <form action="cadAlunos.php" method="post">
            <div class="row">
            <div class="form-group col-lg-5">
                <label for="nome">Nome</label>
                <input type="text" id="nome" name="nome" class="form-control" required>
            </div>
            <div class="form-group col-lg-3">
                <label for="sexo">Sexo</label>
                <select type="sexo" id="sexo" name="sexo" class="form-control" required>
                    <option value="">Escolha uma opção</option>
                    <option value="M">Masculino</option>
                    <option value="F">Feminino</option>
                    <option value="O">Outros</option>
                    <option value="NA">Não Declarar</option>
                </select>
            </div>
            <div class="form-group col-lg-4">
                <label for="email">E-mail</label>
                <input type="email" id="email" name="email" class="form-control" placeholder="EX: gustavo@gmail.com" required>
            </div>
            <div class="form-group col-lg-6">
                <label for="endereco">Endereço</label>
                <input type="text" id="endereco" name="endereco" class="form-control" placeholder="Avenida ou Rua" required>
            </div>
            <div class="form-group col-lg-3">
                <label for="telefone">Telefone</label>
                <input type="tel" id=telefone" name="telefone" class="form-control" placeholder="(00)00000-0000" required>
            </div>
            <div class="form-group col-lg-3">
                <label for="senha">Senha</label>
                <input type="password" id="senha" name="senha" class="form-control" required
            </div>
            <div class="text-center col-lg-3">
                <button type="submit" name="Salvar" class="btn btn-outline-success">Salvar</button>
                <a href="index.html" class="btn btn-outline-info">Voltar</a>
            </div>
            </div>
        </form>

</div>

</body>
</html>
