<?php
    include_once("../../controller/c_sessao.php");
    include_once("../../controller/c_conexao.php");
    include_once("../../controller/c_setorAlteracao.php");
?>

<!DOCTYPE html>
<head>
    <html lang="pt-br">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alterar Setor</title>
    <link rel="stylesheet" href="css_admin/alterar_setor.css">
    <link rel="shortcut icon" href="img/B2.png" type="image/x-icon">
</head>
<body>
    <div class="login-box">
        <div class="h2">Alterar Setor:</div>
        <img src="img/B2.png">
        <form action="../../controller/c_setorAlteracao.php" method="POST">
        <p>
            <div class="user-box">
                <input type="text" name="nome_setor" required="" autocomplete="off">
                <label>Setor:</label>
            </div>
        </p>
        
         <p>
            <div class="vol">
                <a class="vl" href="listarSetor.php">Voltar</a>
            </div>

            <div class="but">
                <input type="hidden" name="id" value=<?php echo $_GET['id']; ?>>
                <button type="submit" class="btn" name="update" value="Alterar">Alterar</button>
            </div>
        </p>
        </form>
    </div>
</body>
</html>