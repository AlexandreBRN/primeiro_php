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
<h1>Semana da Acessibilidade</h1>
<img src="https://img.olhardigital.com.br/wp-content/uploads/2023/01/por-que-ceu-azul.jpg" alt="Imagem da Semana da Acessibilidade">
    <table class="table">
    <thead>
            <tr>
                <th>Nome</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($estudantes as $estudanteAtual) { ?>
                <tr>
                    <td><?php echo $estudanteAtual["nome"]; ?></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</body>
</html>