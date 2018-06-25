<?php
	function search_pw($data)
	{
		include_once('Models/db_connect.php');
		$bdd = db_connect();
		//$bdd=new PDO('mysql:host=localhost;dbname=mystudio;charset=UTF8', 'root', 'root', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
		$reponse=$bdd->prepare('SELECT* FROM USERS WHERE id_user=:id');
		$reponse->execute(['id'=>$data['id']]);
		$a=0;
		while($donnees=$reponse->fetch())
	    {
	    	if($donnees['pw']==$data['pw'])
	    	{
	    		$a=1;
	    	}
		}
		return $a;	
	}
	function search_id_art($data)
	{
		include_once('Models/db_connect.php');
		$bdd = db_connect();
		//$bdd=new PDO('mysql:host=localhost;dbname=mystudio;charset=UTF8', 'root', 'root', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
		$reponse=$bdd->prepare('SELECT* FROM ARTISTS WHERE artist_name=:pseudo');
		$reponse->execute(['pseudo'=>$data['nom']]);
		$a=0;
		while($donnees=$reponse->fetch())
	    {
	    	if($donnees['artist_name']==$data['nom'])
	    	{
	    		$a=$donnees['id_artist'];
	    	}
		}
		return $a;	
	}
	function search_pseudo_user($data)
	{
		include_once('Models/db_connect.php');
		$bdd = db_connect();
		//$bdd=new PDO('mysql:host=localhost;dbname=mystudio;charset=UTF8', 'root', 'root', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
		$reponse=$bdd->query('SELECT* FROM USERS');
		$a=0;
		while($donnees=$reponse->fetch()) 
	    {
	    	if($donnees['username']==$data['pseudo'])
	    	{
	    		$a=1;
	    	}
		}
		return $a;
	}
	function search_pseudo_art($data)
	{
		include_once('Models/db_connect.php');
		$bdd = db_connect();
		//$bdd=new PDO('mysql:host=localhost;dbname=mystudio;charset=UTF8', 'root', 'root', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
		$reponse=$bdd->query('SELECT* FROM ARTISTS');
		$a=0;
		while($donnees=$reponse->fetch()) 
	    {
	    	if($donnees['artist_name']==$data['pseudo'])
	    	{
	    		$a=1;
	    	}
		}
		return $a;
	}
	function update_pseudo_user($data)
	{
		include_once('Models/db_connect.php');
		$bdd = db_connect();
		//$bdd=new PDO('mysql:host=localhost;dbname=mystudio;charset=UTF8', 'root', 'root', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
		$reponse=$bdd->prepare('UPDATE USERS 
								SET username=:pseudo 
								WHERE id_user=:id');
		$reponse->execute(array(
							'pseudo'=>$data['pseudo'], 
							'id'=>$_SESSION['id']));
	}
	function update_pseudo_art($data)
	{
		include_once('Models/db_connect.php');
		$bdd = db_connect();
		//$bdd=new PDO('mysql:host=localhost;dbname=mystudio;charset=UTF8', 'root', 'root', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
		$reponse=$bdd->prepare('UPDATE ARTISTS
								SET artist_name=:pseudo 
								WHERE id_artist=:id');
		$reponse->execute(array(
							'pseudo'=>$data['pseudo'], 
							'id'=>$data['id']));
	}
	function update_statut($data)
	{
		include_once('Models/db_connect.php');
		$bdd = db_connect();
		//$bdd=new PDO('mysql:host=localhost;dbname=mystudio;charset=UTF8', 'root', 'root', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
		$reponse=$bdd->prepare('UPDATE USERS 
								SET category=:statut 
								WHERE id_user=:id');
		$reponse->execute(array(
							'statut'=>$data['statut'], 
							'id'=>$_SESSION['id']));
	}
	function update_pw($data)
	{
		include_once('Models/db_connect.php');
		$bdd = db_connect();
		//$bdd=new PDO('mysql:host=localhost;dbname=mystudio;charset=UTF8', 'root', 'root', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
		$reponse=$bdd->prepare('UPDATE USERS 
								SET pw=:new_pw 
								WHERE id_user=:id');
		$reponse->execute(array(
							'new_pw'=>$data['new_pw'], 
							'id'=>$_SESSION['id']));
	}
	function insert_art($data)
	{
		include_once('Models/db_connect.php');
		$bdd = db_connect();
		//$bdd=new PDO('mysql:host=localhost;dbname=mystudio;charset=UTF8', 'root', 'root', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
		$reponse=$bdd->prepare('INSERT INTO ARTISTS(id_artist, artist_name, category) VALUES(:id, :pseudo, "amateur")');
		$reponse->execute(array(
							'id'=>NULL,
							'pseudo'=>$data['pseudo']));
	}
	function delete_art($data)
	{
		include_once('Models/db_connect.php');
		$bdd = db_connect();
		//$bdd=new PDO('mysql:host=localhost;dbname=mystudio;charset=UTF8', 'root', 'root', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
		$reponse=$bdd->prepare('DELETE FROM ARTISTS WHERE id_artist=:id');
		$reponse->execute(['id'=>$data['id']]);
		$reponse=$bdd->prepare('DELETE FROM MUSICS WHERE artist=:id');
		$reponse->execute(['id'=>$data['id']]);
	}
	function delete_account($data)
	{
		include_once('Models/db_connect.php');
		$bdd = db_connect();
		//$bdd=new PDO('mysql:host=localhost;dbname=mystudio;charset=UTF8', 'root', 'root', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
		$reponse=$bdd->prepare('DELETE FROM USERS WHERE id_user=:id');
		$reponse->execute(['id'=>$_SESSION['id']]);
		$reponse=$bdd->prepare('DELETE FROM ARTISTS WHERE id_artist=:id');
		$reponse->execute(['id'=>$data['id']]);
		$reponse=$bdd->prepare('DELETE FROM MUSICS WHERE artist=:id');
		$reponse->execute(['id'=>$data['id']]);
	}
?>
