<?php
include_once("../../controller/c_conexao.php");
include_once("../../controller/c_sessao.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css_admin/navbar-admin.css">
    <link rel="stylesheet" href="../user/css/navbar.css">
</head>
<body>
    <div class="navbar">
            <div class="conteiner_nav">
                <div class="dropDown">
                 <a href="#"><img src="img/menu-icon.png" id="menu-icon"></a>
                        <div class="dropDown-content">
                        <a href="../admin/pag-inicial-admin.php">Home</a>
                        <a href="../admin/listarSolicitacao.php">Solicitações</a>
                        <a href="../admin/listarSetor.php">Setores</a>
                        <a href="../admin/listarFuncionario.php">Funcionários</a>
                        </div>
                </div>

                <div class="dropDown">
                <a href="../user/perfil.php"><img src="img/user-icon.png" id="user-icon"></a>
                    <div class="dropDown-content">
                        <a href="../user/perfil.php"><?php echo $_SESSION['nome']; ?></a></a>
                        <a href="../../controller/c_logout.php">Sair</a>

                        
                        </div>
                </div> 
                </div> 
    </div> 

</body>
</html>