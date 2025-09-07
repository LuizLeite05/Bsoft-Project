<?php
    include_once("../../controller/c_conexao.php");
    include_once("../../controller/c_sessao.php");

    $result = mysqli_query(conectar(), "SELECT * FROM setor ORDER BY nome ASC");
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar Setor</title>
    <link rel="stylesheet" href="css_admin/listar_setor.css">
</head>
<body>
<?php
  include_once("navbar-admin.php");
?>
<div class="header">
    <div class="logo"><img src="img/Bsoft2.png"></div>
</div>
    <div class="template">
        <table>
            <tr class="cdsset">
                <td colspan="2" class=""><a href="cadastrarSetor.php">+ Adicionar Setor</a></td>
            </tr>
            <tr>
                <th>Setor</th>
                <th>Ações</th>
            </tr>
            <?php 
                while($res = mysqli_fetch_array($result)){
                    echo "<tr id='Linhatabela'><td id='Setor'>" . $res["nome"] . "</td>";
                    echo "<td>";
                    echo "<div class='button'>";
                    echo "<a href=\"alterarSetor.php?id=$res[id]\">Alterar</a>"
                        . "<a class='exc' href=\"../../controller/c_setor.php?id_exclusao=$res[id]\" class='reset' onClick=\"return confirm('Tem certeza que deseja excluir este setor?')\">Excluir</a>";
                    echo "</div></td></tr>";
            }?>
        </table>    
    </div>
</body>
</html>