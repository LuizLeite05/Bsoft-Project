<?php
    include_once("../../controller/c_conexao.php");
    include_once("../../controller/c_sessao.php");
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Home
  </title>
  <link rel="stylesheet" href="css/pag-inicial.css">
  <script src="js/pag-inicial.js" defer></script>
  <link rel="shortcut icon" href="img/B2.png" type="image/x-icon">
</head>
<body>

<?php
  include_once("navbar.php");
?>


<div class="template" id="template-areas">


<div class="header">
   <div class="logo"> <img src="img/Bsoft2.png"></div>
</div>


<div class="main">




  <div class="cards" id="card-calend" onmouseenter="mostrarLegenda('legenda1')" onmouseleave="esconderLegenda('legenda1')">
    <div class="icon" id="calend">
      <a href="solicitar.php"> <img src="img/icon-calend-cinza.png" class="imagem-icon" id="icon1" /> </a>
    </div>
    <div class="legenda" id="legenda1" data-texto="Solicitar">
        Solicitar
    </div>
</div>

<div class="cards" id="card-user" onmouseenter="mostrarLegenda('legenda2')" onmouseleave="esconderLegenda('legenda2')">
    <div class="icon" id="user">
      <a href="perfil.php"><img src="img/icon-user-cinza.png" class="imagem-icon" id="icon2" /></a>
    </div>
    <div class="legenda" id="legenda2" data-texto="Perfil">
        Informações
    </div>
</div>

<div class="cards" id="card-info" onmouseenter="mostrarLegenda('legenda3')" onmouseleave="esconderLegenda('legenda3')">
    <div class="icon" id="info">
      <a href="info.php"><img src="img/icon-info-cinza.png" class="imagem-icon" id="icon3" /></a>
    </div>
    <div class="legenda" id="legenda3" data-texto="Informações">
        Informações
    </div>
</div>


  


 </div>





<div class="footer">
ADS 2023 &copy
</div>


</div>

 
</body>
</html>


