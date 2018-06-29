<?php
	session_start();
	if(isset($_GET['change'])==false)
	{
		header("location: ../index.php?page=settings");
	}
	else
	{
		$data['nom']=$_SESSION['pseudo'];
		$data['id']=search_id_art($data);
		$song=search_id_song($data);
		if($_GET['change']=='sup')
		{
			echo "<h2>Êtes-vous sûr(e) de vouloir supprimer la musique ".$song[1][$i]." de votre album ".$song[2][$i]." de votre répertoire ?</h2>";
		}
		else if($_GET['change']=='mod')
		{
			
		}
		else if($_GET['change']=='add')
		{

		}
		echo "<form action='index.php?page=settings' method='GET'>
		<input type='hidden' name='page' value='settings'>
		<br><button>Retourner aux paramètres</button>
		</form></center>";
	}
?>