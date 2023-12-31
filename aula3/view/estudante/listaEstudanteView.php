<?php $estudantes = $_REQUEST["estudantes"]; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Estudantes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <?php require_once $_SERVER['DOCUMENT_ROOT'] . '/' . FOLDER . '/view/navbar.php'; ?>
    <div class="container">
        <div class="row justify-content-center">
            <h2>Semana da acessibilidade</h2>
        </div>

        <div class="text-center">
            <img class="rounded" src="https://cta.ifrs.edu.br/wp-content/uploads/sites/3/2018/12/18_BoasPrativasDescricaoImagens.jpg" alt="Representação gráfica de como uitilizar a tag alt em uma imagem para pessoas com deficiência visual">
        </div>

        <br>
        <a href="/<?php echo FOLDER; ?>/?controller=Estudante&acao=salvar" class="btn btn-success">Cadastrar Estudante</a>
        <br>
        <br>
    
        <table class="table table-dark">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Idade</th>
                    <th scope="col">Ações</th>
                </tr>
            </thead>

            <tbody>
                <?php foreach($estudantes as $estudantesAtual) { ?>
                    <tr>
                        <td><?php echo $estudantesAtual["id"]; ?></td>
                        <td><?php echo $estudantesAtual["nome"]; ?></td>
                        <td><?php echo $estudantesAtual["idade"]; ?></td>
                        <td>
                            <a href="/<?php echo FOLDER; ?>?controller=Estudante&acao=editar&id=<?php echo $estudantesAtual['id']; ?>" class="btn btn-primary">editar</a>
                            <a href="/<?php echo FOLDER; ?>?controller=Estudante&acao=excluir&id=<?php echo $estudantesAtual['id']; ?>" class="btn btn-primary">excluir</a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</body>
</html>