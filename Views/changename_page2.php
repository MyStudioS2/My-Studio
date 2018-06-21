<?php
	include './Views/html_top.html';
	include './Views/navbar.php';
	session_start();
	/*require("../Controllers/session_check.php");
	session_check($_SESSION['pseudo']);*/
	echo"<center><h1>Changement de nom ?</h1><br>";
	echo"<center>Votre nouveau pseudo est maintenant ".$_SESSION['pseudo'].".</center>";
	header("refresh:6;location: ../index.php?page=settings");
	include "./Views/html_bottom.php";
?>