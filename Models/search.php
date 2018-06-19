<?php
	function search($b)
	{
		$bdd=new PDO('mysql:host=localhost;dbname=mystudio;charset=utf8', 'root', 'isma', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
		$reponse=$bdd->query('SELECT* FROM USERS');
		$a=0;
		while($donnees=$reponse->fetch()) 
	    {
	    	if($donnees['username']==$b)
	    	{
	    		$a=1;
	    	}
		}
		return $a;
	}
?>