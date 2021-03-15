<?php

require_once "Conexao.php";
$aluno = new Aluno();

$listaAlunos = $aluno->listarTodos();

var_dump($listaAlunos);


?>
