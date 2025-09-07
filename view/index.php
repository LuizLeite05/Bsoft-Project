
<?php
    include_once("../controller/c_validacao.php");
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="website icon" type="jpeg"
    href="user/img/B2.png"/>
   <link rel="stylesheet" href="user/CSS/login.css">
   <script src="user/js/erroEmail.js" defer></script>
   <script src="user/js/mostrarSenha.js" defer></script>
</head>
<body>
    
    <div class="erroEmail">
        <span> Por favor, digite um e-mail válido.</span>
    </div>
    <div class="login-box">
        <div class="hdo">Login</div>
        <img src="user/img/B2.png">
        <form action="../controller/c_validacao.php" method="POST">
        <p>
            <div class="user-box">
                <input type="text" name="email" id="email" required="" autocomplete="off">
                <label>Email:</label> 
            </div>
        </p>
        <p>
            <div class="user-box">
                <input type="password" name="senha" required="">
                <label>Senha:</label>
                <div class="olho">
                    <img src="user/img/olhoApagado.png" id="olho" onclick="mostrarOcultarSenha()">
                </div>
            </div>
 
 


        </p>    
        <input class="but" type="submit" name="login" value="Enviar">
        <p>
            <a class="v1" href="user/cadastro.php">Cadastre-se</a>
        </p>
        </form>
    </div>
</body>
</html>