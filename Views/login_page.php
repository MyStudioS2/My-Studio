<?php
session_start();
require('../Controllers/login.php');
if(conect($_POST['pseudo'], $_POST['password']) == 0) {
        header("refresh:6;url=../Controllers/accueil_membre.php");
echo"<br><br><br><br><br><br><br>
<center><h3>Mystudio</h3></center><br><center>Bienvenue sur Mystudio
	".$_SESSION['pseudo']."<br>votre connexion en tant qu'".$_SESSION['type']." est un succès<br>ID : ".$_SESSION['id']."</center>";

} else {
echo"<br><br><br><br><br><br><br><center><h1>Bienvenue sur Mystudio</h1></center><p class='txt' ><td class='case' >MyStudio est une plateforme de diffusion de<br>musique de tous genres en streaming où artistes<br>et auditeurs se croisent.<br>Elle est destinée aux auditeurs de langue française<br>qui aiment avoir toutes les informations disponibles<br>sur leurs artistes favoris, paroles, biographies, et <br>collaborateurs fréquents.<br>
Les utilisateurs doivent s’inscrire pour accéder au site.<br> Les auditeurs peuvent écouter et apprécier les morceaux<br>de leurs artistes préférés, mais aussi profiter des paroles<br>qui sont accompagnées des traductions.<br>
    Lors de la création d’un compte utilisateur, il est possible<br>de s’enregistrer en tant qu’artiste et ainsi de diffuser ses<br>créations ou de créer un compte auditeur qui permet<br>simplement d’écouter.
Le site propose également des<br>suggestions d’écoutes en fonction des goûts et des<br> précédentes visites du client.</td></p>
	<form class='form' action='' method='POST'>
	<input type='text' class='champ' id='pseudo' placeholder='Pseudo**' name='pseudo' value='".$_POST['pseudo']."'>
	<br>
	<input type='text' class='champ' id='mdp' placeholder='Mot de passe**' name='password' value='".$_POST['password']."'>
	<br/>
	<table><tr><td>Je suis un :<td><td><input type='radio' name='type' value='artiste'checked>artiste</td><br>
	<td><input type='radio' name='type' value='auditeur'>auditeur<br></td></tr></table>
	<input type='submit' name='send' value='envoyer' class='verif'>
        </form>
	<p class='msg'>as tu bien completer le formulaire avant de cliquer</p>
	<a class='href' href='registration_page.php'>Créer un compte</a>
        <br>";
	
if(conect($_POST['pseudo'], $_POST['password']) == 1) {
        echo "<center>Les champs ont mal été rempli</center>";
} else if(conect($_POST['pseudo'], $_POST['password']) == 2) {
        echo "<center>Pseudo ou mot de passe incorrect</center>";
} else if(conect($_POST['pseudo'], $_POST['password']) == 3) {
}
}
?>
<!DOCTYPE HTML>
<html>
<head>
    <title>Mystudio</title>
    <meta content='http-equiv' content-type='text/html; charset = UTF-8'/>
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet"> 
    <link rel="stylesheet" media="screen" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/css/bootstrap.min.css">

        <style>
	.case {
	margin-left:42%;
	border-Color: white;
	}
	.form {
	margin-left:42%;
	}
	.msg {
	margin-left:37%;
	}
	.href {
	margin-left:45%;
	}
	.txt {
	border-Color: white;
        float: right;
	border-Color: white;
	}
	.verif {
	margin-left:6%;
	padding:5px 25px;
	border: none;
	border-radius: 4px;
	color: black;
	background: grey;
	
	}
	input.champ {
	Border-Color: red;
        margin-top:12px;
        margin-left: 5px;
        line-height: 80px;
        height:45px;
        max-height: 25px;
	color : grey;
	}
	body {
	Background-Color: black;
	font-family: 'Josefin Sans',sans serif;
	font-size : 16px;
	color : white;
	}
     /*Barre de naviguation horizontale*/
      ul.horizontale
      {
        list-style-type: none;
        margin: 0;
        padding: 0;
        overflow: hidden;
        background-color: DimGrey;
        /*Reste statique, même quand on défile la page*/
        position: fixed;
        top: 0;
        width: 100%;
      }
      li.horizontale
      {
        float: left;
      }
      li a.horizontale
      {
        display: block;
        color: white;
        text-align: center;
        padding: 44px 46px;
        text-decoration: none;
      }
      li a.horizontale:hover
      {
        background-color: #4CAF50;
      }
      li a.horizontale1
      {
        display: block;
        color: white;
        text-align: center;
        padding: 44px 46px;
        text-decoration: none;
      }
      li a.horizontale1:hover
      {
        background-color: #4CAF50;
      }
      .active
      {
        width:120px;
      }
    input
      {
      }
	</style>
</head>
<body>
<!--Barre horizontale-->
<ul class="horizontale">
<li class="horizontale">
<a class="horizontale active" href="">MyStudio</a>
</li>
<li class="horizontale">
<img src='../Views/images/LOGO.jpg'width='100' height='90'>
</li>
<li style="float:right">
<a class="horizontale1" href="">MyStudio, C'est quoi ?<!--Image--></a>
</li>
</ul>

<script src="jquery.js"></script> 
<script src="style.js"></script>

</body>
</html>
