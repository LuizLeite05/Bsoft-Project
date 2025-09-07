<?php
    include_once("../../controller/c_conexao.php");
    include_once("../../controller/c_funcionarioAlteracao.php");
?>

<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <html lang="pt-br">
    <title>Alterar Funcionário</title>
    <link rel="stylesheet" href="css_admin/alterar_func.css">
    <link rel="shortcut icon" href="img/B2.png" type="image/x-icon">
</head>
<body>
<div class="login-box">
        <div class="h2">Alterar Funcionário:</div>
        <img src="img/B2.png">
        <form action="../../controller/c_funcionarioAlteracao.php" method="POST">
        <p>
            <div class="user-box">
                <input type="text" name="nome_funcionario" required="" autocomplete="off">
                <label>Nome do Funcionário:</label>
            </div>
        </p>
        <p>
            <div class="user-box1">
                <div class="dt"><label>Data de admissão:</label></div>
                <input type="date" id="iddata" name="data"/>

          <p class="set">
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
            </div>
        </p>

        <p>
            <div class="hiper"><a class="vl" href="listarFuncionario.php">Voltar</a></div>
            <input class="reset" type="reset" id="idlimpar" value="Limpar">
        </p>
            <div class="form-actions">
                <input type="hidden" name="id" value=<?php echo $_GET['id']; /*coleta qual funcionario deve ser alterado pelo seu id, aparecendo na URL*/ ?>>

            
                <button type="submit" class="btn" name="update" value="Alterar">Alterar</button>
            </div>

        </form>
    </div>
</body>
</html>