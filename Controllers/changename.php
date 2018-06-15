<?php
	session_start();
	/*require("../Controllers/session_check.php");
	session_check($_SESSION['name']);*/
	require('../Models/search_pseudo.php');
	require('../Models/update.php');
	$a=0;
	foreach($POST as $key => $value)
	{
		if(isset($_POST[$key]))
		{
			$a++;
			if(empty($POST))
			{
				$a=1;
				$_SESSION['erreur']="<center>Tous les champs ne sont pas remplis. Veuillez réessayer.</center>";
			}
		}
		if($a==2)
		{
			if($_POST['conf_pw']!=$_SESSION['pw'])
			{
				$a=1;
				$_SESSION['erreur']="<center>Mot de passe incorrect. Veuillez réessayer.</center>";
			}
			else if(strlen($_POST['new_pseudo'])<=5)
			{
				$a=1;
				$_SESSION['erreur']="<center>Le pseudo doit contenir un minimum de 6 caractères.</center>";
			}
			else
			{
				//problème
				$donnees=search_pseudo($POST);
				if(isset($donnees['username']))
				{
					$_SESSION['erreur']="<center>Ce pseudo existe déjà, veuillez en choisir un autre.</center>";
				}
			}
		}
	}
	if($a!=2)
	{
		header("location: ../Views/changename_page.php");
	}
	else
	{
		//problème
		update($POST, $SESSION);
		$_SESSION['pseudo']=$_POST['new_pseudo'];
		$_SESSION['erreur']="";
		header("location: ../Views/changename_page2.php");
	}
?>