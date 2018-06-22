<?php
	session_start();
	require("../Controllers/session_check.php");
	session_check($_SESSION['pseudo'])
	require('../Models/parameter_account.php');
	$a=1;
	if(empty($_POST['conf_pw']) || empty($_POST['new_pseudo']))
	{
		$a=0;
		$_SESSION['erreur']="<center>Tous les champs ne sont pas remplis. Veuillez réessayer.</center>";
	}
	if($a==1)
	{
		$data['id']=$_SESSION['id'];
		$data['pw']=$_POST['conf_pw'];
		$b=search_pw($data);
		if($b==0)
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
			$data['pseudo']=$_POST['new_pseudo'];
			$b=search_pseudo($data);
			if($b==1)
			{		
				$a=0;
				$_SESSION['erreur']="<center>Ce pseudo existe déjà, veuillez en choisir un autre.</center>";
			}
		}
	}
	if($a==0)
	{
		header("location: ../index.php?page=settings&truc=un");
	}
	else
	{
		update($data);
		$_SESSION['pseudo']=$_POST['new_pseudo'];
		$_SESSION['erreur']="";
		header("location: ../index.php?page=settings&truc=deux");
	}
?>