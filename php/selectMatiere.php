<?php
	$sql = "SELECT ID_MATIERE from MATIERE";
	if (!$connexion->query($sql))
		echo "Erreur !";
	else {
		echo "<select name = 'selMatiere' class='form-control'> id='select5'";
		foreach ($connexion->query($sql) as $contenu) {
			echo "<option required>".$contenu['ID_MATIERE']."</option>";
		}
		echo "</select>";
	}
?>