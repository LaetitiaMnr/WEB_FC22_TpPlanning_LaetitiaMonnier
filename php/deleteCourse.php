<?php
	$con = mysqli_connect('localhost','root','','tp_planning');
	if (!$con) {
	    die('Could not connect: ' . mysqli_error($con));
	}
	
	if(isset($_POST['delete'])){
		$result = mysqli_query($con, 'DELETE FROM cours WHERE ID_COURS ='.(int)$_POST['delete']);
	}

	mysqli_close($con);

	/*if(isset($_REQUEST['supprimer'])){
		$sql = "DELETE FROM cours WHERE ID_COURS=26";
		if (!$connexion->query($sql))
			echo "<div class='alert alert-danger alert-dismissible paramAlert'>
					<button type='button' class='close' data-dismiss='alert'>&times;</button>
					<strong>Erreur...</strong></div>";
	}*/

?>