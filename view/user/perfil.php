<?php
    include_once("../../controller/c_conexao.php");
    include_once("../../controller/c_sessao.php");

    $id_funcionario = $_SESSION['id'];
    $result = mysqli_query(conectar(), "SELECT * FROM funcionario WHERE id=$id_funcionario");
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil</title>
    <link rel="stylesheet" href="css/usuario.css">
    <link rel="shortcut icon" href="IMG/B2.png" type="image/x-icon">
    
</head>
<body>
<?php
  if (($_SESSION['administrador'] == false)) {
    include_once("navbar.php");
  }else{
    include_once("../admin/navbar-admin.php");
  }
?>
      <div class="header">
      
      <div class="logo"><img src="img/Bsoft2.png"></div>
    </div>
     
  <div class="tabela">
    <table>
      <th class="func">Dados</th>
      <th class="funcoes">Funções</th>
      <?php
          while($res = mysqli_fetch_array($result)){
          
              echo "<tr>";
              echo "<td class='texto'> Nome: " . $res['nome'] . "</td>";
              echo "<td class='acao'>" .
                      "<a class='link' href='alterarNome.php?id=$res[id]'>Alterar</button>" . "</td>" . "</tr>";
              echo "<tr>";
              echo "<td class='texto'>Senha: *********** </td>" .
                      "<td class='acao'>" .
                      "<a class='link' href='alterarSenha.php?id=$res[id]'>Alterar</button>";
              echo "</td></tr>";
              echo "<tr>";
              echo "<td colspan='2' class='texto'>Email: " . $res['email'] . "</td>";
              echo "</tr>";
          }
      ?>    
    </table>
  </div>
</body>
</html>