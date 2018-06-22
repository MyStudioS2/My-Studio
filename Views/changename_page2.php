<?php
	session_start();
	require("../Controllers/session_check.php");
	session_check($_SESSION['pseudo']);
	echo"<center><h2>Changement de nom ?</h2><br>";
	echo"<center>Votre nouveau pseudo est maintenant ".$_SESSION['pseudo'].".</center>";
?>