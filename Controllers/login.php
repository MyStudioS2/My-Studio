<?php
session_start();
function conect ($POST) {

	require_once('../Models/search_pseudo.php');

	$list = array("pseudo", "password", "type");
	$check = 0;
	for($i=0;$i<count($list); $i++) {
		if(!empty($_POST[$list[$i]]) && isset($_POST[$list[$i]]) ) {
			$check++;
		}
	}
	if(!isset($_POST['pseudo']) || !isset($_POST['password'])) {
                return 3;
	}else if($check != 3) {
		return 1;
	} else {
	$donnees = search_pseudo($_POST['pseudo']);
	if($donnees['username'] == $_POST['pseudo'] && $donnees['pw'] == $_POST['password'] && $donnees['category'] == $_POST['type'])  {
		$_SESSION['ID'] = $_POST['pseudo'];
		$_SESSION['type'] = $_POST['type'];
		return 0;
	}else{
		return 2;
	}
	}
}
?>
