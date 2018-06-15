<?php
	function update($a, $b)
	{
		$bdd = new PDO('mysql:host=localhost;dbname=mystudio;charset=utf8', 'root', 'isma');
		$req = $bdd->query('UPDATE USERS set username="'.$a.'" WHERE username="'.$b.'"');
	}
?>