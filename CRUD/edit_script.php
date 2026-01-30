<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Alteração de cadastro</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container">
        <div class="row">
            <?php
            include "conexao.php";
            $id = $_POST['id'];
            $nome = $_POST['nome'];
            $endereco = $_POST['endereco'];
            $telefone = $_POST['telefone'];
            $email = $_POST['email'];
            $data_nascimento = $_POST['data_nascimento'];

            $sql = "UPDATE `pessoas` 
                    SET `nome` = '$nome',
                        `endereco` = '$endereco',
                        `telefone` = '$telefone',
                        `email` = '$email',
                        `data_nascimento` = '$data_nascimento'
                    WHERE cod_pessoa = $id";

            if (mysqli_query($conn, $sql)) {
                mensagem("$nome alterado com sucesso!", "success");
            } else {
                mensagem("$nome NÃO alterado!", "danger");
            }
            ?>
            <div class="text-center mt-3">
                <a href="index.php" class="btn btn-primary px-4">
                    Voltar
                </a>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
        crossorigin="anonymous"></script>
</body>

</html>