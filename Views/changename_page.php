<?php
	$_SESSION['name']="Clotilde";
	require("../Controllers/session_check.php");
	session_check($_SESSION['name']);
	$_SESSION['pw']="chocho";
?>
<!DOCTYPE HTML>
<html>
<head>
	<title>MyStudio</title>
</head>

<body>
	<?php
		echo"<center><br><br><br><br><br><br><br><h1>Vous voulez changer de pseudo, ".$_SESSION['name']." ?</h1>
		<form action='../Controllers/changename.php' method='POST'>
		<input type='text' placeholder='Pseudo' name='new_pseudo'><br>
		<input type='password' placeholder='Password' name='conf_pw'><br>";
		if(isset($_SESSION['erreur']) && $_SESSION['erreur']!="")
		{
			echo $_SESSION['erreur'];
			$_SESSION['erreur']="";
		}
		echo "<br><button>Envoyer</button>
		</form>
		<br>Donnez-nous votre nouveau pseudo pour faire le changement.<br></center>";
	?>
</body>
</html>