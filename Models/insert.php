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
	//echo $datas[0];
	//echo $datas[1];
	//echo $datas[2];

	$req = $bdd->prepare('INSERT INTO USERS(id, pseudo, pw, class) VALUES(:id, :pseudo, :pw, :class)');
                $req->execute(array(
			'id' => NULL,
                        'pseudo' => $datas[0],
                        'pw' => $datas[2],
                        'class' => $datas[1]
			));
}
?>
