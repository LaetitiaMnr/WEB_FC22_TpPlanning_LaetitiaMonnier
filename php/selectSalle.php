<?php
	$sql = "SELECT ID_SALLE from SALLE";
	if (!$connexion->query($sql))
		echo "Erreur !";
	else {
		echo "<select name = 'selSalle' class='form-control'> id='select2'";
		foreach ($connexion->query($sql) as $contenu) {
			echo "<option required>".$contenu['ID_SALLE']."</option>";
		}
		echo "</select>";
	}
?>