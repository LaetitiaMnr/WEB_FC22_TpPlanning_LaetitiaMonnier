<?php
	$sql = "SELECT ID_CLASSE from CLASSE";
	if (!$connexion->query($sql))
		echo "Erreur !";
	else {
		echo "<select name = 'selClasse' class='form-control' id='selectClasse'>";
		foreach ($connexion->query($sql) as $contenu) {
			echo "<option required>".$contenu['ID_CLASSE']."</option>";
		}
		echo "</select>";
	}
;?>