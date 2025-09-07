<?php
    include_once("../../controller/c_conexao.php");
    include_once("../../controller/c_perfil_alterarNome.php");
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nome</title>
    <link rel="shortcut icon" href="IMG/B2.png" type="image/x-icon">
    <link rel="stylesheet" href="css/alterarNome.css">
</head>
<body>


    <div class="nome-box">
        <div class="h2">Mudar nome</div>
        <img src="IMG/B2.png">
        <form action="../../controller/c_perfil_alterarNome.php" method="POST">
            <p><div class="user-box">
                <input type="text" name="nome" id="nome" required="" autocomplete="off">
                <label>Novo nome:</label>
            </div>

            <input type="hidden" name="id" value=<?php echo $_GET['id']; ?>>
            <button type="submit" name="update" class="but" value="Alterar">Alterar</button>
            <p>
                <a class="cdr" href="perfil.php">Voltar</a>
            </p>
        </form>
    </div>
</body>
</html>