<?php
	/*require("../Controllers/session_check.php");
	session_check($_SESSION['name']);
	require('../Models/search_pseudo.php');
	require('../Models/update.php');
	$a=0;*/
	if(isset($_POST['new_pseudo'])==false || isset($_POST['conf_pw'])==false)
	{
		header("localisation: ../Views/login_page.php");
	}
	else if($_POST['new_pseudo']=="" || $_POST['conf_pw']=="")
	{
		$a=1;
		$_SESSION['erreur']="<center>Tous les champs ne sont pas remplis. Veuillez réessayer.</center>";
		header("localisation: ../Views/changename_page.php");
	}
	/*else if($_POST['conf_pw']!=$_SESSION['pw'])
	{
		$a=1;
		$_SESSION['erreur']="<center>Mot de passe incorrect. Veuillez réessayer.</center>";
	}
	else if(isset($_POST['new_pseudo'])==false)
	{
		$a=1;
		$_SESSION['erreur']="<center>Ce pseudo est déjà pris, veuillez donner un autre pseudo.</center>";
	}
	else if(strlen($_POST['new_pseudo'])<=5)
	{
		$a=1;
		$_SESSION['erreur']="<center>Le pseudo doit contenir un minimum de 6 caractères.</center>";
	}
	if($a==1)
	{
		header("localisation: ../Views/changename_page2.php");
	}
	else
	{
		$donnees=search_pseudo($_POST);
		if(isset($donnees['username'])==false)
		{
			$_SESSION['erreur']="<center>Ce pseudo existe déjà, veuillez en choisir un autre.</center>";
			header("localisation: ../Views/changename_page2.php");
		}
		else
		{
			update($_POST]);
			$_POST['pseudo']=$_POST['new_pseudo'];
			$_SESSION['erreur']="";
			header("localisation: ../Views/changename_page.php");
		}
	}*/
?>