<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/aula3/model/EstudanteModel.php';

class EstudanteController{

    public function listar(){
        $esdudanteModel = new EstudanteModel();
        $listaEstudantes = $esdudanteModel->listarModel();
        $_REQUEST['estudantes'] = $listaEstudantes;

        require_once $_SERVER['DOCUMENT_ROOT'] . '/aula3/view/listaEstudanteView.php';
    }

    public function salvar() {
        $nome = $_GET['nome'];
        $idade = $_GET['idade'];
        $esdudanteModel = new EstudanteModel();
        $esdudanteModel->salvarModel($nome, $idade);

    }

}