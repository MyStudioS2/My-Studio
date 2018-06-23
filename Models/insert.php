<?php
function insert ($datas) {

	try
	{
		$bdd = new PDO('mysql:host=localhost;dbname=mystudio;charset=utf8', 'root', 'isma', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
	}
		catch(Exception $e)
	{
		die('Erreur : '.$e->getMessage());
	}
	$req = $bdd->prepare('INSERT INTO USERS(id_user, username, pw, category) VALUES(:id_user, :username, :pw, :category)');
                $req->execute(array(
			'id_user' => NULL,
                        'username' => $datas[0],
                        'pw' => $datas[2],
                        'category' => $datas[1]
			));
}
?>
