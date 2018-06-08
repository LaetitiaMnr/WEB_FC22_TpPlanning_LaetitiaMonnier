<!DOCTYPE html>
<html>
	<head>
		<title> Planning </title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="shortcut icon" href="../images/icon3.png">
		<link rel="stylesheet" href="../css/bootstrap.min.css">
		<link rel="stylesheet" href="../css/styleIndex.css">
		<link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet"> 
		<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet"> 
	</head>
	<body>
		<?php
			require_once 'connect.php';

			$dsn = "mysql:dbname=".BASE.";host=".SERVER;
			try{
				$connexion=new PDO($dsn,USER,PASSWD);
			 }
			 catch(PDOexception $e){
			 	printf("Echec de la connexion : %s\n", $e->getMessage());
			 	exit();
			 }
		?>
		<header>
			<img class="img-fluid" src="../images/accueil.jpg">
		</header>

		<nav class="navbar navbar-expand-lg bg-light navbar-light sticky-top">
			<a class="navbar-brand">Ludus Académie</a>
			
			<button id="btnMenu" class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navBarCollapse" >
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse" id="navBarCollapse">
				<ul class="navbar-nav">
					<li class="nav-item active">
						<a class="nav-link" href="#">Accueil</a>
					</li>

					<li class="nav-item">
						<a class="nav-link" href="#planning">Planning</a>
					</li>


					<li class="nav-item">
						<a class="nav-link" href="#cours">Cours</a>
					</li>

					<li class="nav-item">
						<a class="nav-link" href="#etudiant">Etudiant</a>
					</li>

					<li class="nav-item">
						<a class="nav-link" href="#enseignant">Professeur</a>
					</li>

				</ul>
			</div>
		</nav> 

		<section class="container" id="planning">
			<div class="jumbotron">
				<h1 class="positionH">Planning</h1>  
				<svg>
					<line x1="0" y1="0" x2="100%" y2="0"/>
				</svg> 

				<p>Choisissez un jour de la semaine pour afficher le planning :</p>

				<div class="row d-flex flex-sm-wrap">
					<form method="POST" action="#planning" id="formPlan" class="col col-sm col-lg-2">
						<input type="submit" name="btnJour" id="btn1" class="btn btn-outline-primary btnParam" value="Lun">

						<input type="submit" name="btnJour" id="btn2" class="btn btn-outline-secondary btnParam" value="Mar">

						<input type="submit" name="btnJour" id="btn3" class="btn btn-outline-success btnParam" value="Mer">

						<input type="submit" name="btnJour" id="btn4" class="btn btn-outline-danger btnParam" value="Jeu">

						<input type="submit" name="btnJour" id="btn5" class="btn btn-outline-warning btnParam" value="Ven">
					</form>

					<div class="col-md">
						<?php require_once 'planning.php';?>
					</div>
				</div>
			</div> 

			<div class="modal fade" id="myModal">
			  <div class="modal-dialog">
			    <div class="modal-content">

			      <!-- Modal Header -->
			      <div class="modal-header">
			        <h4 class="modal-title">Suppression</h4>
			        <button type="button" class="close" data-dismiss="modal">&times;</button>
			      </div>

			      <!-- Modal body -->
			      <div class="modal-body">
			        Supprimer ce cours ?
			      </div>

			      <!-- Modal footer -->
			      	<div class="modal-footer">
			        	<button type="button" class="btn btn-success" id="deleteRow" data-dismiss="modal" value="validerSuppr" >Valider</button>
			      	</div>
			    </div>
			  </div>
			</div>    
		</section>

		<section class="container" id="cours">
			<div class="jumbotron">
				<h1 class="positionH">Cours</h1>   
				<svg>
					<line x1="0" y1="0" x2="100%" y2="0"/>
				</svg> 
				<p>Créer un cours</p>
				<form method="POST" action="#cours">
					<!-- <div class="form-group">
						<label for="usr">Id cours :</label>
						<input type="text" class="form-control" id="usr" name="idCours"  maxlength="4" required>
					</div> -->

					<div class="form-group">
						<label for="usr2">Nom cours :</label>
						<input type="text" class="form-control" id="usr2" name="idNom" maxlength="20" required>
					</div>

					<div class="form-group">
						<label for="select5">Matière :</label>
						<?php require_once 'selectMatiere.php';?>
					</div>

					<div class="form-group">
						<label for="select5">Type :</label>
						<?php require_once 'selectType.php';?>
					</div>

					<div class="form-group">
						<label for="select6">Enseignant :</label>
						<?php require_once 'selectProf.php';?>
					</div>

					<div class="form-group">
						<label for="select1">Classe :</label>
						<?php require_once 'selectClasse.php';?>
					</div>

					<div class="form-group">
						<label for="select2">Salle :</label>
						<?php require_once 'selectSalle.php';?>
					</div>

					<div class="form-group">
						<label for="select3">Jour :</label>
						<?php require_once 'selectJour.php';?>
					</div>

					<div class="form-group">
						<label for="select4">Horaire :</label>
						<?php require_once 'selectHoraire.php';?>
					</div>

					<input type="submit" class="btn btn-dark subParam" name="btnCours" value="Valider">

				</form>
				
				<?php require_once 'creationCours.php';?>
			</div>     
		</section>

		<section class="container" id="etudiant">
			<div class="jumbotron">
				<h1 class="positionH">Etudiant</h1>   
				<svg>
					<line x1="0" y1="0" x2="100%" y2="0"/>
				</svg> 
				
				<form method="POST" action="#etudiant">
					<div class="form-group">
						<label for="selectClasse">Choisissez une classe pour afficher la liste d'élèves :</label>
						<?php require_once 'listeClasse.php';?>
					</div>
					<input type="submit" class="btn btn-dark subParam" name="btnEtudiant" value="Valider">

					<?php require_once 'affichageClasse.php';?>
					
				</form>
				
			</div>
		</section> 

		<section class="container" id="enseignant">
			<div class="jumbotron">
				<h1 class="positionH">Professeur</h1>   
				<svg>
					<line x1="0" y1="0" x2="100%" y2="0"/>
				</svg> 

				<p>Liste des professeurs</p>

				<?php require_once 'affichageProf.php';?>
				
			</div>
		</section>

		<footer class="card-footer text-center">
			Copyright - Laetitia Monnier 2018</br>
			<img id="imgParam" src="../images/logo.png">
		</footer>

		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script type="text/javascript" src="../js/smoothScroll.js"></script>
		<script type="text/javascript" src="../js/scriptIndex.js"></script>
	</body>
</html>