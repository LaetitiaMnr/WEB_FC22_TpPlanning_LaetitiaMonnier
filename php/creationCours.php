<?php 

				$host = "localhost";
				$user = "root";
				$pass = "";
				$db = "tp_planning";
				 
				$link = mysqli_connect($host,$user,$pass, $db);
				if($link === false)
					die("ERROR: Could not connect. " . mysqli_connect_error());

				if(isset($_REQUEST['btnCours'])) {
					$classe = $_REQUEST['selClasse'];
					$salle = $_REQUEST['selSalle'];
					$jour = $_REQUEST['selJour'];
					$trH = $_REQUEST['selHoraire'];
					$matiere = $_REQUEST['selMatiere'];
					$leType = $_REQUEST['selType'];
					$nom = $_REQUEST['idNom'];
					$prof = $_REQUEST['selProf'];

					$sql = "INSERT INTO COURS (ID_CLASSE, ID_SALLE, ID_JOUR, ID_TRANCHE_HORAIRE, ID_MATIERE, ID_TYPE, NOM_COURS, ID_ENSEIGNANT) VALUES (
					'$classe', '$salle', '$jour', '$trH', '$matiere', '$leType','$nom', '$prof')";
					
					if(mysqli_query($link, $sql)){

					    echo "<div class='alert alert-success alert-dismissible fade show paramAlert'>
					    		<strong>Succès !</strong> Vos données ont été enregistrées.
								<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
								<span aria-hidden='true'>&times;</span>
								</button>
							</div>";
					} else{

					    echo "<div class='alert alert-danger alert-dismissible paramAlert'>
							  	<button type='button' class='close' data-dismiss='alert'>&times;</button>
							  	<strong>Erreur !</strong> $sql. - ".mysqli_error($link)."
							</div>";

					}
					// close connection
					mysqli_close($link);
				}
			?>