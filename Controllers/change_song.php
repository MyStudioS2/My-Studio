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
			if(isset($_POST['id']))
			{
				$a=1;
				$data['id']=$_SESSION['id'];
/////////////////cryptage
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
					$data['ID']=$_POST['id'];
					delete_album($data['ID']);
					header("location: ../index.php?page=settings&nb=cinq&change=sup");
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
				if(isset($_POST['music_path'])==false || isset($_POST['titre'])==false)
				{
					header("location: ../index.php?page=settings");
				}
				else
				{
					$a=1;
				}
				if($a==0)
				{
					header("location: ../index.php?page=settings&nb=quatre&change=add&table=song");
				}
			}
			else if($_POST['table']=='album')
			{
				if(isset($_POST['album_cover'])==false || isset($_POST['album_name'])==false || isset($_POST['release_date'])==false)
				{
					header("location: ../index.php?page=settings");
				}
				else
				{
					$a=1;
					if($_FILES['nom_du_fichier']['error'])
					{
						switch($_FILES['nom_du_fichier']['error'])
						{
						    case 1: // UPLOAD_ERR_INI_SIZE
						    	echo "Le fichier dépasse la limite autorisée par le serveur (fichier php.ini) !";
						    	$a=0;
						    	break;
						    case 2: // UPLOAD_ERR_FORM_SIZE
								echo "Le fichier dépasse la limite autorisée dans le formulaire HTML !";
								$a=0;
								break;
						    case 3: // UPLOAD_ERR_PARTIAL
						    	echo "L'envoi du fichier a été interrompu pendant le transfert !";
						    	$a=0;
						    	break;
						    case 4: // UPLOAD_ERR_NO_FILE
						    	echo "Le fichier que vous avez envoyé a une taille nulle !";
						    	$a=0;
						    	break;
						}
					}
					else
					{
						//$_FILES['nom_du_fichier']['error'] vaut 0 soit UPLOAD_ERR_OK
						//ce qui signifie qu'il n'y a eu aucune erreur
						//Pas fini
						$nom=$_FILES['mon_fichier']['tmp_name'];
						$extensionFichier=$elementsChemin['extension'];
						$nomdestination="../Views/images/".$nom.".".$extensionFichier;
						move_uploaded_file($nom, $nomdestination);
						header("location: ../index.php?page=settings&nb=quatre&change=add&table=album");
					}
					
				}
				if($a==0)
				{
					header("location: ../index.php?page=settings&nb=quatre&change=add&table=album");
				}
			}
		}
	}
?>