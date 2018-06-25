<?php
	function search_genre()
	{
		/*include('Models/db_connect.php');
		$bdd = db_connect();*/
		$bdd=new PDO('mysql:host=localhost;dbname=mystudio;charset=UTF8', 'root', 'root', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
		$reponse=$bdd->prepare('SELECT* FROM STYLES ORDER BY style_name');
		$data=array();
		$i=0;
		while($donnees=$reponse->fetch())
	    {
	    	$data[$i]=$donnees['style_name'];
	    	$i++;
		}
		return $data;
	}
?>