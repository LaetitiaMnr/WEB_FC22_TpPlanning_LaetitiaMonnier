<?php
	$sql = "SELECT ID_JOUR from JOUR";
	if (!$connexion->query($sql))
		echo "Erreur !";
	else {
		echo "<select name = 'selJour' class='form-control'> id='select3'";
		foreach ($connexion->query($sql) as $contenu) {
			echo "<option required>".$contenu['ID_JOUR']."</option>";
		}
		echo "</select>";
	}
?>