<?php
	session_start();
	echo "<center><h2>Vous voulez changer de ";
	if($_GET['change']=='nom')
	{
		echo "pseudo";
	}
	if($_GET['change']=='statut')
	{
		echo "statut";
	}
	if($_GET['change']=='pw')
	{
		echo "mot de passe";
	}
	echo ", ".$_SESSION['pseudo']." ?</h2><br>
	<form action='Controllers/change.php' method='POST'>";
	if($_GET['change']=='nom')
	{
		echo "<input type='text' placeholder='Pseudo' name='new_pseudo'><br>
		<input type='password' placeholder='Mot de passe' name='conf_pw'><br><br>";
	}
	else if($_GET['change']=='statut')
	{
		echo "<input type='radio' name='statut' value='artiste'>Artiste
		<input type='radio' name='statut' value='auditeur'>Auditeur<br>
		<input type='password' placeholder='Mot de passe' name='conf_pw'><br><br>";
	}
	else if($_GET['change']=='pw')
	{
		echo "<input type='password' placeholder='Nouveau mot de passe' name='new_pw'><br>
		<input type='password' placeholder='Nouveau mot de passe' name='verif_pw'><br>
		<input type='password' placeholder='Ancien mot de passe' name='conf_pw'><br><br>";
	}
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
	<input type='hidden' name='change' value='".$_GET['change']."'>
	</form><br>
	<form action='index.php?page=settings' method='GET'>
	<input type='hidden' name='page' value='settings'>
	<button>Retourner aux paramètres</button>
	</form></center>";
?>