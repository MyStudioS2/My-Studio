<!DOCTYPE HTML>
<html>
<head>
	<title>MyStudio</title>
</head>

<body>
	<?php
		session_start();
		$_SESSION['ID']="Clotilde";
		require('../Controllers/changename.php');
		echo"<center><br><br><br><br><br><br><br><h1>Vous voulez changer de nom, ".$_SESSION['ID']." ?</h1>
		<form action='../Views/changename_page2.php' method='POST'>
		<input type='text' placeholder='Pseudo**' name='pseudo' value=''>
		<br>
		<input type='submit' name='send' value='envoyer'>
		</form>
		Donnez-nous votre nouveau nom pour faire le changement.<br></center>";
	?>
</body>
</html>