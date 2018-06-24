<?php
function add_fav ($POST) {

        include_once('Models/db_connect.php');
        $bdd = db_connect();

        $req = $bdd->prepare('INSERT INTO FAV_BY(username, music, id_fav) VALUES(:username, :music, :id_fav)');
                $req->execute(array(
                        'username' => $_SESSION['id'],
                        'music' => $_POST['add_fav'],
                        'id_fav' => NULL
                        ));
}
?>

