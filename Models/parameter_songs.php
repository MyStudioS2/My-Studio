<?php
	function search_id_song($data)
	{
		/*include('Models/db_connect.php');
		$bdd = db_connect();*/
		$bdd=new PDO('mysql:host=localhost;dbname=mystudio;charset=UTF8', 'root', 'root', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
		$reponse=$bdd->prepare('SELECT id_music, title, album_name, album_cover
								FROM artists, musics, albums
								WHERE id_artist=:id AND artist_id=id_artist AND album_id=id_album');
		$reponse->execute(['id'=>$data['id']]);
		$data=array();
		$i=0;
		//test artiste 0 musique
		while($donnees=$reponse->fetch())
	    {
	    	$data[0][$i]=$donnees['id_music'];
	    	$data[1][$i]=$donnees['title'];
	    	$data[2][$i]=$donnees['album_name'];
	    	$data[3][$i]=$donnees['album_cover'];
	    	$i++;
		}
		return $data;
	}
	function search_album($data)
	{
		/*include('Models/db_connect.php');
		$bdd = db_connect();*/
		$bdd=new PDO('mysql:host=localhost;dbname=mystudio;charset=UTF8', 'root', 'root', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
		$reponse=$bdd->prepare('SELECT id_album, album_name
								FROM artists, musics, albums
								WHERE artist_name=:pseudo AND id_artist=artist_id AND album_id=id_album');
		$reponse->execute(['pseudo'=>$data['pseudo']]);
		$i=0;
		while($donnees=$reponse->fetch())
	    {
	    	$data[0][$i]=$donnees['id_album'];
	   		$data[1][$i]=$donnees['album_name'];
	    	$i++;
		}
		return $data;
	}
/////Problème
	function delete_album($data)
	{
		/*include('Models/db_connect.php');
		$bdd = db_connect();*/
		$bdd=new PDO('mysql:host=localhost;dbname=mystudio;charset=UTF8', 'root', 'root', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
		$reponse=$bdd->prepare('DELETE
								FROM albums
								WHERE id_album=:ID');
		$reponse->execute(['ID'=>$data['ID']]);
		$reponse=$bdd->prepare('DELETE
								FROM musics
								WHERE album_id=:ID');
		$reponse->execute(['ID'=>$data['ID']]);
	}
?>