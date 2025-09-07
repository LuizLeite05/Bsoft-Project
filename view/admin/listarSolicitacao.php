<?php
    include_once("../../controller/c_conexao.php");
    include_once("../../controller/c_sessao.php");

    $result = mysqli_query(conectar(), "SELECT * FROM `view_solicitacoes_pendentes` ORDER BY nome_funcionario ASC");
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/B2.png" type="image/x-icon">
    <link rel="stylesheet" href="css_admin/lista_soli.css">
    <title>Solicitações Pendentes</title>
</head>
<body>
<?php
  include_once("navbar-admin.php");
?>
    <div class="header">
     <div class="logo"><img src="img/Bsoft2.png"></div>
    </div>
    <table class="TableSolicitar">
    <tr>
     <th id="FuncSolicitar">Funcionário</th>
     <th id="SetorSolicitar">Setor</th>
     <th id="InicioSolicitar">Início das férias</th>
     <th id="FinalSolicitar">Final das férias</th>
     <th id="AcoesSolicitar">Ações</th>
 </tr>
</table>
    <div class="template">
    <table>
        <?php 
            while($res = mysqli_fetch_array($result)){
                echo "<tr>";
                echo "<td id='NomeTabela'>" . $res["nome_funcionario"] . "</td>";
                echo "<td id='SetorTabela'>"  . $res["nome_setor"] . "</td>";
                echo "<td id='FeriasInicioTabela'>"  . $res["ferias_inicio"] . "</td>";
                echo "<td id='FeriasFinalTabela'>"  . $res["ferias_final"] . "</td>";
                echo "<td id='AprovarTabela'>";
                echo "<div class='button'>";
                echo "<a href=\"../../controller/c_solicitacao_aprovar.php?id_aprovar=$res[event_id]\" class='reset' onClick=\"return confirm('Tem certeza que deseja aprovar essa solicitação?')\">Aprovar</a>";
                echo "</div>";
                echo "</td>";
                echo "<td id='RejeitarTabela'>";
                echo "<div class='button'>";
                echo "<a class='exc' href=\"../../controller/c_solicitacao_rejeitar.php?id_rejeitar=$res[event_id]\" class='reset' onClick=\"return confirm('Tem certeza que deseja rejeitar essa solicitação?')\">Rejeitar</a>";
                echo "</div>";
                echo "</td>";
                echo "</tr>";
        }?>
    </table>    
</div>




</body>
</html>