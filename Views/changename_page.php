<!DOCTYPE HTML>
<html>
<head>
	<title>Mystudio</title>
	<meta content='http-equiv' content-type='text/html; charset = UTF-8'/>
</head>

<body>
	<?php
		session_start();
		require('../Controllers/changename.php');
		if(changename($_POST['pseudo'])==0)
		{
			header("refresh:6;url=navigation.html");
			echo"<img src='../Views/LOGO.jpg'width='100' height='90'>
			<center><h3>MyStudio</h3></center><br><center>Changement de nom ?
			<br>Votre nouveau nom est maintenant".$_SESSION['ID'].".</center>";

		}
		else
		{
			echo"<br><br><br><br><br><br><br><center><h1>Vous voulez changer de nom ?</h1></center></p><img src='My.PNG'width='400' height='340'>
				<form action='.php' method='POST'>
				<input type='text' id='pseudo' placeholder='Pseudo**' name='pseudo' value=''>
				<br>
				<input type='submit' name='send' value='envoyer'>
				</form>
				<p>Donne-nous ton nouveau nom pour faire le changement.</p>";
				
			if(changename($_POST['pseudo'])==1)
			{
				echo "<center>Le champ n'a pas été rempli.</center>";
			}
			else if(changename($_POST['pseudo'])==2)
			{
				echo "<center>Ce pseudo est déjà pris, veuillez donner un autre nom.</center>";
			} else if(changename($_POST['pseudo'])==3)
			{
				echo "<center>Le pseudo doit contenir un minimum de 5 caractères.</center>";
			}
			else if(changename($_POST['pseudo'])==4)
			{
				echo "<center>Ce pseudo existe déjà, veuillez en choisir un autre.</center>";
			}
		}
	?>
	<a href='.php'>Retour à la page d'accueil</a>
</body>
</html>