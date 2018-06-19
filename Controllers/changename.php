<?php
	session_start();
	/*require("../Controllers/session_check.php");
	session_check($_SESSION['name']);*/
	require('../Models/search.php');
	require('../Models/update.php');
	$a=1;
	if(empty($_POST['conf_pw']) || empty($_POST['new_pseudo']))
	{
		$a=0;
		$_SESSION['erreur']="<center>Tous les champs ne sont pas remplis. Veuillez réessayer.</center>";
	}
	if($a==1)
	{
		if($_POST['conf_pw']!=$_SESSION['pw'])
		{
			$a=0;
			$_SESSION['erreur']="<center>Mot de passe incorrect. Veuillez réessayer.</center>";
		}
		else if(strlen($_POST['new_pseudo'])<6)
		{
			$a=0;
			$_SESSION['erreur']="<center>Le pseudo doit contenir un minimum de 6 caractères.</center>";
		}
		else
		{
			//problème
			$b=search($_POST['new_pseudo']);
			if($b==1)
			{		
				$a=0;
				$_SESSION['erreur']="<center>Ce pseudo existe déjà, veuillez en choisir un autre.</center>";
			}
		}
	}
	if($a!=1)
	{
		header("location: ../Views/changename_page.php");
	}
	else
	{
		update('username', $_POST['new_pseudo'], $_SESSION['pseudo']);
		$_SESSION['pseudo']=$_POST['new_pseudo'];
		$_SESSION['erreur']="";
		header("location: ../Views/changename_page2.php");
	}
?>