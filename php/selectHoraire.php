<?php
	$sql = "SELECT HORAIRE_DEBUT from TRANCHE_HORAIRE";
	if (!$connexion->query($sql))
		echo "Erreur !";
	else {
		echo "<select name = 'selHoraire' class='form-control'> id='select4'";
		foreach ($connexion->query($sql) as $contenu) {
			echo "<option required>".$contenu['HORAIRE_DEBUT']."</option>";
		}
		echo "</select>";
	}
?>