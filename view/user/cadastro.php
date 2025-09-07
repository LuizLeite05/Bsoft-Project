<?php
    include_once("../../controller/c_conexao.php");
    
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="website icon" type="jpeg" href="img/B2.png">
   <link rel="stylesheet" href="css/cadastro.css">
   <script src="js/mensagemErro.js" defer></script>
   <script src="js/mostrarSenha.js" defer></script>
</head>
<body>
    
    <div class="erroEmail">
        <span> Por favor, digite um e-mail válido.</span>
    </div>
    <div class="erroSenha">
        <span>A senha deve ter, no mínimo, 5 caracteres, contendo pelo menos uma letra, um número e um caractere especial</span>
    </div>
    <div class="cadastro-box">
        <div class="h2">Cadastro</div>
        <img src="img/B2.png">
        <form action="../../controller/c_funcionario.php" method="POST">
        <p>
            <div class="user-box">
                <input type="text" name="nome" id="nome" required="" autocomplete="off">
                <label>Funcionário:</label>
            </div>
        </p>
        <p>
            <div class="user-box">
                <input type="text" name="email" id="email" required="" autocomplete="off">
                <label>Email:</label>
            </div>
        </p>
        <p>
            <div class="user-box">
                <input type="password" name="senhacadastro" id="senha" required="">
                <label>Senha:</label>
                <div class="olho">
    <img src="img/olhoApagado.png" id="olhocadastro" onclick="mostrarOcultarSenhaCadastro()">
</div>
            
            </div>
        </p>
        <p>
            <div class="user-box1">
                <label class="dt">Data de admissão:</label>
                <input type="date" id="iddata" name="data"/>
         

            <p>
            <label class="lab1" for="idsetor">Setor:</label>      
            <select name="setor" id="idsetor" class="opti">
            <?php
                $consulta = mysqli_query(conectar(), "SELECT * FROM setor order by nome ASC");
                while ($dados = mysqli_fetch_array($consulta)) {
                echo("<option value='" . $dados['id'] . "'>" . $dados['nome'] . "</option>");
                }
            ?>    
        </select>
        </p>
        <div class="user-box">
</div>

        </p>    
         <p>
            <input class="reset" type="reset" id="idlimpar" value="Limpar">
            <a href="../index.php" class="vl">Voltar</a>
        </p>

        <input class="btn" type="submit" name="submit" value="Cadastrar"></input>
        </form>
    </div>
</body>
</html>
