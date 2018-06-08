<?php 
	if (isset($_REQUEST['btnJour'])) {
		$contenuBtn = $_REQUEST['btnJour'];
		$sql = "SELECT ID_COURS, NOM_COURS, ID_TYPE, ID_CLASSE, ID_SALLE, ID_TRANCHE_HORAIRE, ID_ENSEIGNANT from COURS WHERE ID_JOUR = \"$contenuBtn\" ORDER BY ID_TRANCHE_HORAIRE ASC";
		if (!$connexion->query($sql))
			echo "<div class='alert alert-danger alert-dismissible paramAlert'>
					<button type='button' class='close' data-dismiss='alert'>&times;</button>
					<strong>Erreur...</strong></div>";
		else {

			echo "<table id='tablePlan' class='table table-responsive-md table-light'>";
			echo "<thead class='".$contenuBtn."'>
				<tr>
				<th scope='col'>Horaire</th>
				<th scope='col'>Cours</th>
				<th scope='col'>Classe</th>
				<th scope='col'>Salle</th>
				<th scope='col'>Enseignant</th>
				<th scope='col'>Supprimer</th>
				</tr>
				</thead>";

			foreach ($connexion->query($sql) as $contenu){
				echo "<tr class='trPlanning' data-id='".$contenu['ID_COURS']."'>";

				echo "<td class='p-5'>".$contenu['ID_TRANCHE_HORAIRE']."</td>";

				echo "<td class='p-5'>".$contenu['NOM_COURS']." ".$contenu['ID_TYPE']."</td>";

				echo "<td class='p-5'>".$contenu['ID_CLASSE']."</td>";

				echo "<td class='p-4'><img class='rounded imageParam' src='../images/".$contenu['ID_SALLE'].".png'>";
			
				echo "<img class='rounded imageParam src='../images/".$contenu['ID_SALLE'].".png'>";
	
				echo "<img class='rounded imageParam src='../images/".$contenu['ID_SALLE'].".png'>";

				echo "<img class='rounded imageParam src='../images/".$contenu['ID_SALLE'].".png'>";

				echo "<img class='rounded imageParam src='../images/".$contenu['ID_SALLE'].".png'></td>";

				echo "<td class='p-5'>".$contenu['ID_ENSEIGNANT']."</td>";

				echo "<td class='p-5'><button type='button' class='close btnSuppr' aria-label='Close' data-id='".$contenu['ID_COURS']."' data-toggle='modal' data-target='#myModal'>
							<span aria-hidden='true'>&times;</span>
							</button>
					</td>";
				echo "</tr>";
			}
			
			echo "</table>";
		}
	} 
	
?>