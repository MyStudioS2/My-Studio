<?php
	session_start();
	/*require("../Controllers/session_check.php");
	session_check($_SESSION['name']);*/
	require('../Models/search_pseudo.php');
	require('../Models/update.php');
	if(isset($_POST['new_pseudo'])==false || isset($_POST['conf_pw'])==false)
	{
		header("location: ../Views/changename_page.php");
	}
	else
	{
		$a=0;
		if($_POST['new_pseudo']=="" || $_POST['conf_pw']=="")
		{
			$a=1;
			$_SESSION['erreur']="<center>Tous les champs ne sont pas remplis. Veuillez réessayer.</center>";
		}
		else if($_POST['conf_pw']!=$_SESSION['pw'])
		{
			$a=1;
			$_SESSION['erreur']="<center>Mot de passe incorrect. Veuillez réessayer.</center>";
		}
		else if(strlen($_POST['new_pseudo'])<=5)
		{
			$a=1;
			$_SESSION['erreur']="<center>Le pseudo doit contenir un minimum de 6 caractères.</center>";
		}
		if($a==1)
		{
			header("location: ../Views/changename_page.php");
		}
		else
		{
			//problème
			$donnees=search_pseudo($POST);
			if(isset($donnees['username']))
			{
				$_SESSION['erreur']="<center>Ce pseudo existe déjà, veuillez en choisir un autre.</center>";
				header("location: ../Views/changename_page.php");
			}
			else
			{
				//problème
				update($_POST['new_pseudo'], $_SESSION['pseudo']);
				$_SESSION['pseudo']=$_POST['new_pseudo'];
				$_SESSION['erreur']="";
				header("location: ../Views/changename_page2.php");
			}
		}
	}
?>