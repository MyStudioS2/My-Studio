<?php
	function update($POST)
	{
		$bdd = new PDO('mysql:host=localhost;dbname=mystudio;charset=utf8', 'root', 'isma');
		$req = $bdd->query('UPDATE USERS set username='.$_POST['pseudo2'].' WHERE username='.$_POST['ID']);
	}
?>