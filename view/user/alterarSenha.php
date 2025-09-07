<?php
    include_once("../../controller/c_conexao.php");
    include_once("../../controller/c_sessao.php");
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Senha</title>
    <link rel="shortcut icon" href="img/B2.png" type="image/x-icon">
    <link rel="stylesheet" href="css/alterarSenha.css">
    <script src="js/mostrarSenha.js" defer></script>
    <script src="js/mensagemErroSenha.js" defer></script>
</head>
<body>
<div class="erroSenha"><span>A senha deve ter, no mínimo, 5 caracteres, contendo pelo menos uma letra, um número e um caractere especial</sp
        an>
    </div>
    <div class="senha-box">
        <div class="h2">Mudar senha</div>
        <img src="img/B2.png">
        <form action="../../controller/c_perfil_alterarSenha.php" method="POST">
            <p><div class="user-box">
                    <input type="password" name="senhaAtual" required="">
                    <label>Senha atual:</label>
                    <div class="olho">
    <img src="img/olhoApagado.png" id="olhoAtual" onclick="mostrarOcultarSenhaAntiga()">
</div>

                </div>
            </p>
            <p><div class="user-box">
                    <input type="password" name="senhaNova" required="" id="senha">
                    <label>Nova senha:</label>
                    <div class="olho">
    <img src="img/olhoApagado.png" id="olhonovo" onclick="mostrarOcultarSenhaNova()">
</div>
                </div>
            </p>
            <p><div class="user-box">
                    <input type="password" name="senhaConfirmacao" id="senhaconfirma" required="">
                    <label>Confirme a nova senha:</label>
                    <div class="olho">
    <img src="img/olhoApagado.png" id="olhoconfirma" onclick="mostrarOcultarSenhaConfirma()">
</div>
                </div>
            </p>

            <input class="but" type="submit" name="update" value="Enviar">
            <p>
                <a class="cdr" href="perfil.php">Voltar</a>
            </p>
        </form>
    </div>
</body>
</html>