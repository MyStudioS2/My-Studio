<?php
	session_start();
	require("../Controllers/session_check.php");
	session_check($_SESSION['pseudo']);
	echo"<center><h2>Vous voulez changer de pseudo, ".$_SESSION['pseudo']." ?</h2>
	<form action='Controllers/changename.php' method='POST'>
	<input type='text' placeholder='Pseudo' name='new_pseudo'><br>
	<input type='password' placeholder='Password' name='conf_pw'><br><br>";
	if(isset($_SESSION['erreur']) && empty($_SESSION['erreur'])==false)
	{
		echo $_SESSION['erreur'];
		$_SESSION['erreur']="";
	}
	else
	{
		echo "<br>";
	}
	echo "<br><button>Envoyer</button>
	</form>
	<br>Donnez-nous votre nouveau pseudo pour faire le changement.<br><br>
	<form action='../index.php?page=settings' method='GET'>
	<input type='hidden' name='page' value='settings'>
	<button>Retour</button>
	</form></center>";
?>