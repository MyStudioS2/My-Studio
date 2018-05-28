<?php
session_start();
require('../Controllers/login.php');
if(conect($_POST['pseudo'], $_POST['password']) == 0) {
echo"<center><h3>Mystudio</h3></center><br><center>Bienvenue sur Mystudio
	".$_SESSION['ID']."<br>votre connexion en tant qu'".$_SESSION['type']." est un succès</center>";

} else {
echo"<img src='../Views/LOGO.jpg'width='100' height='90'><center><h3>Mystudio</h3></center><br><center>Bienvenue sur Mystudio</center></p>
	<center><form action='' method='POST'>
	<input type='text' placeholder='Pseudo**' name='pseudo' value='".$_POST['pseudo']."'>
	<br/>
	<input type='text' placeholder='Mot de passe**' name='password' value='".$_POST['password']."'>
	<br/>
	<table><tr><td>Je suis un :<td><td><input type='radio' name='type' value='artiste'checked>artiste</td><br>
	<td><input type='radio' name='type' value='utilisateur'>utilisateur<br></td></tr></table>
	<input type='submit' name='send' value='Envoyer'>
        </form><br>
	<a href='registration_page.php'>Créer un compte</a>
        <br></center>";
}
?>
<!DOCTYPE HTML>
<html>
<head>
    <title>Mystudio</title>
    <meta content='http-equiv' content-type='text/html; charset = UTF-8'/>
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet"> 
        <style>
			body {
			Background-Color: DimGray;
			font-family: 'Josefin Sans',sans serif;
			font-size : 16px;
			}
	</style>
</head>
<body>
</body>
</html>
