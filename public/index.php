<?php

$validacoes = [];

if (isset($_POST['button'])) {
    if ($_POST['nome'] === '' || $_POST['senha'] === '' || $_POST['confirmacao'] === '') {
        $validacoes[] = 'Por Favor, Preencha o campo!';
    }

    if ($_POST['senha'] != $_POST['confirmacao']) {
        $validacoes[] = 'Por Favor, Preecha a senha corretamente!';
    }

    if ($_POST['senha'] === $_POST['confirmacao']) {
        $nome = $_POST['nome'];
        echo "Olá $nome,  Seja Bem-Vindo!";
    }
}


?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validação</title>
</head>

<body>
    <?php if (count($validacoes)) :  ?>
        <ul>
            <?php foreach ($validacoes as $validacao) : ?>
                <li><?= $validacao ?></li>
            <?php endforeach; ?>
        </ul>
    <?php endif; ?>


    </ul>

    <form action="index.php" method="POST">
        <div>
            <input type="text" name="nome" placeholder="Digite Seu Nome">
        </div>

        <div>
            <input type="password" name="senha" placeholder="Digite Sua senha">
        </div>

        <div>
            <input type="password" name="confirmacao" placeholder="Confirme sua Senha">
        </div>

        <div>
            <input type="submit" name="button" value="Enviar">
        </div>
    </form>
</body>

</html>