<!DOCTYPE HTML>
<html>
<head>
	<title>MyStudio</title>
</head>

<body>
	<?php
		session_start();
		require('../Controllers/changename.php');
		$change=changename($_POST['pseudo']);
		if($change==1)
		{
			header("refresh:6;url=changename_page.php");
			echo "Le champ n'a pas été rempli.";
		}
		else if($change==2)
		{
			header("refresh:6;url=changename_page.php");
			echo "Ce pseudo est déjà pris, veuillez donner un autre nom.";
		} else if($change==3)
		{
			header("refresh:6;url=changename_page.php");
			echo "Le pseudo doit contenir un minimum de 5 caractères.";
		}
		else if($change==4)
		{
			header("refresh:6;url=changename_page.php");
			echo "Ce pseudo existe déjà, veuillez en choisir un autre.";
		}
		else
		{
			header("refresh:6;url=navigation.html");
			echo"<center><h3>MyStudio</h3></center><br><center>Changement de nom ?
			<br>Votre nouveau nom est maintenant ".$_SESSION['ID'].".";
		}
	?>
</body>
</html>