<?php
	require("../Controllers/session_check.php");
	session_check($_SESSION['name']);
?>
<!DOCTYPE HTML>
<html>
<head>
	<title>MyStudio</title>
</head>

<body>
	<?php
		echo"<center><h3>MyStudio</h3><br>Changement de nom ?</center>";
		echo"<center><br>Votre nouveau nom est maintenant ".$_SESSION['name'].".</center>";
		header("refresh:6;localisation: navbar.php");
	?>
</body>
</html>