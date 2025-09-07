<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/navbar.css">
</head>
<body>
    <div class="navbar">
            <div class="conteiner_nav">
                <div class="dropDown">
                 <a href="#"><img src="img/menu-icon.png" id="menu-icon"></a>
                        <div class="dropDown-content">
                        <a href="pag-inicial">Home</a>
                        <a href="solicitar">Solicitar</a>
                        <a href="info.php">Informações</a>
                        </div>
                </div>

                <div class="dropDown">
                <a href="pag-inicial.php">  <img src="img/user-icon.png" id="user-icon">  </a>
                    <div class="dropDown-content">
                        <a href="perfil.php"><?php echo $_SESSION['nome']; ?></a>
                        <a href="../../controller/c_logout.php">Sair</a>

                       
                        </div>
                </div> 
                </div> 
    </div> 

</body>
</html>