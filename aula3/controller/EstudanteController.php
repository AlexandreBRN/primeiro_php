<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/' . FOLDER . '/model/EstudanteModel.php';

class EstudanteController{
    const CONTROLLER_FOLDER = '/estudante';
    public function listar(){
        $esdudanteModel = new EstudanteModel();
        $listaEstudantes = $esdudanteModel->listarModel();
        $_REQUEST['estudantes'] = $listaEstudantes;

        require_once $_SERVER['DOCUMENT_ROOT'] . '/' . FOLDER . '/view' . self::CONTROLLER_FOLDER . '/listaEstudanteView.php';
    }

    public function salvar() {
        if($_SERVER['REQUEST_METHOD'] == 'GET'){
            Require_once $_SERVER['DOCUMENT_ROOT'] . '/' . FOLDER . '/view' . self::CONTROLLER_FOLDER . '/EstudanteForm.php';
        }elseif($_SERVER['REQUEST_METHOD'] == 'POST'){
            $nome = $_POST['nome'];
            $idade = $_POST['idade'];
            $esdudanteModel = new EstudanteModel();
            $esdudanteModel->salvarModel($nome, $idade);

            header('Location: http://localhost:8081/' . FOLDER . '/?controller=Estudante&acao=listar');
            exit();
        }
    }

}