<?php 
	
	include_once 'home_header.php'; 
	include_once 'include/Tool.php'; 
?>

<!DOCTYPE HTML>
<html>
	<head>
		<title>OmicTools -> Ajouter un outil</title>
		<meta charset="utf-8"/>
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
		
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

		<link rel="stylesheet" href="css/main.css" />
	</head>
	<body>
		<div id="page-wrapper">
			<div class="container">
			<!-- Header -->
			<div id="header" class="col-12">
				<div class="row">
					<div class="col-8"><img src="images/logo-white-medium.png" alt="OMICtools logo"></div>
					<div class="col-4 sign-out-link">
						<a href="accueil.php"><i class="fas fa-home mr-3"></i></a>
						<a href="accueil.php?action=signout">Déconnexion <i class="fas fa-sign-out-alt"></i></a>
					</div>
				</div>
			</div>
			<div id="profil-layer">
				<div class="page-title"><i class="fas fa-plus-circle mr-2"></i> Ajouter un outil</div>
				<div class="profil-container">
					<form id="add-tool" action="profil.php" method="POST">
						<input type="hidden" name="source" value="addTool">
						<section>
							<section>
								<div class="form-row">
									<div class="form-group col-12">
										<input type="text" class="form-control" id="name" name="name" placeholder="NOM DE L'OUTIL">
									</div>
								</div>
								<div class="form-row">
									<div class="form-group col-12">
										<textarea placeholder="DESCRIPTION" class="form-control" id="description" name="description" rows="5" ></textarea>
									</div>
								</div>
								<div class="form-row">
									<div class="form-group col-12">
										<button type="submit" class="form-control btn btn-success">Ajouter</button>
									</div>
								</div>
							</section>
						</section>
					</form>
				</div>
			</div>
			
			<!-- Footer -->
			<div id="footer">
			
				
			</div>
			</div>
		</div>
	</body>
	<script>
		function checkEmptyFields(id, text){
			if( $(id).val() === '' ) {
				$(id).parent().prepend(text);
				return false;
			}else return true;
		}
		
		$(function() {
			$("#add-tool").on("submit", function(){
				$( ".validation" ).remove();
				if (	checkEmptyFields("#name", '<span class="validation">Le champ "nom de l\'outil" est obligatoire</span>') &
						checkEmptyFields("#description", '<span class="validation">Le champ "description" est obligatoire</span>')
				){ 
					$("#add-tool").submit();
				}else return false;
			})
		 });
	</script>
</html>