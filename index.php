<!DOCTYPE HTML>
<html>
	<head>
		<title>titre</title>
		<meta charset="utf-8"/>
		<meta name="viewport" content="width=device-width, initial-scale=1" />

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
			<!--div id="header">
				
			</div-->
			
			<div id="auth-layer">
				<div id="logo"><img src="images/logo-white-medium.png" alt="OMICtools logo"></div>
				<div class="auth-container">
					<form id="sign-in" action="accueil.php" method="POST">
						<input type="hidden" name="source" value="auth">
						<section>
							<?php if(isset($_GET['email'])) echo '<span class="validation">Identifiant incorrect</span>';?>
							<header class="header-member">Déjà membre?</header>
							<section>
								<div class="form-row">
									<div class="form-group col-12">
										<input type="email" class="form-control" id="email" name="email" placeholder="EMAIL" value="<?php if(isset($_GET['email'])) echo $_GET['email'];?>">
									</div>
								</div>
								<div class="form-row">
									<div class="form-group col-12">
										<input type="password" class="form-control" id="password" name="password" placeholder="MOT DE PASSE">
									</div>
								</div>
								<div class="form-row">
									<div class="form-group col-12">
										<button type="submit" class="form-control btn btn-success">Connexion</button>
									</div>
								</div>
							</section>
						</section>
						<section>
							<header class="header-not-member">Pas encore membre?</header>
							<section>
								<div class="form-row">
									<div class="form-group col-12">
										<a href="inscription.php" class="form-control btn btn-primary">Inscritpion</a>
									</div>
								</div>
							</section>
						</section>
					</form>
				</div>
			</div>
			
			<!-- Footer -->
			<!--div id="footer">
			
				
			</div-->
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
		
		function IsEmail(email) {
			var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
			return regex.test(email);
		}
		
		function checkEmail(){
			if( $("#email").val() !== '' & !IsEmail($("#email").val()) ) {
				$("#email").parent().prepend('<span class="validation">Email invalide</span>');
				return false;
			}else return true;
		}
		
		$(function() {
			$("#sign-in").on("submit", function(){
				$( ".validation" ).remove();
				if (	checkEmptyFields("#email", '<span class="validation">Le champ "email" est obligatoire</span>') &
						checkEmptyFields("#password", '<span class="validation">Le champ "mot de passe" est obligatoire</span>') &
						checkEmail() 
				){ 
					$("#sign-up").submit();
				}else return false;
			})
		 });
	</script>
</html>