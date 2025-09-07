<?php
    include_once("../../controller/c_conexao.php");
    include_once("../../controller/c_sessao.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="shortcut icon" href="img/B2.png" type="image/x-icon">


	<title>Solicitar</title>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.20.1/moment.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/locale/pt-br.js"></script>
	<script src="js/solicitar.js" defer></script>
	
	
	<link rel="stylesheet" href="css/libs/calendario_lib.css">
	<link rel="stylesheet" href="css/libs/calandario_bootstrap.css">
	<link rel="stylesheet" href="css/solicitar.CSS">

	


</head>

<body>

	<?php
      if (($_SESSION['administrador'] == false)) {
        include_once("navbarsoli.php");
      }else{
        include_once("..//admin/navbar-admin.php");
      }
    ?>


	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<h5 align="center">Solicitar Férias</h5>
				<div id="calendar"></div>
			</div>
		</div>
	</div>
	<!-- Start popup dialog box -->
	<div class="modal fade" id="event_entry_modal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
		<div class="modal-dialog modal-md" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="modalLabel">Nova solicitação</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">X</span>
					</button>
				</div>
				<div class="modal-body">
					<div class="img-container">
						<div class="row">
							<div class="col-sm-6">  
								<div class="form-group">
								  <label for="ferias_inicio">Primeiro dia das férias</label>
								  <input type="date" name="ferias_inicio" id="ferias_inicio" class="form-control onlydatepicker" placeholder="Event start date">
								 </div>
							</div>
							<div class="col-sm-6">  
								<div class="form-group">
								  <label for="ferias_final">Último dia das férias</label>
								  <input type="date" name="ferias_final" id="ferias_final" class="form-control" placeholder="Event end date">
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-primary" onclick="save_event()">Salvar</button>
				</div>
			</div>
	
			
		</div>
	</div>
	<!-- End popup dialog box -->
	

	<div class="footer" style="background-color:#242429; position:relative; top:40px;">
	<br>
	<center style="color:white">ADS 2023 &copy</center><br>
	</div>
	</body>




</html> 
 