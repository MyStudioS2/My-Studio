<?php
	function update($a, $b, $c)
	{
		$bdd=new PDO('mysql:host=localhost;dbname=mystudio;charset=utf8', 'root', 'isma', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
		$reponse=$bdd->query('UPDATE USERS SET '.$a.'="'.$b.'" WHERE username="'.$c.'"');
	}
?>