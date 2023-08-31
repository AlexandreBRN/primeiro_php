<?php

$classe = $_GET['class'];
$metodo = $_GET['acao'];

$classe .= 'Controller';

require_once $_SERVER['DOCUMENT_ROOT'] . '/aula3/controller/' .$classe. '.php';

$_estudanteController = new $classe();
$_estudanteController->$metodo();