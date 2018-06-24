<?php
	session_start();
	require('../Models/parameter_account.php');
	$a=1;
	if(isset($_POST['change'])==false)
	{
		header("location: ../index.php?page=settings");
	}
	else if($_POST['change']=='nom')
	{
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
			header("location: ../index.php?page=settings&nb=un&change=nom");
		}
		else
		{
			update_pseudo($data);
			$_SESSION['pseudo']=$_POST['new_pseudo'];
			$_SESSION['erreur']="";
			header("location: ../index.php?page=settings&nb=deux&change=nom");
		}
	}
	else if($_POST['change']=='statut')
	{
		if(empty($_POST['conf_pw']) || empty($_POST['statut']))
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
			else if($_POST['statut']==$_SESSION['type'])
			{
				$a=0;
				$_SESSION['erreur']="<center>Vous possédez déjà ce statut.</center>";
			}
		}
		if($a==0)
		{
			header("location: ../index.php?page=settings&nb=un&change=statut");
		}
		else
		{
			$data['statut']=$_POST['statut'];
			update_statut($data);
			$_SESSION['type']=$_POST['statut'];
			$_SESSION['erreur']="";
			header("location: ../index.php?page=settings&nb=deux&change=statut");
		}
	}
	else if($_POST['change']=='pw')
	{
		if(empty($_POST['conf_pw']) || empty($_POST['new_pw']) || empty($_POST['verif_pw']))
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
				$_SESSION['erreur']="<center>Ancien mot de passe incorrect. Veuillez réessayer.</center>";
			}
			else if($_POST['new_pw']!==$_POST['verif_pw'])
			{
				$a=0;
				$_SESSION['erreur']="<center>Divergence des entrées du nouveau mot de passe. Veuillez réessayer.</center>";
			}
		}
		if($a==0)
		{
			header("location: ../index.php?page=settings&nb=un&change=pw");
		}
		else
		{
			$data['new_pw']=$_POST['new_pw'];
			update_pw($data);
			$_SESSION['pw']=$_POST['new_pw'];
			$_SESSION['erreur']="";
			header("location: ../index.php?page=settings&nb=deux&change=pw");
		}
	}
?>