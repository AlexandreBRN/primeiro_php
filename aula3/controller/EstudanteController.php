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
        if($_SERVER['REQUEST_METHOD'] == 'GET'){
            Require_once $_SERVER['DOCUMENT_ROOT'] . '/aula3/view/EstudanteForm.php';
        }elseif($_SERVER['REQUEST_METHOD'] == 'POST'){
            $nome = $_POST['nome'];
            $idade = $_POST['idade'];
            $esdudanteModel = new EstudanteModel();
            $esdudanteModel->salvarModel($nome, $idade);

            header('Location: http://localhost:8081/aula3/?controller=Estudante&acao=listar');
            exit();
        }
    }

}
