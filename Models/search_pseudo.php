<?php
function search_pseudo ($POST) {

		include_once('Models/db_connect.php');
                $bdd = db_connect();

		$pwd = $bdd->prepare('SELECT id_user, username, pw, category FROM USERS WHERE username = ?');
		$pwd->execute(array($_POST['pseudo']));
		$donnees = $pwd->fetch();
		return $donnees;
}

?>
