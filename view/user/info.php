<?php
  include_once("../../controller/c_conexao.php");
  include_once("../../controller/c_sessao.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informações</title>
    <link rel="website icon" type="jpeg"
    href="img/B2.png"/>
   <link rel="stylesheet" href="css/info.css">
</head>
<body>
    <?php
      if (($_SESSION['administrador'] == false)) {
        include_once("navbar.php");
      }else{
        include_once("..//admin/navbar-admin.php");
      }
    ?>
    <div class="header">
      <div class="logo">
        <img src="img/Bsoft2.png" alt="">
      </div>
    </div>

    <div class="info-box">
        <div class="h2">Informações</div>
        <div class="h1">Segundo o Art. 134. As férias serão concedidas por ato do empregador, em um só período nos 12 (doze) meses 
            subsequentes à data em que o empregado tiver adquirido o direito. </div>
          <div class="h1"> O funcionário poderá apenas retirar suas férias após completar um ano de trabalho na empresa.</div>
        <div class="h1"> Segundo regras da empresa, poderão haver apenas 3 funcionários de cada setor em férias em um mesmo período.</div>
        <div class="h1">Cada funcionário da empresa pode retirar de 15 a 30 dias de férias.</div>

        </div>
</body>
</html>