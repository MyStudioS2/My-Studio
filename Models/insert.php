<?php
function insert ($POST) {

	$bdd = new PDO('mysql:host=localhost;dbname=mystudio;charset=utf8', 'root', 'isma');

	$req = $bdd->prepare('INSERT INTO USERS(id_user, username, pw, category) VALUES(:id_user, :username, :pw, :category)');
                $req->execute(array(
			'id_user' => NULL,
                        'username' => $_POST['pseudo'],
                        'pw' => $_POST['password'],
                        'category' => $_POST['type'],
                        ));
}
?>
