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
    <title>Cadastro setor</title>
    <link rel="website icon" type="jpeg"
    href="img/B2.png"/>
   <link rel="stylesheet" href="css_admin/cadastrar_setor.css">
</head>
<body>
    
<div class="login-box">
        <div class="hdo">Cadastrar Setor</div>
        <img src="img/B2.png">
        <form action="../../controller/c_setor.php" method="POST">
        <p>
            <div class="user-box">
                <input type="text" name="nome" required="" autocomplete="off">
                <label>Novo setor:</label> 
            </div>
        </p>   
        <input class="but" type="submit" name="cadastrar" value="Enviar">
        <p>
            <a class="v1" href="listarSetor.php">Voltar</a>
        </p>
        </form>
    </div>
</body>
</html>