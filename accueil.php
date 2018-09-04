<?php include_once 'home_header.php'; ?>

<!DOCTYPE HTML>
<html>
	<head>
		<title>OmicTools -> Accueil</title>
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
				<div class="col-12 d-none d-sm-block">
					<div class="row">
						<div class="col-8"><img src="images/logo-white-medium.png" alt="OMICtools logo"></div>
						<div class="col-4 sign-out-link"><a href="accueil.php?action=signout">Déconnexion <i class="fas fa-sign-out-alt"></i></a></div>
					</div>
				</div>
			
				<div class="col-12 d-block d-sm-none">
					<div class="row">
						<div class="col-8"><img src="images/logo-white-medium.png" alt="OMICtools logo"></div>
						<div class="col-4 sign-out-link"><a href="accueil.php?action=signout"><i class="fas fa-sign-out-alt"></i></a></div>
					</div>
				</div>
			</div>
			<div id="home-layer">
				<div class="page-title">Bienvenue sur OmicTools <?php echo($_SESSION['fullName']);?></div>
				<div class="home-container">
					<section class="col-12">
						<div class="row">
							<i class="fas fa-user col-4 pt-2"></i> <a href="profil.php" class="form-control btn btn-secondary  col-8">Votre profil</a>
						</div>
					</section>
					
					<section class="col-12 mt-3">
						<div class="row align-middle">
							<i class="fas fa-list-ul col-4 pt-2"></i> <a href="list_outil.php" class="form-control btn btn-secondary col-8">List des outils</a>
						</div>
					</section>
				</div>
			</div>
			
			<!-- Footer -->
			<div id="footer">
			
				
			</div>
			</div>
		</div>
	</body>
</html>