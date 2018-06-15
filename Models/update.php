<?php
	function update($POST, $SESSION)
	{
		$bdd = new PDO('mysql:host=localhost;dbname=mystudio;charset=utf8', 'root', 'isma');
		$req = $bdd->query('UPDATE USERS set username="'.$_POST['pseudo'].'" WHERE username="'.$_SESSION['pseudo'].'"');
	}
?>