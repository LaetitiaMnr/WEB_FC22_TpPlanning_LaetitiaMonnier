<?php
	$sql = "SELECT ID_ENSEIGNANT from ENSEIGNANT";
	if (!$connexion->query($sql))
		echo "Erreur !";
	else {
		echo "<select name = 'selProf' class='form-control'> id='select6'";
		foreach ($connexion->query($sql) as $contenu) {
			echo "<option required>".$contenu['ID_ENSEIGNANT']."</option>";
		}
		echo "</select>";
	}
?>