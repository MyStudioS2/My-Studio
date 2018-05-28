<?php
function inscription ($POST) {
	if(!isset($_POST['pseudo']) || !isset($_POST['password'])) {
		return 1;
	} else if(empty($_POST['pseudo']) || empty($_POST['password'])) {
		return 2;
	} else if(strlen($_POST['pseudo']) <= 5 )  {
		return 3;
	} else {
	
		$bdd = new PDO('mysql:host=localhost;dbname=mystudio;charset=utf8', 'root', 'isma');
		$pwd = $bdd->prepare('SELECT pseudo FROM USERS WHERE pseudo = ?');
		$pwd->execute(array($_POST['pseudo']));
		$donnees = $pwd->fetch();

		if(!empty($donnees['pseudo'])) {
			return 4;
		} else {

		$req = $bdd->prepare('INSERT INTO USERS(pseudo, pw, class) VALUES(:pseudo, :pw, :class)');
		$req->execute(array(
			'pseudo' => $_POST['pseudo'],
			'pw' => $_POST['password'],
			'class' => $_POST['type'],
			));
		return 0;

		}
	}
}
?>
