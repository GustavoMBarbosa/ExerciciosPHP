<html lang="pt-BR">

<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <title>Registro</title>
</head>

<body>

    <form action="" method="post">
    <div class="container">
        <h2>Dados do Autor:</h2>
        <label for="email">Email:</label>
        <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
        <label for="nome">Nome:</label>
        <input type="text" name="nome" class="form-control" id="nome" placeholder="Nome"/><br><br>
        <h2>Dados da Receita:</h2>
        <label for="titulo">Título:</label>
        <input type="text" name="titulo" class="form-control" id="titulo" placeholder="Título da Receita"/>
        <label for="descricao">Descrição:</label>
        <input type="text" name="descricao" class="form-control" id="descricao" placeholder="Descição da Receita"/>
        <label for="receita">Receita:</label>
        <input type="text" name="receita" class="form-control" id="receita" placeholder="Receita"/>
        

        <button type="submit" class="btn btn-success">Salvar</button>
        <button type="submit" class="btn btn-danger">Apagar</button>

    </div>
    </form>

</body>

</html>