<?php
	session_start();
	require("../Controllers/session_check.php");
	session_check($_SESSION['pseudo']);
?>
<!DOCTYPE HTML>
<html>
<head>
	<title>MyStudio</title>
</head>

<body>
	<?php
		echo"<center><h1>Changement de nom ?</h1><br>";
		echo"<center>Votre nouveau pseudo est maintenant ".$_SESSION['pseudo'].".</center>";
		header("refresh:6;location: account_page.php");
	?>
</body>
</html>