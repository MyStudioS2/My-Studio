<?php
session_start();
function conect ($POST) {

	$list = array("pseudo", "password", "type");
	$check = 0;
	for($i=0;$i<count($list); $i++) {
		if(!empty($_POST[$formulaires[$i]]) && isset($_POST[$formulaires[$i]]) ) {
			$check++;
		}
	}
	if($check != 3) {
		return 1;
	} else {

	$bdd = new PDO('mysql:host=localhost;dbname=mystudio;charset=utf8', 'root', 'isma');
	$pwd = $bdd->prepare('SELECT pseudo, pw, class FROM USERS WHERE pseudo = ?');
	$pwd->execute(array($_POST['pseudo']));
	$donnees = $pwd->fetch();
	if($donnees['pseudo'] == $_POST['pseudo'] && $donnees['pw'] == $_POST['password'] && $donnees['class'] == $_POST['type'])  {
		$_SESSION['ID'] = $_POST['pseudo'];
		$_SESSION['type'] = $_POST['type'];
		return 0;
	}else{
		return 1;
	}
	}
}
?>
