<?php
session_start();
function conect ($POST) {

	require_once('Models/search_pseudo.php');
	require_once('Controllers/decryptage.php');

	$list = array("pseudo", "password");
	$check = 0;
	for($i=0;$i<count($list); $i++) {
		if(!empty($_POST[$list[$i]]) && isset($_POST[$list[$i]]) ) {
			$check++;
		}
	}
	if(!isset($_POST['pseudo']) || !isset($_POST['password'])) {
                return 3;
	}else if($check != 2) {
		if(!empty($_POST['pseudo'])) {
			return 1;
		}else if(!empty($_POST['password'])) {
			return 4;
		}
	} else {
	$donnees = search_pseudo($_POST['pseudo']);
	$mot = $donnees['pw'];
	$word = decryptage($mot);
	if($donnees['pseudo'] == $_POST['pseudo'] && $word == $_POST['password'])  {
		$_SESSION['pseudo'] = $_POST['pseudo'];
		$_SESSION['id'] = $donnees['id'];
		return 0;
	}else{
		if($donnees['pseudo'] != $_POST['pseudo'] && $word != $_POST['password']) {
			return 6;
		} else if($donnees['pseudo'] != $_POST['pseudo']) {
			return 2;
		}else if($word != $_POST['password']) {
			return 5;
		}
	}
	}
}
?>
