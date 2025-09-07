<?php
    include_once("../../controller/c_conexao.php");
    include_once("../../controller/c_sessao.php");

    $result = mysqli_query(conectar(), "SELECT * FROM `view_funcionario_setor` ORDER BY nome_setor ASC");
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/B2.png" type="image/x-icon">
    <link rel="stylesheet" href="css_admin/lista_func.css">
    <title>Listar Funcionários</title>
</head>
<body>
<?php
  include_once("navbar-admin.php");
?>
    <div class="header">
     <div class="logo"><img src="img/Bsoft2.png"></div>
    </div>
    <div>
        <table class="TabelaCabecalho">
        <tr>
    <th>Nome</th>
    <th class="setor">Setor</th>
    <th id="Acoes">Ações</th>
    </tr>
        </table>
    </div>

    <div class="template">
        <table>
            <?php 
                while($res = mysqli_fetch_array($result)){
                    echo "<tr><td>" . $res["nome_funcionario"] . "</td>";
                    echo "<td class='setor'>"  . $res["nome_setor"] . "</td>";
                    echo "<td>";
                    echo "<div class='button'>";
                    echo "<a href=\"alterarFuncionario.php?id=$res[id_funcionario]\">Alterar</a>"
                        . "<a id='exc' href=\"../../controller/c_funcionario.php?id_exclusao=$res[id_funcionario]\" class='reset' onClick=\"return confirm('Tem certeza que deseja excluir este funcionário?')\">Excluir</a>";
                    echo "</div></td></tr>";
            }?>
        </table>    
    </div>
</body>
</html>