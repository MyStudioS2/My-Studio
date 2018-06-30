<?php
	session_start();
	require('../Models/parameter_account.php');
	require('../Models/parameter_songs.php');
	//require('../Controllers/cryptage.php');
	if(isset($_POST['change'])==false)
	{
		header("location: ../index.php?page=settings");
	}
	else
	{
		if($_POST['change']=='sup')
		{
			if(isset($_POST['nom']))
			{
				$a=1;
				if(empty($_POST['conf_pw']))
				{
					$a=0;
					$_SESSION['erreur']="<center>Le champ Mot de passe n'est pas rempli. Veuillez réessayer.</center>";
				}
				else
				{
					$data['id']=$_SESSION['id'];
/////////////////////cryptage
					//$data['pw']=cryptage($_POST['conf_pw']);
					$data['pw']=$_POST['conf_pw'];
					$b=search_pw($data);
					if($b==0)
					{
						$a=0;
						$_SESSION['erreur']="<center>Mot de passe incorrect. Veuillez réessayer.</center>";
					}
					else
					{
						$data['ID']=$_POST['nom'];
/////////////////////////Nouveau
						delete_album($data);
						header("location: ../index.php?page=settings&nb=cinq&change=sup");
					}
				}
			}
			else
			{
				header("location: ../index.php?page=settings");
			}
			if($a==0)
			{
				header("location: ../index.php?page=settings&nb=quatre&change=sup");
			}
		}
		else if($_POST['change']=='add')
		{
			if($_POST['table']=='song')
			{
				# code...
			}
			else if($_POST['table']=='album')
			{
				# code...
			}
		}
	}
?>