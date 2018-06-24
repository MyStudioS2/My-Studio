<?php
function delete_fav ($POST) {

        include_once('Models/db_connect.php');
        $bdd = db_connect();

        $req = $bdd->prepare('DELETE FROM FAV_BY WHERE FAV_BY.music = ? AND FAV_BY.username = ?');
                $req->execute(array(
                        $_POST['delete_fav'],
			$_SESSION['id']
                        ));
}
?>

