<?php
	$sql = "SELECT ID_TYPE from TYPE";
	if (!$connexion->query($sql))
		echo "Erreur !";
	else {
		echo "<select name = 'selType' class='form-control'> id='select4'";
		foreach ($connexion->query($sql) as $contenu) {
			echo "<option required>".$contenu['ID_TYPE']."</option>";
		}
		echo "</select>";
	}
?>