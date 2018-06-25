<?php
function search_pseudo ($POST) {
/*
	$query =
	"SELECT id_user, username, pw, category
	FROM users
	WHERE username =?";

	$query_params= array($_POST['pseudo']);

		$pwd = $bdd->prepare($query);
		$pwd->execute($query_params);
=======*/
		include_once('Models/db_connect.php');
                $bdd = db_connect();

		$pwd = $bdd->prepare('SELECT id_user, username, pw, category FROM USERS WHERE username = ?');
		$pwd->execute(array($_POST['pseudo']));
/*>>>>>>> 402eb69428fef7da8faaa3f0cc3bc308c8831673*/
		$donnees = $pwd->fetch();
		return $donnees;
}

?>
