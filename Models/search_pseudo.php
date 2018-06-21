<?php
function search_pseudo ($POST) {

	    $bdd = new PDO('mysql:host=localhost;dbname=mystudio;charset=utf8', 'root', 'isma');
		$pwd = $bdd->prepare('SELECT id, pseudo, pw, class FROM USERS WHERE pseudo = ?');
		$pwd->execute(array($_POST['pseudo']));
		$donnees = $pwd->fetch();
		return $donnees;
}

?>
