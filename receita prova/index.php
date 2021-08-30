<?php

require_once "ReceitaController.php";
require_once "config.php";
require_once "receita.php";


$app = new ReceitaController();
$app->create();

?>