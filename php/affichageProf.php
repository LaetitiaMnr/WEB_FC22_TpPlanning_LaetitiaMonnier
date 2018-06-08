<?php 
	$sql = "SELECT * from ENSEIGNANT ORDER BY NOM_ENSEIGNANT";
	if (!$connexion->query($sql))
		echo "<div class='alert alert-danger alert-dismissible paramAlert'>
				<button type='button' class='close' data-dismiss='alert'>&times;</button>
				<strong>Erreur...</strong></div>";
	else {
		echo "<table class='table table-responsive-sm table-responsive-md table-striped table-light'>";
		echo "<thead class='thead-dark'>
				<tr>
				<th scope='col'>Id</th>
				<th scope='col'>Nom</th>
				<th scope='col'>Prénom</th>
				<th scope='col'>Mail</th>
				</tr>
				</thead>";
		foreach ($connexion->query($sql) as $contenu){
			echo "<tr>";
			echo "<td>".$contenu['ID_ENSEIGNANT']."</td>";
			echo "<td>".$contenu['NOM_ENSEIGNANT']."</td>";
			echo "<td>".$contenu['PRENOM_ENSEIGNANT']."</td>";
			echo "<td>".$contenu['MAIL_ENSEIGNANT']."</td>";
			echo "</tr>";
		}
	echo "</table>";
	}
?>