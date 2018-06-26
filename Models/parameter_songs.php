<?php
	function search_song()
	{
		/*include('Models/db_connect.php');
		$bdd = db_connect();*/
		$bdd=new PDO('mysql:host=localhost;dbname=mystudio;charset=UTF8', 'root', 'root', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
		$reponse=$bdd->prepare('SELECT* FROM ARTIST, MUSIC WHERE id_artist=:id AND artist=id_artist');
		$reponse->execute(['id'=>$data['id']]);
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