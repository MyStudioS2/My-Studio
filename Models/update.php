<?php
	function update($POST)
	{
		$bdd = new PDO('mysql:host=localhost;dbname=mystudio;charset=utf8', 'root', 'root');
		$req = $bdd->prepare('UPDATE USERS set username='.$_POST['pseudo2'].' WHERE username='.$_POST['ID']);
	}
?>