<?php
    include "servicos/servicoMensagemSessao.php";
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de inscrição</title>
</head>
<body>
    <p>FORMULÁRIO PARA INSCRIÇÃO DE COMPETIDORES</p>
    <form action="script.php" method="post">
        <?php
            $mensagemDeErro = obterMensagemErro();
            if(!empty($mensagemDeErro))
            {
                echo $mensagemDeErro;
            }
            $mensagemDeSucesso = obterMensagemSucesso();
            if(!empty($mensagemDeSucesso))
            {
                echo $mensagemDeSucesso;
            }
        ?>
        <p>Seu nome: <input type="text" name="nome" id="nome"></p>
        <p>Sua idade: <input type="number" name="idade" id="idade"></p>
        <p><input type="submit" value="Enviar dados do competidor"></p>
    </form>
</body>
</html>

